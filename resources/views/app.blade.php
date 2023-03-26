<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Toastr style -->
        <link href="assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!-- Mainly scripts -->
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Flot -->
        <script src="assets/js/plugins/flot/jquery.flot.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.js"></script>

        <!-- Peity -->
        <script src="assets/js/plugins/peity/jquery.peity.min.js"></script>
        <script src="assets/js/demo/peity-demo.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="assets/js/inspinia.js"></script>
        <script src="assets/js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- GITTER -->
        <script src="assets/js/plugins/gritter/jquery.gritter.min.js"></script>

        <!-- Sparkline -->
        <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <!-- Sparkline demo data  -->
        <script src="assets/js/demo/sparkline-demo.js"></script>

        <!-- ChartJS-->
        <script src="assets/js/plugins/chartJs/Chart.min.js"></script>

        <!-- Toastr -->
        <script src="assets/js/plugins/toastr/toastr.min.js"></script>

    </body>
</html>
