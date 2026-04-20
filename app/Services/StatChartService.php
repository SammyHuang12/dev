<?php

namespace App\Services;

use App\Models\DailyStat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class StatChartService
{
    protected array $types = [
        'resume' => '履歷',
        'invite' => '邀約',
        'hire' => '進人',
        'internal_interview' => '宏益面試',
        'client_interview' => '客戶面試',
    ];

    ## 依區間判斷X軸的單位(調整性)
    public function buildByRange(string $start, string $end): array
    {
        $startDate = Carbon::parse($start)->startOfDay();
        $endDate   = Carbon::parse($end)->endOfDay();
    
        $daysDiff = $startDate->diffInDays($endDate) + 1;
        Log::channel('status')->info( __FUNCTION__.":".__LINE__ , ['daysDiff'=>$daysDiff]);
    
        return match (true) {
            $daysDiff <= 12   => $this->buildByDayRange($startDate, $endDate),
            $daysDiff <= 90  => $this->buildByWeekRange($startDate, $endDate),
            $daysDiff <= 365 => $this->buildByMonthRange($startDate, $endDate),
            default          => $this->buildByYearRange($startDate, $endDate),
        };
    }

    protected function buildByDayRange($start, $end): array
    {
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end->toDateString(),
        ])
        ->get()
        ->groupBy('type')
        ->map(fn($items) => $items->keyBy(fn($i) => $i->stat_date->toDateString()));
    
        $categories = [];
        $cursor = $start->copy();
    
        while ($cursor->lte($end)) {
            $categories[] = $cursor->toDateString();
            $cursor->addDay();
        }
    
        $series = [];
    
        foreach ($this->types as $type => $label) {
            $data = [];
    
            foreach ($categories as $date) {
                $data[] = $stats[$type][$date]->qty ?? 0;
            }
    
            $series[] = [
                'name' => $label,
                'data' => $data,
            ];
        }
    
        return compact('categories', 'series');
    }
    
    
    protected function buildByWeekRange($start, $end): array
    {
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end->toDateString(),
        ])->get();
    
        $grouped = $stats->groupBy(function ($item) {
            return Carbon::parse($item->stat_date)->startOfWeek()->toDateString();
        });
    
        $categories = [];
        $seriesMap = [];
    
        foreach ($grouped as $weekStart => $items) {
            $categories[] = $weekStart;
    
            foreach ($this->types as $type => $label) {
                $sum = $items->where('type', $type)->sum('qty');
                $seriesMap[$type][] = $sum;
            }
        }
    
        $series = [];
        foreach ($this->types as $type => $label) {
            $series[] = [
                'name' => $label,
                'data' => $seriesMap[$type] ?? [],
            ];
        }
    
        return compact('categories', 'series');
    }
    
    protected function buildByMonthRange($start, $end): array
    {
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end->toDateString(),
        ])->get();
    
        $grouped = $stats->groupBy(function ($item) {
            return Carbon::parse($item->stat_date)->format('Y-m');
        });
    
        $categories = [];
        $seriesMap = [];
    
        foreach ($grouped as $month => $items) {
            $categories[] = $month;
    
            foreach ($this->types as $type => $label) {
                $sum = $items->where('type', $type)->sum('qty');
                $seriesMap[$type][] = $sum;
            }
        }
    
        $series = [];
        foreach ($this->types as $type => $label) {
            $series[] = [
                'name' => $label,
                'data' => $seriesMap[$type] ?? [],
            ];
        }
    
        return compact('categories', 'series');
    }
    
    protected function buildByYearRange($start, $end): array
    {
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end->toDateString(),
        ])->get();
    
        $grouped = $stats->groupBy(function ($item) {
            return Carbon::parse($item->stat_date)->format('Y');
        });
    
        $categories = [];
        $seriesMap = [];
    
        foreach ($grouped as $year => $items) {
            $categories[] = $year;
    
            foreach ($this->types as $type => $label) {
                $sum = $items->where('type', $type)->sum('qty');
                $seriesMap[$type][] = $sum;
            }
        }
    
        $series = [];
        foreach ($this->types as $type => $label) {
            $series[] = [
                'name' => $label,
                'data' => $seriesMap[$type] ?? [],
            ];
        }
    
        return compact('categories', 'series');
    }




    /**
     * mode: day | week | month
     * start: YYYY-MM-DD
     * days: 5 | 7 (only for week)
     */
    public function build(string $mode, string $start, int $days = 5, string $end): array
    {
        return match ($mode) {
            'day' => $this->buildDay($start),
            'week' => $this->buildWeek($start, $days),
            'month' => $this->buildMonth($start),
            'year' => $this->buildYear($start),
            'search' => $this->getReportByDateRange($start, $end),
            default => throw new \InvalidArgumentException('Invalid mode'),
        };
    }

    /** ---------- Day ---------- */
    protected function buildDay(string $date): array
    {
        $rows = DailyStat::where('stat_date', $date)->get()->keyBy('type');

        $series = [];
        foreach ($this->types as $type => $label) {
            $series[] = [
                'name' => $label,
                'data' => [$rows[$type]->qty ?? 0],
            ];
        }

        return [
            'categories' => [$date],
            'series' => $series,
        ];
    }

    /** ---------- Week ---------- */
    protected function buildWeek(string $start, int $days): array
    {
        ## 固定抓上週的第一天
        // if(!$start)
        $startDate = Carbon::now()->subWeek()->startOfWeek();
        // else $startDate = Carbon::parse($start)->startOfDay();
        $endDate = $startDate->copy()->addDays($days - 1);

        $stats = DailyStat::whereBetween('stat_date', [
            $startDate->toDateString(),
            $endDate->toDateString(),
        ])
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->keyBy(fn($item) => $item->stat_date->toDateString());
            });

        $categories = [];
        for ($i = 0; $i < $days; $i++) {
            $categories[] = '星期' . ['一', '二', '三', '四', '五', '六', '日'][$i];
        }

        $series = [];

        foreach ($this->types as $type => $label) {
            $data = [];
            $dates = [];

            for ($i = 0; $i < $days; $i++) {
                $date = $startDate->copy()->addDays($i)->toDateString();
                ## 比對該 TYPE 與該 DATE 的 QTY 多少否則補零
                $data[] = $stats[$type][$date]->qty ?? 0;
                $dates[] = $date;
            }

            $series[] = [
                'name' => $label,
                'data' => $data,
            ];
        }
        return [
            'categories' => $categories,
            'series' => $series,
            'dates' => $dates,
            'title' => '招募統計表   上週報表',
        ];
    }

    /** ---------- Month ---------- */
    protected function buildMonth(string $start): array
    {
        // 月份範圍
        $startDate = Carbon::parse($start)->startOfMonth();
        $endDate = $startDate->copy()->endOfMonth();
        $daysInMonth = $startDate->daysInMonth;

        // 撈本月工作日資料（星期一～五）
        $stats = DailyStat::whereBetween('stat_date', [
            $startDate->toDateString(),
            $endDate->toDateString(),
        ])
            ->whereRaw('WEEKDAY(stat_date) BETWEEN 0 AND 4') // 只抓星期一～五
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->keyBy(fn($item) => $item->stat_date->toDateString());
            });

        // 產生 X 軸 categories（只顯示工作日）
        $categories = [];
        for ($d = 1; $d <= $daysInMonth; $d++) {
            $date = $startDate->copy()->day($d);

            if ($date->isWeekend()) {
                continue; // 跳過六日
            }

            $categories[] = (string)$d;
        }

        // 建立 series 對應資料


        $series = [];
        foreach ($this->types as $type => $label) {
            $data = [];

            foreach ($categories as $day) {
                $date = $startDate->copy()->day((int)$day)->toDateString();
                $data[] = $stats[$type][$date]->qty ?? 0;
            }

            $series[] = [
                'name' => $label,
                'data' => $data,
            ];
        }

        // 最終結果
        return [
            'categories' => $categories,
            'series' => $series,
        ];
    }
    /** ---------- Year ---------- */
    protected function buildYear(string $start): array
    {
        $months = DailyStat::selectRaw('MONTH(stat_date) as month')
            ->whereYear('stat_date', $start)
            ->groupBy('month')
            ->havingRaw('SUM(qty) > 0')
            ->orderBy('month')
            ->pluck('month')
            ->toArray();
        $categories = array_map(
            fn($m) => $m . '月',
            $months
        );

        $rows = DailyStat::selectRaw('
        type,
        MONTH(stat_date) as month,
        SUM(qty) as total
    ')
            ->whereYear('stat_date', $start)
            ->groupBy('type', 'month')
            ->get();

        $map = [];
        foreach ($rows as $row) {
            $map[$row->type][(int)$row->month] = (int)$row->total;
        }

        $series = [];

        foreach ($this->types as $type => $label) {
            $data = [];

            foreach ($months as $month) {
                $data[] = $map[$type][$month] ?? 0;
            }

            $series[] = [
                'name' => $label,
                'data' => $data,
            ];
        }
        return [
            'categories' => $categories,
            'series' => $series,
        ];
    }

    public function getReportByDateRange(string $startDate, string $endDate): array
    {
        $start = Carbon::parse($startDate)->startOfDay();
        $end   = Carbon::parse($endDate)->endOfDay();

        // 類型對照（你已經有的）
        $types = [
            'resume'             => '履歷',
            'invite'             => '邀約',
            'hire'               => '進人',
            'internal_interview' => '宏益面試',
            'client_interview'   => '客戶面試',
        ];

        // 撈資料（只抓星期一～五）
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end->toDateString(),
        ])
            ->whereRaw('WEEKDAY(stat_date) BETWEEN 0 AND 4') // MySQL：0=一 ~ 4=五
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->keyBy(fn($item) => $item->stat_date->toDateString());
            });

        // 產生工作日 categories（YYYY-MM-DD）
        $categories = [];
        $cursor = $start->copy();

        while ($cursor->lte($end)) {
            if (! $cursor->isWeekend()) {
                $categories[] = $cursor->toDateString();
            }
            $cursor->addDay();
        }

        // 組 table + series 共用資料
        $table = [];
        $series = [];

        foreach ($types as $type => $label) {

            $row = [
                'label' => $label,
                'days'  => [],
                'total' => 0,
            ];

            $data = [];
            $typeStats = $stats[$type] ?? collect();

            foreach ($categories as $date) {
                $qty = $typeStats[$date]->qty ?? 0;

                $row['days'][] = $qty;
                $row['total'] += $qty;
                $data[] = $qty;
            }

            $table[] = $row;

            $series[] = [
                'name' => $label,
                'data' => $data,
            ];
        }

        return [
            'categories' => $categories, // X 軸（只含工作日）
            'series'     => $series,     // ApexCharts 折線
            'table'      => $table,      // 表格用
        ];
    }
}