/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3 & 4
Version: 4.1.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.1/admin/
*/

var handleLineChart = function() {
    "use strict";
    
    nv.addGraph(function() {
        
        var sin = [], cos = [];
        for (var i = 0; i < 100; i++) {
            sin.push({x: i, y:  Math.sin(i/10) });
            cos.push({x: i, y: .5 * Math.cos(i/10)});
        }
        var lineChartData = [
            { values: sin, key: 'Sine Wave', color: COLOR_GREEN }, 
            { values: cos, key: 'Cosine Wave', color: COLOR_BLUE }
        ];
        
        var lineChart = nv.models.lineChart()
            .options({
                transitionDuration: 300,
                useInteractiveGuideline: true
            });

        lineChart.xAxis
            .axisLabel('Time (s)')
            .tickFormat(d3.format(',.1f'));

        lineChart.yAxis
            .axisLabel('Voltage (v)')
            .tickFormat(function(d) {
                if (d == null) {
                    return 'N/A';
                }
                return d3.format(',.2f')(d);
            });

        d3.select('#nv-line-chart').append('svg')
            .datum(lineChartData)
            .call(lineChart);

        nv.utils.windowResize(lineChart.update);

        return lineChart;
    });
};

var handleBarHorizontalChart =function(){

    "use strict";
    
    //var datos=$.getJSON('/api/cifras-nacionales/pib-actividad-economica/1');
    
    var valorAnio= document.getElementById("select-anio").value;
    var valorTipoCifraNacional= document.getElementById("select-tipo-cifra-nacional").value;
    //console.log(valorTipoCifraNacional);
    //var valorTipoCifraNacional=1;      
   
   $.get('/api/cifras-nacionales/pib-actividad-economica/'+valorTipoCifraNacional+'/'+valorAnio,function (data){
        
                            //console.log('dentra de la funcion',valorTipoCifraNacional);
                            if(valorTipoCifraNacional==1){
                                var datosJSON=[
                                      
                                      {
                                        "key": "Millones de USD",
                                        "color": "#1f77b4",
                                        "values": data
                                      }
                                    ];
                            }else if(valorTipoCifraNacional==2){
                                 var datosJSON=[
                                      
                                      {
                                        "key": "Participacion %",
                                        "color": "#48C9B0",
                                        "values": data
                                      }
                                    ];

                            }else{
                                var datosJSON=[
                                      
                                      {
                                        "key": "Variación anual %",
                                        "color": "#B9770E",
                                        "values": data
                                      }
                                    ];
                            }
                           //console.log(datosJSON);

                nv.addGraph(function() {
                    //console.log('si entro');
                        //location.reload();
                      var chart = nv.models.multiBarHorizontalChart()
                          .x(function(d) { return d.label })
                          .y(function(d) { return d.value })
                          .showValues(true)
                          .duration(500)
                          .margin({top: 30, right: 20, bottom: 50, left: 475})

                      chart.yAxis
                          .tickFormat(d3.format(',.2f'));

                      d3.select('#chart svg')
                            
                          .datum(datosJSON)
                          .call(chart);

                      nv.utils.windowResize(chart.update);

                      return chart;
                    });
                //console.log(chart);
            });
    

    
   

}

