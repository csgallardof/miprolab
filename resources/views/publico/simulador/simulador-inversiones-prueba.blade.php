@extends('layouts.main-simulador')

@section('title', 'Inicio')



@section('contenido')

    

<!-- begin #page-container -->
    
      
      
      <!-- begin #content -->
      <div id="content" class="content">
        
        <!-- begin page-header -->
        <h1 class="page-header">Simulador de inversiones</small></h1>
        <!-- end page-header -->
        
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">

              <form  method="POST" action="" enctype="multipart/form-data">
                    {{ csrf_field() }}


                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-4">
                            <label>¿Qué tipo de empresa pertence?</label>
                              <select class="form-control" name="tipo_empresa">
                                  <option value="">Seleccionar el tipo de empresa</option>
                                  <option value="nueva">  Empresa Nueva </option>
                                  <option value="constituida">  Empresa Constituida </option>
                                  <option value="asociacion">  Asociación  </option>
                                  <option value="consorcio">  Consorcio   </option>
                              </select>

                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-4">
                            <label>¿A qué sector pertenece?</label>
                           <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                  <option value="">Seleccionar el sector</option>
                                  <option value="sec01">  Agrícola, alimentos frescos, congelados y procesados  </option>
                                  <option value="sec02">  Audiovisuales </option>
                                  <option value="sec03">  Cadena forestal y bienes procesados, agroindustrial y asociativo  </option>
                                  <option value="sec04">  Cinematografía  </option>
                                  <option value="sec05">  Construcción y reparación de embarcaciones  </option>
                                  <option value="sec06">  Cuero y calzado </option>
                                  <option value="sec07">  Electrodomésticos   </option>
                                  <option value="sec08">  Energía renovable y Servicios de eficiencia energética  </option>
                                  <option value="sec09">  Exportación de servicios y eventos internacionales  </option>
                                  <option value="sec10">  Farmacéutico y Biotecnología  </option>
                                  <option value="sec11">  Fundición y refinación de cobre y/o aluminio  </option>
                                  <option value="sec12">  Industria de celulosa </option>
                                  <option value="sec13">  Industria petroquímica  </option>
                                  <option value="sec14">  Jabón, detergente, perfumería y preparaciones cosméticas  </option>
                                  <option value="sec15">  Línea gris (radios, TV’s, etc.) </option>
                                  <option value="sec16">  Materiales y Tecnología de Construcción sustentables  </option>
                                  <option value="sec17">  Metalmecánica </option>
                                  <option value="sec18">  Pesticidas y productos para agricultura </option>
                                  <option value="sec19">  Petroquimica, Oleoquímica e Industrial  </option>
                                  <option value="sec20">  Producción de acero plano </option>
                                  <option value="sec21">  Producción de clínker   </option>
                                  <option value="sec22">  Productos cerámicos </option>
                                  <option value="sec23">  Químicos básico y elaborados  </option>
                                  <option value="sec24">  Refinación de hidrocarburos </option>
                                  <option value="sec25">  Seguridad informática, Software aplicado y hardware tecnológico   </option>
                                  <option value="sec26">  Servicios logísticos para comercio internacional  </option>
                                  <option value="sec27">  Textiles  </option>
                                  <option value="sec28">  Turismo </option>
                                </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-4">
                            <label for="tema">¿Lugar donde se va a establecer?</label>
                            <select id="select-provincia" onchange="getSelectValue();" name="select-provincia" class="form-control selectpicker" data-size="10" data-live-search="true" required="Seleccione una opcion" data-style="btn-primary">
                            <option value="" selected>Seleccionar Provincia</option>
                              @foreach($provincias as $provincias)
                              <option value="{{$provincias['id']}}">{{$provincias['nombre_provincia']}}</option>
                             @endforeach
                            </select>
                            
                          </div>
                          <div class="col-md-4">
                             <label for="fuente">Cantón</label>
                             <select  id="select-canto" class="form-control" name="select_canton"  data-size="10" required="" data-live-search="true" data-style="btn-inverse">
                                <option value="" >Seleccione Cantón</option>
                              </select>
                          </div>

                        </div>

                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                            <label for="lugar">¿Cuál es su monto estimado para  inversión ?</label><br>
                            <label class="radio p-l-30 p-t-20">
                              <input type="radio" name="optionsRadios" value="option1"/>
                                Hasta USD 1 milLón
                            </label>
                            <label class="radio p-l-30 p-t-20">
                                <input type="radio" name="optionsRadios" value="option2" />
                                De  USD 1  millon a USD 10  millon
                            </label>
                            <label class="radio p-l-30 p-t-20">
                                <input type="radio" name="optionsRadios" value="option3" />
                                Más de USD 10 millones
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                            <label for="lugar">¿Su mercado objetivo es primordialmente ?</label><br>
                            <label class="radio p-l-30 p-t-20">
                              <input type="radio" name="optionsRadios" value="option1" checked />
                                Mercado Local
                            </label>
                            <label class="radio p-l-30 p-t-20">
                                <input type="radio" name="optionsRadios" value="option2" />
                                Exportaciones
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                            <label for="lugar">Los productos y/o bienes a ser desarrollados buscan una reducción de importaciones nacionales?</label>
                            <label class="radio p-l-30 p-t-20">
                              <input type="radio" name="optionsRadios" value="option1" checked />
                                SI
                            </label>
                            <label class="radio p-l-30 p-t-20">
                                <input type="radio" name="optionsRadios" value="option2" />
                                NO
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                            <label for="lugar">Incluye un tipo de asociatividad con el sector público (APP)</label>
                            <label class="radio p-l-30 p-t-20">
                              <input type="radio" name="optionsRadios" value="option1" checked />
                                SI
                            </label>
                            <label class="radio p-l-30 p-t-20">
                                <input type="radio" name="optionsRadios" value="option2" />
                                NO definida
                            </label>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-lg btn-block pull-left">Mostrar los incentivos</button>


                      </div>
                  </form>
              
            </div>
            
            <!-- end row -->
      </div>
      <!-- end #content -->
      
         
      
      <!-- begin scroll to top btn -->
      <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
      <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    



@endsection


