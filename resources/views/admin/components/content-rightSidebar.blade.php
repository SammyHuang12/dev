<div class="col-md-4">
    <div id="accordion-right" class="custom-accordion">
        <div class="card">
            <div class="card-body">
                <div id="accordion" class="custom-accordion">
                    <div class="card mb-1 shadow-none">
                        <a href="#collapseRightOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="collapseRightOne">
                            <div class="card-header" id="headingRightOne">
                                <h6 class="m-0">
                                    人選資訊
                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                </h6>
                            </div>
                        </a>
                        <div id="collapseRightOne" class="collapse show" aria-labelledby="headingRightOne">
                            <div class="card-body text-success">
                                <ul class="list-unstyled">
                                    <li>
                                        <h6>主要技術</h6>
                                        <p class="border-bottom">vue</p>
                                    </li>
                                    <li>
                                        <h6>次要技術</h6>
                                        <p class="border-bottom">PHP</p>
                                    </li>
                                    <li>
                                        <h6>相關技術總年資</h6>
                                        <p class="border-bottom mb-0">6年</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <a href=" #collapseRightTwo" class="text-dark" data-bs-toggle="collapse" aria-expanded="true"
                aria-controls="collapseRightTwo">
                <div class="card-header rounded" id="headingRightTwo">
                    <h6 class="m-0">
                        招募歷程記錄{{ count($event_data) > 3 ? '(3+)' : '' }}
                        <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                    </h6>
                </div>
            </a>
            <div id="collapseRightTwo" class="collapse show " aria-labelledby="headingRightTwo">
                <div class="scroll-wrapper overflow-auto">
                    <div class="card-body text-success">
                        {{-- 顯示前三筆 --}}
                        @foreach(array_slice($event_data, 0, 3) as $event)
                        <div class="table-responsive border-bottom">
                            <table class="table table-sm table-borderless my-1">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="p-0">日期： </th>
                                        <td class="text-success p-0"> {{ $event['date'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-0">欄位：</th>
                                        <td class="text-success p-0">{{ $event['type'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-0">使用者：</th>
                                        <td class="text-success p-0">{{ $event['user'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-0">原始值：</th>
                                        <td class="text-success p-0">{{ $event['origin'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="p-0">新值：</th>
                                        <td class="text-success p-0">{{ $event['new_type'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                        {{-- 隱藏其他資料 --}}
                        @if(count($event_data) > 3)
                        <div id="all-events" class="collapse">
                            @foreach(array_slice($event_data, 3) as $event)
                            <div class="table-responsive border-bottom">
                                <table class="table  table-sm table-borderless my-2">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-0">日期： </th>
                                            <td class="text-success p-0"> {{ $event['date'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-0">欄位：</th>
                                            <td class="text-success p-0">{{ $event['type'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-0">使用者：</th>
                                            <td class="text-success p-0">{{ $event['user'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-0">原始值：</th>
                                            <td class="text-success p-0">{{ $event['origin'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-0">新值：</th>
                                            <td class="text-success p-0">{{ $event['new_type'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                {{-- Footer 按鈕 --}}
                @if(count($event_data) > 3)
                <div class="card-footer text-center">
                    <a class="text-primary d-block" data-bs-toggle="collapse" href="#all-events" role="button"
                        aria-expanded="false" aria-controls="all-events">
                        全部檢視
                    </a>
                </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="accordion" class="custom-accordion">
                    <div class="card mb-1 shadow-none">
                        <a href="#collapseRightThree" class="text-dark" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="collapseRightThree">
                            <div class="card-header" id="headingRightThree">
                                <h6 class="m-0">
                                    記錄
                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                </h6>
                            </div>
                        </a>
                        <div id="collapseRightThree" class="collapse show" aria-labelledby="headingRightThree">
                            <div class="card-body">
                                <ul class="list-unstyled record-edits" data-record-id="A0001">
                                    <li>
                                        <h6>錄取階段拒絕日期</h6>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                                            <p data-field="錄取階段拒絕日期" class="mb-0 flex-grow-1">2026/3/11 上午 09:41
                                            </p>
                                            <a class="btn btn-outline-secondary btn-sm edit my-1" title="Edit">
                                                <i class="fas fa-pencil-alt border-0"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>通知錄取日期</h6>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                                            <p data-field="通知錄取日期" class="mb-0 flex-grow-1"></p>
                                            <a class="btn btn-outline-secondary btn-sm edit my-1" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>申請核薪日期</h6>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                                            <p data-field="申請核薪日期" class="mb-0 flex-grow-1"></p>
                                            <a class="btn btn-outline-secondary btn-sm edit my-1" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>入職日期</h6>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                                            <p data-field="入職日期" class="mb-0 flex-grow-1"></p>
                                            <a class="btn btn-outline-secondary btn-sm edit my-1" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>拒絕日期</h6>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                                            <p data-field="拒絕日期" class="mb-0 flex-grow-1"></p>
                                            <a class="btn btn-outline-secondary btn-sm edit my-1" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="accordion" class="custom-accordion">
                    <div class="card mb-1 shadow-none">
                        <a href="#collapseRightTour" class="text-dark" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="collapseRightTour">
                            <div class="card-header" id="headingRightTour">
                                <h6 class="m-0">
                                    四格人格測驗
                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                </h6>
                            </div>
                        </a>
                        <div id="collapseRightTour" class="collapse show" aria-labelledby="headingRightTour">
                            <div class="card-body text-success">
                                <ul class="list-unstyled">
                                    <li>
                                        <h6>C(C)貓頭鹰</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>B(I)孔雀</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>A(S)無尾熊</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>D(D)老虎</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>前主管姓名</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>期望待遇</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>近期工作薪水</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                    <li>
                                        <h6>技術相總年資</h6>
                                        <p class="border-bottom"></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>