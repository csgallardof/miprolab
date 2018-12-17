<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte de Alertas Productivas</title>
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
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 14px; color:#000000"><strong>FICHA DE ALERTAS PRODUCTIVAS</strong></div>
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 14px; color:#000000"><strong>Consejo Sectorial Económico y Productivo
                            @if(!is_null($PeriodoSemanaCspReporte))
                            ({{$PeriodoSemanaCspReporte->fecha_inicio}} a {{$PeriodoSemanaCspReporte->fecha_final}})
                            @endif
                            </strong>
                          </div><br>

                        <div class="box-body">
                            <style>
                              .divTable { display: table; width: 100%; border-collapse: collapse; font-size: 13px; }
                              .divTableRow { display: table-row; }
                              .divTableCell { display: table-cell; border: 1px solid black; padding: 1em; }
                            </style>

                            @if(sizeof($data1)!=0)

                            <?php foreach($data1 as $reporteAlertaMipro){ ?>

                              <div class="divTable" style="border: 1px solid #000;" >
                                  <div class="divTableRow">
                                    <div class="divTableCell">ALERTA:</div>
                                    <div class="divTableCell"><?= $reporteAlertaMipro->tema; ?></div>
                                  </div>
                                  <div class="divTableRow">
                                    <div class="divTableCell">Descripción de la Alerta:</div>
                                    <div class="divTableCell"><?php echo strip_tags($reporteAlertaMipro->descripcion); ?></div>
                                  </div>
                                  <div class="divTableRow">
                                    <div class="divTableCell">Fecha de identificación de Alerta:</div>
                                    <div class="divTableCell"><?= $reporteAlertaMipro->fecha_atencion; ?></div>
                                  </div>
                                  <div class="divTableRow">
                                    <div class="divTableCell">Solución propuesta:</div>
                                    <div class="divTableCell"><?= $reporteAlertaMipro->solucion_propuesta; ?></div>
                                  </div>
                                  <?php
                                    if($reporteAlertaMipro->nombreprovincia != "No especificado" && $reporteAlertaMipro->nombrecanton != "No especificado") {
                                        echo "<div class='divTableRow'>";
                                        echo "<div class='divTableCell'>Lugar: </div>";
                                        echo "<div class='divTableCell'>" . $reporteAlertaMipro->nombreprovincia . " / " . $reporteAlertaMipro->nombrecanton . "</div>";
                                        echo "</div>";
                                    }
                                  ?>
                              </div>

                              <?php
                                echo "<br />";
                                if($reporteAlertaMipro->acciones != 'Ninguna') {
                                    echo "<div style='font-size: 13px;'>Acciones realizadas:</div>";
                                    $actions = explode("<li>", $reporteAlertaMipro->acciones);
                                    foreach ($actions as $value) {
                                      if (!empty($value)) {
                                        echo "<div style='font-size: 13px;text-align: justify;text-justify: inter-word;'>- " . strip_tags($value) . "</div>";
                                      }
                                      echo "<br>";
                                    }
                                }
                              ?>

                              <br /><br />

                            <?php } ?>

                            @endif

                        </div>

            </div>

</body>

</html>
