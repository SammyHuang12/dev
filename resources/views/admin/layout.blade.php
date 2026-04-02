<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Panel' }} | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/picture/kencont_logo_sb.png') }}">

    @if(($page ?? '') === 'dashboard')
    <!-- jquery.vectormap css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" type="text/css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}" type="text/css">

    <!-- Responsive datatable examples -->
    <link rel="stylesheet" href="{{ asset('css/responsive.bootstrap4.min.css') }}" type="text/css">

    <!-- frappe-gantt-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/frappe-gantt/dist/frappe-gantt.css">
    @endif

    @if(($page ?? '') === 'tables-editable')
    <link
        href="https://themesdesign.in/upcube/layouts/assets/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.css"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('css/keyTable.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    @endif

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css">

    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App Css-->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" id="app-style" rel="stylesheet" type="text/css">
</head>

<!-- <body class=" bg-light"> -->

<body @if(($page ?? '' ) !=='login' && ($page ?? '' ) !=='404' ) data-topbar="dark" @else class="auth-body-bg" @endif>
    @if(($page ?? '') !== 'login' && ($page ?? '') !== '404')
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ========== top Sidebar Start ========== -->
        @include('admin.components.topSidebar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.components.leftSidebar')
        <!-- Left Sidebar End -->
    </div>
    <!-- END layout-wrapper -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <!-- start Page-content -->
        @yield('content')
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; {{ date('Y') }}.Company name All rights reserved.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Sammy Huang
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
    {{-- Login 分支 --}}
    @elseif (($page ?? '') === 'login')
    @yield('login')

    {{-- 404 分支 --}}
    @elseif (($page ?? '') === '404')
    @yield('page404')
    @endif

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>

    @if(($page ?? '') === 'dashboard')
    <!-- apexcharts -->
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>

    <!-- apexcharts init -->
    <script src="{{ asset('js/apexcharts.init.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-us-merc-en.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('js/dashboard.init.js') }}"></script>
    @endif

    @if(($page ?? '') === 'event-details')
    <!-- bs custom file input plugin -->
    <script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>

    <script src="{{ asset('js/form-element.init.js') }}"></script>
    @endif

    {{-- @if($page === 'tables-editable' or $page === 'event-details') @endif --}}
    @if(($page ?? '') === 'tables-editable')
    <!-- Table Editable plugin -->
    <script src="{{ asset('js/table-edits.min.js') }}"></script>

    <script src="{{ asset('js/table-editable.init.js') }}"></script>
    @endif

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
</body>

</html>