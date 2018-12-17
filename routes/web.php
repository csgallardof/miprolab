<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/cifras-nacionales','CnCifrasNacionalesController@graficaPibActividadEconomica');

Auth::routes();

Route::get('/','PaginasController@inicio');

Route::get('/reporte','SolucionesController@reporte1');

Route::get('/inicio2', function () {
     return view('inicio2');
});

// Route::get('/old2', function () {
//      return view('publico.old_2_estructura-promedio-costos-gastos-empresas');
// });

// Route::get('/busquedaAvanzada',[
//      'uses'=>'PaginasController@busquedaAvanzada',
//      'as'=>'nuevaBusqueda2'
// ]);

Route::get('/busquedaAvanzada',[
     'uses'=>'PaginasController@busquedaAvanzadaInteligencia',
     'as'=>'nuevaBusquedaInteligencia'
]);


Route::get('/busqueda-eje-calidad',['uses'=>'PaginasController@ejeCalidad','as'=>'EjeCalidad']);

Route::get('/busqueda-eje-mercado',['uses'=>'PaginasController@ejeMercado','as'=>'EjeMercado']);

Route::get('/detalle-propuesta-eje-calidad',['uses'=>'PaginasController@detalleCalidad','as'=>'EjeMercado']);





Route::post('/lista-propuesta/{tipo}',['uses'=>'PaginasController@crearReportePropuestas','as'=>'reportePropuestas']);

Route::get('/reporte-home/lista-propuesta/{idEstado}/{tipo}','PaginasController@crearReportePropuestasHome');


Route::post('/reporte',[
     'uses'=>'SolucionesController@buscar',
     'as'=>'reporte1.resultado'
]);

// Inicio Propuestas polítca de estado para la produccion //

Route::get('/detalle-propuesta-institucion/{id}','PaginasController@detallePropuestaInstitucion');

// Fin Propuestas polítca de estado para la produccion //


Route::get('/detalle-despliegue-dialogo/{id}','PaginasController@detalledespliegue2');

Route::get('/foro-de-la-produccion-impulso-innovacion', 'PaginasController@foroproduccion');

Route::get('/visorgeneral', 'PaginasController@visorgeneral');

Route::get('/despliegueterritorial', 'PaginasController@despliegueterritorial');

Route::get('/reportegeneralccpt', 'PaginasController@reportegeneralccpt');

Route::get('/cifras', 'PaginasController@cifrasccpt');

Route::get('/vocaciones-productivas', 'PaginasController@vocaciones');

Route::get('/indice', 'PaginasController@indices');

Route::get('/por-que-invertir-en-ecuador', 'PaginasController@contratosinversion');

// Route::get('/zonas-especiales-de-desarrollo-economico ', 'PaginasController@zedes');

Route::get('/zonas-especiales-de-desarrollo-economico', 'PaginasController@zedes1');

Route::get('/polos-de-desarrollo', 'PaginasController@polosdesarrollo');

Route::get('/postulacion-polos-de-desarrollo', 'PaginasController@postulacionpolosdesarrollo');

Route::get('/incentivos-tributarios-y-arancelacios', 'PaginasController@incentivostributarios');

Route::get('/asociaciones-publico-privadas','PaginasController@asociacionesPublicoPrivada');

Route::get('/invertir_en_el_ecuador', 'PaginasController@invertir_en_el_ecuador');

Route::get('/costosindustriales/{opcion}', ['uses' =>'PaginasController@estructuraCostosGastos']);

Route::get('/dialogo-nacional-estadisticas','PaginasController@ReporteDialogoGrafico');

Route::get('/simulador-para-inversiones','PaginasController@SimuladorInversiones');

Route::get('/simulador-para-inversiones-prueba','PaginasController@SimuladorInversionesPrueba');

Route::post('/consultar-simulador-para-inversiones',['uses'=>'PaginasController@guardarSimuladorInversiones', 'as' =>'consultar.simulador']);


// rutas pruebas usuarios

Route::get('/usuarios','PaginasController@usuarios');

Route::get('/EventosParticipantes','PaginasController@UsuariosEvento');

//Route::get('/EventosParticipantes','PaginasController@participantes');

