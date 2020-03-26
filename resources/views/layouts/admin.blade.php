<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>LandLordsNG</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @yield('header')
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            @yield('sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div id="app" class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- content -->
                @yield('footer')
            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/waves.min.js')}}"></script>

        <script src="{{asset('../plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Peity JS -->
        <script src="{{asset('../plugins/peity/jquery.peity.min.js')}}"></script>

        <script src="{{asset('../plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('../plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('assets/pages/dashboard.js')}}"></script>
        @yield('scripts')
        <!-- App js -->
        <script src="{{asset ('assets/js/app.js')}}"></script>

    </body>

</html>
