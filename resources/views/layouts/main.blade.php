<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{csrf-token()}}"> --}}
    <!--favicon-->
    <link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    {{-- <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> --}}
    <link href="/style/simplebar.css" rel="stylesheet" />
    {{-- <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /> --}}
    <link href="/style/metisMenu.min.css" rel="stylesheet" />
    <link href="/style/swipper.min.css" rel="stylesheet" />
    <link href="/style/styledash.css" rel="stylesheet" />
    {{-- <link href="/style/jquery.dataTables.min.css" rel="stylesheet" /> --}}
    {{-- <link href="/style/responsive.dataTables.min.css" rel="stylesheet" />
    <link href="/style/buttons.dataTables.min.css" rel="stylesheet" /> --}}
    <link href="/style/morris.css" rel="stylesheet" />
    <link href="/style/gijgo.min.css" rel="stylesheet" />
    <link href="/style/material-icons.css" rel="stylesheet" />
    <link href="/style/tagsinput.css" rel="stylesheet" />
    <link href="/style/select2.min.css" rel="stylesheet" />
    <link href="/style/owl.carousel.css" rel="stylesheet" />
    <link href="/style/invoice.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    
    <!-- loader-->
    <link href="/style/pace.min.css" rel="stylesheet" />
    <script src="/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/style/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="/style/app.css" rel="stylesheet">
    <link href="/style/viewtable.css" rel="stylesheet">
    <link href="/style/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="/style/semi-dark.css" />
    <title>growit</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('layouts.sidebar')
        <!--end sidebar wrapper -->
        
        <!--start header -->
        @include('layouts.header')
        <!--end header -->
        <!--start page wrapper -->
        <main>
            @yield('konten')
        </main>
        
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!--plugins-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/simplebar.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/invoice.js"></script>
    <script src="/js/Chart.js"></script>
    <script src="/js/jquery.barfiller.js"></script>
    {{-- <script src="/js/jquery.dataTables.js"></script> --}}
    <script src="/js/dataTables.responsive.min.js"></script>
    <script src="/js/buttons.flash.min.js"></script>
    <script src="/js/mchart.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/gijgo.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/metisMenu.js"></script>
    <script src="/js/area_chart.js"></script>
    <script src="/js/apexcharts.js"></script>
    <script src="/js/chart_stackbar.js"></script>
    <script src="/js/chartjs_active.js"></script>
    <script src="/js/swiper.min.js"></script>
    {{-- <script src="/js/bar_active_1.js"></script> --}}
    {{-- radial --}}
    {{-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script> --}}
    {{-- <script src="/js/radial_active.js"></script> --}}
    @yield('scriptradial')
    @yield('scriptapar')
    <script src="/js/active_chart.js"></script>
    <script src="/js/income.js"></script>
    {{-- <script src="js/jquery1-3.4.1.min.js"></script> --}}
    
    <!--app JS-->
    <script src="/js/app.js"></script>
</body>

</html>
