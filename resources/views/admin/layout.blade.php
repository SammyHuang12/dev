<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Panel' }} | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">

    <!-- jquery.vectormap css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link rel="stylesheet" href="{{ asset('css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css">

    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App Css-->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    <!-- frappe-gantt-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/frappe-gantt/dist/frappe-gantt.css">
</head>

<!-- <body class=" bg-light"> -->

<body data-topbar="dark">
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

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>

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

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>