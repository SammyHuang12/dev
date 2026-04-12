@extends('admin.layouts.app')
@section('content')
<div class="page-content">
    <form id="candidatedetail" name="candidatedetail">
        <input type="hidden" name="_token" value="QjQSKGjnWjb7mxoIhiEUVkFNkeOA8MfC7b6yAcdI" autocomplete="off">
        <input class="form-check-input" type="hidden" id="candidate_id" name="candidate_id" value="AD202603040001">
        <div class="container-fluid position-relative">
            <!-- start page title -->
            @include('admin.components.pageTopTitle')
            <!-- end page title -->
            <div class="row custom-m-top">
                <div class="col-md-12">
                    {{--@include('admin.components.addModal')--}}
                    <div class="card">
                        <div class="card-body">
                            <div id="accordion" class="custom-accordion">
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseOne" class="text-dark " data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="m-0">
                                                人選資訊
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="card-title">建立招募彙整名單</h4>
                                                    <p class="card-title-desc">從這一邊必須由連絡人間接新增一個招募人選名單</p>
                                                    <div class="row row-cols-md-2 row-cols-1">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-3">面試人選編號</dt>
                                                                <dd class="col-9">AD202603040001</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-3">面試人選</dt>
                                                                <dd class="col-9">龔祥正</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">人選履歷來源</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">績效目標結束日</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">最高學歷</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">鎖定目標結束日</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">鎖定</dt>
                                                                <dd class="col-8"><i class="far fa-square"></i>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">人資通知不送</dt>
                                                                <dd class="col-8"><i class="far fa-square"></i>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">宏益業務</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">行動電話</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1">

                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">備註</dt>
                                                                <dd class="col-8 text-muted note">
                                                                    南韓「國民女神」孫藝真出道多年，以清新氣質與細膩演技深受喜愛，2022年與男神玄彬步入婚姻，婚後育有一子「小甜豆」，一家三口生活幸福甜蜜。今（31日）迎來兩人結婚4周年紀念日，孫藝真驚喜在社群平台公開當年未曝光的婚紗照，瞬間掀起粉絲熱議。<br>
                                                                    從曝光的照片可見，婚禮在戶外舉行，以滿滿粉色、白色花卉打造浪漫花拱門，搭配水晶吊燈點綴，整體佈置宛如童話場景。第一張照片中，玄彬與孫藝真站在花團錦簇的拱門下深情對望，背景遠眺城市與天空，畫面唯美夢幻；另一張則捕捉兩人牽手步上白色步道的瞬間，笑容燦爛自然，流露滿滿幸福氛圍。
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">可連絡時間</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseTwo" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="card-header" id="headingTwo">
                                            <h6 class="m-0">
                                                直達客面特殊原因
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- <h4 class="card-title">建立招募彙整名單</h4>
                                                                <p class="card-title-desc">從這一邊可以直接新增一個招募人選名單</p> -->
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">idle人選</dt>
                                                                <dd class="col-8"><i class="far fa-square"></i>
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">備註</dt>
                                                                <dd class="col-8 text-muted note">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseThree" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <div class="card-header" id="headingThree">
                                            <h6 class="m-0">人選狀態<i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                        style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">招募階段[大項]</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">拒絕日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">招募階段[小項]</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">拒絕原因</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseFour" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <div class="card-header" id="headingFour">
                                            <h6 class="m-0">邀約階段<i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">履歷來源</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">招募人員</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">邀約成功日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">邀約狀態</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">邀約日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">邀約技術</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">日期_連絡一</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">日期_連絡二</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">日期_連絡三</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">拒絕原因</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">邀約備註</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseFive" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseFive">
                                        <div class="card-header" id="headingFive">
                                            <h6 class="m-0">
                                                宏益面試階段
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">

                                                    <!-- <h4 class="card-title">個人資料</h4> -->
                                                    <!-- <p class="card-title-desc">填寫個人基本資料以及連絡方式</p> -->
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">宏益面試日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">面試招募</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">宏益面試時間</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">宏益面試狀態</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">宏益面試方式</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">就業狀況</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">視訊面試連結</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">最快上班日</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">技術評分</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">儀表</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">技術評語</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">自我介紹</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">附件回傳狀況</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">溝通能力</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">接受駐點地區</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">離職原因</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">拒絕駐點地區</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">面試觀察</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">面試備註</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">四型人格測驗結果</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- table -->
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseSix" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseSix">
                                        <div class="card-header" id="headingSix">
                                            <h6 class="m-0">
                                                客戶端面試歷程
                                                <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" style="">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <!-- <h4 class="card-title">客戶端面試歷程</h4> -->
                                                    <p class="card-title-desc">1個項目，排序依據為客面狀態，篩選條件為績效目標名稱，6分鐘前已更新</p>
                                                </div>
                                                <div class="btn-toolbar pt-0 pb-5" role="toolbar">
                                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                                        <button type="button"
                                                            class="btn btn-primary waves-light waves-effect dropdown-toggle d-flex"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-settings-2-fill"></i>  <i
                                                                class="ri-arrow-down-s-fill"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Updates</a>
                                                            <a class="dropdown-item" href="#">Social</a>
                                                            <a class="dropdown-item" href="#">Team Manage</a>
                                                        </div>
                                                    </div>
                                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                                        <button type="button"
                                                            class="btn btn-success waves-light waves-effect"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="dripicons-clockwise fx d-flex"></i>
                                                        </button>
                                                    </div>
                                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                                        <a href="eventdetail?candidate_id=AD202603040001"
                                                            style="padding: 8px 16px; background: #007bff; color: white; border: none; border-radius: 4px; text-decoration: none;">新增</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0 table-nowrap">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>推薦日期</th>
                                                            <th>歷程編號</th>
                                                            <th>業務送履歷日期</th>
                                                            <th>績效目標</th>
                                                            <th>客一面日期</th>
                                                            <th>客一面狀態</th>
                                                            <th>客二面日期</th>
                                                            <th>客二面狀態</th>
                                                            <th>客面備註</th>
                                                            <th>客戶拒絕原因</th>
                                                            <th>錄取日期</th>
                                                            <th>拒絕日期</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>2026-03-18 05:24</th>
                                                            <td><a
                                                                    href="/eventdetail?event_id=EV202603190002">EV202603190002</a>
                                                            </td>
                                                            <td>2026-03-02</td>
                                                            <td><a
                                                                    href="/targetsdetail?id=TA202507000076">NCCC-Android-1</a>
                                                            </td>
                                                            <td>2026-03-02 13:23</td>
                                                            <td>面試後等待結果</td>
                                                            <th>2026-03-02 13:23</th>
                                                            <th>已錄取，不來報到</th>
                                                            <th>你這個方向其實很實際，而且市場需求一直在成長（高齡化社會），但競爭也不小。下面我幫你整理一份**「看護平台＋招募＋企業官網」的完整
                                                                SWOT 分析**，會比較偏你實際要做網站與平台的角度。</th>
                                                            <th>2026-03-03</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <th>2026-03-20 02:13</th>
                                                            <td><a
                                                                    href="/eventdetail?event_id=EV202603200002">EV202603200002</a>
                                                            </td>
                                                            <td>2026-03-17</td>
                                                            <td><a href="/targetsdetail?id=TA202507000077">NCCC-Java、js
                                                                    後端工程師-2</a></td>
                                                            <td>2026-03-17 10:12</td>
                                                            <td></td>
                                                            <th>2026-03-18 10:12</th>
                                                            <th></th>
                                                            <th>會使牽引手指的關節處肌腱不斷摩擦韌帶，造成發炎腫脹就是屈肌腱炎，若不休息或治療會逐漸形成結節。盛行率和職業相關，某些經常運用手指的職業或身體因素都可能增加罹患板機指的機會。中年人、女性多於男性、常伴隨糖尿病或腕隧道症候群。
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end table -->
                                <div class="card mb-1 shadow-none">
                                    <a href="#collapseSeven" class="text-dark" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseSeven">
                                        <div class="card-header" id="headingSeven">
                                            <h6 class="m-0">入職手續階段<i
                                                    class="mdi mdi-minus float-end accor-plus-icon"></i></h6>
                                        </div>
                                    </a>
                                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven"
                                        style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">申請核薪日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">客戶名稱(錄取階段)</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">負責招募</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">負責業務</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">所屬部門</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">錄取職位</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-md-2 row-cols-1 ">
                                                        <div class="col">
                                                            <dl class="row mb-0">
                                                                <dt class="col-4">報到日期</dt>
                                                                <dd class="col-8 text-muted">—</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <!-- end row -->

    </form>
    <!-- container-fluid -->


</div>
<!-- End Page-content -->

@endsection