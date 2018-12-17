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

                          <div align="center" style="text-align: center; font-family: calibri; font-size: 16px; color:#000000"><strong>Ministerio de Industrias y Productividad</strong></div>
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 16px; color:#000000"><strong>FICHA DE HECHOS RELEVANTES</strong></div>
                          <div align="center" style="text-align: center; font-family: calibri; font-size: 16px; color:#000000"><strong>Consejo Sectorial Económico y Productivo
                            @if(!is_null($PeriodoSemanaCspReporte))
                             ({{$PeriodoSemanaCspReporte->fecha_inicio}} a {{$PeriodoSemanaCspReporte->fecha_final}})
                            @endif
                            </strong>
                          </div><br><br>

                        <div class="box-body">

                        @if(sizeof($data1)!=0)

                            <?php foreach($data1 as $reporteHechoMipro){ ?>

                              <style>
                              table {
                                  border-collapse: collapse;
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
                                        echo "<td>" . $reporteHechoMipro->lugar . " / " . $reporteHechoMipro->nombreprovincia . " / " . $reporteHechoMipro->nombrecanton . "</td>";
                                    else
                                        echo "<td>" . $reporteHechoMipro->lugar . "</td>";
                                  ?>
                                </tr>
                              </table>
                              <br /><br />

                            <?php } ?>

                        @endif

                        @if(sizeof($data3)!=0)
                        <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Agricultura y Ganadería</u></b> <br></p><br>




                        <?php foreach($data3 as $reporteHechoMAG){ ?>
                            <div style="margin: 0 0.6cm 2 0.6cm">
                              <p style="font-family: calibri;text-align: justify;text-justify: inter-word;" >
                                <strong>Tema: </strong>  <?= $reporteHechoMAG->tema; ?><br>
                                <strong>Fuente: </strong><?= $reporteHechoMAG->fuente;?><br>
                                <strong>Fecha Reporte: </strong><?= $reporteHechoMAG->fecha_reporte; ?><br>
                                <strong>Porcentaje de avance: </strong><?= $reporteHechoMAG->porcentaje_avance;?>%<br>
                                <strong>Lugar: </strong><?= $reporteHechoMAG->lugar; ?><br>
                                <strong>Descripción: </strong>
                                <?php echo strip_tags($reporteHechoMAG->descripcion); ?>
                              </p>
                            </div>
                            <?php } ?>

                        @endif

                        @if(sizeof($data2)!=0)
                        <p ALIGN="left" style="font-family:calibri; margin: 0 0cm 0 1cm"><b> <u>Ministerio de Acuacultura y Pesca </u></b> <br></p><br>



                        <?php foreach($data2 as $reporteHechoMAP){ ?>
                            <div style="margin: 0 0.6cm 2 0.6cm">
                              <p style="font-family: calibri;text-align: justify;text-justify: inter-word;" >
                                <strong>Tema: </strong>  <?= $reporteHechoMAP->tema; ?><br>
                                <strong>Fuente: </strong><?= $reporteHechoMAP->fuente;?><br>
                                <strong>Fecha Reporte: </strong><?= $reporteHechoMAP->fecha_reporte; ?><br>
                                <strong>Porcentaje de avance: </strong><?= $reporteHechoMAP->porcentaje_avance;?>%<br>
                                <strong>Lugar: </strong><?= $reporteHechoMAP->lugar; ?><br>
                                <strong>Descripción: </strong>
                                <?php echo strip_tags($reporteHechoMAP->descripcion); ?>
                              </p>
                            </div>
                            <?php } ?>
                        @endif

                        </div>




            <!-- <p style="margin: 30px; font-family: calibri"  ALIGN="justify" >
                <br><br>
                <strong>Consolidado por:</strong><br><br><br>
                <strong><u>_______________________________________</u></strong><br>
                <strong >Sr. Felipe Altamirano</strong> <br>
                <strong>Secretario AD-HOC del Consejo Sectorial Económico y Productivo</strong>
                <br><br><span>Esta información ha sido obtenida del módulo de Hechos Relevantes y Alertas de la plataforma de Inteligencia Productiva</span>
                <span><br><br>Ministerio de Industrias y Productividad</span>
            </p> -->
            </div>

</body>

</html>
