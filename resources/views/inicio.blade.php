@extends('layouts.main')

@section('title', 'Home')



@section('start_css')
  @parent
  <link href="plugins/nvd3/nv.d3.min.css" rel="stylesheet" />
@endsection

@section('start_js')
  @parent
@endsection

@section('contenido')

        <!-- begin #about -->
        <div id="home-miprolab" class="img-responsive background-home content row-m-t-3 p-t-40" data-scrollview="true">

            <!-- begin container -->
            <!-- <div class="container p-t-25" data-animation="true" data-animation-type="fadeInDown">

                <div class="col-md-12 p-t-25 home_main_web_title_image">
                    <div class="panel-body">
                        <img src="{{ asset('imagenes/miprolab/mipro-lab-inicio.png') }}" class="center-block img-responsive" alt="">
                    </div>
                </div>
 -->
                <!-- <div class="panel-body text-center home_main_web_title">

                          <div class="row">
                              <div class="col-xs-8 col-xs-offset-2">
                                  <form method="GET" action="{{ route('nuevaBusquedaInteligencia') }}" id="searchForm" class="search-home input-group">
                                      <div class="input-group-btn search-panel hidden-xs">
                                          <select name="selectBusqueda" id="tipo_dialogo" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                              <option value="no">Filtrar por tipo de diálogo</option>

                                              <option value="0">Todas las Mesas</option>
                                              <option value="2">Consejo Consultivo</option>
                                              <option value="1">Mesas De Competitividad</option>

                                          </select>
                                      </div>
                                      <input id="buscar_general" type="text" class="form-control" name="parametro" placeholder="Buscar información sobre propuestas y pedidos del diálogo nacional">
                                      <span class="input-group-btn">
                                          <button id="btn_buscar" class="btn btn-default" type="submit">
                                             <text class="hidden-xs">Buscar</text><i class="fa fa-2x fa-search visible-xs"></i>
                                          </button>
                                      </span>
                                  </form>
                              </div>
                          </div>

                  <p style="margin-top: 10px" class="text-white">Ejemplo: Costos de energía electrica, Promoción turística, Consejo Consultivo, Innovaci&oacute;n.</p>
                </div> -->

          <!-- </div> -->
        </div>

        <!-- begin #team -->
        <div id="que-es-miprolab" class="p-t-60 content" data-scrollview="true">

            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <div class="row">
                    <div class="col-12 text-left p-t-40"><h2>¿Qué es MiproLab?</h2></div>
                    <div class="col-12 text-justify">
                      <p class="p-t-10">Es un sitio de incubación de ideas que brinda un servicio integral y de apoyo a los emprendedores innovadores, desde sus etapas de desarrollo hasta su expansión o internacionalización. Este espacio acreditado por la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (Senescyt), brinda apoyo y fomenta emprendimientos con alto componente de innovación productiva.<br>

                      <p class="p-t-10">Los procesos de capacitación que imparte el MIPROLab buscan desarrollar las habilidades emprendedoras y empresariales de la ciudadanía, y cuentan con certificaciones por parte de la Secretaría Técnica de Capacidades (SETEC), institución que avala y garantiza la calidad en las formaciones.Esta incubadora, se caracteriza por la articulación y fomento de un ecosistema de emprendimiento, asistiendo técnicamente a todas las instituciones públicas y privadas que brinden atención a los emprendedores a nivel nacional.<br>

                      <p class="p-t-10">De acuerdo a datos de la Senescyt, en Ecuador existen 17 incubadoras acreditas, incluido el MIPROLab, y otras 11 instituciones están en proceso de acreditación.
                    </div>
                      
                </div>

                <div class="row p-t-40">

                  <div class="col-sm-2 col-xs-1">
                      <div class="container2 text-center">
                      </div>
                  </div>
                  

                  <div class="col-sm-2">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> SERVICIOS</a>
                      </div>
                  </div>
                  <div class="col-sm-2">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> ACTIVIDADES</a>
                      </div>
                  </div>
                  <div class="col-sm-2">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> PROGRAMAS</a>
                      </div>
                  </div>
                  <div class="col-sm-2">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> GALERIA</a>
                      </div>
                  </div>
                  <div class="col-sm-1 col-xs-1">
                      <div class="container2 text-center">
                      </div>
                  </div>
                </div>
                <div class="row p-t-40">
                  <div class="col-sm-2 col-xs-1">
                      <div class="container2 text-center">
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> INCUBADORAS<br> ACREDITADAS</a>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> PREGUNTAS <br>FRECUENTES</a>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="container2 text-center">
                        <a href="#" class="btn btn-success btn-lg m-r-7"><i class="fa fa-comment"></i> CONTACTOS<br>&nbsp;</a>
                      </div>
                  </div>
                  <div class="col-sm-1 col-xs-1">
                      <div class="container2 text-center">
                      </div>
                  </div>
                  
                </div>
            </div>
        </div>

        


@endsection

@section('end_js')
  @parent

  <script src="{{ asset('js/Graficas_Cn_mipro/Cifras_Nacionales_Mipro-inicio.js') }}"></script>
  <script src="{{ asset('plugins/nvd3/nvd3.min.js') }}"></script>

  <script src="{{ asset('js/apps.min.js')}}"></script>
  <script src="{{ asset('js/ui-modal-notification.demo.js') }}"></script>

@endsection

@section('init_scripts')

  <script>

      $(document).ready(function() {

          Notification.init();
          ChartNvd3.init();

          // Fix nvd3 issue repeated tooltip on some charts
          $("div.mipro-nv-chart")
          .mouseleave(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) {
              $(this).hide();
              if (v == 1) $(this).prev().remove();
            });
          })
          .mouseenter(function() {
            var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
            tooltips_elements.each(function (i, v) { $(this).show(); });
          });
          // End Fix nvd3 issue repeated tooltip on some charts

      });

      $(window).on('load', function () {
       $('iframe[id^=twitter-widget-0]').each(function () {
         var head = $(this).contents().find('head');
         //$(this).css("background-color", "white");
         $(this).append('<style>#twitter-widget-0 {height: 500px !important;}</style>');
         if (head.length) {
           setTimeout(function(){
             head.append('<style>'+
      '.timeline{max-width:100% !important;width:100% !important;}'+
      '.timeline .stream{max-width:none!important;width:100%!important;}'+
      '.timeline-Widget{max-width:100%!important;}'+
      '.timeline-Tweet-media {display:none!important;}'+
      '.SandboxRoot.env-bp-430 .timeline-Tweet-text{font-size:12px; line-height: 13px; } ' +
      '.SandboxRoot.env-bp-550 .timeline-Tweet-text{font-size:12px; line-height: 13px; } ' +
      '.SandboxRoot.env-bp-660 .timeline-Tweet-text{font-size:13px; line-height: 15px; } ' +
      '.SandboxRoot.env-bp-820 .timeline-Tweet-text{font-size:14px; line-height: 18px; } ' +
      '.SandboxRoot.env-bp-970 .timeline-Tweet-text{font-size:15px; line-height: 21px; } ' +
      '.MediaCard-media {max-width:500px;} </style>');}, 20);
         }
       });
      });

</script>

@endsection
