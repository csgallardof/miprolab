<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

	<head>

		<meta charset="utf-8" />
		<title>Inteligencia Productiva - @yield('title')</title>
		<link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="Sistema de Inteligencia Productiva MIPRO" name="description" />
		<meta content="Ministerio de Industrias y Productividad" name="author" />

		@section('head')
		@show

		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		@section('start_css')
			<link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
			<link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
			<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/theme/default.css') }}" rel="stylesheet" id="theme" />
      		<link href="{{ asset('css/inteligencia.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
			<link href="{{ asset ('plugins/bootstrap-wizard/css/bwizard.min.css') }}" rel="stylesheet" />
			<link href="{{ asset ('plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
	  <!-- ================== END PAGE LEVEL STYLE ================== -->
	  
		@show
		<!-- ================== END BASE CSS STYLE ================== -->

		<!-- ================== BEGIN BASE JS ================== -->
		@section('start_js')
		
		<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
		@show
		<!-- ================== END BASE JS ================== -->

    <!-- Styles -->

	@stack('css')
	</head>

	<body>

    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

			<?php Visitor::log_page(); ?>

			@include ('layouts.menu')
			@yield ('contenido')
			@include ('layouts.common_modals')
			@include ('layouts.footer')
			

    </div>

		@section('end_js')
		<!-- ================== BEGIN BASE JS ================== -->

		<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>

		  <!-- ================== BEGIN BASE JS ================== -->
		  <script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
		  <script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
		  <script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
		  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		  <!--[if lt IE 9]>
		    <script src="{{ asset('crossbrowserjs/html5shiv.js') }}"></script>
		    <script src="{{ asset('crossbrowserjs/respond.min.js') }}"></script>
		    <script src="{{ asset('crossbrowserjs/excanvas.min.js') }}"></script>
		  <![endif]-->
		  <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		  <script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
		  <!-- ================== END BASE JS ================== -->
		  
		  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
		  <script src="{{ asset('plugins/parsley/dist/parsley.js') }}"></script>
		  <script src="{{ asset('plugins/bootstrap-wizard/js/bwizard.js') }}"></script>
		  <script src="{{ asset('js/form-wizards-validation.demo.min.js') }}"></script>
		  <script src="{{ asset('js/apps.min.js') }}"></script>
		  <!-- ================== END PAGE LEVEL JS ================== -->

			
		<!-- ================== END PAGE LEVEL JS ================== -->

		@show

	
	<script>
    $(document).ready(function() {
      FormWizardValidation.init();
      
    });
  	</script>

	<script>
	    $(document).ready(function() {
	        App.init();

	    });
	</script>
	

	</body>
</html>
