<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Hechos Relevantes</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"> </div>

        <div class="col-md-8">
                      <div class="box">

                        <div id="banner" style="width:100%">
                            <div class="inline-block">
                                <img class="float: left; display: inline-block;" src="img/logo_mipro.jpg" width="125" height="125" alt="">
                                <img align="right" class="float: right; display: inline-block;" src="imagenes/logos_pdf_gob_ec.jpg"  width="275" height="139" alt="">
                            </div>
                        </div><br />

                        <div style="font-family: calibri; font-size: 10px; color:#000000">Fecha de Reporte: <?= date("Y-m-d H:i:s"); ?></div>
                        <div style="font-family: calibri; font-size: 10px; color:#000000">Fuente: Sistema de Inteligencia Productiva - MIPRO</div>

                        <br />

                          <div align="center" style="text-align: center; font-family: calibri; font-size: 14px; color:#000000"><strong>Ministerio de Industrias y Productividad</strong></div>
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 14px; color:#000000"><strong>FICHA DE HECHOS RELEVANTES</strong></div>
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 14px; color:#000000"><strong>Consejo Sectorial Económico y Productivo
                            @if(!is_null($PeriodoSemanaCspReporte))
                             ({{$PeriodoSemanaCspReporte->fecha_inicio}} a {{$PeriodoSemanaCspReporte->fecha_final}})
                            @endif
                            </strong>
                          </div>

                        <div class="box-body">

                        @if(sizeof($data1)!=0)

                            <?php foreach($data1 as $reporteHechoMipro){ ?>

                              <style>
                              table {
                                  border-collapse: collapse;
                                  font-size: 13px;
                              }
                              table, th, td {
                                  border: 1px solid black;
                              }
                              </style>

                              <table style="width:100%">
                                <tr>
                                  <th><strong>HECHO RELEVANTE: </strong></th>
                                  <th><?= $reporteHechoMipro->tema; ?></th>
                                </tr>
                                <tr>
                                  <td><strong>Descripción del hecho: </strong></td>
                                  <td><?php echo strip_tags($reporteHechoMipro->descripcion); ?></td>
                                </tr>
                                <tr>
                                  <td><strong>Fecha: </strong></td>
                                  <td><?= $reporteHechoMipro->fecha_reporte; ?></td>
                                </tr>
                                <tr>
                                  <td><strong>Lugar: </strong></td>
                                  <?php
                                    if($reporteHechoMipro->nombreprovincia != "No especificado" && $reporteHechoMipro->nombrecanton != "No especificado")
                                        echo "<td>" . $reporteHechoMipro->lugar . " / " . $reporteHechoMipro->nombreprovincia . " / " . $reporteHechoMipro->nombrecanton . "</td><br />";
                                    else
                                        echo "<td>" . $reporteHechoMipro->lugar . "</td><br />";
                                  ?>
                                </tr>
                              </table>

                            <?php } ?>

                        @endif

                        </div>
            </div>

</body>

</html>
