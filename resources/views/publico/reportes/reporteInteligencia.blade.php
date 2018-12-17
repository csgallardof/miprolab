@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  	<link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />


@endsection

@section('contenido')

<br><br><br><br>
	<!-- begin row -->
	<div id="about" class="content work" data-scrollview="true">
		<div class="container-fluid" data-animation="true" data-animation-type="fadeInDown">


        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">

            <li class="home"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="{{ url('/busquedaAvanzada') }}">Resultados de la B&uacute;squeda</a></li>

          </ol>
        </div><hr style="margin-top:-10px;">
		<div class="row">
			<div class="col-md-3" style="border: #D7DBDD 1px solid; padding: 1%">

				<form role="form" method="GET" action="{{ route('nuevaBusquedaInteligencia') }}">
				<input type="hidden" name="parametro" value="{{ Request::get('parametro')}}">
				<div class="toolbar title_ip_breadcrumb fit-m-b-10">

		          <ol class="breadcrumb">

		            <li class="home">Filtros</li>
		            <li class="active"><button type="submit" class="btn btn-primary m-l-20 pull-rigth">Aplicar Filtros</button></li>

		          </ol>
		        </div>
					<div class="form-group">
						<?php $arraySectors[] = array(); ?>

						 		<div >

							    <label for="sectorSelect">Sector</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
								 	<select class="form-group form-control" id="sectorSelect" name="sectorSelect" >
								 		<option value="0">Seleccionar </option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->sector->id , $arraySectors) )
								 				@if($datosFiltroSector!="")
									 			@if($solucion->sector->id=$datosFiltroSector)
									 			<option  value="{{ $solucion->sector->id}}" selected>{{ $solucion->sector->nombre_sector }}</option>
									 			@endif
									 			@else
									 			<option  value="{{ $solucion->sector->id}}">{{ $solucion->sector->nombre_sector }}</option>
									 			@endif


									 			<?php array_push( $arraySectors, $solucion->sector->id ); $datosFiltroSector="";?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<?php $arrayEstados[] = array(); ?>

						 		<div >

							    <label for="estadoSelect">Estados</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
								 	<select class="form-group form-control" id="estadoSelect" name="estadoSelect">
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->estado->id , $arrayEstados) )
								 				@if($datosFiltroEstado!="")
								 				@if($solucion->estado->id==$datosFiltroEstado)
									 			<option value="{{ $solucion->estado->id}}" selected>{{ $solucion->estado->nombre_estado }}</option>
									 			@endif
									 			@else
									 			<option value="{{ $solucion->estado->id}}">{{ $solucion->estado->nombre_estado }}</option>
									 			@endif
									 			<?php array_push( $arrayEstados, $solucion->estado->id );?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<?php $arrayAmbits[] = array(); ?>

						 		<div >

							    <label for="ambitoSelect">Ambito</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
								 	<select class="form-group form-control" id="ambitoSelect" name="ambitoSelect">
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( !in_array( $solucion->ambit->id , $arrayAmbits) )
								 				@if($datosFiltroAmbito!="")
								 				@if($solucion->ambit->id==$datosFiltroAmbito)
									 			<option value="{{ $solucion->ambit->id}}" selected>{{ $solucion->ambit->nombre_ambit }}</option>
									 			@endif
									 			@else
									 			<option value="{{ $solucion->ambit->id}}">{{ $solucion->ambit->nombre_ambit }}</option>
									 			@endif
									 			<?php array_push( $arrayAmbits, $solucion->ambit->id);  ?>
									 		@endif
								 		@endforeach
								 	</select>
                				</div>
                				<div >
								 	<?php $arrayResponsables[] = array(); ?>
								 	<label for="sectorSelect">Responsable</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
								 	<select class="form-group form-control" id="responsableSelect" name="responsableSelect" >
								 		<option value="0">Seleccionar</option>
								 		@foreach( $resultados as $solucion)
								 			@if( count($solucion->actor_solucion) > 0 )
						                		@foreach( $solucion->actor_solucion as $actorSolucion)
						                			@if( $actorSolucion->tipo_actor == 1 )
						                				@if( !in_array( $actorSolucion-> usuario-> id , $arrayResponsables) )
						                				@if($datosFiltroResponsable!="")
						                				@if($actorSolucion-> usuario-> id==$datosFiltroResponsable)
						                					<option value="{{ $actorSolucion-> usuario-> id}}" selected>{{ $actorSolucion-> usuario-> name}}</option>
						                				@endif
						                				@else
						                				<option value="{{ $actorSolucion-> usuario-> id}}">{{ $actorSolucion-> usuario-> name}}</option>
						                				@endif
						                					<?php array_push( $arrayResponsables, $actorSolucion->usuario->id ); ?>
						                				@endif
						                			@endif
						                		@endforeach
							                @endif
							            @endforeach

								 	</select>
                  			</div>
					</div>
				</form>
			</div>
			<div class="col-md-9">

				<div class="col-md-10 pull-left">

                    <div class="panel-body text-center p-r-25">

                            <div class="form-group">

                                <form class="form-horizontal" role="form" method="GET" action="{{ route('nuevaBusquedaInteligencia') }}">

                                    <div class="input-group custom-search-form">

                                        <input type="text" class="form-control_2" placeholder="Busca todo sobre el diálogo con el sector productivo" name="parametro" value="{{$parametro}}" required style="font-size: 16px" >
                                        <span class="input-group-btn">
                                            <button class="btn btn-buscar btn-lg" style="background: #348fe2; color: #fff; " type="submit" height="50px">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>

                                    </div>

                                </form>

                            </div>

                    </div>

			    </div>

          <div class="col-md-2">
            <div class="panel-body text-center">
              <a href="/descargar/Mesas" class="btn  btn-success btn-lg pull-right"><i class="fa fa-download"></i>&nbsp;Descargar</a>
            </div>
          </div>

					<div class="col-md-12">
					<span class="title_ip_h1">

						<?php $total = 0;
							foreach ($resultados as $solucion){
								$total=$total+1;
							}
						?>
						{{$total}}
					Resultados de la B&uacute;squeda</span>


						{{-- @if(isset($parametro))
							Se muestran los resultados para "
							<a href="/busqueda?parametro={{ Request::get('parametro') }}">
								<b style="color: #00acac; font-size: 16px">{{ $parametro }}</b>
							</a>
							"
						@endif --}}

                <br><br>

          			</div>


                <?php

                    // Calculo de Resultados Totales

    	    					$totalMesasCom=0;
    	            			$totalCCTP=0;
    	            			$estadoAsignado1=0;
    				            $estadoDesarrollo1=0;
                        $estadoFinalizado1=0;
    				            $estadoAsignado2=0;
    				            $estadoDesarrollo2=0;
                        $estadoFinalizado2=0;
    	                     foreach($resultados as $solucion ) {

                            if($solucion->tipo_fuente==1) {
    	                        $totalMesasCom=$totalMesasCom+1;
    	                        if($solucion->estado_id==1) {
      	                    	    $estadoAsignado1=$estadoAsignado1+1;
      	                    	} elseif($solucion->estado_id==3) {
      	                    	    $estadoDesarrollo1=$estadoDesarrollo1+1;
                              } elseif($solucion->estado_id==4) {
      	                    	    $estadoFinalizado1=$estadoFinalizado1+1;
      	                    	}
    	                    	} else {
    	                        $totalCCTP=$totalCCTP+1;
    	                        if($solucion->estado_id==1) {
    	                    	$estadoAsignado2=$estadoAsignado2+1;
    	                    	}elseif($solucion->estado_id==3){
    	                    	$estadoDesarrollo2=$estadoDesarrollo2+1;
                            }elseif($solucion->estado_id==4){
    	                    	$estadoFinalizado2=$estadoFinalizado2+1;
    	                    	}
    	                        }
    	                    }
    	                    $totalPropuesta=$totalMesasCom+$totalCCTP;
    	                    $totalEstadoAsignado=$estadoAsignado1+$estadoAsignado2;
    	                    $totalEstadoDesarrollo=$estadoDesarrollo1+$estadoDesarrollo2;
                          $totalEstadoFinalizado=$estadoFinalizado1+$estadoFinalizado2;
    	    				?>

					<!-- inicio cuadrados de resultados-->
					<br><br>
					<!-- <div class="col-md-12"> <br> -->
						<!-- begin col-3 -->
				<!-- <div class="col-md-4 col-sm-6">
					<div class="widget widget-stats" style="background-color:#214974; color:white;">
						<div class="stats-info">
              <b class="f-s-19">{{$totalPropuesta}}</b><b class="f-s-15">&nbsp;&nbsp;Propuestas Registradas</b>
						</div>
					</div>
				</div> -->
				<!-- end col-3 -->
				<!-- <div class="col-md-4 col-sm-6">
					<div class="widget widget-stats" style="background-color:#214974; color:white;">
						<div class="stats-info">
              <b class="f-s-19">{{$totalEstadoFinalizado}}</b><b class="f-s-15">&nbsp;&nbsp;Propuestas Finalizadas</b>
						</div>
					</div>
				</div> -->
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<!-- <div class="col-md-4 col-sm-6">
					<div class="widget widget-stats" style="background-color:#214974; color:white;">
						<div class="stats-info">
							<b class="f-s-19">{{$totalEstadoDesarrollo}}</b><b class="f-s-15">&nbsp;&nbsp;Propuestas en Desarrollo</b>
						</div>
					</div>
				</div> -->
				<!-- end col-3 -->
					<!-- </div> -->
					<!-- Final cuadrados -->

				<!-- Inicio col-8 tabla -->
					<div class="col-md-12">

						@if(isset($resultados))
							<table id="data-table" class="table nowrap" width="100%">
								<thead>
									<th class="text-left f-s-18">Propuestas Encontradas</th>

                  <!-- revisar funcion laravel str_limit -->

								</thead>
								<tbody>
						        	@foreach( $resultados as $resultados)
						        		<tr>
											@if($resultados->tipo_fuente==1)
							                	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="/detalle-despliegue-dialogo/{{ $resultados->id}}">ver</a>

									<p class="total_propuestas_estilo_1">
  								<span class="total_propuestas_estilo_heading"><?php echo ucfirst(mb_strtolower($resultados->problema_solucion)); ?></span><br>

  								<font><?php echo ucfirst(mb_strtolower($resultados->verbo_solucion." ".$resultados->sujeto_solucion." ".$resultados->complemento_solucion)) ?></font><br>

  								<b><font >Fuente: </font></b>Mesas de Competitividad<br>

  								<font ><strong>Responsable: </strong>{{$resultados->responsable_solucion}}</font><br>


								@if($resultados->estado_id>=1)
								<div class="progress progress-striped active " style="width:50%">
                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
                                        @if($resultados->estado_id>=3)
                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
                                        @if($resultados->estado_id==4)
                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
                                        @endif
                                        @endif

                                  </div>
                                @endif

							</p>

							</div>

							                	</td>
							                @endif
							                @if($resultados->tipo_fuente==2)
							                	<td class="text-left p-t-15">


							<div class="text-justify">
							<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="/detalle-despliegue-dialogo/{{$resultados->id}}">ver</a>
							<p>

                <!-- {{$resultados->problema_solucion}}<br /> -->
                <!-- {{$solucion->ambit->nombre_ambit}}<br /> -->

                <?php $complemento = str_limit($resultados->complemento_solucion, 400); ?>

                <span class="total_propuestas_estilo_heading"><?php echo ucfirst(mb_strtolower($complemento)) ?></span><br>
                <font><?php echo ucfirst(mb_strtolower($resultados->sujeto_solucion)) ?></font><br>
                <!-- <font><?php echo ucfirst(mb_strtolower($resultados->problema_solucion)) ?></font><br> -->


                <b><font >Fuente: </font></b>Consejo Consultivo Productivo y Tributario<br>
								<font ><strong>Responsable: </strong>{{$resultados->responsable_solucion}}</font><br>

                                @if($resultados->estado_id>=1)
								<div class="progress progress-striped active" style="width:50%">
                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
                                        @if($resultados->estado_id>=3)
                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
                                        @if($resultados->estado_id==4)
                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
                                        @endif
                                        @endif

                                  </div>
                                @endif

							</p>

							</div>

							                	</td>
							                @endif



							            </tr>
						            @endforeach
			     				</tbody>
							</table>
						@endif

						<!-- Fin Contenido -->
					</div>
					<!-- end col-8 tabla -->

			</div>

        </div>

		</div>

	</div>