Route::post('/despliegueterritorial',['uses'=>'PaginasController@buscar','as'=>'despliegue.resultado']);

Route::get('/detalle-despliegue/{id}','PaginasController@detalledespliegue');

Route::get('/detalle-ccpt/{pajustada_id}/{sector_id}/{ambit_id}/{sipoc_id}','PaginasController@detalleccpt');

Route::get('/indice/indicadoresProvincia', 'PaginasController@indicadoresProvincia');

Route::get('/consejoconsultivo', 'ConsejoConsultivoController@consejoconsultivo');

Route::post('/consejoconsultivo',[
     'uses'=>'ConsejoConsultivoController@buscar',
     'as'=>'consejo.resultado'
]);

Route::get('/busqueda',[
     'uses'=>'PaginasController@busquedaGeneral',
     'as'=>'nuevaBusqueda'
]);


Route::get('storage/{archivo}', function ($archivo) {
     $storage_path = storage_path('app').'/storage/archivos_actividades';
     $url = $storage_path.'/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::disk('local3')->exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

})->name('descargarArchivo');

Route::get('/descargar/Mesas', 'ExcelController@exportMesas');

Route::get('/descargar/CCPT', 'ExcelController@exportConsejo');




/*
*
* ADMINISTRACION
*
*/
Route::group(['prefix' => 'admin','middleware'=>['auth','admin'] ], function(){

     Route::get('/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createDespliegueAdmin','as'=>'actividades.createDespliegue']);
     Route::post('/actividad/save-admin/{tipo_fuente}/{idSolucion}',['uses'=>'ActividadesController@saveActividadAdmin','as'=>'actividades.saveAdminActividad']);


     Route::get('/home', 'HomeController@index')->name('home');

     Route::resource('sipocs','SipocsController');

     Route::resource('instrumentos','InstrumentosController');

     Route::resource('thematics','ThematicsController');

     Route::resource('sectors','SectorsController');

     Route::resource('vsectors','VsectorsController');

     Route::resource('ambits','AmbitsController');

     Route::resource('provincias','ProvinciasController');

     Route::resource('eventos','EventosController');

     Route::resource('pajustadas','PajustadasController');

     Route::resource('pajustadas','PajustadasController');

     Route::resource('soluciones','SolucionesController');

     Route::resource('instituciones','InstitucionController');

     //Route::get('soluciones','SolucionesController@create');
     //Route::post('soluciones/guardar','SolucionesController@store');

     Route::resource('participantes','ParticipantesController');  //J. Arcos -- rutas para UsersController

     Route::post('/soluciones/vistaPreviaMesas',[
          'uses'    =>   'SolucionesController@vistaPreviaMesas',
          'as'      =>   'soluciones.vistaPreviaMesas'
     ]);  //J. Arcos -- vista Previa Matriz Mesas

     Route::get('participantes/vistaPrevia/{nombreArchivo}',[
          'uses'    =>   'ParticipantesController@vistaPreviaRegistro',
          'as' =>   'admin.participantes.vistaPrevia'
     ]);

     Route::post('/participantes/vistaPreviaRegistro',[
          'uses'=>'ParticipantesController@vistaPreviaRegistro',
          'as'=>'participantes.vistaPreviaRegistro'
     ]);  //J. Arcos -- vista Previa Matriz Registro Participante

     Route::post('/ccpt/vistaPrevia',[
          'uses'=>'ConsejoConsultivoController@vistaPreviaCCPT',
          'as'=>'ccpt.vistaPrevia'
     ]);


     Route::resource('vocaciones_productivas','VocacionesProductivasController');  //J. Arcos -- rutas para UsersController

     Route::resource('ccpt','ConsejoConsultivoController');  //J. Arcos -- rutas para UsersController


     Route::get('actor_solucion','InstitucionController@indexActorSolucion');  //admin cruds

     Route::get('actor_solucion/create',[
          'uses'=>'InstitucionController@createForm2',
          'as'=>'actorSolucion.create'
     ]);  //admin cruds

     // Route::get('actor_solucion/create',[
     //      'uses'=>'InstitucionController@createForm2',
     //      'as'=>'actorSolucion.create'
     // ]);

     Route::post('actores/porasignar',[
          'uses'=>'InstitucionController@asignarActorSolucion',
          'as'=>'actorSolucion.asignar'
     ]);  //admin cruds

     Route::get('actores','InstitucionController@indexActorSolucion');  //admin cruds

     Route::get('soluciones_por_tipo/{tipo_fuente}','SolucionesController@getSolucionesByTipoFuente');

     // vista actores

     Route::get('actores/asignados','InstitucionController@homeActoresAsignados');  //admin cruds

     Route::get('actores/porasignar','InstitucionController@homeActoresPorAsignar');

     //Route::get('actores/asignar-responsable','InstitucionController@vistaCrearResponsable');

     //Route::get('/editar-reporte-alerta/{id}','CspReportesController@vistaEditarReporteAlerta');


     Route::get('actores/asignar-responsable/{idSolucion}',[
          'uses'=>'InstitucionController@createAsignar',
          'as'=>'actorSolucion.create'
     ]);

     Route::get('/actor/editar-actor-solucion/{solucion_id}','InstitucionController@transferirActorSolucion');

     Route::post('/actor/editar-actor-solucion/{actorSolucionID}','InstitucionController@ActualizarActorSolucion');




});



