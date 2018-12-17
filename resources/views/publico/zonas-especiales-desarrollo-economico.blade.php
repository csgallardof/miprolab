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
                   <li class="has-sub"><a href="#zedes" class="titulo">1. ¿Qué es una ZEDE? </a> </li>
                   <li class="has-sub"><a href="#propositoZede" class="titulo">2. Propósitos de la ZEDE</a> </li>
                   <li class="has-sub"><a href="#integrantesZede" class="titulo">3. ¿Quiénes integran una ZEDE?</a> </li>
                   <li class="has-sub"><a href="#tipologiasZede" class="titulo">4. Tipologías de ZEDE</a>
                      <ul class="sub-menu">
                              <li ><a href="#industrial" class="subtitulo">4.1. Industrial</a></li>
                              <li ><a href="#logistica" class="subtitulo">4.2. Logística</a></li>
                              <li ><a href="#tecnologica" class="subtitulo">4.3. Tecnológica</a></li>
                      </ul>
                   </li>
                   <li class="has-sub"><a href="#incentivosZede" class="titulo">5. ¿Qué incentivos están contemplados?</a>
                     <ul class="sub-menu">
                             <li ><a href="#incentivosZedetributarios" class="subtitulo">5.1. Tributarios</a></li>
                             <li ><a href="#incentivosZedearancelarios" class="subtitulo">5.2. Arancelarios</a></li>
                     </ul>
                   </li>
                   <li class="has-sub"><a href="#zedes-establecidas" class="titulo">6. ZEDE Establecidas</a>
                     <ul class="sub-menu">
                             <li ><a href="#ubicacionzede" class="subtitulo">6.1. Ubicación</a></li>
                             <li ><a href="#estadoactual" class="subtitulo">6.2. Estado Actual</a>
                               <ul class="sub-menu sub-menu-level-3">
                                       <li ><a href="#estadozede" class="subtitulo">6.2.1. ZEDE</a></li>
                                       <li ><a href="#estadozonasfrancas" class="subtitulo">6.2.2. Zonas Francas</a></li>
                               </ul>
                             </li>
                     </ul>
                   </li>
                   <li class="has-sub"><a href="#regulaZede" class="titulo">7. ¿Cómo se regulan las ZEDE en el país?</a> </li>
                   <li class="has-sub"><a href="#procedimientos" class="titulo">8. Procedimientos</a>
                     <ul class="sub-menu">
                             <li ><a href="#declaratoriazede" class="subtitulo">8.1. Solicitud y Declaratoria de ZEDE</a></li>
                             <li ><a href="#autorizacionadministradores" class="subtitulo">8.2. Autorización Administradores</a></li>
                             <li ><a href="#calificacionoperadores" class="subtitulo">8.3. Calificación Operadores</a></li>
                     </ul>
                   </li>
                   <li class="has-sub"><a href="#contacto" class="titulo">9. Contacto</a> </li>
                </ul>
                <!-- Fix Firefox Position Fixed Bottom Problem -->
                <div class="fixed-sidebar-wrapper"></div>
        </div>
      </div>

      <div id="zedes" class="col-sm-9 col-xs-12 p-l-0 p-r-30">


        <div class="site-page-content" >

            <h1>Zonas Especiales de Desarrollo Económico</h1><hr>
            <h3 id="queEsUnazede">¿Qué es una ZEDE?</h3><hr>
            <ul class="site-page-content-list">
              <li>Destino aduanero en espacio delimitado  del territorio nacional para que se asienten nuevas inversiones.<span class="referencia">(Art. 34 COPCI)</span></li>
              <li>Para su ubicación se consideran condiciones como preservación, potencialidad de cada localidad, infraestructura, servicios básicos y otros. <span class="referencia">(Art. 35 del  COPCI)</span></li>
              <li>Orientación exclusiva a la exportación y la sustitución estratégica de importaciones. <span class="referencia"> Art. 36 COPCI</span></li>
              <li>Se otorgan exoneraciones y dispensas tributarias. <span class="referencia"> (Art. 34 COPCI)</span></li>
            </ul>

            <h3 id="propositoZede">Propósitos de la ZEDE<a href="#" title=""></a></h3><hr>

            <p class="site-page-content-paragraph">
                <!-- begin row -->
                  <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-4 col-sm-6">
                      <div class="widget widget-stats bg-blue-darker">
                        <div class="stats-icon"><i class="fa fa-money"></i></div>
                           <p class="site-page-content-paragraph" align="center">Atraer nuevas inversiones</p>
                      </div>
                    </div>
                    <!-- end col-3 -->
                     <!-- begin col-3 -->
                    <div class="col-md-4 col-sm-6">
                      <div class="widget widget-stats bg-blue">
                        <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                          <p class="site-page-content-paragraph" align="center">Sustituir estratégicamente las importaciones</p>
                      </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-4 col-sm-6">
                      <div class="widget widget-stats bg-blue-darker">
                        <div class="stats-icon"><i class="fa fa-bus"></i></div>
                          <p class="site-page-content-paragraph" align="center">Mejorar servicios logísticos y transporte</p>
                      </div>
                    </div>
                    <!-- end col-3 -->
                  </div>
                  <!-- end row -->
                  <!-- begin row -->
                  <div class="row">
                    <div class="col-md-2"></div>
                   <!-- begin col-3 -->
                    <div class="col-md-4 col-sm-6">
                      <div class="widget widget-stats bg-blue">
                        <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                          <p class="site-page-content-paragraph" align="center">Promover y estimular las exportaciones de bienes con mayor valor agregado</p>
                      </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-4 col-sm-6">
                      <div class="widget widget-stats bg-blue-darker">
                        <div class="stats-icon"><i class="fa fa-group"></i></div>
                          <p class="site-page-content-paragraph" align="center">Establecer nuevos polos de desarrollo, generación de empleo y divisas</p>
                      </div>
                    </div>
                    <!-- end col-3 -->
                  </div>
                  <!-- end row -->
            </p>

            <h3 id="integrantesZede">¿Quiénes integran una ZEDE?</h3> <hr>
             <p class="site-page-content-paragraph">
                    <div class="row">
                      <!-- begin #col-md-4 --><!-- end #col-md-4 -->
                      <div class="col-md-4">
                        <div class="panel panel-primary">
                                <div class="panel-heading bg-blue">
                                  <p  class="site-page-content-paragraph" align="center">
                                    ADMINISTRADORES: <br>

                                  </p>
                                </div>
                                <div align="center">
                                   <span class="referencia"> (Art. 41 del COPCI) </span>
                                </div>
                                <div class="panel-body ">
                                    <p class="site-page-content-paragraph" align="center">
                                      Son las personas jurídicas públicas, privadas o mixtas, nacionales o extranjeras, cuya función será desarrollar, administrar y controlar las operaciones en la ZEDE.
                                    </p>
                                </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                          <div class="panel panel-primary">

                              <div class="panel-heading bg-blue-darker">
                                <p  class="site-page-content-paragraph " align="center">
                                  OPERADORES: <br>
                                </p>

                              </div>
                              <div  align="center">
                                 <span class="referencia">(Art. 42 del COPCI)</span>
                              </div>
                              <div class="panel-body ">
                                <p class="site-page-content-paragraph" align="center">
                                  Son las personas naturales o jurídicas, públicas, privadas o mixtas, nacionales o extranjeras, propuestas por la empresa administradora de la ZEDE y calificadas por el CSP, que puedan desarrollar las actividades autorizadas en estas zonas delimitadas del territorio nacional.
                                </p>
                              </div>
                        </div>
                      </div>
                      <!-- end #col-md-4 -->
                      <!-- begin #col-md-4 -->
                      <div class="col-md-4">
                            <div class="panel panel-primary">

                                <div class="panel-heading bg-blue">
                                  <p class="site-page-content-paragraph" align="center">
                                    SERVICIOS DE APOYO:<br>
                                  </p>
                                </div>
                                <div  align="center">
                                    <span class="referencia">(Art. 44 del COPCI)</span>
                                </div>
                                <div class="panel-body ">
                                  <p class="site-page-content-paragraph" align="center">
                                    Toda persona natural o jurídica, nacional o extranjera que desee establecerse en una ZEDE para brindar servicios de apoyo o soporte a los operadores instalados en la zona autorizada. No participan en el proceso productivo, no gozarán de los incentivos de operar en ZEDE.
                                  </p>
                                </div>
                            </div>
                      </div>
                      <!-- end #col-md-4 -->
                    </div>

              </p>

              <h3 id="tipologiasZede">Tipologías de ZEDE</h3> <hr>
                <h4 id="industrial">Industrial</h4> <hr>

                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/industria.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">

                            <p class="site-page-content-paragraph" align="justify">Operaciones de diversificación industrial, Incluye transformación, elaboración y reparación de mercancías de todo tipo de bienes con fines de exportación y de sustitución estratégica de importaciones.</p>
                          </div>
                        </li>

                      </ul>
                  </div>

                <h4 id="logistica">Logística</h4> <hr>

                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/zede-logistica.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">

                            <p class="site-page-content-paragraph" align="justify">Almacenamientos de carga con fines de consolidación, clasificación, etiquetados, entre otros, manejo de puertos secos o terminales interiores de carga, mantenimiento y reparación de naves, aeronaves o vehículos de transporte terrestre de mercadería. Orientados a potenciar instalaciones físicas de puertos, aeropuertos y pasos de fronteras.</p>
                          </div>
                        </li>

                      </ul>
                  </div>


                <h4 id="tecnologica">Tecnológica</h4> <hr>

                  <div class="panel-body">
                      <ul class="media-list">
                        <li class="media media-sm">
                          <a class="media-left" href="javascript:;">
                              <img src="{{ asset('imagenes/ZEDE/tecnologica.jpg') }}" alt="" class="media-object rounded-corner" />
                          </a>
                          <div class="media-body">

                            <p class="site-page-content-paragraph" align="justify">Se realizan todo tipo de emprendimientos y proyectos de desarrollo tecnológico, innovación electrónica, biodiversidad, mejoramiento ambiental sustentable, entre otros.</p>
                          </div>
                        </li>

                      </ul>
                  </div>

                  <h3 id="incentivosZede">¿Qué incentivos están contemplados?</h3><hr>

                  <h4 id="incentivosZedetributarios">Tributarios</h4>
                    <ul class="site-page-content-list">
                        <li>Exoneración de Impuesto a la Renta por 10 años para administradores y operadores.</li>
                        <li>Reducción adicional del 10% en la tarifa de IR por 10 años posteriores a la finalización del período de exoneración.</li>
                        <li>Exoneración del Impuesto a la Salida de Divisas (5%) sobre importaciones financiamiento y pagos de dividendos.</li>
                        <li>Crédito tributario de IVA pagado en compras de materias primas provenientes del territorio nacional.</li>
                    </ul>

                  <h4 id="incentivosZedearancelarios">Reducción de Aranceles</h4>
                    <ul class="site-page-content-list">
                        <li>Exoneración de aranceles en importaciones de mercancías extranjeras que ingresen a dichas zonas, para el cumplimiento de los procesos autorizados.</li>
                        <li>Exoneración de IVA en importaciones de bienes destinados exclusivamente a la zona autorizada.</li>
                        <li>Crédito tributario para insumos que sean de procedencia nacional que ingresen a dichas zonas, para el cumplimiento de los procesos autorizados.</li>
                    </ul>

                    <h5 class="code-site-page">Fuente: Ley de Incentivos para las APP y la Inversión Extranjera</h5>

                    <h3 id="zedes-establecidas">Zedes Establecidas</h3><hr />

                    <h4 id="ubicacionzede">Ubicación</h4>
                    <a href="javascript:;">
                        <img src="{{ asset('imagenes/ZEDE/zedes_establecidas.jpg') }}" alt="" class="img-responsive" width="75%" height="75%" />
                    </a>

                    <h4 id="estadoactual">Estado Actual</h4><hr />
                    <h4 id="estadozede">ZEDE</h4><hr />
                    <table class="table table-striped table-bordered">
                    <thead><tr><th>ZEDE</th><th>Ubicación</th><th>Fecha</th><th>Tipología</th><th>Administrador</th><th>Operador</th><th>Área (ha)</th></tr></thead><tbody>
                     <tr><td>Eloy Alfaro</td><td>Manta, Manabí.</td><td>11/7/2013</td><td>Industrial y Logística.</td><td>Yachay EP</td><td>Refinería del Pacífico</td><td>1.665</td></tr>
                     <tr><td>Yachay</td><td>Urcuquí, Imbabura.</td><td>20-09-2013</td><td>Tecnológica, Industrial y Logística.</td><td>Yachay EP</td><td>Pendiente</td><td>4.27</td></tr>
                     <tr><td>Posorja</td><td>Posorja, Guayaquil, Guayas.</td><td>22-08-2016</td><td>Logística.</td><td>Pendiente</td><td>Pendiente</td><td>127</td></tr>
                     <tr><td>Del Litoral</td><td>Guayaquil, Guayas.</td><td>18-04-2017</td><td>Tecnológica e Industrial.</td><td>Pendiente</td><td>Pendiente</td><td>200</td></tr>
                     <tr><td>Quito</td><td>Tababela, Quito, Pichincha</td><td>5/7/2018</td><td>Industrial y Logística</td><td>Pendiente</td><td>Pendiente</td><td>205</td></tr>
                    </tbody></table>

                    <h4 id="estadozonasfrancas">Zonas Francas</h4><hr />
                    <table class="table table-striped table-bordered">
                    <thead><tr><th>ZONA FRANCA</th><th>AREA    (ha)</th><th>TIPO</th><th>ACTIVIDAD</th><th>AÑO DE VIGENCIA</th><th>UBICACIÓN</th></tr></thead><tbody>
                     <tr><td>ZOFRAPORT</td><td>37.39</td><td>Industrial, Comercial, Servicios</td><td>Exportación de atún</td><td>2023</td><td>Guayaquil, Parroquia Posorja</td></tr>
                     <tr><td>TAGSA</td><td>21.44</td><td>Servicios</td><td>Aeropuerto GYE</td><td>2025</td><td>Guayaquil</td></tr>
                     <tr><td>TURISFRANCA</td><td>146.2</td><td>Turística</td><td>Teleférico Quito</td><td>2025</td><td>Quito</td></tr>
                     <tr><td>EMPSA</td><td>1448</td><td>Servicios</td><td>Aeropuerto UIO</td><td>2025</td><td>Quito, Tababela</td></tr>
                     <tr><td>METROZONA</td><td>14.81</td><td>Industrial, Comercial, Servicios</td><td>Exportación de flores y tecnología</td><td>2019</td><td>Quito, Parroquia Yaruquí</td></tr>
                    </tbody></table>
                    <br />

                    <h3 id="regulaZede">¿Cómo se regulan las ZEDE en el país?</h3> <hr>

                    <p class="site-page-content-paragraph">
                      <div class="row">
                            <!-- begin #col-md-3 -->
                            <div class="col-md-3">
                              <div class="panel panel-primary">
                                      <div class="panel-heading bg-blue-darker">
                                        <p  class="site-page-content-paragraph" align="center">
                                          CONSEJO SECTORIAL ECONÓMICO Y PRODUCTIVO
                                        </p>
                                      </div>

                                      <div class="panel-body ">
                                          <p  class="site-page-content-paragraph" align="center">

                                            1.- Declaratoria de ZEDE
                                          </p>
                                      </div>
                              </div>
                            </div>
                            <!-- end #col-md-4 -->
                             <!-- begin #col-md-1 -->
                             <div class="col-md-1" align="center">
                                        <br><br><br>
                                        <i class="fa fa-3x fa-arrow-right"></i>

                             </div>
                              <!-- end #col-md-1 -->
                            <!-- begin #col-md-3 -->
                            <div class="col-md-3">
                                <div class="panel panel-primary">

                                    <div class="panel-heading bg-blue">
                                      <p  class="site-page-content-paragraph " align="center">
                                        MINISTERIO DE INDUSTRIAS Y PRODUCTIVIDAD (MIPRO) <br>
                                      </p>

                                    </div>

                                    <div class="panel-body ">
                                      <p class="site-page-content-paragraph" align="center">
                                        1.- Autorización de Administrador <br>
                                        2.- Calificación de Operadores

                                      </p>
                                    </div>
                              </div>
                            </div>
                            <!-- end #col-md-3 -->
                            <!-- begin #col-md-1 -->
                             <div class="col-md-1" align="center">
                                        <br><br><br>
                                        <i class="fa fa-3x fa-arrow-right"></i>

                             </div>
                              <!-- end #col-md-1 -->
                            <!-- begin #col-md-3 -->
                            <div class="col-md-3">
                                  <div class="panel panel-primary">

                                      <div class="panel-heading bg-blue-darker">
                                        <p class="site-page-content-paragraph" align="center">
                                          Subsecretaría de Desarrollo Territorial Industrial (MIPRO)<br>
                                        </p>
                                      </div>

                                      <div class="panel-body ">
                                        <p class="site-page-content-paragraph" align="center">
                                          1.- Difusión de normativa y acompañamiento técnico a la parte interesada <br>
                                          2.- Elaboración de informes técnicos <br>
                                          3.- Control operativo de las ZEDE

                                        </p>
                                      </div>
                                  </div>
                            </div>
                            <!-- end #col-md-4 -->
                          </div>
                    </p>

                    <h3 id="procedimientos">Procedimientos</h3><hr>

                    <h4 id="">Solicitud y Declaratoria de ZEDE</h4>
                    <p class="site-page-content-paragraph">Cumplimiento de 9 lineamientos básicos a ser presentados a la Subsecretaría de Desarrollo Territorial Industrial y su aprobación por parte del Consejo Sectorial de la Producción CSP.</p>

                    <h4 id="">Autorización de Administradores</h4>
                    <p class="site-page-content-paragraph">Cumplimiento de 20 requisitos generales, los cuales deben ser presentados al CSP, y evaluados por parte de la unidad técnica del MIPRO.</p>

                    <h4 id="">Calificación de Operadores</h4>
                    <p class="site-page-content-paragraph">Cumplimiento de 17 requisitos generales, los cuales deben ser presentados al CSP, previa postulación por parte del Administrador y evaluación de la unidad técnica del MIPRO.</p>

                    <h3 id="declaratoriazede">Solicitud y Declaratoria de ZEDE</h3><hr>
                    <h4 id="">Cumplimiento de Lineamientos:</h4>
                    <ol class="site-page-content-list">
                      <li>Área Geográfica y Alineación a Políticas Nacionales</li>
                    	<li>Potencialidades del Área</li>
                    	<li>Infraestructura Vial</li>
                    	<li>Servicios básicos</li>
                    	<li>Condiciones medioambientales</li>
                    	<li>Fuentes de inversión</li>
                    	<li>Monto de la inversión</li>
                    	<li>Tipos de proyecto a implementar (Industrial y Logística)</li>
                    	<li>Impacto del proyecto</li>
                    </ol>
                    <h5 class="code-site-page">Fuente: Art. 46 del Reglamento COPCI. Lineamientos para el establecimiento de una ZEDE</h5>

                    <a href="javascript:;">
                        <img src="{{ asset('imagenes/ZEDE/proceso-solicitud-zede.png') }}" alt="" class="img-responsive" width="75%" height="75%" />
                    </a>

                    <h3 id="autorizacionadministradores">Autorización de Administradores</h3><hr>
                    <ol class="site-page-content-list">
                      <li>Solicitud dirigida al CSEP</li>
                      <li>RUC</li>
                      <li>Acreditación del representante legal de empresa</li>
                      <li>Escritura de constitución - Objeto social:  Administración de ZEDE</li>
                      <li>Declaración juramentada de no haber sido concesionario revocado de zona franca</li>
                      <li>Plano de ubicación y de la propiedad</li>
                      <li>Documentos que acrediten capacidad financiera</li>
                      <li>Documentos de soporte que demuestren capacidad operativa</li>
                      <li>Descripción completa del proyecto</li>
                      <li>Descripción de la inversión</li>
                      <li>Certificación monto de capital suscrito y pagado de la empresa (SuperCias)</li>
                      <li>Plazo de autorización solicitado</li>
                      <li>Cronograma de inversión</li>
                      <li>Descripción de edificaciones para administrador y operadores</li>
                      <li>Detalle de la generación de plazas de trabajo por parte del solicitante</li>
                      <li>Descripción de procesos de transferencia tecnológica e innovación</li>
                      <li>Estudio de impacto ambiental y de procesos para lograr eco-eficiencia</li>
                      <li>Detalle de potenciales operadores que podrán ser calificados en la ZEDE</li>
                      <li>Detalle de los potenciales servicios de apoyo que serán provistos en la ZEDE; y,</li>
                      <li>Los demás que establezca el Consejo Sectorial en las distintas regulaciones que emita para el efecto.</li>
                    </ol>
                    <h5 class="code-site-page">Fuente: Art. 47 del Reglamento COPCI. Requisitos para administrador de una ZEDE</h5>

                    <a href="javascript:;">
                        <img src="{{ asset('imagenes/ZEDE/proceso-solicitud-administrador.png') }}" alt="" class="img-responsive" width="75%" height="75%" />
                    </a>

                    <h3 id="calificacionoperadores">Calificación de Operadores</h3><hr>
                    <ol class="site-page-content-list">
                      <li>Solicitud dirigida al CSEP indicando la ZEDE en que operará;</li>
                    	<li>Registro Único de Contribuyentes;</li>
                    	<li>Cédula de ciudadanía (persona natural); pasaporte (persona natural extranjera);</li>
                    	<li>Acreditación del representante legal en caso de ser persona jurídica;</li>
                    	<li>Escritura de constitución para p. jurídicas privadas o con participación de capital privado.</li>
                    	<li>Declaración juramentada de no ser concesionario revocado del régimen de zonas francas;</li>
                    	<li>Compromiso de arrendamiento, o escritura de promesa de compra venta  en ZEDE;</li>
                    	<li>Documentos que acrediten capacidad financiera para implementar plan de negocio;</li>
                    	<li>Determinación de las actividades a desarrollar en la ZEDE;</li>
                    	<li>Descripción de la inversión para la instalación del operador;</li>
                    	<li>Certificación de monto de capital suscrito y pagado de la empresa (SuperCías);</li>
                    	<li>Plazo de calificación solicitado;</li>
                    	<li>Cronograma de inversión, que se ajustará al plazo de calificación requerido;</li>
                    	<li>Descripción de las instalaciones requeridas para el desarrollo de sus actividades;</li>
                    	<li>Detalle del número de plazas de trabajo a ser generadas;</li>
                    	<li>Estudio de impacto ambiental y de procesos para lograr actividades eco-eficientes;</li>
                    	<li>Los demás que establezca el Consejo Sectorial en las regulaciones que dicte para el efecto.</li>
                    </ol>
                    <h5 class="code-site-page">Fuente: Art. 48 del Reglamento COPCI. Requisitos para operadores en una ZEDE</h5>

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
