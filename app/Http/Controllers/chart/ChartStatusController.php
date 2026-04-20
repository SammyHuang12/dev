<?php

namespace App\Http\Controllers\chart;

use Carbon\Carbon;
use App\Models\DailyStat;
use App\Services\StatChartService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Locale;

// class ChartStatusController extends Controller
class ChartStatusController
{

    public $types = [
        'resume' => '履歷',
        'invite' => '邀約',
        'hire' => '進人',
        'internal_interview' => '宏益面談',
        'client_interview' => '客戶面談',
    ];

    public function search(Request $request, StatChartService $service)
    {
        Log::channel('status')->info( __FUNCTION__.":".__LINE__ , ['req' => $request->all(), 'ip' => $request->ip()]);

        $start = $request->input('start');
        $end   = $request->input('end');
        return response()->json(
            $service->buildByRange($start, $end)
        );
    }

    public function byRange(Request $request, StatChartService $service)
    {
        Log::channel('status')->info( __FUNCTION__.":".__LINE__ , ['req' => $request->all(), 'ip' => $request->ip()]);
        Log::channel('status')->info( __FUNCTION__.":".__LINE__ , ['req' => $request->all(), 'ip' => $request->ip()]);
        // echo $request->input('start');exit;
        $mode = $request->input('mode', 'week'); // day | week | month
        $days = (int) $request->input('days', 5); // 5 or 7
        $start = $request->input(
            'start',
            Carbon::now()->startOfWeek()->toDateString()
        );
        $end = $request->input(
            'end',
            Carbon::now()->startOfWeek()->toDateString()
        );

        return response()->json(
            $service->build($mode, $start, $days, $end)
        );
    }

    ## 每日一週圖表，可修改版本。
    public function daily(Request $request)
    {

        if ('220.130.12.202' == $request->ip()) {
            // abort(404);
            //return response()->json(['message' => 'Page Not Found'], 404);
            // return response('Page not found', Response::HTTP_NOT_FOUND);
        }

        ## 抓當天的前八天
        $start = Carbon::now()->subDays(7); //->toDateString();
        $end = Carbon::now()->addDay();//->toDateString();

        Log::channel('status')->info( __FUNCTION__ , ['start'=>$start, 'end'=>$end, 'ip' => $request->ip()]);
        // if ($end) {
        //     $start = Carbon::parse($end)->subDays(7);
        //     $end = Carbon::parse($end)->addDays(1);
        // } else {
        //     $start = Carbon::now()->subDays(8); //->toDateString();
        //     $end = Carbon::now();//->toDateString();
        // }
        $weekDays = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];

