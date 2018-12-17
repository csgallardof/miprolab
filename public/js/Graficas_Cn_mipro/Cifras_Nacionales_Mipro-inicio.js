
var handleStackedAreaChart = function() {

    // Fix nvd3 issue repeated tooltip on some charts
    var tooltips_elements = d3.selectAll('[id^=nvtooltip]');
    if (!tooltips_elements.empty()) {
        tooltips_elements.remove();
    }
    // End Fix nvd3 issue repeated tooltip on some charts

    "use strict";

        var valorTipoCifra= document.getElementById("select-tipo-cifra-pib-zona1").value;
        //console.log(valorTipoCifra);
        $.get('/api/cifras-nacionales/pib-zona/'+valorTipoCifra,function (data){

          //console.log('entre', data)
          //console.log(data);
          var datos_zona_5_8  = [];
          var datos_zona_2_9  = [];
          var datos_zona_4  = [];
          var datos_zona_1  = [];
          var datos_zona_3  = [];
          var datos_zona_6  = [];
          var datos_zona_7  = [];
          var datos_zona_OE_PIB  = [];


          for (var i = 0; i <data.length; i++) {
            if(data[i].label=="Pichincha, Orellana y Napo"){
            datos_zona_2_9.push( data[i]);

            }

            if(data[i].label=="Bolívar,Guayas,Los Ríos, Santa Elena y Galápagos"){
            datos_zona_5_8.push( data[i]);

            }
            if(data[i].label=="Manabí y  Santo Domingo de los Tsáchilas"){
            datos_zona_4.push( data[i]);

            }

            if(data[i].label=="Esmeraldas, Carchi, Imbabura y Sucumbíos"){
            datos_zona_1.push( data[i]);

            }

            if(data[i].label=="Cotopaxi, Chimborazo, Tungurahua y Pastaza"){
            datos_zona_3.push( data[i]);

            }

            if(data[i].label=="Azuay, Cañar y Morona Santiago"){
            datos_zona_6.push( data[i]);

            }
            if(data[i].label=="El Oro, Loja y Zamora Chinchipe"){
            datos_zona_7.push( data[i]);

            }
            if(data[i].label=="Otros elementos del PIB"){
            datos_zona_OE_PIB.push( data[i]);

            }


        }
          //console.log(datos_zona_2_9);

          var stackedAreaChartData = [

        {

        'key' : 'Zona 1 - Esmeraldas, Carchi, Imbabura y Sucumbíos',
        'color' : "#2E86C1",
        'values' : datos_zona_1

        },
        {

        'key' : 'Zona 2 - Pichincha, Orellana y Napo',
        'color' : "#CB4335",
        'values' : datos_zona_2_9

        },
        {

        'key' : 'Zona 3 - Cotopaxi, Chimborazo, Tungurahua y Pastaza',
        'color' : "#B7950B",
        'values' : datos_zona_3

        },
        {

          'key' : 'Zona 4 - Manabí y  Santo Domingo de los Tsáchilas',
        'color' : "#AF7AC5",
        'values' : datos_zona_4

        },
        {

          'key' : 'Zona 5 - Bolívar, Guayas, Los Ríos, Santa Elena y Galápagos',
        'color' : "#28B463",
        'values' : datos_zona_5_8

        },
        {

        'key' : 'Zona 6 - Azuay, Cañar y Morona Santiago',
        'color' : "#CA6F1E",
        'values' : datos_zona_6

        },
        {

        'key' : 'Zona 7 - El Oro, Loja y Zamora Chinchipe',
        'color' : "#58D68D",
        'values' : datos_zona_7

        },
        {

        'key' : 'Otros elementos del PIB',
        'color' : "#000C9D",
        'values' : datos_zona_OE_PIB

        }

        ];
          //console.log(stackedAreaChartData);

                  nv.addGraph(function() {
                          var stackedAreaChart = nv.models.stackedAreaChart()
                              .useInteractiveGuideline(true)
                              .x(function(d) { return d.año })
                              .y(function(d) { return d.value })
                              .controlLabels({stacked: 'Área',stream: 'Flujo',expanded: 'Apilada'})
                              .showControls(true)
                              .duration(300);

                          stackedAreaChart.xAxis.tickFormat(function(d) {  return d });

                          stackedAreaChart.yAxis.tickFormat(d3.format(',.2f'));

                          d3.select('#nv-stacked-area-chart svg')

                              .datum(stackedAreaChartData)
                              .transition().duration(1000)
                              .call(stackedAreaChart)
                              .each('start', function() {
                                  setTimeout(function() {
                                      d3.selectAll('#nv-stacked-area-chart *').each(function() {
                                          if(this.__transition__)
                                              this.__transition__.duration = 1;
                                      })
                                  }, 0)
                              });

                          nv.utils.windowResize(stackedAreaChart.update);

                          return stackedAreaChart;

                      });
        });

};

var ChartNvd3 = function () {
	"use strict";
    return {
        //main function
        init: function () {

            handleStackedAreaChart();


        }
    };
}();
