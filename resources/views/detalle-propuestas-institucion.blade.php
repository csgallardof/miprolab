@extends('layouts.main')

@section('title', 'Reporte')

@section('start_css')
  @parent
  <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />
@endsection

@section('contenido')

<br><br><br>

		<!-- begin #about -->
		<div class="content row-m-t-2" data-scrollview="true">
				<!-- begin container -->
			<div class="container-fluid" data-animation="true" data-animation-type="fadeInDown">

        <div class="toolbar title_ip_breadcrumb fit-m-b-10">
          <ol class="breadcrumb">
            <li class="home"><a href=""><i class="fa fa-home fa-lg"></i><span></span></a></li>
            <li class="active"><a href="/busquedaAvanzada">Resultados de la B&uacute;squeda</a></li>
            <li class="active"><a href="#">Detalle de la propuesta</a></li>
            <label class='text-success pull-right'>
							<a href="/busquedaAvanzada" class="btn btn-link fit-m-t-1"><i class="fa fa-1x fa-search"></i> Nueva Consulta</a>
						</label>
          </ol>
        </div>

        <br />

				<!-- begin row -->
				<div class="row">
					<!-- begin col-5 -->
					<div class="col-md-3">
						<div class="panel panel-inverse" data-sortable-id="index-6" style="border: #D7DBDD 1px solid; padding: 1%">


                <h5 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Estado de Compromiso:</strong></h5>


									<p style="padding-left:12%" class="m-b-20">
                    <span class="label label-warning f-s-14">
                     En revisión
                    </span>
									</p>

								<h5 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>ObjetivosF</strong></h5>


									<p style="padding-left:12%">
										
									</p>

								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Instrumentos Necesario</strong></h4>
								<p style="padding-left:12%">
										
								</p>

								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Clasificación Empresa</strong></h4>
								<p style="padding-left:12%">
									
								</p>

                <h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Ámbito</strong></h4>
								<p style="padding-left:12%">
									
								</p >

								<h4 class="panel-title alert detalle_evento_info_adicional fade in m-b-15" style="padding: 5px 5px 5px 15px;"><strong>Sector</strong></h4>
								<p style="padding-left:12%">
									
								</p >


						</div>
					</div>
					<!-- end col-5 -->
					<!-- inicio acciones -->
					<div class="col-md-9">

						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading" style="background-color:#214974">
								<h3 class="panel-title" style="color:white">
                  <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseInfoGeneral">
                      <i class="fa fa-plus-circle pull-right"></i>
									    <strong>Informacion General</strong>
                  </a>
								</h3>
							</div>
            <div id="collapseInfoGeneral" class="panel-collapse collapse">

								<div class="panel-body">

									<div class="media-body">
	                                <label class='text-success'>

	                                	<strong>Datos Generales:</strong>
	                                </label>
	                                <div>
	                                	<table id="data-table2" class="table table-striped table-bordered"">

												<tr>
											    <th><label class='text-default'>

				                                	Codigo:

				                                </label></th>
												    <td>
												    	ssss
						                             </td>
											  </tr>
	                                			<tr>
											    <th><label class='text-default'>

				                                	Creado:

				                                </label></th>
												    <td>
												    	sssss
						                             </td>
											  </tr>
											  <tr>

                        
	                                </div>

									<br>
	                                <label class='text-success'>

	                                	<strong>Datos Responsables:</strong>
	                                </label>
                                   	<div>
                                   		<table id="data-table1" class="table table-striped table-bordered">
					                                    <thead>
					                                        <tr>
					                                            <th>Responsable</th>
					                                            <th>Corresponsable</th>

					                                        </tr>
					                                    </thead>
					                                    <tbody>
					                                        <tr class="odd gradeX">
					                                            <td>
					                    

					                                            </td>
					                                            <td>
					                    <dd>
										

										</dd>
					                                            </td>

					                                        </tr>




					                                    </tbody>
					                                </table>
                                   	</div>


									</div>




								</div>
							</div>
						</div>
						
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading" style="background-color:#214974" >
								<h3 class="panel-title" style="color:#17202A">
									<h3 class="panel-title" style="color:#ffffff">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Solución Propuesta</strong>
									</a>
								</h3>
							</div>
							<div id="collapse3" class="panel-collapse collapse in">
								<div class="panel-body">

										  	<h5>
										  		Elaborar informe técnico de estado y problemas de aplicación de RTE INEN

										  	</h5>
								</div>
							</div>
						</div>

						
						<div class="panel panel-inverse  overflow-hidden">
							<div class="panel-heading" style="background-color:#214974" >
								<h3 class="panel-title" style="color:#ffffff">

									 <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
									    <i class="fa fa-plus-circle pull-right"></i>
										<strong>Actividades Registradas</strong>
										</a>

								</h3>
							</div>
							<div id="collapseFive" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="media-body">
										<br>
										
									<label class='text-success'><b>Actividades Resgistradas: </b></label>
									<span class="pull-right" style="font-size: 12px">Ordenado desde la m&aacute;s reciente</span>
									<hr>
									<table id="data-table" class="table table-striped table-bordered" width="100%">
								<thead>

									<th class="text-center">Actividades</th>


								</thead>
								<tbody>
									
						        	<tr>

						        		<td>
						        		<b>Fecha de Inicio: </b>2018-11-09 <br>
						        		<b>Ejecutor: </b> Secretaria de Calidad<br>
										<br>
										<!--ARCHIVOS-->
											Se ejecuta la actividad 1 
											<hr>
											<em> Archivos: </em> <br>

													
														<a target="_blank" href=" ">
															
														</a>

													

											<!--FIN ARCHIVOS-->
						        		</td>

						        	</tr>

						        	<tr>

						        		<td>
						        		<b>Fecha de Inicio: </b>2018-11-09 <br>
						        		<b>Ejecutor: </b> Secretaria de Calidad<br>
										<br>
										<!--ARCHIVOS-->
											Se ejecuta la actividad 2
											<hr>
											<em> Archivos: </em> <br>

													
														<a target="_blank" href=" ">
															
														</a>

													

											<!--FIN ARCHIVOS-->
						        		</td>

						        	</tr>
						       	 	
			     				</tbody>

							</table>
							

								</div>
								</div>
							</div>

						</div>


					</div>



					</div>
					<!-- fin acciones  -->
					</div>



			</div>
		</div>

@endsection

@section('end_js')
  @parent




  <script src="{{ asset('plugins/DataTablesv2/datatables.js') }}"></script>
	<script src="{{ asset('js/table-manage-responsive.demo.js') }}"></script>
	<script src="{{ asset('plugins/scrollMonitor/scrollMonitor.js') }}"></script>
	<script src="{{ asset('js/custom-mipro.js" type="text/javascript') }}"></script>
	<script src="{{ asset('js/apps.js') }}"></script>
	<script src="{{ asset('js/dashboard.js') }}"></script>


@endsection

@section('init_scripts')

  <script>

		$(document).ready(function() {
			App.init();
			TablaCCPTHome.init();
		});

	</script>

  <script>
function goBack() {
    window.history.back();
}
</script>

@endsection