        // $weekDays_1 = [
        //     1 => '星期一',
        //     2 => '星期二',
        //     3 => '星期三',
        //     4 => '星期四',
        //     5 => '星期五',
        //     6 => '星期六',
        //     0 => '星期日', // Carbon: 0 = 日
        // ];
        // 撈本週資料
        $stats = DailyStat::whereBetween('stat_date', [
            $start->toDateString(),
            $end,
        ])
            // ->whereRaw('WEEKDAY(stat_date) BETWEEN 0 AND 4') // MySQL: 0=一 ~ 4=五
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->keyBy(fn($item) => $item->stat_date->toDateString());
            });

        // 組表格資料
        $table = [];

        foreach ($this->types as $type => $label) {

            $row = [
                'label' => $label,
                'type'  => $type,
                'days'  => [], // 保留 7 天
                'total' => 0,
            ];

            $typeStats = $stats[$type] ?? collect();

            // 跑 8 天（固定順序）
            for ($i = 0; $i < 8; $i++) {
                $dateCarbon = $start->copy()->addDays($i); // ->toDateString();
                $date = $dateCarbon->toDateString();
                $qty = 0;

                if (isset($typeStats[$date])) {
                    $qty = $typeStats[$date]->qty;
                    $row['total'] += $qty;
                }

                $row['days'][] = [
                    'date' => $date,
                    'week' => $weekDays[$dateCarbon->dayOfWeek],
                    'qty'  => $qty,
                ];
            }

            $tag = $row;
            $table[] = $row;
        }
        return view('stat', [
            'tags' => $tag['days'],
            'table' => $table,
            'start' => $start->toDateString(),
            'end' => $end->toDateString(),
            'page' => 'stats',
            'title' =>'Stats',
            'projectName' => 'admin'
        ]);
    }
    // public function index(Request $request)
    // {
    //     return view('status.charts');
    // }

    // public function dashboard(Request $request)
    // {
    //     $status = ['aaa', 'bbb'];
    //     return view('status.dashboard_chart', ['status'=>$status]);
    // }

    public function allCharts()
    {
        $now = Carbon::now('Asia/Taipei');

        $ranges = [
            'this_week' => [$now->copy()->startOfWeek(), $now->copy()->endOfWeek(), '%Y-%m-%d'],
            'last_week' => [$now->copy()->subWeek()->startOfWeek(), $now->copy()->subWeek()->endOfWeek(), '%Y-%m-%d'],

            'this_month' => [$now->copy()->startOfMonth(), $now->copy()->endOfMonth(), '%Y-%m-%d'],
            'last_month' => [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth(), '%Y-%m-%d'],

            'this_year' => [$now->copy()->startOfYear(), $now->copy()->endOfYear(), '%Y-%m'],
            'last_year' => [$now->copy()->subYear()->startOfYear(), $now->copy()->subYear()->endOfYear(), '%Y-%m'],
        ];

        $result = [];

        foreach ($ranges as $key => [$start, $end, $format]) {

            // 🔥 你原本的 query（保留）
            $query = DailyStat::select(
                DB::raw("DATE_FORMAT(stat_date, '{$format}') as t"),
                'type',
                DB::raw('SUM(qty) as total')
            )
                ->whereDate('stat_date', '>=', $start->toDateString())
                ->whereDate('stat_date', '<=', $end->toDateString());

            $raw = $query
                ->groupBy('t', 'type')
                ->get();

            // 🔥 Log 保留
            Log::channel('Chartstatus')->info("{$key} SQL結果", $raw->toArray());

            // 🔥 你的分組邏輯`
            $data = $raw
                ->groupBy('type')
                ->map(fn($items) => $items->keyBy('t'));

            // 👉 labels
            $labels = [];
            $loop = ($format === '%Y-%m') ? 12 : $start->diffInDays($end) + 1;

            for ($i = 0; $i < $loop; $i++) {
                $date = ($format === '%Y-%m')
                    ? $start->copy()->addMonths($i)
                    : $start->copy()->addDays($i);

                $labels[] = ($format === '%Y-%m')
                    ? $date->format('m月')
                    : $date->format('d');
            }

            // 👉 datasets（多 type）
            $datasets = [];

            foreach ($this->types as $type => $label) {

                $series = [];

                for ($i = 0; $i < $loop; $i++) {

                    $date = ($format === '%Y-%m')
                        ? $start->copy()->addMonths($i)->format('Y-m')
                        : $start->copy()->addDays($i)->format('Y-m-d');

                    $series[] = $data[$type][$date]->total ?? 0;
                }

                $datasets[] = [
                    'label' => $label,
                    'data' => $series,
                ];
            }

            $result[$key] = [
                'labels' => $labels,
                'datasets' => $datasets
            ];
        }

        return response()->json($result);
    }

    public function update(Request $request)
    {
        // 簡單驗證
        $request->validate([
            'type' => 'required',
            'date' => 'required',
            'value' => 'required|numeric',
        ]);

        // 更新資料庫
        $updated = DailyStat::where('type', $request->type)
            ->where('stat_date', $request->date)
            ->update(['qty' => $request->value]);

        return response()->json(['status' => 'success']);
    }

    public function trend(Request $request)
    {
        Log::channel('Chartstatus')->info('Chartstatus', ['req' => $request->all(), 'ip' => $request->ip()]);


        $type   = $request->get('type');   // 可為 null（全部）
        $period = $request->get('period', 'month'); // week / month / year

        $now = Carbon::now('Asia/Taipei');

        // 👉 區間設定
        if ($period === 'week') {
            $start = $now->copy()->startOfWeek();
            $end   = $now->copy()->endOfWeek();
            $formatM = '%Y-%m-%d';
            $format = 'Y-m-d';
            $loop = 7;
            $step = 'day';
        } elseif ($period === 'year') {
            $start = $now->copy()->startOfYear();
            $end   = $now->copy()->endOfYear();
            $format = 'Y-m';
            $formatM = '%Y-%m';
            $loop = 12;
            $step = 'month';
        } else {
            // 預設 month
            $start = $now->copy()->startOfMonth();
            $end   = $now->copy()->endOfMonth();
            $format = 'Y-m-d';
            $formatM = '%Y-%m-%d';
            $loop = $start->daysInMonth;
            $step = 'day';
        }
        // dd(
        //     $start->toDateString(),
        //     $end->toDateString(),
        //     DailyStat::whereBetween('stat_date', [$start, $end])->count()
        // );
        Log::channel('Chartstatus')->info(__LINE__, [$start, $end]);

        ///////////////

        $query = DailyStat::select(
            DB::raw("DATE_FORMAT(stat_date, '{$formatM}') as t"),
            'type',
            DB::raw('SUM(qty) as total')
        )
            ->whereDate('stat_date', '>=', $start->toDateString())
            ->whereDate('stat_date', '<=', $end->toDateString());

        $data = $query
            ->groupBy('t', 'type')
            ->get();

        Log::channel('Chartstatus')->info('SQL結果', $data->toArray());

        $data = $data
            ->groupBy('type')
            ->map(fn($items) => $items->keyBy('t'));

        ## 錯誤測試的時候
        // log::channel('Chartstatus')->info($query->toSql());
        // Log::channel('Chartstatus')->info($query->getBindings());

        Log::channel('Chartstatus')->info(__LINE__, $data->toArray());

        // 👉 types（你原本的）
        $types = $this->types;

        $labels = [];
        $datasets = [];

        // labels
        for ($i = 0; $i < $loop; $i++) {
            $date = $start->copy()->add($i, $step);
            $labels[] = $period === 'year'
                ? $date->format('m月')
                : $date->format('d');
        }

        // datasets
        foreach ($types as $t => $label) {

            // 如果有選 type 就只顯示一條
            if ($type && $type != $t) continue;

            $series = [];

            for ($i = 0; $i < $loop; $i++) {
                $date = $start->copy()->add($i, $step)->format($format);
                $series[] = $data[$t][$date]->total ?? 0;
            }

            $datasets[] = [
                'label' => $label,
                'data' => $series,
            ];
        }

        // 👉 成長率（最後一筆 vs 前一筆）
        $growth = null;
        if (count($datasets) > 0) {
            $arr = $datasets[0]['data'];
            $last = end($arr);
            $prev = prev($arr);

            if ($prev > 0) {
                $growth = round((($last - $prev) / $prev) * 100, 2);
            }
        }

        return response()->json([
            'labels' => $labels,
            'datasets' => $datasets,
            'growth' => $growth
        ]);
    }
}