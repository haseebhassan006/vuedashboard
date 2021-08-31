<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="icon" href="{{ asset('/assets/images/brand/favicon.ico') }}" type="image/x-icon">

		<!--Bootstrap css -->
		<link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('/assets/css/dark.css') }}" rel="stylesheet">
		<link href="{{ asset('/assets/css/skin-modes.css') }}" rel="stylesheet">

		<!-- Animate css -->
		<link href="{{ asset('/assets/css/animated.css') }}" rel="stylesheet">

		<!--Sidemenu css -->
       <link href="{{ asset('/assets/css/sidemenu.css') }}" rel="stylesheet" id="sidemenu-theme">

		<!-- P-scroll bar css-->
		<link href="{{ asset('/assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet">

		<!---Icons css-->
		<link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet">

		<!-- Simplebar css -->
		<link rel="stylesheet" href="{{ asset('/assets/plugins/simplebar/css/simplebar.css') }}">

		<!-- INTERNAL Morris Charts css -->
		<link href="{{ asset('/assets/plugins/morris/morris.css') }}" rel="stylesheet">

		<!-- INTERNAL Select2 css -->
		<link href="{{ asset('/assets/plugins/select2/select2.min.css') }}" rel="stylesheet">

		<!-- Data table css -->
		<link href="{{ asset('/assets/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/assets/plugins/datatables/Responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">

	    <!-- Color Skin css -->
		<link id="theme" href="{{ asset('/assets/colors/color1.css') }}" rel="stylesheet" type="text/css">

	    <!-- INTERNAL Switcher css -->
		<link href="{{ asset('/assets/switcher/css/switcher.css') }}" rel="stylesheet">
		<link href="{{ asset('/assets/switcher/demo.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
   @yield('content')




    </div>
</body>


<!-- Jquery js-->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>

<!-- Bootstrap5 js-->
<script src="{{ asset('/assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Othercharts js-->
<script src="{{ asset('/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Circle-progress js-->
<script src="{{ asset('/assets/js/circle-progress.min.js') }}"></script>

<!-- Jquery-rating js-->
<script src="{{ asset('/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ asset('/assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- P-scroll js-->
<script src="{{ asset('/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

<!--INTERNAL Flot Charts js-->
<script src="{{ asset('/assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/assets/js/dashboard.sampledata.js') }}"></script>
<script src="{{ asset('/assets/js/chart.flot.sampledata.js') }}"></script>

<!-- INTERNAL Chart js -->


<!-- INTERNAL Apexchart js -->
<script src="{{ asset('/assets/js/apexcharts.js') }}"></script>

<!--INTERNAL Moment js-->
<script src="{{ asset('/assets/plugins/moment/moment.js') }}"></script>

<!--INTERNAL Index js-->
<script src="{{ asset('/assets/js/index1.js') }}"></script>

<!-- INTERNAL Data tables -->
<script src="{{ asset('/assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('/assets/js/select2.js') }}"></script>

<!-- Simplebar JS -->
<script src="{{ asset('/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

<!-- Rounded bar chart js-->
<script src="{{ asset('/assets/js/rounded-barchart.js') }}"></script>

<!-- Custom js-->
<script src="{{ asset('/assets/js/custom.js') }}"></script>

<!-- Switcher js -->
<script src="{{ asset('/assets/switcher/js/switcher.js') }}"></script>
</html>
