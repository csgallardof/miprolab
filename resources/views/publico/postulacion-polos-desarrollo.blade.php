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

          .file{
             position:absolute;
             z-index:2;top:0;left:0;
             filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
             opacity:0;
             background-color:transparent;
             color:transparent;

          }
         


    </style>

@endsection

@section('contenido')

    <div class="content row main-content header-fix-mobile">

      

      <div id="zedes" class="col-sm-10 col-xs-12 p-l-50 p-r-30">


        <div class="site-page-content" >

            <h1 id="incentivosgenerales">Postulación a Polos de Desarrollo</h1><hr>

            <!-- begin col-6 -->
            <div class="col-md-12">
              <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-validation-2">
                        
                <div class="panel-body panel-form">
                  <form class="form-horizontal form-bordered" data-parsley-validate="true">
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Provincia :</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                          <option value="">Seleccionar...</option>
                          <option value="foo">  Azuay </option>
                          <option value="foo">  Bolívar </option>
                          <option value="foo">  Cañar </option>
                          <option value="foo">  Carchi  </option>
                          <option value="foo">  Chimborazo  </option>
                          <option value="foo">  Cotopaxi  </option>
                          <option value="foo">  El Oro  </option>
                          <option value="foo">  Esmeraldas  </option>
                          <option value="foo">  Galápagos </option>
                          <option value="foo">  Guayas  </option>
                          <option value="foo">  Imbabura  </option>
                          <option value="foo">  Loja  </option>
                          <option value="foo">  Los Ríos  </option>
                          <option value="foo">  Manabí  </option>
                          <option value="foo">  Morona Santiago </option>
                          <option value="foo">  Napo  </option>
                          <option value="foo">  Orellana  </option>
                          <option value="foo">  Pastaza </option>
                          <option value="foo">  Pichincha </option>
                          <option value="foo">  Santa Elena </option>
                          <option value="foo">  Santo Domingo de los Tsáchilas  </option>
                          <option value="foo">  Sucumbios </option>
                          <option value="foo">  Tungurahua  </option>
                          <option value="foo">  Zamora Chinchipe  </option>
                          <option value="foo">  Nacional  </option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Cantón :</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                          <option value="">Seleccionar...</option>
                          <option value="foo">  Cuenca  </option>
                          <option value="foo">  Camilo Ponce Enríquez </option>
                          <option value="foo">  Chordeleg </option>
                          <option value="foo">  El Pan  </option>
                          <option value="foo">  Girón </option>
                          <option value="foo">  Guachapala  </option>
                          <option value="foo">  Gualaceo  </option>
                          <option value="foo">  Nabón </option>
                          <option value="foo">  Oña </option>
                          <option value="foo">  Paute </option>
                          <option value="foo">  Pucará  </option>
                          <option value="foo">  San Fernando  </option>
                          <option value="foo">  Santa Isabel  </option>
                          <option value="foo">  Sevilla de Oro  </option>
                          <option value="foo">  Sígsig  </option>
                          <option value="foo">  Guaranda  </option>
                          <option value="foo">  Caluma  </option>
                          <option value="foo">  Chillanes </option>
                          <option value="foo">  Chimbo  </option>
                          <option value="foo">  Echeandía </option>
                          <option value="foo">  Las Naves </option>
                          <option value="foo">  San Miguel  </option>
                          <option value="foo">  Azogues </option>
                          <option value="foo">  Biblián </option>
                          <option value="foo">  Cañar </option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Croquis de la Ubicación Geográfica (Limites):</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                              
                            <div style="position:relative;">
                              <a class='btn btn-primary' href='javascript:;'>
                                subir archivo
                                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info1").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info1"></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">DIRECCIÓN:</label>
                      <div class="col-md-3 col-sm-3">
                        <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" /> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">DESCRIPCIÓN BREVE DEL PROYECTO:</label>
                      <div class="col-md-3 col-sm-3">
                        <textarea rows="4" cols="50" name="comment" form="usrform">Descripción</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Área:</label>
                      <div class="col-md-3 col-sm-3">
                        <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" /> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Area total de construcción:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                          <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" />      
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Area Insdustrial ocupada:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                          <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Area Verde:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                          <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Número Total de Lotes:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                          <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Número Total de Lotes disponibles:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                          <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="" data-required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Cédula catastral otorgada por el Municipio:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                              
                            <div style="position:relative;">
                              <a class='btn btn-primary' href='javascript:;'>
                                subir archivo
                                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info4").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info4"></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Análisis o Estudio de zonificación donde se indique la proyección y expansión de áreas e industrias conexas:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                              
                            <div style="position:relative;">
                              <a class='btn btn-primary' href='javascript:;'>
                                subir archivo
                                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info4").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info4"></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Análisis o Estudio de  vinculación productiva con otras zonas de la Provincia:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                              
                            <div style="position:relative;">
                              <a class='btn btn-primary' href='javascript:;'>
                                subir archivo
                                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info4").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info4"></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Sector Económico al que pertenece  el proyecto :</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                          <option value="">Seleccionar...</option>
                          <option value="foo">  AGRICULTURA, GANADERiA, CAZA Y ACTIVIDADES DE SERVICIOS CONEXAS </option>
                          <option value="foo">  SILVICULTURA Y EXTRACCIÓNDE MADERA  </option>
                          <option value="foo">  PESCA Y ACUICULTURA </option>
                          <option value="foo">  EXTRACCIÓNDE CARBÓN DE PIEDRA Y LIGNITO </option>
                          <option value="foo">  EXTRACCIÓNDE PETRÓLEO CRUDO Y GAS NATURAL </option>
                          <option value="foo">  EXTRACCIÓNDE MINERALES METALiFEROS  </option>
                          <option value="foo">  EXPLOTACIÓN DE OTRAS MINAS Y CANTERAS </option>
                          <option value="foo">  ACTIVIDADES DE SERVICIOS DE APOYO PARA LA EXPLOTACIÓN DE MINAS Y CANTERAS </option>
                          <option value="foo">  ELABORACIÓN DE PRODUCTOS ALIMENTICIOS </option>
                          <option value="foo">  ELABORACIÓN DE BEBIDAS  </option>
                          <option value="foo">  ELABORACIÓN DE PRODUCTOS DE TABACO  </option>
                          <option value="foo">  FABRICACIÓN DE PRODUCTOS TEXTILES </option>
                          <option value="foo">  FABRICACIÓN DE PRENDAS DE VESTIR  </option>
                          <option value="foo">  FABRICACIÓN DE CUEROS Y PRODUCTOS CONEXOS </option>
                          <option value="foo">  PRODUCCIoN DE MADERA Y FABRICACIÓN DE PRODUCTOS DE MADERA Y CORCHO, EXCEPTO MUEBLES; FABRICACIÓN DE ARTiCULOS DE PAJA Y DE MATERIALES TRENZABLES  </option>
                          <option value="foo">  FABRICACIÓN DE PAPEL Y DE PRODUCTOS DE PAPEL  </option>
                          <option value="foo">  IMPRESIoN Y REPRODUCCIoN DE GRABACIONES </option>
                          <option value="foo">  FABRICACIÓN DE COQUE Y DE PRODUCTOS DE LA REFINACIoN DEL PETRÓLEO </option>
                          <option value="foo">  FABRICACIÓN DE SUBSTANCIAS Y PRODUCTOS QUiMICOS </option>
                          <option value="foo">  FABRICACIÓN DE PRODUCTOS FARMACeUTICOS, SUSTANCIAS QUiMICAS MEDICINALES Y PRODUCTOS BOTaNICOS DE USO FARMACeUTICO </option>
                          <option value="foo">  FABRICACIÓN DE PRODUCTOS DE CAUCHO Y PLaSTICO </option>
                          <option value="foo">  FABRICACIÓN DE OTROS PRODUCTOS MINERALES NO METaLICOS </option>
                          <option value="foo">  FABRICACIÓN DE METALES COMUNES  </option>
                          <option value="foo">  FABRICACIÓN DE PRODUCTOS ELABORADOS DE METAL, EXCEPTO MAQUINARIA Y EQUIPO </option>
                          <option value="foo">  FABRICACIÓN DE PRODUCTOS DE INFORMaTICA, ELECTRoNICA Y oPTICA </option>
                          <option value="foo">  FABRICACIÓN DE EQUIPO ELeCTRICO </option>
                          <option value="foo">  FABRICACIÓN DE MAQUINARIA Y EQUIPO NCP  </option>
                          <option value="foo">  FABRICACIÓN DE MAQUINARIA Y EQUIPO NCP  </option>
                          <option value="foo">  FABRICACIÓN DE VEHiCULOS AUTOMOTORES, REMOLQUES Y SEMIRREMOLQUES  </option>
                          <option value="foo">  FABRICACIÓN DE OTROS TIPOS DE EQUIPOS DE TRANSPORTE </option>
                          <option value="foo">  FABRICACIÓN DE MUEBLES  </option>
                          <option value="foo">  OTRAS INDUSTRIAS MANUFACTURERAS </option>
                          <option value="foo">  REPARACIoN E INSTALACIoN DE MAQUINARIA Y EQUIPO </option>
                          <option value="foo">  SUMINISTRO DE ELECTRICIDAD, GAS, VAPOR Y AIRE ACONDICIONADO </option>
                          <option value="foo">  CAPTACIoN, TRATAMIENTO Y DISTRIBUCIoN DE AGUA </option>
                          <option value="foo">  EVACUACIoN DE AGUAS RESIDUALES  </option>
                          <option value="foo">  RECOLECCIoN, TRATAMIENTO Y ELIMINACIoN DE DESECHOS, RECUPERACIoN DE MATERIALES  </option>
                          <option value="foo">  ACTIVIDADES DE DESCONTAMINACIoN Y OTROS SERVICIOS DE  GESTIoN DE DESECHOS </option>
                          <option value="foo">  CONSTRUCCIoN DE EDIFICIOS </option>
                          <option value="foo">  OBRAS DE INGENIERiA CIVIL </option>
                          <option value="foo">  ACTIVIDADES ESPECIALIZADAS DE LA CONSTRUCCIoN </option>
                          <option value="foo">  COMERCIO Y REPARACIoN DE VEHiCULOS AUTOMOTORES Y MOTOCICLETAS </option>
                          <option value="foo">  COMERCIO AL POR MAYOR, EXCEPTO EL DE VEHiCULOS AUTOMOTORES Y MOTOCICLETAS </option>
                          <option value="foo">  COMERCIO AL POR MENOR, EXCEPTO EL DE VEHiCULOS AUTOMOTORES Y MOTOCICLETAS </option>
                          <option value="foo">  TRANSPORTE POR ViA TERRESTRE Y POR TUBERiAS </option>
                          <option value="foo">  TRANSPORTE POR ViA ACUaTICA </option>
                          <option value="foo">  TRANSPORTE POR ViA AeREA  </option>
                          <option value="foo">  ALMACENAMIENTO Y ACTIVIDADES DE APOYO AL TRANSPORTE </option>
                          <option value="foo">  ACTIVIDADES POSTALES Y DE MENSAJERiA  </option>
                          <option value="foo">  ACTIVIDADES DE ALOJAMIENTO  </option>
                          <option value="foo">  SERVICIO DE ALIMENTO Y BEBIDA </option>
                          <option value="foo">  ACTIVIDADES DE PUBLICACIoN  </option>
                          <option value="foo">  ACTIVIDADES DE PRODUCCIoN DE PELiCULAS CINEMATOGRaFICAS, ViDEOS Y PROGRAMAS DE TELEVISIoN, GRABACIoN DE SONIDO Y EDICIoN DE MuSICA  </option>
                          <option value="foo">  ACTIVIDADES DE PROGRAMACIoN Y TRANSMISIoN </option>
                          <option value="foo">  TELECOMUNICACIONES  </option>
                          <option value="foo">  PROGRAMACIoN INFORMaTICA, CONSULTORiA DE INFORMaTICA Y ACTIVIDADES CONEXAS  </option>
                          <option value="foo">  ACTIVIDADES DE SERVICIOS DE INFORMACIoN </option>
                          <option value="foo">  ACTIVIDADES DE SERVICIOS FINANCIEROS, EXCEPTO LAS DE SEGUROS Y FONDOS DE PENSIONES  </option>
                          <option value="foo">  ACTIVIDADES DE SERVICIOS FINANCIEROS, EXCEPTO LAS DE SEGUROS Y FONDOS DE PENSIONES  </option>
                          <option value="foo">  SEGUROS, REASEGUROS Y FONDOS DE PENSIONES, EXCEPTO LOS PLANES DE SEGURIDAD SOCIAL DE AFILIACIoN OBLIGATORIA </option>
                          <option value="foo">  ACTIVIDADES AUXILIARES DE LAS ACTIVIDADES DE SERVICIOS FINANCIEROS  </option>
                          <option value="foo">  ACTIVIDADES INMOBILIARIAS </option>
                          <option value="foo">  ACTIVIDADES JURiDICAS Y DE CONTABILIDAD </option>
                          <option value="foo">  ACTIVIDADES DE OFICINAS PRINCIPALES; ACTIVIDADES DE CONSULTORiA DE GESTIoN  </option>
                          <option value="foo">  ACTIVIDADES DE ARQUITECTURA E INGENIERiA; ENSAYOS Y ANaLISIS TeCNICOS </option>
                          <option value="foo">  INVESTIGACIoN CIENTiFICA Y DESARROLLO </option>
                          <option value="foo">  PUBLICIDAD Y ESTUDIOS DE MERCADO  </option>
                          <option value="foo">  OTRAS ACTIVIDADES PROFESIONALES, CIENTiFICAS Y TeCNICAS </option>
                          <option value="foo">  ACTIVIDADES VETERINARIAS  </option>
                          <option value="foo">  ACTIVIDADES DE ALQUILER Y ARRENDAMIENTO </option>
                          <option value="foo">  ACTIVIDADES DE EMPLEO </option>
                          <option value="foo">  ACTIVIDADES DE AGENCIAS DE VIAJES, OPERADORES TURiSTICOS, SERVICIOS DE RESERVAS Y ACTIVIDADES CONEXAS </option>
                          <option value="foo">  ACTIVIDADES DE SEGURIDAD E INVESTIGACIoN  </option>
                          <option value="foo">  ACTIVIDADES DE SERVICIOS A EDIFICIOS Y PAISAJISMO </option>
                          <option value="foo">  ACTIVIDADES ADMINISTRATIVAS Y DE APOYO DE OFICINA Y OTRAS ACTIVIDADES DE APOYO A LAS EMPRESAS </option>
                          <option value="foo">  ADMINISTRACIoN PuBLICA Y DEFENSA; PLANES DE SEGURIDAD SOCIAL DE AFILIACIoN OBLIGATORIA  </option>
                          <option value="foo">  ENSEnANZA </option>
                          <option value="foo">  ACTIVIDADES DE ATENCIoN DE LA SALUD HUMANA  </option>
                          <option value="foo">  ACTIVIDADES DE ATENCIoN EN INSTITUCIONES  </option>
                          <option value="foo">  ACTIVIDADES DE ASISTENCIA SOCIAL SIN ALOJAMIENTO  </option>
                          <option value="foo">  BAJO RELACION DE DEPENDENCIA SECTOR PRIVADO </option>
                          <option value="foo">  ACTIVIDADES CREATIVAS, ARTiSTICAS Y DE ENTRETENIMIENTO  </option>
                          <option value="foo">  ACTIVIDADES DE BIBLIOTECAS, ARCHIVOS, MUSEOS Y OTRAS ACTIVIDADES CULTURALES </option>
                          <option value="foo">  ACTIVIDADES DE JUEGOS DE AZAR Y APUESTAS  </option>
                          <option value="foo">  ACTIVIDADES DEPORTIVAS, DE ESPARCIMIENTO Y RECREATIVAS  </option>
                          <option value="foo">  BAJO RELACION DE DEPENDENCIA SECTOR PUBLICO </option>
                          <option value="foo">  ACTIVIDADES DE ASOCIACIONES </option>
                          <option value="foo">  REPARACIoN DE COMPUTADORES Y DE EFECTOS PERSONALES Y ENSERES DOMeSTICOS </option>
                          <option value="foo">  OTRAS ACTIVIDADES DE SERVICIOS PERSONALES </option>
                          <option value="foo">  ACTIVIDADES DE LOS HOGARES COMO EMPLEADORES DE PERSONAL DOMeSTICO </option>
                          <option value="foo">  ACTIVIDADES NO DIFERENCIADAS DE LOS HOGARES COMO PRODUCTORES DE BIENES Y SERVICIOS PARA USO PROPIO  </option>
                          <option value="foo">  ACTIVIDADES DE ORGANIZACIONES Y oRGANOS EXTRATERRITORIALES  </option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Análisis o Estudio de Impacto Ambiental  (EIA):</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="upload-btn-wrapper">
                              
                            <div style="position:relative;">
                              <a class='btn btn-primary' href='javascript:;'>
                                subir archivo
                                <input type="file" class="file" name="file_source" size="40"  onchange='$("#upload-file-info4").html($(this).val());'>
                              </a>
                              &nbsp;
                              <span class='label label-info' id="upload-file-info4"></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Permisos de Funcionamiento y de utilización de Suelo rural a urbano :</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" value="foo" id="radio-required" data-parsley-required="true" /> SI
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" id="radio-required2" value="bar" /> NO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Permisos de Funcionamiento y de utilización de Suelo rural a urbano :</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="checkbox"><label><input type="checkbox" id="mincheck" name="mincheck[]" data-parsley-mincheck="2" value="foo" required /> Luz Electrica</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="mincheck[]" value="bar" />Alumbrado Publico</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="mincheck[]" value="baz" /> Alcantarillado</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="mincheck[]" value="baz" /> Agua Potable</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="mincheck[]" value="baz" /> Internet</label></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Principales vías de acceso:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" value="foo" id="radio-required" data-parsley-required="true" /> Bueno
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" id="radio-required2" value="bar" />Malo
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" id="radio-required2" value="bar" />Regular
                          </label>
                        </div>
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Cercanía a puntos de salida internacional (puertos, aeropuertos):</label>
                      <div class="col-md-3 col-sm-3">
                        <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="distancia en km" data-required="true" /> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Interés de Inversión de empresa ancla:</label>
                      <div class="col-md-6 col-sm-6">
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" value="foo" id="radio-required" data-parsley-required="true" /> Bueno
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" id="radio-required2" value="bar" />SI
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="radiorequired" id="radio-required2" value="bar" />NO
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4">Descripción de encadenamientos productivos que conlleva desde la producción e materia prima, elaboración del producto, logística y transporte.:</label>
                      <div class="col-md-6 col-sm-6">
                        <textarea rows="4" cols="50" name="comment" form="usrform">Descripción</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4"></label>
                      <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- end col-6 -->

            
            <h3 id="contacto">Contacto</h3><hr>

              <p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>Christian Arias - Director</p>
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
