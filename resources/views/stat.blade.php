@extends('admin.layouts.app')
@section('content')

<style>
table th:nth-child(n+2),
table td:nth-child(n+2) {
    text-align: center;
}

.editable {
    cursor: pointer;
    transition: background 0.2s;
    text-align: center;
}

.editable:hover {
    background-color: #f8f9fa;
    color: #007bff;
    text-decoration: underline;
}

.editable input {
    width: 60px;
    text-align: center;
}
</style>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesh； -->

<div class="page-content">
    <div class="container-fluid">
        <h2 class="mb-4">每週統計報表</h2>
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body pb-0">
                        <h4 class="card-title text-center">
                            {{ str_replace('-','/',$tags[0]['date'])}} - {{ str_replace('-','/',$tags[7]['date'])}}</h4>
                        <div class="table-responsive">
                            <table class="table table-centered align-middle border table-nowrap table-striped">
                                {{-- <table class="table text-center align-middle mx-auto" border="1" style="width:60%;"> --}}
                                <thead>
                                    <tr>
                                        <th></th>
                                        @foreach ($tags as $tag)
                                        <th>{{$tag['week'] }}</th>
                                        @endforeach
                                        <th>總計</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table as $row)
                                    <tr>
                                        <td class="">{{ $row['label'] }}</td>
                                        @foreach($row['days'] as $day)
                                        <td {{-- @if ($row['type'] === 'resume') --}} class="editable" {{-- @endif --}}
                                            data-type="{{ $row['type'] }}" data-date="{{ $day['date'] }}">
                                            {{ $day['qty'] }}
                                            <!-- {{  $day['date'].$day['week'] }} -->
                                        </td>
                                        @endforeach
                                        <td>{{ $row['total'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body py-0 px-2">
                        {{-- <div id="area_chart" class="apex-charts" dir="ltr">teyjytmjfymfm</div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card d-flex justify-content-center">
                    <div class="card-body pb-0">
                        <div id="statChart" style="width:100%" class="m-auto"></div>
                    </div>
                    <div class="card-body py-0 px-2">
                        {{-- <div id="column_line_chart" class="apex-charts" dir="ltr">jydytjdyjydjy</div> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @php
        // use Carbon\Carbon;
        // $end = request('end', Carbon::today()->toDateString());
        // $start = request('start', Carbon::today()->subDays(8)->toDateString());
        @endphp
        <h2 class="mb-4" style="color:red">依區間顯示統計圖表</h2>
        <form class="row g-3 mb-4">
            <div class="col-auto">
                <input type="date" name="strat" class="form-control" value="{{ $start }}"
                    {{-- onchange11="this.form.submit()" --}}>
            </div>
            <div class="col-auto">
                <input type="date" name="end" class="form-control" value="{{ $end }}">
            </div>
            <div class="col-auto">
                <button type="button" id="byrange" class="btn btn-primary">查詢</button>
            </div>
        </form>
        {{-- <h4 class="mt-4" algin="center">圖表</h4> --}}

        <div id="table-container"></div>

        {{-- <div id="statChart" style="width:80%" class="m-auto"></div> --}}
        <!-- <div id="chart" style="width:100%"></div> -->
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- JAVASCRIPT -->
<script src="http://172.18.168.103:8080/js/jquery.min.js"></script>
<script src="http://172.18.168.103:8080/js/bootstrap.bundle.min.js"></script>
<script src="http://172.18.168.103:8080/js/metisMenu.min.js"></script>
<script src="http://172.18.168.103:8080/js/simplebar.min.js"></script>
<script src="http://172.18.168.103:8080/js/waves.min.js"></script>
<!-- <script src="static/js/app.js"></script> -->
<script>
function renderTable(data) {

    let html = '<div class="row"><div class="col-md-7"><div class="card"><div class="card-body pb-0">';
    html += '<div class="table-responsive"><table class="table table-centered align-middle border table-nowrap">';

    // 表頭
    html += '<tr>';
    html += '<th class="">項目</th>';
    data.categories.forEach(cat => {
        html += `<th>${cat}</th>`;
    });
    html += '</tr>';

    // 內容
    data.series.forEach(item => {
        html += '<tr>';
        html += `<td>${item.name}</td>`;

        item.data.forEach(val => {
            html += `<td>${val}</td>`;
        });

        html += '</tr>';
    });

    html += '</table></div></div></div></div>';
    html += '<div class="col-md-5"><div class="card d-flex justify-content-center">';
    html +=
        '<div class="card-body pb-0"><div id="statChart_1" style="width:100%" class="m-auto"></div></div></div></div></div>';

    document.getElementById('table-container').innerHTML = html;
}

$('#byrange').on('click', function() {

    let start = $('input[name="strat"]').val();
    let end = $('input[name="end"]').val();
    console.log(start + "=>" + end);
    $.ajax({
        url: '/api/stats/search', // 👈 改成你的 route
        type: 'POST', // 或 POST
        data: {
            start: start,
            end: end
        },
        success: function(res) {
            // 執行
            renderTable(res);
            console.log(res);
            new ApexCharts(document.querySelector("#statChart_1"), {
                series: res.series,
                chart: {
                    type: 'line',
                    height: 'auto'
                },
                stroke: {
                    curve: 'smooth',
                    width: 1.5 // 👈 線條變細（預設通常是 2）
                },
                dataLabels: {
                    enabled: true,

                },
                xaxis: {
                    categories: res.categories
                }
            }).render();
            // 👉 這裡處理回傳資料
            // 例如更新畫面
            // $('#result').html(res.html);
        },
        error: function(err) {
            console.error(err);
        }
    });

});



const startDate = '{{ $start }}';
const endDate = '{{ $end }}';
// 取得開始日期
//const startDate = document.querySelector('input[name="strat"]').value;

// 取得結束日期
//const endDate = document.querySelector('input[name="end"]').value;

console.log("開始日期是：" + startDate);
console.log("結束日期是：" + endDate);
fetch('/api/stats/byrange?mode=search&start=' + startDate + '&end=' + endDate)
    .then(res => res.json())
    .then(res => {
        new ApexCharts(document.querySelector("#statChart"), {
            series: res.series,
            chart: {
                type: 'line',
                height: 'auto'
            },
            stroke: {
                curve: 'smooth',
                width: 1.5 // 👈 線條變細（預設通常是 2）
            },
            dataLabels: {
                enabled: true,

            },
            xaxis: {
                categories: res.categories
            }
        }).render();
    });

$(document).on('click', '.editable', function() {
    let $td = $(this);
    console.log($td);
    if ($td.find('input').length > 0) return; // 防止重複點擊

    let currentValue = $td.text().trim();
    let $input = $('<input type="number" class="form-control shadow-none mx-auto">').val(currentValue);

    $td.html($input);
    $input.focus();

    // 當滑鼠點擊外面 (blur) 或按下 Enter 時儲存
    $input.on('blur keydown', function(e) {
        if (e.type === 'keydown' && e.keyCode !== 13) return; // 只有 Enter 才繼續

        let newValue = Number($(this).val());
        let type = $td.data('type');
        let date = $td.data('date');

        // 如果值沒變，直接復原就好，不打 API
        if (newValue == currentValue) {
            $td.text(currentValue);
            return;
        }

        // 發送 AJAX API
        $.ajax({
            url: '/api/stats/update', // 你的 API 路徑
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', // Laravel 必備
                type: type,
                date: date,
                value: newValue
            },
            success: function(response) {
                $td.text(newValue); // 更新成功，顯示新數值
                window.location.reload();
                // 這裡可以選擇性加入更新「總計(Total)」的邏輯
            },
            error: function() {
                alert('更新失敗');
                $td.text(currentValue); // 失敗則還原舊值
            }
        });
    });
});
</script>
@endsection