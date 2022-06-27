<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords">
    <meta name="description">
    <meta name="robots" content="noindex,nofollow">
    <title>Pharmakon</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">

</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader  -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper  -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="relative" data-boxed-layout="full">
        <div class="row">
            <div class="col col-md-12 col-sm-12">
            @include('header')
            </div>

            <div class="row">

                <div class="col col-md-12 col-sm-12">@yield('content')</div>
            </div>

        </div>
    </div>
        <!-- ============================================================== -->
  <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{ asset('dist/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('dist/js/feather.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 charts -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js')}}"></script>
    <!--chartjs -->
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>
