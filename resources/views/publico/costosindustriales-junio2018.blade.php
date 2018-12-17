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
                <input type="text" class="form-control input-buscar-sidebar-news" placeholder="Buscar Menu" id="buscar"/>
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </span>
            </div>

               <ul class="nav menu-contenido-varios">
                   <li class="has-sub"><a href="#costosparaelsectorindustrial" class="titulo">1. Costos para el Sector Industrial en el Ecuador </a> </li>
                   <li class="has-sub"><a href="#materialesConstruccion" class="titulo">2. Precios del mercado - Materiales de Construcción</a> </li>
                   <li class="has-sub"><a href="#aguaPotable" class="titulo">3. Agua Potable</a></li>
                   <li class="has-sub"><a href="#materiasPrimas" class="titulo">4. Materias Primas</a></li>
                   <li class="has-sub"><a href="#salarioMinimo" class="titulo">5. Salario Mínimo</a></li>
                   <li class="has-sub"><a href="#indicePrecioConsuminor" class="titulo">6. Índice de Precios al consumidor</a></li>
                   <li class="has-sub"><a href="#indicePrecioConsuminor" class="titulo">7. Índice de Precios de la Construcción</a></li>
                   <li class="has-sub"><a href="#comercioTransfronterizo" class="titulo">8. Comercio Transfronterizo</a>
                            <ul class="sub-menu">
                              <li ><a href="#costoTiempoExportar" class="subtitulo">8.1. Costos y tiempo para exportar (2018)</a></li>
                              <li ><a href="#costoTiempoImportar" class="subtitulo">8.2. Costos y tiempo para importar (2018)</a></li>
                              <li ><a href="#aperturaNegocio" class="subtitulo">8.3. Apertura de Negocio (2018)</a></li>
                              <li ><a href="#manejoPermisosContruccion" class="subtitulo">8.4. Manejo de permisos de construcción (2018)</a></li>
                              <li ><a href="#registroPropiedad" class="subtitulo">8.5. Registro de Propiedad (2018)</a></li>
                              <li ><a href="#pagoImpuestos" class="subtitulo">8.6. Pago de Impuestos (2018)</a></li>
                              <li ><a href="#cumplimientoContratos" class="subtitulo">8.7. Cumplimiento de Contratos (2018)</a></li>
                              <li ><a href="#resolucionInsolvencias" class="subtitulo">8.8. Resolución de insolvencias (2018)</a></li>
                            </ul>
                   </li>
                   <li class="has-sub"><a href="#combustibles" class="titulo">9. Combustibles</a>
                            <ul class="sub-menu">
                              <li ><a href="#sectorIndustrial" class="subtitulo">9.1. Sector Industrial (Julio 2018)</a></li>
                              <li ><a href="#transCargaPesadaInternacional" class="subtitulo">9.2. Trans Carga Pesada Internacional (Julio 2018)</a></li>
                              <li ><a href="#sectorusoparticular" class="subtitulo">9.3. Sector Uso Particular y Pesca DEP (Julio 2018)</a></li>
                            </ul>
                  </li>
                   <li class="has-sub"><a href="#energiaElectricaIndustrial" class="titulo">10. Energía Eléctrica Industrial</a></li>
                   <li class="has-sub"><a href="#energiaElectricaComercial" class="titulo">11. Energía Eléctrica Comercial</a></li>
                   <li class="has-sub"><a href="#energiaElectricaResidencial" class="titulo">12. Energía Eléctrica Residencial</a></li>
                   <li class="has-sub"><a href="#contacto" class="titulo">13. Contacto</a> </li>
                </ul>
                <!-- Fix Firefox Position Fixed Bottom Problem -->
                <div class="fixed-sidebar-wrapper"></div>
        </div>
      </div>

      <div id="costosindustriales" class="col-sm-9 col-xs-12 p-l-0 p-r-40">

            <div class="panel-titulo-custom-page" >
                <div class="btn-group pull-right">
                  <a href="{{ asset('archivos/costos_de_produccion_en_el_ecuador_junio_2018.xlsx') }}" class="btn btn-primary btn-sm">Descargar</a>
                </div>
                <h1 id="costosparaelsectorindustrial">Costos para el Sector Industrial en el Ecuador - Junio 2018</h1>
            </div>

            <!-- Tabla 12 size -->
            <div class="row">
              <div class="panel-custom-tables-2 col-md-12 col-xs-12" align="center">
                <div class="panel custom-constos-panel-properties panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title" id="materialesConstruccion">Precios del mercado - Materiales de Construcción</h4>
                    </div>
                    <div class="panel-body panel-general-tabla-basica">
                      <table class="tablasgenerales table table-striped table-bordered">
                        <thead><th></th><th>Unidad de medida</th><th>30 junio 2018*</th></thead>
                        <tbody>
                         <tr><td>Cemento Selva Alegre</td><td>50kg</td><td>8.11</td></tr>
                         <tr><td>Arena cribada hormigón</td><td>m3</td><td>20.20</td></tr>
                         <tr><td>Bloque pesado </td><td>15x20x40 (u)</td><td>0.45</td></tr>
                         <tr><td>Pingos de eucalipto</td><td>4 a 7m  x 0.30m</td><td>0.98</td></tr>
                         <tr><td>Encofrado losa metálico</td><td>m2</td><td>3.37</td></tr>
                         <tr><td>Varilla sismoresistente</td><td>10 mm</td><td>7.56</td></tr>
                         <tr><td>Varilla sismoresistente</td><td>12 mm</td><td>10.87</td></tr>
                         <tr><td>Varilla sismoresistente</td><td>14 mm</td><td>14.79</td></tr>
                         <tr><td>Perfil Omega (Acero)</td><td>35x50x20x2</td><td>18.80</td></tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="panel-footer text-right">
                      <div class="h5" style="text-align: justify;">
                        <div><span><strong>Fuente:&nbsp;</strong></span>Cámara de la Construcción, ANDEC</div>
                        <div><em>*Expresado en USD</em></div>
                      </div>
                    </div>
                </div>
              </div>
           </div>
           <!-- Fin Tabla 12 size -->

            <!-- Tablas 6 size -->
           <div class="row">
             <div class="panel custom-constos-panel-properties panel-inverse panel-custom-tables-3">
             <div class="panel-heading">
                 <h4 class=" text-center panel-title" id="aguaPotable">Agua Potable</h4>
             </div>
             <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
               <div class="panel custom-constos-panel-properties panel-inverse">
                   <div class="panel-heading">
                       <h4 class="panel-title">Consumo Doméstico</h4>
                   </div>
                   <div class="panel-body panel-general-tabla-basica">
                     <table class="tablasgenerales table table-striped table-bordered">

                       <thead><th></th><th>T. Básico  </th><th>T. Adicional</th></thead>
                       <tbody>
                        <tr><td>0 - 11 m3</td><td>0</td><td>0.31</td></tr>
                        <tr><td>12 - 18 m3</td><td>3.41</td><td>0.43</td></tr>
                        <tr><td>Mayor que 18 m3</td><td>6.42</td><td>0.72</td></tr>
                       </tbody>

                     </table>
                   </div>
               </div>
             </div>
             <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
               <div class="panel custom-constos-panel-properties panel-inverse">
                   <div class="panel-heading">
                       <h4 class="panel-title">Consumo Industrial</h4>
                   </div>
                   <div class="panel-body panel-general-tabla-basica">
                     <table class="tablasgenerales table table-striped table-bordered">

                       <thead><th></th><th>Tarifa Única</th></thead>
                       <tbody>
                        <tr><td>Tarifa USD/m3</td><td>0.72</td></tr>
                       </tbody>

                     </table>
                   </div>
               </div>
             </div>
             <div class="col-md-12 col-xs-12 panel-footer text-right">
               <div class="h5" style="text-align: justify;">
                 <div><span><strong>Fuente:&nbsp;</strong></span>EPMAPS</div>
                 <div><em>Expresado en USD</em></div>
               </div>
             </div>
           </div>
          </div>
          <!-- Fin Tablas 6 size -->

           <!-- Tabla 12 size -->
          <div class="row">
            <div class="panel-custom-tables-2 col-sm-12 col-xs-12" align="center">
              <div class="panel custom-constos-panel-properties panel-inverse">
                  <div class="panel-heading">
                      <h4 class="panel-title" id="materiasPrimas">Materias Primas</h4>
                  </div>
                  <div class="panel-body panel-general-tabla-basica">
                    <table class="tablasgenerales table table-striped table-bordered">

                      <thead><th></th><th>Unidad de medida</th><th>31 mayo 2018*</th><th>30 junio 2018*</th><th>Variación</th></thead>
                      <tbody>
                       <tr><td>Petróleo</td><td>Barril</td><td>70.10</td><td>67.50</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-3.7%</td></tr>
                       <tr><td>Oro</td><td>Onza</td><td>1303.61</td><td>1282.27</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-1.6%</td></tr>
                       <tr><td>Plata</td><td>Onza</td><td>16.47</td><td>16.52</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.3%</td></tr>
                       <tr><td>Cobre</td><td>Libra</td><td>309.43</td><td>315.46</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>1.9%</td></tr>
                       <tr><td>Maíz</td><td>Tonelada</td><td>174.68</td><td>179.33</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>2.7%</td></tr>
                       <tr><td>Banano</td><td>Caja (43 lb)</td><td>6.20</td><td>6.20</td><td><span class="arrow-color-amarillo"><i class="fa fa-arrow-right"></i></span>0.0%</td></tr>
                       <tr><td>Trigo</td><td>Tonelada</td><td>240.25</td><td>249.60</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>3.9%</td></tr>
                       <tr><td>Cacao</td><td>Tonelada</td><td>1872.00</td><td>1726.14</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-7.8%</td></tr>
                      </tbody>

                    </table>
                  </div>
                  <div class="panel-footer text-right">
                    <div class="h5" style="text-align: justify;">
                      <div><span><strong>Fuente:&nbsp;</strong></span>BCE, FAO, PORTAL MINERO, ICCO</div>
                      <div><em>*Expresado en USD</em></div>
                    </div>
                  </div>
              </div>
            </div>
         </div>
         <!-- Fin Tabla 12 size -->

         <!-- Tablas 6 size No Second Headings -->
         <div class="row">
           <div class="panel custom-constos-panel-properties panel-inverse panel-custom-tables-3">
           <div class="panel-heading">
               <h4 class=" text-center panel-title" id="salarioMinimo">Salario Mínimo</h4>
           </div>
           <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
             <div class="panel custom-constos-panel-properties panel-inverse">
                 <div class="panel-body panel-general-tabla-basica">
                   <table class="tablasgenerales table table-striped table-bordered">

                     <thead><th>País</th><th>2018</th></thead><tbody>
                      <tr><td>Panamá</td><td>744</td></tr>
                      <tr><td>Argentina</td><td>513</td></tr>
                      <tr><td>Costa Rica</td><td>512</td></tr>
                      <tr><td>Uruguay</td><td>431</td></tr>
                      <tr><td>Chile</td><td>413</td></tr>
                      <tr><td>Ecuador</td><td>386</td></tr>
                      <tr><td>Guatemala</td><td>380</td></tr>
                      <tr><td>Paraguay</td><td>368</td></tr>
                      <tr><td>Honduras</td><td>341</td></tr>
                     </tbody>

                   </table>
                 </div>
             </div>
           </div>
           <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
             <div class="panel custom-constos-panel-properties panel-inverse">
                 <div class="panel-body panel-general-tabla-basica">
                   <table class="tablasgenerales table table-striped table-bordered">

                     <thead><th>País</th><th>2018</th></thead><tbody>
                      <tr><td>El Salvador</td><td>300</td></tr>
                      <tr><td>Brasil</td><td>295</td></tr>
                      <tr><td>Bolivia</td><td>289</td></tr>
                      <tr><td>República Dominicana</td><td>288</td></tr>
                      <tr><td>Colombia</td><td>282</td></tr>
                      <tr><td>Perú</td><td>263</td></tr>
                      <tr><td>Venezuela</td><td>238</td></tr>
                      <tr><td>México</td><td>141</td></tr>
                      <tr><td>Nicaragua</td><td>115</td></tr>
                     </tbody></table>

                   </table>
                 </div>
             </div>
           </div>
           <div class="col-md-12 col-xs-12 panel-footer text-right">
             <div class="h5" style="text-align: justify;">
               <div><span><strong>Fuente:&nbsp;</strong></span>Banco Mundial</div>
               <div><em>Expresado en USD</em></div>
             </div>
           </div>
         </div>
        </div>
        <!-- Fin Tablas 6 size No Second Headings -->

        <!-- Tablas 6 size Two Main Headings -->
        <div class="row">
          <div class="panel custom-constos-panel-properties panel-inverse panel-custom-tables-4">
          <div class="col-md-6 col-xs-12" align="center">
            <div class="panel custom-constos-panel-properties panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title" id="indicePrecioConsuminor">Índice de Precios al consumidor</h4>
                </div>
                <div class="panel-body panel-general-tabla-basica">
                  <table class="tablasgenerales table table-striped table-bordered">

                    <thead><th></th><th>IPC</th><th>Variación mensual*</th><th>Variación anual*</th></tr></thead><tbody>
                     <tr><td>Jan-17</td><td>105.30</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.1</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.9</td></tr>
                     <tr><td>Feb-17</td><td>105.51</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>1.0</td></tr>
                     <tr><td>Mar-17</td><td>105.66</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.1</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>1.0</td></tr>
                     <tr><td>Apr-17</td><td>106.12</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.4</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>1.1</td></tr>
                     <tr><td>May-17</td><td>106.17</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.0</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>1.1</td></tr>
                     <tr><td>Jun-17</td><td>105.55</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.6</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td></tr>
                     <tr><td>Jan-18</td><td>105.20</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.1</td></tr>
                     <tr><td>Feb-18</td><td>105.37</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.1</td></tr>
                     <tr><td>Mar-18</td><td>105.43</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.1</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.2</td></tr>
                     <tr><td>Apr-18</td><td>105.29</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.1</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.8</td></tr>
                     <tr><td>May-18</td><td>105.09</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-1.0</td></tr>
                     <tr><td>Jun-18</td><td>104.81</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.3</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.7</td></tr>
                    </tbody>

                  </table>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12" align="center">
            <div class="panel custom-constos-panel-properties panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title" id="indicePrecioConstruccion">Índice de Precios de la Construcción</h4>
                </div>
                <div class="panel-body panel-general-tabla-basica">
                  <table class="tablasgenerales table table-striped table-bordered">

                    <thead><th></th><th>IPC</th><th>Variación mensual*</th><th>Variación anual*</th></tr></thead>
                    <tbody>
                     <tr><td>Jan-17</td><td>235.14</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-3.4</td></tr>
                     <tr><td>Feb-17</td><td>236.95</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.8</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-2.0</td></tr>
                     <tr><td>Mar-17</td><td>237.43</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-1.6</td></tr>
                     <tr><td>Apr-17</td><td>236.70</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.3</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td></tr>
                     <tr><td>May-17</td><td>235.04</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.7</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.4</td></tr>
                     <tr><td>Jan-18</td><td>236.02</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.4</td></tr>
                     <tr><td>Feb-18</td><td>236.42</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.2</td></tr>
                     <tr><td>Mar-18</td><td>236.88</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.2</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.2</td></tr>
                     <tr><td>Apr-18</td><td>236.99</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.0</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.1</td></tr>
                     <tr><td>May-18</td><td>236,79**</td><td><span class="arrow-color-rojo"><i class="fa fa-arrow-down"></i></span>-0.1</td><td><span class="arrow-color-verde"><i class="fa fa-arrow-up"></i></span>0.7</td></tr>
                    </tbody>

                  </table>
                </div>
            </div>
          </div>
          <div class="col-md-12 col-xs-12 panel-footer text-right">
            <div class="h5" style="text-align: justify;">
              <div><span><strong>Fuente:&nbsp;</strong></span>INEC</div>
              <div><em>*Valor Provisional</em></div>
              <div><em>**Variación porcentual</em></div>
            </div>
          </div>
        </div>
       </div>
       <!-- Fin Tablas 6 size Two Main Headings -->
       <!-- Tablas 6 size -->
       <div class="row">
         <div class="panel custom-constos-panel-properties panel-inverse panel-custom-tables-3">
         <div class="panel-heading">
             <h4 class=" text-center panel-title" id="comercioTransfronterizo">Comercio Transfronterizo</h4>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="costoTiempoExportar">Costos y tiempo para exportar (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><th></th><th>Ecuador </th><th>América Latina </th></thead>
                   <tbody>
                    <tr><td>Cumplimiento fronterizo  (Hrs)</td><td>96</td><td>62.5</td></tr>
                    <tr><td>Cumplimiento fronterizo (USD)</td><td>560</td><td>526.5</td></tr>
                    <tr><td>Cumplimiento documental (Hrs)</td><td>24</td><td>53.3</td></tr>
                    <tr><td>Cumplimiento documental (USD) </td><td>140</td><td>110.4</td></tr>
                   </tbody>

                 </table>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="costoTiempoImportar">Costos y tiempo para importar (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><th></th><th>Ecuador </th><th>América Latina</th></thead>
                   <tbody>
                    <tr><td>Cumplimiento fronterizo (Hrs) </td><td>24</td><td>64.4</td></tr>
                    <tr><td>Cumplimiento fronterizo (USD)</td><td>250</td><td>684</td></tr>
                    <tr><td>Cumplimiento documental (Hrs) </td><td>120</td><td>79.9</td></tr>
                    <tr><td>Cumplimiento documental (USD) </td><td>75</td><td>119.5</td></tr>
                   </tbody>

                 </table>
               </div>
           </div>
         </div>
         <div class="col-md-12 col-xs-12 panel-footer text-right">
           <div class="h5" style="text-align: justify;">
             <div><em><strong>Cumplimiento documental:</strong>&nbsp;Incluyen el tiempo y el costo de la obtención, preparación, procesamiento y presentación de documentos</em></div>
             <div><em><strong>Cumplimiento transfronterizo:</strong>&nbsp;Incluyen el tiempo y costo para la obtención, preparación y presentación de documentos durante el manejo en puertos o fronteras, el despacho de aduanas y los procedimientos de inspección.</em></div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="aperturaNegocio">Apertura de Negocio (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina</th></tr></thead>
                   <tbody>
                    <tr><td>Procedimientos - Hombres (Nro.) </td><td>11</td><td>8.4</td></tr>
                    <tr><td>Costo - Hombres (% PIB per cápita) </td><td>21.9</td><td>37.5</td></tr>
                   </tbody>

                 </table>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="manejoPermisosContruccion">Manejo de permisos de construcción (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina </th></tr></thead>
                   <tbody>
                    <tr><td>Procedimientos (Nro.) </td><td>17</td><td>15.7</td></tr>
                    <tr><td>Tiempo (días) </td><td>132</td><td>191.8</td></tr>
                    <tr><td>Costo (% de ingreso per cápita)</td><td>1.9</td><td>3.2</td></tr>
                   </tbody>

                 </table>
               </div>
               <div class="col-md-12 col-xs-12 panel-footer text-right panel-footer-p">
                 <div class="h5" style="text-align: justify;">
                   <div><p>Mide los procedimientos, tiempo y costo necesarios para construir un nuevo almacén incluyendo la obtención de licencias y permisos aplicables; presentación de las notificaciones necesarias; solicitud y recepción de las inspecciones requeridas; y obtención de conexiones a servicios de agua y drenaje.</p></div>
                 </div>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="registroPropiedad">Registro de Propiedad (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina</th></tr></thead>
                   <tbody>
                    <tr><td>Procedimientos (Nro.)</td><td>8</td><td>7.2</td></tr>
                    <tr><td>Tiempo (días) </td><td>38</td><td>63.3</td></tr>
                    <tr><td>Costo (% del valor de propiedad)</td><td>2.1</td><td>5.8</td></tr>
                   </tbody>

                 </table>
               </div>
               <div class="col-md-12 col-xs-12 panel-footer text-right panel-footer-p">
                 <div class="h5" style="text-align: justify;">
                   <div><p>Examina los procedimientos, el tiempo y el costo necesarios para el registro de propiedades, de acuerdo con un caso estandarizado en el que un empresario desea adquirir un terreno y un edificio que ya están registrados y libres de deudas o pleitos.</p></div>
                 </div>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="pagoImpuestos">Pago de impuestos (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina</th></tr></thead>
                   <tbody>
                    <tr><td>Pagos impuestos (# por año) </td><td>10</td><td>28</td></tr>
                    <tr><td>Tiempo (horas por año) </td><td>666</td><td>332.1</td></tr>
                    <tr><td>Tasa de impuestos y contribuciones total (% de ganancia) </td><td>32.5</td><td>46.6</td></tr>
                   </tbody>

                 </table>
               </div>
               <div class="col-md-12 col-xs-12 panel-footer text-right panel-footer-p">
                 <div class="h5" style="text-align: justify;">
                   <div><p> Analiza los impuestos y contribuciones obligatorias que una mediana empresa debe abonar o retener en un ejercicio determinado, y mide también la carga administrativa que supone el pago de impuestos y los procesos posteriores a la declaración.</p></div>
                 </div>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="cumplimientoContratos">Cumplimiento de contratos (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina</th></tr></thead>
                   <tbody>
                    <tr><td>Tiempo (días) </td><td>523</td><td>767.1</td></tr>
                    <tr><td>Costo (% de cantidad demandada) </td><td>27.2</td><td>31.4</td></tr>
                   </tbody>

                 </table>
               </div>
               <div class="col-md-12 col-xs-12 panel-footer text-right panel-footer-p">
                 <div class="h5" style="text-align: justify;">
                   <div><p>Cumplimiento de contratos mide el tiempo y el costo para resolver una disputa comercial a través de un tribunal de primera instancia local. </p></div>
                 </div>
               </div>
           </div>
         </div>
         <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
           <div class="panel custom-constos-panel-properties panel-inverse">
               <div class="panel-heading">
                   <h4 class="panel-title" id="resolucionInsolvencias">Resolución de insolvencias (2018)</h4>
               </div>
               <div class="panel-body panel-general-tabla-basica">
                 <table class="tablasgenerales table table-striped table-bordered">

                   <thead><tr class=""><th></th><th>Ecuador</th><th>América Latina</th></tr></thead>
                   <tbody>
                    <tr><td>Tasa de recuperación (¢ USD) </td><td>17.4</td><td>30.8</td></tr>
                    <tr><td>Tiempo (años) </td><td>5.3</td><td>2.9</td></tr>
                    <tr><td>Costo (% del patrimonio) </td><td>18</td><td>16.8</td></tr>
                   </tbody>

                 </table>
               </div>
               <div class="col-md-12 col-xs-12 panel-footer text-right panel-footer-p">
                 <div class="h5" style="text-align: justify;">
                   <div><p>Identifica los puntos débiles de las legislaciones sobre insolvencia y los principales cuellos de botella procedimentales y administrativos en los procesos de insolvencia.</p></div>
                 </div>
               </div>
           </div>
         </div>
         <div class="col-md-12 col-xs-12 panel-footer text-right">
           <div class="h5" style="text-align: justify;">
             <div><span><strong>Fuente:&nbsp;</strong></span>Banco Mundial</div>
           </div>
         </div>
       </div>
      </div>
      <!-- Fin Tablas 6 size -->
       <!-- Tablas 6 size No Second Headings -->
      <div class="row">
        <div class="panel custom-constos-panel-properties panel-inverse panel-custom-tables-3">
        <div class="panel-heading">
            <h4 class=" text-center panel-title" id="combustibles" >Combustibles</h4>
        </div>
        <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
          <div class="panel custom-constos-panel-properties panel-inverse">
              <div class="panel-heading">
                  <h4 class="panel-title" id="sectorIndustrial">SECTOR INDUSTRIAL (Julio 2018)</h4>
              </div>
              <div class="panel-body panel-general-tabla-basica">
                <table class="tablasgenerales table table-striped table-bordered">

                  <thead><tr class=""><th>Producto</th><th>Unidad </th><th>Precio*</th></tr></thead>
                  <tbody>
                   <tr><td>Diésel 1 Industrial</td><td>Galones</td><td>2.25 </td></tr>
                   <tr><td>Diésel 2  Industrial</td><td>Galones</td><td>2.25 </td></tr>
                   <tr><td>Diésel Premium Industrial</td><td>Galones</td><td>2.45 </td></tr>
                   <tr><td>Extra Industrial</td><td>Galones</td><td>2.44 </td></tr>
                   <tr><td>Extra Con Etanol Industrial</td><td>Galones</td><td>2.47 </td></tr>
                   <tr><td>Súper Industrial</td><td>Galones</td><td>2.52 </td></tr>
                   <tr><td>Fuel Oil No. 6 Industrial</td><td>Galones</td><td>1.11 </td></tr>
                   <tr><td>Fuel Oil Liviano</td><td>Galones</td><td>1.05 </td></tr>
                   <tr><td>Gas  (Glp) Industrial</td><td>Kilogramos</td><td>0.80 </td></tr>
                   <tr><td>Residuo Cementero</td><td>Galones</td><td>0.93 </td></tr>
                   <tr><td>Residuo Industrial</td><td>Galones</td><td>0.93 </td></tr>
                  </tbody>

                </table>
              </div>
          </div>
        </div>
        <div class="panel-custom-tables-1 col-md-6 col-xs-12" align="center">
          <div class="panel custom-constos-panel-properties panel-inverse">
              <div class="panel-heading">
                  <h4 class="panel-title" id="transCargaPesadaInternacional">TRANS.CARGA PESADA INTERNACIONAL (Julio 2018)</h4>
              </div>
              <div class="panel-body panel-general-tabla-basica">
                <table class="tablasgenerales table table-striped table-bordered">

                  <thead><tr class=""><th>Producto</th><th>Unidad </th><th>Precio*</th></tr></thead>
                  <tbody>
                   <tr><td>Diésel carga internacional</td><td>Galones</td><td>3.81</td></tr>
                  </tbody>

                </table>
              </div>
              <div class="panel-heading">
                  <h4 id="sectorusoparticular" class="panel-title">SECTOR USO PARTICULAR Y PESCA DEP. (Julio 2018)</h4>
              </div>
              <div class="panel-body panel-general-tabla-basica">
                <table class="tablasgenerales table table-striped table-bordered">

                  <thead><tr class=""><th>Producto</th><th>Unidad </th><th>Precio*</th></tr></thead>
                  <tbody>
                   <tr><td>Diésel Premium Automotriz</td><td>Galones</td><td>0.90</td></tr>
                   <tr><td>Diésel Premium Tr. Público</td><td>Galones</td><td>0.90</td></tr>
                   <tr><td>Gasolina Extra Automotriz</td><td>Galones</td><td>1.31</td></tr>
                   <tr><td>Gasolina Súper Automotriz</td><td>Galones</td><td>1.68</td></tr>
                   <tr><td>Asfalto Indust. No Obra Pub.</td><td>Kilogramos</td><td>0.34</td></tr>
                   <tr><td>Asfalto Indust. Obra Pública</td><td>Kilogramos</td><td>0.30</td></tr>
                  </tbody>

                </table>
              </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 panel-footer text-right">
          <div class="h5" style="text-align: justify;">
            <div><span><strong>Fuente:&nbsp;</strong></span>EP Petroecuador. Decreto Ejecutivo 338, 352 y 779. </div>
            <div><em>*Precio en terminal, expresado en USD. (Incluye el  12% del I.V.A.) </em></div>
          </div>
        </div>
      </div>
     </div>
     <!-- Fin Tablas 6 size No Second Headings -->

      <!-- Tabla 12 size -->
     <div class="row big-table-div">
       <div class="panel-custom-tables-2 col-md-12 col-xs-12" align="center">
         <div class="panel custom-constos-panel-properties panel-inverse">
             <div class="panel-heading">
                 <h4 class="panel-title" id="energiaElectricaIndustrial">Energía Eléctrica Industrial</h4>
             </div>
             <div class="panel-body panel-general-tabla-basica">
               <table class="big-tablasgenerales tablasgenerales table">

                 <thead>
                   <tr class="big-tablasgenerales-header"><th colspan='3'></th><th colspan='3'>QUITO</th><th colspan='3'>GUAYAQUIL</th></tr>
                   <tr class=""><th>Nivel de tensión</th><th>Categoría</th><th>Rango de consumo</th><th>Demanda<br />(USD/kW-mes)</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th><th>Demanda<br />(USD/kW-mes)</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th></tr>
                 </thead>
                 <tbody>
                    <tr><td>Baja tensión sin demanda</td><td>Industrial Artesanal</td><td>1 a 300</td><td>&nbsp;</td><td>0.062</td><td>1.414</td><td>&nbsp;</td><td>0.064</td><td class="text-center" style="vertical-align: middle;" rowspan="14">CONSUMOS kWh-mes:<br />0-300: 1,414<br />301-500: 2,826<br />501-1000: 4,240<br />> 1000: 7,066</td></tr>
                    <tr><td>Baja tensión sin demanda</td><td>Industrial Artesanal</td><td>Superior</td><td>&nbsp;</td><td>0.094</td><td>1.414</td><td>&nbsp;</td><td>0.100</td> </tr>
                    <tr><td>Baja tensión con demanda</td><td>Industriales</td><td>&nbsp;</td><td>4.182</td><td>0.078</td><td>1.414</td><td>4.055</td><td>0.082</td></tr>
                    <tr><td>Baja tensión con demanda horaria</td><td>Industriales</td><td>07h00 a 22h00</td><td>4.182</td><td>0.063</td><td>1.414</td><td>4.055</td><td>0.067</td> </tr>
                    <tr><td>Baja tensión con demanda horaria</td><td>Industriales</td><td>22h00 a 07h00</td><td>4.182</td><td>0.067</td><td>1.414</td><td>4.055</td><td>0.081</td> </tr>
                    <tr><td>Media tensión con demanda</td><td>Industriales</td><td>&nbsp;</td><td>4.129</td><td>0.081</td><td>1.414</td><td>4.003</td><td>0.075</td> </tr>
                    <tr><td>Media tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 08h00 hasta 18h00</td><td>4.129</td><td>0.0875</td><td>1.414</td><td>4.003</td><td>0.0815</td> </tr>
                    <tr><td>Media tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 18h00 hasta 22h00</td><td>4.129</td><td>0.1015</td><td>1.414</td><td>4.003</td><td>0.0935</td></tr>
                    <tr><td>Media tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 22h00 hasta 08h00</td><td>4.129</td><td>0.0491</td><td>1.414</td><td>4.003</td><td>0.0456</td></tr>
                    <tr><td>Media tensión con demanda horaria diferenciada</td><td>Industriales</td><td>S,D,F 18h00 hasta 22h00</td><td>4.129</td><td>0.0875</td><td>1.414</td><td>4.003</td><td>0.0815</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 08h00 hasta 18h00</td><td>4.053</td><td>0.0805</td><td>1.414</td><td>3.930</td><td>0.0755</td> </tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 18h00 hasta 22h00</td><td>4.053</td><td>0.0925</td><td>1.414</td><td>3.930</td><td>0.0865</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Industriales</td><td>L-V 22h00 hasta 08h00</td><td>4.053</td><td>0.0481</td><td>1.414</td><td>3.930</td><td>0.0446</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Industriales</td><td>S,D,F 18h00 hasta 22h00</td><td>4.053</td><td>0.0805</td><td>1.414</td><td>3.930</td><td>0.0755</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada (Grupo - AT1)</td><td>Industriales</td><td>L-V 08h00 hasta 18h00</td><td>3.940</td><td>0.0678</td><td>7.066</td><td>3.940</td><td>0.0678</td><td>7.066</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada (Grupo - AT1)</td><td>Industriales</td><td>L-V 18h00 hasta 22h00</td><td>3.940</td><td>0.0814</td><td>7.066</td><td>3.940</td><td>0.0814</td><td>7.066</td></tr>
                    <tr><td>Alta tensión con demanda horaria diferenciada (Grupo - AT1)</td><td>Industriales</td><td>L-V 22h00 hasta 08h00</td><td>3.940</td><td>0.0543</td><td>7.066</td><td>3.940</td><td>0.0543</td><td>7.066</td></tr>
                  <tr><td>Alta tensión con demanda horaria diferenciada (Grupo - AT1)</td><td>Industriales</td><td>S,D,F 18h00 hasta 22h00</td><td>3.940</td><td>0.0678</td><td>7.066</td><td>3.940</td><td>0.0678</td><td>7.066</td></tr>

                 </tbody>

               </table>
             </div>
             <div class="panel-footer text-right">
               <div class="h5" style="text-align: justify;">
                 <div><span><strong>Fuente:&nbsp;</strong></span>Pliego tarifario eléctrico ARCONEL</div>
               </div>
             </div>
         </div>
       </div>
    </div>
    <!-- Fin Tabla 12 size -->

    <!-- Tabla 12 size -->
    <div class="row big-table-div">
      <div class="panel-custom-tables-2 col-md-12 col-xs-12" align="center">
        <div class="panel custom-constos-panel-properties panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title" id="energiaElectricaComercial">Energía Eléctrica Comercial</h4>
            </div>
            <div class="panel-body panel-general-tabla-basica">
              <table class="big-tablasgenerales tablasgenerales table">
                <thead>
                  <tr class="big-tablasgenerales-header"><th colspan='3'></th><th colspan='3'>QUITO</th><th colspan='3'>GUAYAQUIL</th></tr>
                  <tr class=""><th>Nivel de tensión</th><th>Categoría</th><th>Rango de consumo</th><th>Demanda<br />(USD/kW-mes)</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th><th>Demanda<br />(USD/kW-mes)</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th></tr>
                </thead>
                <tbody>
                   <tr><td>Baja tensión sin demanda</td><td>Comercial</td><td>Superior</td><td>&nbsp;</td><td>0.104</td><td>1.414</td><td>&nbsp;</td><td>0.110</td><td class="text-center" style="vertical-align: middle;" rowspan="10">CONSUMOS kWh-mes:<br />0-300: 1,414<br />301-500: 2,826<br />501-1000: 4,240<br />> 1000: 7,066</td></tr>
                   <tr><td>Baja tensión con demanda</td><td>Comercial</td><td>&nbsp;</td><td>4.182</td><td>0.088</td><td>1.414</td><td>4.055</td><td>0.092</td></tr>
                   <tr><td>Baja tensión con demanda horaria</td><td>Comercial</td><td>07h00 a 22h00</td><td>4.182</td><td>0.088</td><td>1.414</td><td>4.055</td><td>0.092</td></tr>
                   <tr><td>Baja tensión con demanda horaria</td><td>Comercial</td><td>22h00 a 07h00</td><td>4.182</td><td>0.07</td><td>1.414</td><td>4.055</td><td>0.074</td><td></td></tr><tr><td>Media tensión con demanda</td><td>Comercial</td><td>&nbsp;</td><td>4.129</td><td>0.095</td><td>1.414</td><td>4.003</td><td>0.09</td></tr>
                   <tr><td>Media tensión con demanda horaria diferenciada</td><td>Comercial</td><td>07h00 hasta 22h00</td><td>4.129</td><td>0.095</td><td>1.414</td><td>4.003</td><td>0.09</td><td></td></tr><tr><td>Media tensión con demanda horaria diferenciada</td><td>Comercial</td><td>22h00 a 07h00</td><td>4.129</td><td>0.077</td><td>1.414</td><td>4.003</td><td>0.073</td></tr>
                   <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Comercial</td><td>07h00 hasta 22h00</td><td>4.053</td><td>0.089</td><td>1.414</td><td>3.930</td><td>0.084</td></tr>
                   <tr><td>Alta tensión con demanda horaria diferenciada</td><td>Comercial</td><td>22h00 a 07h00</td><td>4.053</td><td>0.081</td><td>1.414</td><td>3.930</td><td>0.075</td></tr>
                </tbody>
              </table>
            </div>
            <div class="panel-footer text-right">
              <div class="h5" style="text-align: justify;">
                <div><span><strong>Fuente:&nbsp;</strong></span>Pliego tarifario eléctrico ARCONEL</div>
              </div>
            </div>
        </div>
      </div>
   </div>
   <!-- Fin Tabla 12 size -->

      <!-- Tabla 12 size -->
   <div class="row big-table-div">
     <div class="panel-custom-tables-2 col-md-12 col-xs-12" align="center">
       <div class="panel custom-constos-panel-properties panel-inverse">
           <div class="panel-heading">
               <h4 class="panel-title" id="energiaElectricaResidencial" >Energía Eléctrica Residencial</h4>
           </div>
           <div class="panel-body panel-general-tabla-basica">
             <table class="big-tablasgenerales tablasgenerales table">

               <thead>
                 <tr class="big-tablasgenerales-header"><th colspan='3'></th><th colspan='2'>QUITO</th><th colspan='2'>GUAYAQUIL</th></tr>
                 <tr class=""><th>Nivel de tensión</th><th>Categoría</th><th>Rango de consumo</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th><th>Energía<br />(USD/kWh)</th><th>Comercialización<br />(USD/<br />Consumidor)</th></tr>
               </thead>
               <tbody>
                 <tr><td>Baja y media tensión</td><td>Residencial</td><td>51-100</td><td>0.081</td><td>1.414</td><td>0.081</td><td class="text-center" style="vertical-align: middle;" rowspan="14">CONSUMOS kWh-mes:<br />0-300: 1,414<br />301-500: 2,826<br />501-1000: 4,240<br />> 1000: 7,066</td></tr>
                 <tr><td>Baja y media tensión</td><td>Residencial</td><td>101-150</td><td>0.083</td><td>1.414</td><td>0.083</td></tr>
                 <tr><td>Baja y media tensión</td><td>Residencial</td><td>151-200</td><td>0.097</td><td>1.414</td><td>0.097</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>201-250</td><td>0.099</td><td>1.414</td><td>0.099</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>251-300</td><td>0.101</td><td>1.414</td><td>0.101</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>301-350</td><td>0.103</td><td>1.414</td><td>0.103</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>351-500</td><td>0.105</td><td>1.414</td><td>0.105</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>501-700</td><td>0.129</td><td>1.414</td><td>0.129</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>701-1000</td><td>0.145</td><td>1.414</td><td>0.145</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>1001-1500</td><td>0.171</td><td>1.414</td><td>0.171</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>1501-2500</td><td>0.275</td><td>1.414</td><td>0.275</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>2501-3500</td><td>0.436</td><td>1.414</td><td>0.436</td></tr>
                  <tr><td>Baja y media tensión</td><td>Residencial</td><td>Superior</td><td>0.681</td><td>1.414</td><td>0.681</td></tr>

               </tbody>

             </table>
           </div>
           <div class="panel-footer text-right">
             <div class="h5" style="text-align: justify;">
               <div><span><strong>Fuente:&nbsp;</strong></span>Pliego tarifario eléctrico ARCONEL</div>
             </div>
           </div>
       </div>
     </div>
  </div>
  <!-- Fin Tabla 12 size -->

  <div class="panel-footer text-right">
    <div class="h5" style="text-align: justify;">
      <div><span><strong>Elaborado por:&nbsp;</strong></span>Coordinación General de Estudios Prospectivos y Macroeconómicos para la Industria - Ministerio de Industrias y Productividad</div>
    </div>
  </div>


  <h3 id="contacto">Contacto</h3><hr>

    <p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>María Alexandra Palacios Bernal - Coordinadora General de Estudios Prospectivos y Macroeconómicos para la Industria</p>
    <p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+593-2-3948760</p>
    <p><span class="glyphicon glyphicon-cloud one" style="width:50px;"></span><strong>Equipo de Trabajo: </strong>Geovanna Espin | Juan Francisco Aguirre | Estefania Enriquez Katy Medina
    </p>
    <p><span class="glyphicon glyphicon-globe one" style="width:50px;"></span><a href="https://www.industrias.gob.ec/">https://www.industrias.gob.ec</a></p>



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
