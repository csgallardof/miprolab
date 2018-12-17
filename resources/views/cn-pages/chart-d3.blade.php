
@extends('layouts.cifrasNacionales')


@section('title', 'd3 Chart')

@push('css')
	<link href="plugins/nvd3/nvd3.min.css" rel="stylesheet" />
	<style>

#chart svg {
  height: 100%;
}

</style>

@endpush

@section('contenido')
<br><br><br><br><br><br>

	<!-- begin row -->
	<div class="row">
		
		<!-- begin col-6 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">PIB por Actividad Economica</h4>
				</div>
				<div class="panel-body">
					<div class="row">
							<div class="col-lg-3">
							<select id="select-anio" onchange="handleBarHorizontalChart();" class="form-control">
									<option value="" disabled>Seleccione año</option>
									<option value="2007"selected>2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
							</select>	
							</div>
							<div class="col-lg-3">
								<select id="select-tipo-cifra-nacional" onchange="handleBarHorizontalChart();" class="form-control">
									<option value="" disabled>Seleccione Tipo de Cifra</option>
									@foreach($tiposCifrasNacionalesPIBActividadEconomica as $tiposCifrasNacionalesPIBActividadEconomica)

										<option value="{{$tiposCifrasNacionalesPIBActividadEconomica->id}}">{{$tiposCifrasNacionalesPIBActividadEconomica->nombre_tipo_cifra_nacional}}</option>
									@endforeach
									
							</select>
							</div>
					</div>
							


					<div id="chart" class="height-lg" >
						<svg></svg>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">PIB Por Provincias</h4>
				</div>
				<div class="panel-body">
					<div id="nv-bar-chart" class="height-lg">
						<svg></svg>
					</div>
					
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Stacked Area Chart</h4>
				</div>
				<div class="panel-body">
					<div id="nv-stacked-area-chart" class="height-sm"></div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Stacked Bar Chart</h4>
				</div>
				<div class="panel-body">
					<div id="nv-stacked-bar-chart" class="height-sm">
						<h1>HOLA</h1>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">PIB por Zonas</h4>
				</div>
				<div class="panel-body">
					<div class="row">
							<div class="col-lg-3">
							<select id="select-anio-pib-zona" onchange="handlePieAndDonutChart();"  class="form-control">
									<option value="" disabled>Seleccione año</option>
									<option value="2007"selected>2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
							</select>	
							</div>
							<div class="col-lg-3">
								<select id="select-tipo-cifra-pib-zona" onchange="handlePieAndDonutChart();" class="form-control">
									<option value="" disabled>Seleccione Tipo de Cifra</option>
									@foreach($tiposCifrasNacionalesPIBZonas as $tiposCifrasNacionalesPIBZonas)

										<option value="{{$tiposCifrasNacionalesPIBZonas->id}}">{{$tiposCifrasNacionalesPIBZonas->nombre_tipo_cifra_nacional}}</option>
									@endforeach
									
							</select>
							</div>
							
					</div>
					<div id="nv-pie-chart" class="height-lg">
						<svg></svg>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Donut Chart</h4>
				</div>
				<div class="panel-body">
					
					<div id="nv-donut-chart" class="height-sm">
						<svg></svg>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
@endsection


@push('scripts')
	<script src="plugins/nvd3/nvd3.min.js"></script>
	<script src="/js/Graficas_Cn_mipro/Cifras_Nacionales_Mipro.js"></script>
	<script>
		$(document).ready(function() {
			ChartNvd3.init();
		});
	</script>
@endpush