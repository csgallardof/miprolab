<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
<title>Inteligencia Productiva - @yield('title')</title> 
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />


	@section('head')
			<!-- ================== BEGIN BASE CSS STYLE ================== -->
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
			
			<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
			<!-- ================== END BASE CSS STYLE ================== -->
		@show


	<!-- ================== BEGIN BASE CSS STYLE ================== -->

		@section('start_css')
			<link href="/cn-assets/css/default/style.min.css" rel="stylesheet" />
			<link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
			<link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
			<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

			
			
            

		@show
		<!-- ================== END BASE CSS STYLE ================== -->

		@section('start_js')
			<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
		@show
		<!-- ================== END BASE JS ================== -->

		    <!-- Styles -->
		    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@stack('css')
</head>

<body >
	
	
		<div id="page-container" class="fade ">
			@include ('layouts.menu')
			@yield ('contenido')
			@include ('layouts.common_modals')
			@include ('layouts.footer')
		</div>
		
		
	
	
	<script src="/cn-assets/js/bundle.js"></script>
	<script src="/cn-assets/js/theme/default.js"></script>
	<script src="/cn-assets/js/apps.min.js"></script>

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

	@stack('scripts')
</body>
</html>
