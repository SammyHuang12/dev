<div class="custom-fixed">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{$sidebarMenu['title']}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{$sidebarMenu['parent_title']}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{$sidebarMenu['title']}}</li>
                    </ol>
                </div>
            </div>
            @if($sidebarMenu['route'] !=='dashboard')
            <div class="button-items mb-3">
                <button type="button" id="formsend" class="btn btn-primary waves-effect waves-light">儲存送出</button>
                <button type="button" id="create_event" class="btn btn-info waves-light waves-effect">新增客面歷程</button>
                <button type="button" id="delete_candidate" data-id="AD202507290004"
                    class="btn btn-warning waves-effect waves-light">刪除該筆資料</button>
                {{-- @include('admin.components.addModal') --}}
            </div>
            @endif
        </div>
    </div>
</div>