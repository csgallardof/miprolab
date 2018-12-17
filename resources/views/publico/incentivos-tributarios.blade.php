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
                 <li class="has-sub"><a href="#incentivosgenerales" class="titulo">1. Incentivos Generales </a>
                   <ul class="sub-menu">
                        <li><a href="#impuetoalarenta" class="subtitulo">1.1. Impuesto a la renta</a></li>
                   </ul>
                 </li>
                 <li class="has-sub"><a href="#incentivossectoriales" class="titulo">2. Incentivos Sectoriales</a> </li>
                 <li class="has-sub"><a href="#contacto" class="titulo">3. Contacto</a> </li>
              </ul>
               <!-- Fix Firefox Position Fixed Bottom Problem -->
              <div class="fixed-sidebar-wrapper"></div>

        </div>
      </div>

      <div id="zedes" class="col-sm-9 col-xs-12 p-l-0 p-r-30">


        <div class="site-page-content" >

            <h1 id="incentivosgenerales">Incentivos Tributarios y Arancelarios</h1><hr>

            <h3 id="incentivosgenerales">Incentivos Generales</h3><hr>
            <h4 id="impuetoalarenta">Impuesto a la Renta</h4><hr>
            <ul class="site-page-content-list">
              <li>Exoneración por 10 años en inversiones en sector industrial. (Ampliable 5 años adicionales si la inversión se realiza en cantones fronterizos).</li>
              <li>Exoneración por 12 años y su anticipo para inversiones de nuevas empresas en sectores priorizados y fuera de ciudades principales (Quito y Guayaquil).</li>
              <li>Exoneración por hasta 15 años para industrias básicas. (Siderurgia, Cobre, Aluminio, Astilleros, Celulosa, Petroquímica</li>
              <li>Doble deducción del gasto de depreciación anual por 5 años en inversiones en activos fijos nuevos y productivos para empresas constituidas en cualquier parte del país, antes y después de 2010, que realicen inversiones en sectores priorizados</li>
            </ul>

            <h3 id="incentivossectoriales">Incentivos Sectoriales</h3><hr>

            <ul class="site-page-content-list">
              <li>Exoneración del anticipo al IR por 5 años para toda inversión nueva.</li>
              <li>Doble deducción del gasto de depreciación y amortización que correspondan a la adquisición de activos eco-eficientes</li>
              <li>10% de reducción adicional de la tarifa del IR sobre el monto de utilidades reinvertidas en inversiones en activos fijos nuevos y productivos.</li>
              <li>Diferimiento por hasta 5 años del IR y su anticipo para empresas que transfieran al menos el 20% de sus acciones a sus trabajadores.</li>
              <li>Se excluye del cálculo del anticipo del IR los incrementos por nuevas inversiones que generen nuevo empleo, mejoren salarios, adquieran activos, mejoren productividad o innoven.</li>
              <li>Facilidades de pago en los tributos al comercio exterior desde 6 hasta 24 meses. Únicamente para importaciones de bienes de capital realizadas para incrementar el activo fijo del importador de bienes.</li>
              <li>Para operaciones de financiamiento externo de instituciones financieras o no financieras, por plazo mayor a 1 año:
              </li>
                <ul>
                  <li>No se retiene Impuesto a la Renta (intereses).</li>
                  <li>No se paga Impuesto a la Salida de Divisas (5%)</li>
                  <li>Esto incluye capital como intereses pagados.</li>
                </ul>
              <li>Para inversiones en depósitos a plazo fijo y en instrumentos de renta fija, por plazo mayor a 1 año:</li>
                <ul>
                  <li>No pago de IR sobre ganancias.</li>
                  <li>No pago de Impuesto a la Salida de Divisas (5%) en transferencias al exterior.</li>
                  <li>Esto incluye capital como rendimientos financieros.</li>
                </ul>
              <li>Durante el plazo de 5 años tienen derecho a la deducción del 100% adicional de los gastos incurridos en los siguientes rubros: Capacitación técnica dirigida a la (I+D+i), Gastos en la mejora de la productividad y Gastos de viaje, estadía y promoción comercial para el acceso a mercados internacionales.</li>

            </ul>

            <h3 id="contacto">Contacto</h3><hr>

              <p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>Felipe Alejandro Altamirano Barriga - Coordinador General de Proyectos Estratégicos</p>
              <p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+593-2-3948760 ext. 2460</p>
              <p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><a href="mailto:faltamirano@mipro.gob.ec">faltamirano@mipro.gob.ec</a></p>
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