@endsection

@section('end_js')
  @parent

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
	<script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
	<script src="{{ asset('plugins/scrollMonitor/scrollMonitor.js') }}"></script>
	<script src="{{ asset('js/custom-mipro.js" type="text/javascript') }}"></script>
	<script src="{{ asset('js/apps.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script language="javascript">

	$("#select_eje,#select_cadena").change(function() {
	  var eje = $("#select_eje").val();
	  var cadena = $("#select_cadena").val();
	  baseUrl = window.location.href.split("?")[0];
	  if (eje != 0) baseUrl += ( baseUrl.indexOf('?') >= 0 ? '&' : '?' ) + "eje=" + eje;
	  if (cadena != 0) baseUrl += ( baseUrl.indexOf('?') >= 0 ? '&' : '?' ) + "cadena=" + cadena;
	  window.location.href = baseUrl;
	});

	</script>


	<script>

		$(document).ready(function() {
			App.init();
			TablaCCPTHomelistado.init();
		});

	</script>

	<script type="text/javascript">

		function ordenarSelect(id_componente)
	    {
	      var selectToSort = jQuery('#' + id_componente);
	      var optionActual = selectToSort.val();
	      selectToSort.html(selectToSort.children('option').sort(function (a, b) {
	        return a.text === b.text ? 0 : a.text < b.text ? -1 : 1;
	      })).val(optionActual);
	    }
	    $(document).ready(function () {
	      ordenarSelect('sectorSelect');
	    });

	</script>


@endsection
