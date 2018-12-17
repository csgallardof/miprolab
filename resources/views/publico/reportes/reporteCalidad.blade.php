@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  	<link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />


@endsection

@section('contenido')


	<!-- begin row -->
	<div id="about" class="content work" data-scrollview="true">
		<div class="container-fluid" data-animation="true" data-animation-type="fadeInDown">


        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">

            <li class="home"><a href=""><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="">Resultados de la B&uacute;squeda</a></li>

          </ol>
        </div><hr style="margin-top:-10px;">
		<div class="row">
			<div class="col-md-3" style="border: #D7DBDD 1px solid; padding: 1%">

				<form role="form" method="GET" action="">
				<input type="hidden" name="parametro" value="">
				<div class="toolbar title_ip_breadcrumb fit-m-b-10">

		          <ol class="breadcrumb">

		            <li class="home">Filtros</li>
		            <li class="active"><button type="submit" class="btn btn-primary m-l-20 pull-rigth">Aplicar Filtros</button></li>

		          </ol>
		        </div>
				<div class="form-group">
					<div>
				    <label for="sectorSelect">Eje</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
					 	<select class="form-group form-control" id="sectorSelect" name="sectorSelect" >
					 		<option value="0">Seleccionar</option>
					 			<option  value="">Calidad</option>
					 			<option  value="">Mercado</option>
					 			<option  value="">Financiamiento</option>
					 			<option  value="">Innovación</option>
					 			<option  value="">Inversión</option>

						 </select>
    				</div>
    			
			 		<div>

				    <label for="estadoSelect">Estados</label><a style="font-size: 12px;text-decoration:none" href="javascript:history.back(-1);" title="Ir la página anterior" class="pull-right">Quitar Filtro</a><br>
					 	<select class="form-group form-control" id="estadoSelect" name="estadoSelect">
					 		<option value="0">Seleccionar</option>
					 				<option value="">En Analisis</option>
					 				<option value="">En Desarrollo</option>
						 			<option value="">Finalizado</option>
					 	</select>
    				</div>
            	</div>
            	</form>
			</div>
		
			<div class="col-md-9">
				<div class="col-md-9 pull-left">
                    <div class="panel-body text-center p-r-25">

                        <div class="form-group">

                            <!-- <form class="form-horizontal" role="form" method="GET" action="">

                                <div class="input-group custom-search-form">

                                    <input type="text" class="form-control_2" placeholder="Busca todo sobre el diálogo con el sector productivo" name="parametro" value="" required style="font-size: 16px" >
                                    <span class="input-group-btn">
                                        <button class="btn btn-buscar btn-lg" style="background: #348fe2; color: #fff; " type="submit" height="50px">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>

                                </div>

                            </form> -->

                        </div>

                    </div>

			    </div>
			    <!-- inicio propuestas -->
			    <div class="col-md-9">
					<table id="data-table" class="table nowrap" width="100%">
						<thead>
							<th class="text-left f-s-18">EJE CALIDAD</th>
						</thead>
						<tbody>
				        	<tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Establecer reuniones interinstitucionales (MIPRO,SAE,INEN), para determinar hoja de ruta.</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 20%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Analizar el proyecto de reforma a la  ley </font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Socializar el  proyecto de reforma a la ley  a los grupos de interés.</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Analizar y revisar las observaciones por  grupos de interés.</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Revisar y aprobar el proyecto de reforma a la  ley  por parte de las autoridades del ministerio</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Presentar al Comité interministerial el proyecto de reforma de la Ley</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Presentar al Sr. Presidente de la República la propuesta de reforma</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Revisar la Ley del Sistema Ecuatoriano de la Calidad mediante una revisión integral de sus articulados<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Elaborar informe técnico de estado y problemas de aplicación de RTE INEN</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Elaborar informe técnico de estado y problemas de aplicación de RTE INEN</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Emitir  Acuerdo Ministerial de mejora integral de la reglamentación técnica</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font> Iniciar análisis de estado de reglamentos técnicos y definición macro de mejoras estructurales</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Elaborar el cronograma de revisión de RTE en función de las prioridades de los sectores</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Revisar la NTE INEN 1 000, tomando como base de estudio:Decisión de la Comunidad Andina de aciones 827:2018 Acuerdo de Obstáculos Técnicos al Comercio de la Organización Mundial de Comercio Ley de Calidad</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Revisar el procedimiento de elaboración y revisión de RTE</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Mejorar los 143 RTE sujetos a control en la VUE</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Socializar los RTE mejorados a las partes interesadas</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            <tr>
						       	<td class="text-left p-t-15">
									<div class="text-justify">
									<a   class="btn btn-primary pull-right m-b-30 m-l-30" href="detalle-propuesta-eje-calidad">ver</a>

									<p class="total_propuestas_estilo_1"></p>
  									<font>Establecer  Normas que permita a las instituciones públicas evaluar objetivamente la calidad de los productos de la EPS</font><br><br>

  									<font><strong>Objetivo: </strong></font></b> Mejorar la Infraestructura de la Calidad en el pais para generar competitividad <br>
  									<font><strong>Estrategia: </strong></font></b>Seguridad juridica<br>
  									<font><strong>Instrumento: </strong></font></b>Mejorar los RTE  INEN establecidos en el país mediante la no elaboración de nuevos RTE  y mejora integral de la reglamentación técnica existente<br>
  									<font><strong>Responsable: </strong></font>Subsecretaria de Calidad<br><br>
										<div class="progress progress-striped active" style="width:50%">
	                                        <div class="progress-bar progress-bar-primary" style="width: 33%">En Revisión</div>
	                                        <div class="progress-bar progress-bar-info" style="width: 33%">En Desarrollo</div>
	                                        <div class="progress-bar progress-bar-success" style="width: 34%">Finalizado</div>
	                                  	</div>
	                                </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

			    <!-- fin propuestas -->

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
