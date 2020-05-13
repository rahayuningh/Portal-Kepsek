<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-name') | IMS SCB</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/imagesSCB/Logo-SCB_mini.png" ') }}">

    {{-- Table --}}
    <link rel="stylesheet" href=" {{ asset('assets/css/datatables/dataTables.bootstrap4.css') }}">
    {{-- <link href="{{ asset('') }}../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
    rel="stylesheet"> --}}
</head>

<body>
    <div class="container-scroller">
        {{-- ######################################################################## --}}
        {{-- TOP NAVBAR --}}
        {{-- ######################################################################## --}}
        @include('layouts.topbar')


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            {{-- ######################################################################## --}}
            {{-- SIDEBAR --}}
            {{-- ######################################################################## --}}
            @include('layouts.sidebar')


            {{-- ######################################################################## --}}
            {{-- MAIN PANEL --}}
            {{-- ######################################################################## --}}
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    {{-- ######################################################################## --}}
                    {{-- PAGE HEADER (OVERVIEW/LINK PATH) --}}
                    {{-- ######################################################################## --}}
                    <div class="page-header">
                        {{-- PAGE NAME --}}
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span> @yield('page-name')
                        </h3>
                        {{--LINK PATH--}}
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">@yield('page-name')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Page Aktif</li>
                            </ol>
                        </nav>
                    </div>

                    {{-- ######################################################################## --}}
                    {{-- PESAN SUKSES --}}
                    {{-- ######################################################################## --}}
                    {{-- @if() --}}
                    <div class="alert alert-success" role="alert">
                        {{"Data berhasil ditambahkan/diubah/dihapus"}}
                    </div>
                    {{-- @endif --}}
                    <div class="alert alert-danger" role="alert">
                        {{"Data gagal ditambahkan/diubah/dihapus"}}
                    </div>


                    {{-- ######################################################################## --}}
                    {{-- CONTENT --}}
                    {{-- ######################################################################## --}}
                    @yield('content')

                </div>
                <!-- content-wrapper ends -->


                {{-- FOOTER --}}
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                            href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                        reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                    </footer>

                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->


        <!-- plugins:js -->
        <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/js/misc.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/todolist.js') }}"></script>
        <!-- End custom js for this page -->

        {{-- Table Pagination --}}
        <script src="{{ asset('assets/js/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatables/table.js') }}"></script>

        {{-- for add custom js scripts --}}
        @yield('script')

    </body>

    </html>
