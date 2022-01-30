<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('ansan/images/favicon.png')}}">
   

    {!! Html::style('ansan/vendor/jqvmap/css/jqvmap.min.css') !!}
    {!! Html::style('ansan/vendor/chartist/css/chartist.min.css') !!}
    {!! Html::style('ansan/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') !!}
    {!! Html::style('ansan/css/style.css') !!}
    {!! Html::style('https://cdn.lineicons.com/2.0/LineIcons.css') !!}

    <!-- Datatables -->
   
    {!! Html::style('ansan/vendor/datatables/css/jquery.dataTables.min.css') !!}
    {!! Html::style('ansan/vendor/sweetalert2/dist/sweetalert2.min.css') !!}
    

    @yield('styles')

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    

        <!--**********************************
    *************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts._nav')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
           @yield('content')
			
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   

    {!! Html::script('ansan/vendor/global/global.min.js') !!}
    {!! Html::script('ansan/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') !!}
    {!! Html::script('ansan/vendor/chart.js/Chart.bundle.min.js') !!}
    {!! Html::script('ansan/js/custom.min.js') !!}
    {!! Html::script('ansan/js/deznav-init.js') !!}
	
	<!-- Counter Up -->
   

    {!! Html::script('ansan/vendor/waypoints/jquery.waypoints.min.js') !!}
    {!! Html::script('ansan/vendor/jquery.counterup/jquery.counterup.min.js') !!}
		
	<!-- Apex Chart -->
	
    {!! Html::script('ansan/vendor/apexchart/apexchart.js') !!}

	<!-- Chart piety plugin files -->
	
    {!! Html::script('ansan/vendor/peity/jquery.peity.min.js') !!}
	<!-- Dashboard 1 -->

    {!! Html::script('ansan/js/dashboard/dashboard-1.js') !!}
    

    {!! Html::script('ansan/vendor/datatables/js/jquery.dataTables.min.js') !!}
    {!! Html::script('ansan/js/plugins-init/datatables.init.js') !!}
    {!! Html::script('ansan/js/sweetalert2.all.min.js') !!}

    
    @yield('scripts')

</body>

</html>