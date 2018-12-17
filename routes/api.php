<?php

Route::get('/provincia/{id}/cantones','CspAgendaTerritorialController@obtenerCantones');

Route::get('/propuestas/{id}','InstitucionController@obtenerPropuestas');




Route::get('/cifras-nacionales/pib-actividad-economica/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibActividadEconomica');

Route::get('/cifras-nacionales/pib-zona/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibZona');

Route::get('/cifras-nacionales/pib-zona/{tipo_cifra_id}','CnCifrasNacionalesController@obtenerPibPorZona');

Route::get('/cifras-nacionales/pib-provincia/{tipo_cifra_id}/{anio}','CnCifrasNacionalesController@obtenerPibProvincia');