Route::group(['prefix' => 'institucion','middleware'=>['auth'] ], function(){

     Route::get('home','InstitucionController@home');  //página dashboard para las instituciones

     Route::get('verSolucion/despliegue/{tipo_actor}/{idSolucion}',['uses'=>'ActividadesController@verActividadesDespliegue','as'=>'verSolucion.despliegue']);

     Route::get('parametros-cumplimiento/create/{idSolucion}',['uses'=>'ActividadesController@vistaParametrosCumplimiento','as'=>'solucion.parametrosCumplimiento']);

      Route::get('parametros-cumplimiento/edit/{idSolucion}',['uses'=>'ActividadesController@vistaEditParametrosCumplimiento','as'=>'solucion.EditparametrosCumplimiento']);

     Route::post('/crear-parametros-cumplimiento/{id}',['uses'=>'ActividadesController@crearParametrosCumplimiento','as'=>'crear.ParametrosCumplimiento']);

     Route::get('verSolucion/consejo/{tipo_actor}/{idSolucion}',['uses'=>'ActividadesController@verActividadesConsejo','as'=>'verSolucion.consejo']);

     Route::get('despliegue/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createDespliegue','as'=>'actividades.createDespliegue']);

     Route::get('finalizar/actividad/create/{idSolucion}',['uses'=>'ActividadesController@vistaFinalizarPropuesta','as'=>'cierre.Propuesta']);

     Route::post('actividad-Finalizado-propuesta/save/{tipo_fuente}/{idSolucion}',['uses'=>'ActividadesController@finalizarPropuestaSolucion','as'=>'actividadCierre.saveActividad']);

     Route::get('consejo/actividad/create/{idSolucion}',['uses'=>'ActividadesController@createConsejo','as'=>'actividades.createConsejo']);

     Route::post('actividad/save/{tipo_fuente}/{idSolucion}',['uses'=>'ActividadesController@saveActividad','as'=>'actividades.saveActividad']);

     // EDITAR ACTIVIDADES

     Route::get('/editar-actividades/{actividad_id}/{solucion_id}','ActividadesController@vistaEditarActividad');
     Route::post('/editar-actividades-solucion/{id}',['uses'=>'ActividadesController@editarActividad','as'=>'modificarActividades']);



//VISTA DE LOS REPORTES DEL CSP
     Route::get('/consejo-sectorial-produccion','CspReportesController@mostrarReportes');

     Route::get('/consejo-sectorial-produccion/reportes-hechos','CspReportesController@homeReportesHechos');

     Route::get('/consejo-sectorial-produccion/reportes-alertas','CspReportesController@homeReportesAlertas');

     //CREAR REPORTE HECHOS CSP
     Route::get('/consejo-sectorial-produccion-createReportesHecho','CspReportesController@vistaCrearReporteHecho');

     //CREAR REPORTE HECHOS
     Route::get('/consejo-sectorial-produccion-createReportesAlerta','CspReportesController@vistaCrearReporteAlerta');

     //guardar reporte hechos
     Route::post('/guardarReporteHechoCsp',['uses'=>'CspReportesController@guardarReporteHecho','as'=>'guardarReporteHechoCsp']);

     //guardar reportes alertas
     Route::post('/guardarReporteAlertaCsp',['uses'=>'CspReportesController@guardarReporteAlerta','as'=>'guardarReporteAlertaCsp']);

     // ACCIONES REPORTES ALERTAS
     Route::get('/acciones-alertas/{id}','CspReportesController@AccionesAlertas');
     Route::post('/crear-acciones-alertas',['uses'=>'CspReportesController@crearAccionesAlerta','as'=>'guardarAccionesAlertaCsp']);

     //Visualizar acciones de reportes alertas
     Route::get('/visualizar-acciones-alertas/{id}','CspReportesController@visualizarAccionesAlertas');

     //Visualizar acciones de reportes alertas general
     Route::get('/visualizar-acciones-alertas-general/{id}','CspReportesController@visualizarAccionesAlertasGeneral');

     // VISUALIZAR REPORTES CSP
     Route::get('/visualizar-reporte-hechos/{id}','CspReportesController@visualizarReporteHecho');
     Route::get('/visualizar-detalle-reporte-hechos/{id}','CspReportesController@visualizarDetalleReporteHecho');
     Route::get('/visualizar-reporte-Alertas/{id}','CspReportesController@visualizarReporteAlerta');
     Route::get('/visualizar-detalle-reporte-Alertas/{id}','CspReportesController@visualizarDetalleReporteAlerta');

     //EDITAR REPORTES HECHO CSP
     Route::get('/editar-reporte-hechos/{id}','CspReportesController@vistaEditarReporteHecho');
     Route::post('/modificar-reporte-hechos/{id}',['uses'=>'CspReportesController@editarReporteHechoCsp','as'=>'modificarReporteHecho']);

     Route::get('/editar-reporte-hechos-secretario/{id}','CspReportesController@vistaEditarReporteHechoSecretario');
     Route::post('/modificar-reporte-hechos-secretario/{id}',['uses'=>'CspReportesController@editarReporteHechoCspSecretario','as'=>'modificarReporteHechoSecretario']);

     //EDITAR REPORTES ALERTAS CSP
     Route::get('/editar-reporte-alerta/{id}','CspReportesController@vistaEditarReporteAlerta');
     Route::post('/modificar-reporte-alerta/{id}',['uses'=>'CspReportesController@editarReporteAlertaCsp','as'=>'modificarReporteAlerta']);
     Route::post('/modificar-reporte-alerta-estado/{id}',['uses'=>'CspReportesController@editarReporteAlertaEstadoCsp','as'=>'modificarReporteAlertaEstado']);

     Route::get('/editar-reporte-alerta-secretario/{id}','CspReportesController@vistaEditarReporteAlertaSecretario');
     Route::post('/modificar-reporte-alerta-secretario/{id}',['uses'=>'CspReportesController@editarReporteAlertaCspSecretario','as'=>'modificarReporteAlertaSecretario']);

     //EDITAR REPORTES ACCIONES ALERTAS CSP
     Route::get('/editar-acciones-alerta/{id}','CspReportesController@vistaEditaraccionesAlerta');
     Route::post('/modificar-acciones-alerta/{id}',['uses'=>'CspReportesController@editarAccionesAlertaCsp','as'=>'verSolucion']);

     //Reportes csp
     Route::get('/lista-reportes-csp','PdfCspReportesController@listaReportesCsp');
     //Generar Reporte
    // Route::get('/crear_reporte_porpais/{tipo}','PdfCspReportesController@crear_reporte_porpais');
     //Route::post('/guardarIdReporteHechoCsp','PdfCspReportesController@obtenerReportesHechos');
     Route::post('/guardarIdReporteHechoCsp/{tipo}',['uses'=>'PdfCspReportesController@crearReporteHechosRelevantes','as'=>'guardarIdReporteHechoCsp']);

     Route::get('/reportes-lineas-discursivas-csp','PdfCspReportesController@listaLineasDiscursivasCsp');
     Route::post('/guardarIdReporteHechoLineasDiscursivasCsp/{tipo}',['uses'=>'PdfCspReportesController@crearReporteHechosLineasDiscursivas','as'=>'guardarIdReporteHechoLineasDiscurisvasCsp']);

     Route::get('/reportes-alertas-csp','PdfCspReportesController@listaReportesAlertasCsp');
     Route::post('/guardarIdReporteAlertasCsp/{tipo}',['uses'=>'PdfCspReportesController@crearReporteAlerta','as'=>'guardarIdReporteAlertasCsp']);
     //Router::get('//lista-reportes-csp/buscarReportesHechos',;
     //BUSQUEDAS DE HECHOS RELEVANTES
     Route::get('/busquedaReporteHechos',['uses'=>'PdfCspReportesController@buscarReportesHechos','as'=>'nuevaBusquedaReportesHechos']);
     Route::get('/busquedaReporteHechosLineasDiscursivas',['uses'=>'PdfCspReportesController@buscarReportesHechosLineasDiscursivas','as'=>'nuevaBusquedaReportesHechosLineasDiscursivas']);
     //DESCARGAR ARCHIVO HECHO CSP
     Route::get('/busquedaReporteAlertas',['uses'=>'PdfCspReportesController@buscarReportesAlertas','as'=>'nuevaBusquedaReportesAlertas']);
     Route::get('storageHechoCsp/{archivo}', function ($archivo) {
     $storage_path = storage_path('app').'/storage/CspReportesHechos';
     $url = $storage_path.'/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::disk('CspReportesHechos')->exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

     })->name('descargarArchivoHechosCsp');


     //DESCARGAR ARCHIVO ACCION ALERTA CSP
     Route::get('storageAccioAlertaCsp/{archivo}', function ($archivo) {
     $storage_path = storage_path('app').'/storage/CspReportesAlerta';
     $url = $storage_path.'/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::disk('CspReportesAlerta')->exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

     })->name('descargarAccionAlertaCsp');

     //DESCARGAR ARCHIVO ALERTA CSP
     Route::get('storageAlertaCsp/{archivo}', function ($archivo) {
     $storage_path = storage_path('app').'/storage/CspReportesAlerta';
     $url = $storage_path.'/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::disk('CspReportesAlerta')->exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

     })->name('descargarArchivoAlertaCsp');

     Route::get('/crear-agenda-territorial', 'CspAgendaTerritorialController@vistaCrearAgenda');

     Route::get('/ver-agenda-territorial', 'CspAgendaTerritorialController@mostrarAgendaTerritorial');

     Route::post('/guardar-agenda-territorial',['uses'=>'CspAgendaTerritorialController@crearAgenda','as'=>'guardarAgendaTerritorialCsp']);

     Route::get('/editar-agenda-territorial/{id}', 'CspAgendaTerritorialController@vistaEditarAgendaTerritorial');

     Route::post('/modificar-agenda-territorial/{id}',['uses'=>'CspAgendaTerritorialController@editarReporteAlertaCsp','as'=>'modificarAgendaTerritorial']);

     Route::get('/lista-agenda-territorial-csp','CspPdfReportesAgendaController@listaAgendaTerritorialCsp');

     Route::post('/guardarIdAgendaTerritorial/{tipo}',['uses'=>'CspPdfReportesAgendaController@crearReporteAgendaTerritorial','as'=>'guardarIdReporteHechoCsp']);

     Route::get('/tabla-excel','CspPdfReportesAgendaController@mostrarTabla');

     Route::get('/unificar-propuestas','PropuestasUnificadasController@mostrarPropuestas');

     Route::post('/seleccion-propuestas-unificadas',['uses'=>'PropuestasUnificadasController@obtenerPropuestasUnificadas','as'=>'guardarIdPropuestas']);

     Route::post('/seleccion-propuestas-unificadas/create-pajustada-unificar',['uses'=>'PropuestasUnificadasController@guardarPajustadaUnificar','as'=>'guardarPajustadaUnificar']);

     Route::post('/seleccion-propuestas-unificadas/create-pajustada-unificar/pajustadas',['uses'=>'PropuestasUnificadasController@definirPajustada','as'=>'definirPajustada']);


});
