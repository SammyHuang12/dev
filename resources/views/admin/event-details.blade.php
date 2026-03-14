@extends('admin.layout')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">List details</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Forms Elements</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">聯絡人資料細項</h4>
                        <p class="card-title-desc">Extend the default collapse behavior to create an
                            accordion.</p>
                        <div id="accordion" class="custom-accordion">
                            <div class="card mb-1 shadow-none">
                                <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="m-0">
                                            基本資料 Collapsible Group Item #1
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <h4 class="card-title">聯絡人資料細項</h4>
                                        <p class="card-title-desc">Here are examples of <code
                                                class="highlighter-rouge">.form-control</code> applied to
                                            each
                                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                class="highlighter-rouge">type</code>.</p>

                                        <div class="row row-cols-md-2 row-cols-1 gx-3 gx-lg-5">
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-text-input"
                                                        class="col-sm-2 col-form-label">Text</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text"
                                                            placeholder="Artisanal kale" id="example-text-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-search-input"
                                                        class="col-sm-2 col-form-label">Search</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="search"
                                                            placeholder="How do I shoot web" id="example-search-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-email-input"
                                                        class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="email"
                                                            placeholder="bootstrap@example.com"
                                                            id="example-email-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-url-input"
                                                        class="col-sm-2 col-form-label">URL</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="url"
                                                            placeholder="https://getbootstrap.com"
                                                            id="example-url-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-tel-input"
                                                        class="col-sm-2 col-form-label">Telephone</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="tel"
                                                            placeholder="1-(555)-555-5555" id="example-tel-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-password-input"
                                                        class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" value="hunter2"
                                                            id="example-password-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-number-input"
                                                        class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" value="42"
                                                            id="example-number-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-datetime-local-input"
                                                        class="col-sm-2 col-form-label">Date and
                                                        time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="datetime-local"
                                                            value="2011-08-19T13:45:00"
                                                            id="example-datetime-local-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-date-input"
                                                        class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="2011-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-month-input"
                                                        class="col-sm-2 col-form-label">Month</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="month" value="2022-03"
                                                            id="example-month-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-week-input"
                                                        class="col-sm-2 col-form-label">Week</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="week" value="2022-W14"
                                                            id="example-week-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-time-input"
                                                        class="col-sm-2 col-form-label">Time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time" value="13:45:00"
                                                            id="example-time-input">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label for="example-color-input"
                                                        class="col-sm-2 col-form-label">Color</label>
                                                    <div class="col-sm-10">
                                                        <input type="color"
                                                            class="form-control form-control-color w-100"
                                                            id="example-color-input" value="#0f9cf3"
                                                            title="Choose your color">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="col">
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Select</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Open this select menu
                                                            </option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 shadow-none">
                                <a href="#collapseTwo" class="text-dark " data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="m-0">
                                            Collapsible Group Item #2
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </h6>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Sizing</h4>
                                                        <p class="card-title-desc">Set heights using classes
                                                            like
                                                            <code>.form-control-lg</code> and
                                                            <code>.form-control-sm</code>.
                                                        </p>
                                                        <div>
                                                            <div class="mb-4">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Default input">
                                                            </div>
                                                            <div class="mb-4">
                                                                <input class="form-control form-control-sm" type="text"
                                                                    placeholder=".form-control-sm">
                                                            </div>
                                                            <div>
                                                                <input class="form-control form-control-lg" type="text"
                                                                    placeholder=".form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Range Inputs</h4>
                                                        <p class="card-title-desc">Set horizontally
                                                            scrollable range inputs using
                                                            <code>.form-control-range</code>.
                                                        </p>

                                                        <div>
                                                            <h5 class="font-size-14">Example</h5>
                                                            <input type="range" class="form-range"
                                                                id="formControlRange">
                                                        </div>
                                                        <div class="mt-4">
                                                            <h5 class="font-size-14">Custom Range</h5>
                                                            <input type="range" class="form-range" id="customRange1">

                                                            <input type="range" class="form-range mt-3" min="0" max="5"
                                                                id="customRange2">
                                                        </div>
                                                    </div>
                                                </div><!-- end cardbody -->
                                            </div><!-- end card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 shadow-none">
                                <a href="#collapseThree" class="text-dark " data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                        <h6 class="m-0">
                                            Collapsible Group Item #3
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </h6>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-4">Checkboxes</h4>

                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div>
                                                                    <h5 class="font-size-14 mb-4">Form
                                                                        Checkboxes</h5>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheck1">
                                                                        <label class="form-check-label"
                                                                            for="formCheck1">
                                                                            Form Checkbox
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheck2" checked="">
                                                                        <label class="form-check-label"
                                                                            for="formCheck2">
                                                                            Form Checkbox checked
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 ms-auto">
                                                                <div class="mt-4 mt-lg-0">
                                                                    <h5 class="font-size-14 mb-4">Form
                                                                        Checkboxes Right</h5>
                                                                    <div>
                                                                        <div class="form-check form-check-right mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheckRight1">
                                                                            <label class="form-check-label"
                                                                                for="formCheckRight1">
                                                                                Form Checkbox Right
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check form-check-right">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheckRight2"
                                                                                checked="">
                                                                            <label class="form-check-label"
                                                                                for="formCheckRight2">
                                                                                Form Checkbox Right checked
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-4">Radios</h4>

                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div>
                                                                    <h5 class="font-size-14 mb-4">Form
                                                                        Radios</h5>
                                                                    <div class="form-check mb-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="formRadios" id="formRadios1"
                                                                            checked="">
                                                                        <label class="form-check-label"
                                                                            for="formRadios1">
                                                                            Form Radio
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="formRadios" id="formRadios2">
                                                                        <label class="form-check-label"
                                                                            for="formRadios2">
                                                                            Form Radio checked
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 ms-auto">
                                                                <div class="mt-4 mt-lg-0">
                                                                    <h5 class="font-size-14 mb-4">Form
                                                                        Radios Right</h5>
                                                                    <div>
                                                                        <div class="form-check form-check-right mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="formRadiosRight"
                                                                                id="formRadiosRight1" checked="">
                                                                            <label class="form-check-label"
                                                                                for="formRadiosRight1">
                                                                                Form Radio Right
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div>
                                                                        <div class="form-check form-check-right">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="formRadiosRight"
                                                                                id="formRadiosRight2">
                                                                            <label class="form-check-label"
                                                                                for="formRadiosRight2">
                                                                                Form Radio Right checked
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0 shadow-none">
                                <a href="#collapseFour" class="text-dark " data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="collapseFour">
                                    <div class="card-header" id="headingFour">
                                        <h6 class="m-0">
                                            Collapsible Group Item #4
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </h6>
                                    </div>
                                </a>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Switches</h4>
                                                        <p class="card-title-desc">A switch has the markup
                                                            of a custom checkbox but uses the
                                                            <code>.form-switch</code> class to render a
                                                            toggle switch. Switches also support
                                                            the <code>disabled</code> attribute.
                                                        </p>
                                                        <div class="form-check form-switch mb-3" dir="ltr">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customSwitch1" checked="">
                                                            <label class="form-check-label" for="customSwitch1">Toggle
                                                                this switch
                                                                element</label>
                                                        </div>
                                                        <div class="form-check form-switch" dir="ltr">
                                                            <input type="checkbox" class="form-check-input" disabled=""
                                                                id="customSwitch2">
                                                            <label class="form-check-label" for="customSwitch2">Disabled
                                                                switch
                                                                element</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">File browser</h4>
                                                        <p class="card-title-desc">The file input is the
                                                            most gnarly of the bunch and
                                                            requires additional JavaScript if you’d like to
                                                            hook them up with functional
                                                            <em>Choose file…</em> and selected file name
                                                            text.
                                                        </p>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="customFile">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-md-4">
                <div id="accordion-right" class="custom-accordion">
                    <div class="card">
                        <div class="card-body">
                            <div id="accordion" class="custom-accordion">
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseRightOne" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="true" aria-controls="collapseRightOne">
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
                    <div class=" card">
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
                                <a class="text-primary" data-bs-toggle="collapse" href="#all-events" role="button"
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
                                    <a href="#collapseRightThree" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="true" aria-controls="collapseRightThree">
                                        <div class="card-header" id="headingRightThree">
                                            <h6 class="m-0">
                                                記錄
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseRightThree" class="collapse show"
                                        aria-labelledby="headingRightThree">
                                        <div class="card-body text-success">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h6>錄取階段拒絕日期</h6>
                                                    <p class="border-bottom"> 2026/3/11 上午9:41</p>
                                                </li>
                                                <li>
                                                    <h6>通知錄取日期</h6>
                                                    <p class="border-bottom"> 2026/3/11 上午9:41</p>
                                                </li>
                                                <li>
                                                    <h6>申請核薪日期</h6>
                                                    <p class="border-bottom"> 2026/3/11 上午9:41</p>
                                                </li>
                                                <li>
                                                    <h6>入職日期</h6>
                                                    <p class="border-bottom"> 2026/3/11 上午9:41</p>
                                                </li>
                                                <li>
                                                    <h6>拒絕日期</h6>
                                                    <p class="border-bottom"> 2026/3/11 上午9:41</p>
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
                                    <a href="#collapseRightTour" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="true" aria-controls="collapseRightTour">
                                        <div class="card-header" id="headingRightTour">
                                            <h6 class="m-0">
                                                四格人格測驗
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseRightTour" class="collapse show"
                                        aria-labelledby="headingRightTour">
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
        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection