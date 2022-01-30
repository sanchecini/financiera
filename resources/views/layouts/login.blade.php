<!DOCTYPE html>
<html lang="en">
<head>
	<title>Financiera</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
  {!! Html::style('ansan/login/vendor/bootstrap/css/bootstrap.min.css') !!}
<!--===============================================================================================-->

  {!! Html::style('ansan/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
<!--===============================================================================================-->

  {!! Html::style('ansan/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') !!}
<!--===============================================================================================-->

{!! Html::style('ansan/vendor/sweetalert2/dist/sweetalert2.min.css') !!}
<!--===============================================================================================-->
	
  {!! Html::style('ansan/login/css/util.css') !!}
	
  {!! Html::style('ansan/login/css/main.css') !!}

	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style=" background-image: url('{{ asset('ansan/login/finance.jpg') }}');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
				Financiera
				</span>

        @yield('content')
			
			</div>
		</div>
	</div>
	

	
  {!! Html::script('ansan/login/vendor/jquery/jquery-3.2.1.min.js') !!}

  
  {!! Html::script('ansan/login/vendor/bootstrap/js/popper.js') !!}
  {!! Html::script('ansan/login/vendor/bootstrap/js/bootstrap.min.js') !!}
	

	
  {!! Html::script('ansan/js/sweetalert2.all.min.js') !!}
	



</body>
</html>