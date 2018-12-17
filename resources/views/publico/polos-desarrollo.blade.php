@extends('layouts.main')

@section('title', 'Inicio')

@section('start_css')
  @parent
    <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

    <style>
        @media print {

          #costosindustriales * {
            visibility: visible;
          }
          #costosindustriales {
            position: absolute;
            left: 0;
            top: 0;
          }
        }
    </style>

@endsection

@section('contenido')

    <div class="content row main-content header-fix-mobile">

      <div class="col-sm-3 hidden-xs">
          <div class="menu-lateral-general form-group menuVertical">

            <div class="input-group" style="padding-right: 10px;padding-bottom: 10px">
                <input type="text" class="form-control" placeholder="Buscar Menu" id="buscar"/>
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </span>
            </div>

               <ul class="nav menu-contenido-varios" >
                   <li class="has-sub"><a href="#diagnostico" class="titulo">1. Diagnóstico </a>
                    <ul class="sub-menu">
                      <li><a href="#lineamiento" class="subtitulo">1.1. Lineamiento</a></li>
                    </ul>
                    </li>
                   <li class="has-sub"><a href="#porquepolo" class="titulo">2. ¿Por qué polos de desarrollo?</a> </li>
                   <li class="has-sub"><a href="#conseptoytipologia" class="titulo">3. Concepto y tipologías</a>
                   <ul class="sub-menu">
                      <li><a href="#conseptoytipologia" class="subtitulo">3.1. Concepto</a></li>
                      <li><a href="#conseptoytipologia" class="subtitulo">3.2. Tipología</a></li>
                    </ul>
                    </li>
                   <li class="has-sub"><a href="#requisitosybeneficios" class="titulo">4. Requisitos y beneficios</a>
                     <ul class="sub-menu">
                        <li><a href="#requisitosybeneficios" class="subtitulo">4.1. Requisitos</a></li>
                        <li><a href="#requisitosybeneficios" class="subtitulo">4.2. Beneficios</a></li>
                     </ul>
                   </li>
                   <li class="has-sub"><a href="#objetivoimpacto" class="titulo">5. Objetivo e impacto</a>
                     <ul class="sub-menu">
                        <li><a href="#objetivoimpacto" class="subtitulo">5.1. Objetivo</a></li>
                        <li><a href="#objetivoimpacto" class="subtitulo">5.2. Impacto</a></li>
                      </ul>
                    </li>
                    <li class="has-sub"><a href="#contacto" class="titulo">6. Contacto</a> </li>
                </ul>

                <!-- Share Social Network -->
                <h5 class="titulo-sidebar-pagina-noticias m-b-15"  style="background-color:#154360;color:#FDFEFE" ><strong>Contacto</strong></h5>

                <a href=""><button type="button" class="btn btn-fb"><i class="fa fa-facebook pr-1"></i> Facebook</button></a><br /><br />
                <a href=""><button type="button" class="btn btn-tw"><i class="fa fa-twitter pr-1"></i> Twitter</button></a><br /><br />
                <a href=""><button type="button" class="btn btn-li"><i class="fa fa-linkedin pr-1"></i> Linkedin</button></a><br /><br />
                <a href=""><button type="button" class="btn btn-gplus"><i class="fa fa-google-plus pr-1"></i> Google +</button></a><br /><br />
                <a href=""><button type="button" class="btn btn-email"><i class="fa fa-envelope pr-1"></i> Email</button></a>
                <!-- Fin Share Social Network -->

                <!-- Fix Firefox Position Fixed Bottom Problem -->
                <div class="fixed-sidebar-wrapper"></div>

        </div>
      </div>

      <div id="zedes" class="col-sm-9 col-xs-12 p-l-0 p-r-30">

        <div class="site-page-content" >

            <h1 id="diagnostico">Polos de desarrollo</h1><hr>

            <a href="javascript:;" >
                <img src="{{ asset('imagenes/ZEDE/nivel-de-asociatividad.png') }}" align="center" alt="" class="img-responsive" width="75%" height="75%" />
            </a>

            <h3 id="lineamiento">Lineamientos</h3><hr>
            <ul class="site-page-content-list">
              <li>Enfoque  a cadenas con potencial competitivo sostenible, e impacto efectivo en los desafíos socioeconómicos del país</li>
              <li>Impulsar cadenas priorizadas con incentivos;  y defensas temporales solo en casos específicos</li>
              <li>Acelerar la industrialización a través de polos de desarrollo productivo</li>
              <li>Maximizar el beneficio pleno de la industrialización – producción,  innovación, exportación y encadenamiento</li>
              <li>Atraer inversión privada y favorecer el desarrollo del empresariado nacional</li>
            </ul>

            <h3 id="porquepolo">¿Por qué polos de desarrollo?</h3><hr>

             <p class="site-page-content-paragraph" align="justify">Almacenamientos de carga con fines de consolidación, clasificación, etiquetados, entre otros, manejo de puertos secos o terminales interiores de carga, mantenimiento y reparación de naves, aeronaves o vehículos de transporte terrestre de mercadería. Orientados a potenciar instalaciones físicas de puertos, aeropuertos y pasos de fronteras.</p>

            <p class="site-page-content-paragraph">
                    <div class="row">
                      <!-- begin #col-md-4 --><!-- end #col-md-4 -->
                      <div class="col-md-4">
                        <div class="panel panel-primary">
                                <div class="panel-heading bg-blue">
                                  <p  class="site-page-content-paragraph" align="center">
                                    INFRAESTRUCTURA:
                                  </p>
                                </div>

                                <div class="panel-body ">
                                    <ul class="site-page-content-list">
                                      <li>Eficiencia logística</li>
                                      <li>Concentración de conocimiento</li>
                                      <li>Eficiencia energética</li>
                                    </ul>
                                </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                          <div class="panel panel-primary">

                              <div class="panel-heading bg-blue-darker">
                                <p  class="site-page-content-paragraph " align="center">
                                  POLÍTICAS VIABILIZADORAS: <br>
                                </p>

                              </div>
                              <div class="panel-body ">
                                <ul class="site-page-content-list">
                                  <li>Enfoque en áreas delimitadas en sectores priorizados</li>
                                  <li>Mayor facilidad y rapidez de implementación</li>
                                  <li>Fomento a educación y generación de capital humano</li>
                                </ul>
                              </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                            <div class="panel panel-primary">

                                <div class="panel-heading bg-blue">
                                  <p class="site-page-content-paragraph" align="center">
                                    ENCADENAMIENTO:<br>
                                  </p>
                                </div>

                                <div class="panel-body ">
                                  <ul class="site-page-content-list">
                                    <li>Cercanía geográfica optimiza y promueve interacción industrial y productiva</li>
                                  </ul>
                                </div>
                            </div>
                      </div>
                      <!-- end #col-md-4 -->
                    </div>

              </p>

            <h3 id="conseptoytipologia">Concepto y tipologías</h3> <hr>
             <h4 id="conseptoytipologia">Concepto</h4> <hr>

               <p class="site-page-content-paragraph" align="justify">Operaciones de diversificación industrial, Incluye transformación, elaboración y reparación de mercancías de todo tipo de bienes con fines de exportación y de sustitución estratégica de importaciones.</p>


              <h4 id="conseptoytipologia">Tipología</h4> <hr>

               <ul class="site-page-content-list">
                <li>Enfoque  a cadenas con potencial competitivo sostenible, e impacto efectivo en los desafíos socioeconómicos del país</li>
                <li>Impulsar cadenas priorizadas con incentivos;  y defensas temporales solo en casos específicos</li>
                <li>Acelerar la industrialización a través de polos de desarrollo productivo</li>
                <li>Maximizar el beneficio pleno de la industrialización – producción,  innovación, exportación y encadenamiento</li>
                <li>Atraer inversión privada y favorecer el desarrollo del empresariado nacional</li>
              </ul>

            <h3 id="requisitosybeneficios">Requisitos y Beneficios</h3> <hr>
             <h4 id="requisitosybeneficios">Requisitos</h4> <hr>

               <ul class="site-page-content-list">
                <li>Zonificación, ordenamiento territorial y uso de suelo</li>
                <li>Vocación y potencialidad productiva</li>
                <li>Incentivos tributarios y no tributarios</li>

              </ul>

              <hr>
              <h4 id="requisitosybeneficios">Beneficios</h4> <hr>

               <ul class="site-page-content-list">
                <li>Inclusión económica y social</li>
                <li>Encadenamientos productivos</li>
                <li>Participación de la comunidad local</li>
                <li>Ordenamiento territorial</li>
                <li>Atracción de divisas, distribución de riqueza</li>
                <li>Generación de fuentes de empleo</li>

              </ul>

            <h3 id="objetivoimpacto">Objetivo e impacto</h3> <hr>
             <h4 id="objetivoimpacto">Objetivo</h4> <hr>

                <p class="site-page-content-paragraph" align="justify">Operaciones de diversificación industrial, Incluye transformación, elaboración y reparación de mercancías de todo tipo de bienes con fines de exportación y de sustitución estratégica de importaciones.</p>


              <hr>
              <h4 id="objetivoimpacto">Impacto</h4> <hr>

               <ul class="site-page-content-list">
                <li>Regiones productivas y competitivas</li>
                <li>Erradicación de la pobreza y la marginación</li>
                <li>Reducción de las asimetrías productivas y competitivas</li>
                <li>Acceso a nuevos mercados</li>
                <li>Mejoramiento de la competitividad local y territorial</li>

              </ul>

              <h3 id="contacto">Contacto</h3><hr>

                <p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>Ricardo Zambrano - Subsecretario de Desarrollo Territorial Industrial</p>
                <p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+593-2-3948760 ext. 2274</p>
                <p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><a href="mailto:rzambrano@mipro.gob.ec">rzambrano@mipro.gob.ec</a></p>
                <p><span class="glyphicon glyphicon-globe one" style="width:50px;"></span><a href="https://www.industrias.gob.ec/">https://www.industrias.gob.ec</a></p>



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
  <script src="{{ asset('js/custom-mipro.js' ) }}"></script>
  <script src="{{ asset('js/apps.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Animacion_Enlaces-Internos/animacion_enlaces_internos.js') }}"></script>
  <script src="{{ asset('js/BuscadorMenu/buscadorMenu.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

@endsection

@section('init_scripts')

@endsection