var handleBarChart = function() {
    "use strict";
    
    //var datos=$.getJSON('/api/cifras-nacionales/pib-actividad-economica/1');
    
   $.get('/api/cifras-nacionales/pib-provincia/1/2007',function (data){
 
                var datosJSON=[{
                     key: 'Pib Por Provincia',
                     values:data
                     
                }];

                
                nv.addGraph(function() {
                var barChart = nv.models.discreteBarChart()
                        .x(function(d) { return d.key })
                        .y(function(d) { return d.value })
                        //.labelType(function(d){ return d.data.label; })
                        .staggerLabels(true) 
                        .showValues(true)

                        .duration(250);
                    //barChart.xAxis.rotateLabels(500);
                    barChart.yAxis.axisLabel("vALOR");
                    barChart.xAxis.axisLabel('CÓDIGO PROVINCIA');
                
                    d3.select('#nv-bar-chart svg')
                    .datum(datosJSON)
                    
                    .call(barChart);
                    nv.utils.windowResize(barChart.update);
                    
                
                    return barChart;
                });
            });
   


   /*var barChartData = [{
        key: 'Pib Por Actividad Economica',
        values: [
            { 'label' : 'A', 'value' : 29}, 
            { 'label' : 'B', 'value' : 15 }, 
            { 'label' : 'C', 'value' : 32 }, 
            { 'label' : 'D', 'value' : 196 },  
            { 'label' : 'E', 'value' : 44 },  
            { 'label' : 'F', 'value' : 98 },  
            { 'label' : 'G', 'value' : 13 },  
            { 'label' : 'H', 'value' : 5 }
        ]
    }];
    
    
    
    
    nv.addGraph(function() {
        var barChart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .showValues(true)
            .duration(250);
        
        barChart.yAxis.axisLabel("vALOR");
        barChart.xAxis.axisLabel('CIIUS');
    
        d3.select('#nv-bar-chart').append('svg').datum(barChartData).call(barChart);
        nv.utils.windowResize(barChart.update);
    
        return barChart;
    });*/
}


var handlePieAndDonutChart = function() {
    "use strict";

    var valorAnio= document.getElementById("select-anio-pib-zona").value;

    var valorTipoCifra= document.getElementById("select-tipo-cifra-pib-zona").value;

    

    $.get('/api/cifras-nacionales/pib-zona/'+valorTipoCifra+'/'+valorAnio,function (data){
      
                      var pieChartData1 = data;
                   if (valorTipoCifra==1) {
                      nv.addGraph(function() {

                          var pieChart = nv.models.pieChart()

                            .x(function(d) {return d.key+": "+d.label })
                            .y(function(d) { return d.value })
                            .labelType(function(d){ return d.data.key; })
                            .showLabels(true)
                            .labelSunbeamLayout(true)
                            .labelThreshold(.05)
                            .donut(true) 
                            .donutRatio(0.05)
                            .margin({top: 100, right: 50, bottom: 5})
                            .labelThreshold(0.05);
                            /*Eliminar la grafica anterior*/
                           var svg = d3.select("#nv-pie-chart svg");
                            svg.selectAll("*").remove(); 

                          d3.select('#nv-pie-chart svg')
                              .datum(pieChartData1)
                              .transition().duration(1200)
                              .call(pieChart);

                        return pieChart;

                      });
                  }else{
                       
                    if(valorTipoCifra==2){

                                var datosJSON=[
                                      
                                      {
                                        "key": "Participacion %",
                                        "color": "#2ECC71",
                                        "values": data
                                      }
                                    ];
                            }else if(valorTipoCifra==3){
                                 console.log('estoy aqui');
                                 var datosJSON=[
                                      
                                      {
                                        "key": "Variacion Anual %",
                                        "color": "#F4D03F",
                                        "values": data
                                      }
                                    ];

                            }else{
                                var datosJSON=[
                                      
                                      {
                                        "key": "Contribucion a la Variación anual %",
                                        "color": "#C0392B",
                                        "values": data
                                      }
                                    ];
                            }
                            //console.log(datosJSON);
                    nv.addGraph(function() {
                    //console.log('si entro');
                        //location.reload();

                      var pieChart = nv.models.multiBarHorizontalChart()
                          .x(function(d) { return d.label })
                          .y(function(d) { return d.value })
                          .showValues(true)
                          .duration(500)
                          .margin({top: 30, right: 20, bottom: 50, left: 475})

                      pieChart.yAxis
                          .tickFormat(d3.format(',.2f'));
                          /*Eliminar la grafica anterior*/
                          var svg = d3.select("#nv-pie-chart svg");
                            svg.selectAll("*").remove(); 

                      d3.select('#nv-pie-chart svg')
                          .datum(datosJSON)
                          .call(pieChart);

                      nv.utils.windowResize(pieChart.update);

                      return pieChart;
                    });
                  }

                      nv.addGraph(function() {

                        var chart = nv.models.pieChart()
                            .x(function(d) { return d.label })
                            .y(function(d) { return d.value })
                            .showLabels(true)
                            .labelThreshold(.05)
                            .labelType("percent")
                            .donut(true) 
                            .donutRatio(0.35);



                          d3.select('#nv-donut-chart svg')
                              .datum(pieChartData1)
                              .transition().duration(1200)
                              .call(chart);

                          return chart;
                      });



    });
   
};


