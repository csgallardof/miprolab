
@extends('layouts.main')

@section('start_css')
  @parent
  <link href="plugins/nvd3/nv.d3.min.css" rel="stylesheet" /> 
@endsection

@section('start_js')
  @parent
@endsection

@section('contenido')
<br><br><br><br><br><br>

	<!-- begin row -->
	<div class="row">
		<div class="col-lg-1">
			
		</div>
		<!-- begin col-6 -->
		<div class="col-lg-10">
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
							
					<br><br>

					<div id="chart" class="height-lg" >
						<svg></svg>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		
	</div>
	<!-- end row -->
	

	<!-- Beging row -->
	<div class="row">
		<div class="col-lg-1">
			
		</div>
	<!-- begin col-6 -->
		<div class="col-lg-10">
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
					<div class="row">
							<div class="col-lg-3">
							<select id="select-anio-pib-provincias" onchange="handleBarChart();"  class="form-control">
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
								<select id="select-tipo-cifra-nacional-pib-provincia" onchange="handleBarChart();" class="form-control">
									<option value="" disabled>Seleccione Tipo de Cifra</option>
									@foreach($tiposCifrasNacionalesPIBProvincia as $tiposCifrasNacionalesPIBProvincia)
										<option value="{{$tiposCifrasNacionalesPIBProvincia->id}}">{{$tiposCifrasNacionalesPIBProvincia->nombre_tipo_cifra_nacional}}</option>
									@endforeach
									
							</select>
							</div>
							
					</div>
					<br><br>
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
		<div class="col-md-1"> 
		</div>
		<!-- begin col-6 -->
		<div class="col-lg-10">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">PIB por Zona </h4>
				</div>
				<div class="panel-body">
					<div class="row">
							
							<div class="col-lg-3">
								<select id="select-tipo-cifra-pib-zona1" onchange="handleStackedAreaChart()" class="form-control">
									<option value="" disabled>Seleccione Tipo de Cifra</option>
									@foreach($tiposCifrasNacionalesPIBZonas1 as $tiposCifrasNacionalesPIBZonas1)

										<option value="{{$tiposCifrasNacionalesPIBZonas1->id}}">{{$tiposCifrasNacionalesPIBZonas1->nombre_tipo_cifra_nacional}}</option>
									@endforeach
									
							</select>
							</div>
							
					</div>
					<br><br>
					<div id="nv-stacked-area-chart" class="height-lg">
						<svg></svg>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
	</div>
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