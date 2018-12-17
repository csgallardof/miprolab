/*false
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 1.7.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v1.7/admin/
*/

var handleDataTableResponsive = function() {
	"use strict";

    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            responsive: true,
						dom: 'lBfrtip',
						buttons: [
				        'excel','print'
				    ],
						select: true,
						"language": {
							"sProcessing":     "Procesando...",
							"sLengthMenu":     "Mostrar _MENU_ registros",
							"sZeroRecords":    "No se encontraron resultados",
							"sEmptyTable":     "Ningún dato disponible en esta tabla",
							"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
							"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
							"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
							"sInfoPostFix":    "",
							"sSearch":         "Buscar:",
							"sUrl":            "",
							"sInfoThousands":  ",",
							"sLoadingRecords": "Cargando...",
							"oPaginate": {
								"sFirst":    "Primero",
								"sLast":     "Último",
								"sNext":     "Siguiente",
								"sPrevious": "Anterior"
							},
							"oAria": {
								"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
								"sSortDescending": ": Activar para ordenar la columna de manera descendente"
							},
							buttons: {
								copy: 'Copiar Tabla',
								excel: 'Descargar',
								csv: 'Exportar a CSV',
								print: 'Imprimir',
								copyTitle: 'Se copiaron',
								pdf: 'Exportar a PDF',
                copySuccess: {
                    _: '%d Registros',
                    1: '1 Registro'
                }
            }
						}
        });
    }
};

var handleDataTableResponsiveCCPT = function() {
	"use strict";

    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            responsive: true,
						dom: 'lBfrtip',
						"searching": true,
						buttons: [],
						select: true,
						"language": {
							"sProcessing":     "Procesando...",
							"sLengthMenu":     "Mostrar _MENU_ registros",
							"sZeroRecords":    "No se encontraron resultados",
							"sEmptyTable":     "Ningún dato disponible en esta tabla",
							"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
							"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
							"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
							"sInfoPostFix":    "",
							"sSearch":         "Búsqueda:",
							"sUrl":            "",
							"sInfoThousands":  ",",
							"sLoadingRecords": "Cargando...",
							"oPaginate": {
								"sFirst":    "Primero",
								"sLast":     "Último",
								"sNext":     "Siguiente",
								"sPrevious": "Anterior"
							},
							"oAria": {
								"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
								"sSortDescending": ": Activar para ordenar la columna de manera descendente"
							},
							buttons: {
								copy: 'Copiar Tabla',
								excel: 'Descargar',
								csv: 'Exportar a CSV',
								print: 'Imprimir',
								copyTitle: 'Se copiaron',
								pdf: 'Exportar a PDF',
                copySuccess: {
                    _: '%d Registros',
                    1: '1 Registro'
                }
            }
						}
        });
    }
};

var handleDataTableResponsiveCCPTlistado = function() {
	"use strict";

    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            responsive: true,
						dom: 'lBfrtip',
						"searching": true,
						buttons: [],
						select: false,
						"language": {
							"sProcessing":     "Procesando...",
							"sLengthMenu":     "Mostrar _MENU_ registros",
							"sZeroRecords":    "No se encontraron resultados",
							"sEmptyTable":     "Ningún dato disponible en esta tabla",
							"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
							"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
							"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
							"sInfoPostFix":    "",
							"sSearch":         "Búsqueda Rápida:",
							"sUrl":            "",
							"sInfoThousands":  ",",
							"sLoadingRecords": "Cargando...",
							"oPaginate": {
								"sFirst":    "Primero",
								"sLast":     "Último",
								"sNext":     "Siguiente",
								"sPrevious": "Anterior"
							},
							"oAria": {
								"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
								"sSortDescending": ": Activar para ordenar la columna de manera descendente"
							},
							buttons: {
								copy: 'Copiar Tabla',
								excel: 'Descargar',
								csv: 'Exportar a CSV',
								print: 'Imprimir',
								copyTitle: 'Se copiaron',
								pdf: 'Exportar a PDF',
                copySuccess: {
                    _: '%d Registros',
                    1: '1 Registro'
                }
            }
						}
        });
    }
};

var handleDataTableResponsiveBasica = function() {
	"use strict";

        $('table.tablasgenerales').DataTable({
            responsive: true,
						dom: 'lBfrtip',
						"searching": false,
						"ordering": false,
						buttons: [],
						"paging": false,
						"info": false,
						"language": {
							"sProcessing":     "Procesando...",
							"sLengthMenu":     "Mostrar _MENU_ registros",
							"sZeroRecords":    "No se encontraron resultados",
							"sEmptyTable":     "Ningún dato disponible en esta tabla",
							"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
							"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
							"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
							"sInfoPostFix":    "",
							"sSearch":         "Buscar:",
							"sUrl":            "",
							"sInfoThousands":  ",",
							"sLoadingRecords": "Cargando...",
							"oPaginate": {
								"sFirst":    "Primero",
								"sLast":     "Último",
								"sNext":     "Siguiente",
								"sPrevious": "Anterior"
							},
							"oAria": {
								"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
								"sSortDescending": ": Activar para ordenar la columna de manera descendente"
							},
							buttons: {
								copy: 'Copiar Tabla',
								excel: '<i class="fa fa-cloud-download"></i>',
								csv: 'Exportar a CSV',
								print: '<i class="fa fa-print"></i>',
								copyTitle: 'Se copiaron',
								pdf: 'Exportar a PDF',
                copySuccess: {
                    _: '%d Registros',
                    1: '1 Registro'
                }
            }
						}
        });

};

var TableManageResponsive = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableResponsive();
        }
    };
}();

var TablaCCPTHome = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableResponsiveCCPT();
        }
    };
}();

var TablaCCPTHomelistado = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableResponsiveCCPTlistado();
        }
    };
}();

var TablaBasica = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableResponsiveBasica();
        }
    };
}();

//$('div.dataTables_filter input').addClass('input-sm');