var handleStackedAreaChart = function() {
    "use strict";
    

          var stackedAreaChartData = [{
        'key' : 'Bolívar,Guayas,Los Ríos, Santa Elena y Galápagos',
        'color' : COLOR_RED,
        'values' : [ [ 2007 , 13.356778764352] , [ 2008 , 13.611196863271] , [ 2009 , 6.895903006119] , [ 2010 , 6.9939633271352] , [ 2011 , 6.7241510257675] , [ 2012 , 5.5611293669516] , [ 2013 , 5.6086488714041] , [ 2014 , 5.4962849907033] , [ 2015 , 6.9193153169279] , [ 2016 , 7.0016334389777] ] 
        }];

    console.log(stackedAreaChartData);
   
    
    nv.addGraph(function() {
        var stackedAreaChart = nv.models.stackedAreaChart()
            .useInteractiveGuideline(true)
            .x(function(d) { return d[0] })
            .y(function(d) { return d[1] })
            .controlLabels({stacked: 'Stacked'})
            .showControls(false)
            .duration(300);

        stackedAreaChart.xAxis.tickFormat(function(d) { return d3.time.format('%x')(new Date(d)) });
        stackedAreaChart.yAxis.tickFormat(d3.format(',.4f'));

        d3.select('#nv-stacked-area-chart')
            .append('svg')
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

  
    
};


var handleStackedBarChart = function() {
    "use strict";
    
    var stackedBarChartData = [{
        key: 'Stream 1',
        'color' : COLOR_RED,
        values: [
            { x:1, y: 10}, { x:2, y: 15}, { x:3, y: 16}, { x:4, y: 20}, { x:5, y: 57}, { x:6, y: 42}, { x:7, y: 12}, { x:8, y: 65}, { x:9, y: 34}, { x:10, y: 52}, 
            { x:11, y: 23}, { x:12, y: 12}, { x:13, y: 22}, { x:14, y: 22}, { x:15, y: 48}, { x:16, y: 54}, { x:17, y: 32}, { x:18, y: 13}, { x:19, y: 21}, { x:20, y: 12}
        ]
    },{
        key: 'Stream 2',
        'color' : COLOR_ORANGE,
        values: [
            { x:1, y: 10}, { x:2, y: 15}, { x:3, y: 16}, { x:4, y: 45}, { x:5, y: 67}, { x:6, y: 34}, { x:7, y: 43}, { x:8, y: 65}, { x:9, y: 32}, { x:10, y: 12}, 
            { x:11, y: 43}, { x:12, y: 45}, { x:13, y: 32}, { x:14, y: 32}, { x:15, y: 38}, { x:16, y: 64}, { x:17, y: 42}, { x:18, y: 23}, { x:19, y: 31}, { x:20, y: 22}
        ]
    },{
        key: 'Stream 2',
        'color' : COLOR_BLACK,
        values: [
            { x:1, y: 20}, { x:2, y: 25}, { x:3, y: 26}, { x:4, y: 30}, { x:5, y: 57}, { x:6, y: 52}, { x:7, y: 22}, { x:8, y: 75}, { x:9, y: 44}, { x:10, y: 62}, 
            { x:11, y: 35}, { x:12, y: 15}, { x:13, y: 25}, { x:14, y: 25}, { x:15, y: 45}, { x:16, y: 55}, { x:17, y: 35}, { x:18, y: 15}, { x:19, y: 25}, { x:20, y: 15}
        ]
    }];

    nv.addGraph({
        generate: function() {
            var stackedBarChart = nv.models.multiBarChart()
                .stacked(true)
                .showControls(false);
            
            var svg = d3.select('#nv-stacked-bar-chart').append('svg').datum(stackedBarChartData);
            svg.transition().duration(0).call(stackedBarChart);
            return stackedBarChart;
        }
    });
};



var ChartNvd3 = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleLineChart();
            handleBarChart();
            handleBarHorizontalChart();
            handlePieAndDonutChart();
            handleStackedAreaChart();
            handleStackedBarChart();
            
        }
    };
}();