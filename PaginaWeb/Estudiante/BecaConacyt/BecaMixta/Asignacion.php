<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  echo "<script> window.location= '../index.Php'</script>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Asignacion de beca</title>
    <link href="../../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="../../Styles/Tablas.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <?php include_once('../MenuLateral.php') ?>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="../principal.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        </div>
        <div class="opcciones">
        <a href="#" id="opccion" onclick="desplegar();"><img src="../../Image/Opcciones.png" alt="opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;background-color:white;">
            <ul>
              <li><a href="../PerfilEst.Php"  id="D-letras1" style="color: white" onclick="Buscar_perfil();">Perfil</a></li>
              <li><a href="../../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left:0px;">
          <div id="Titulo" class="Titulo">
            <h3>Asignacion de beca</h3>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <?php
                    include_once('../../Php/conf_tab.php');
                    $DB =new ConfigDB;
                    $DB->Mysql();
                    $codigo=$_SESSION["CODIGO_ES"];
                    $bandera=true;

                    $Consulta=$DB->CONSULTA("SELECT * FROM mixtaasignacion where CODIGO_ES='$codigo' ");
                    while ($rs= $DB->Obtener_filas($Consulta)) {
                      $bandera=false;
                    }
                     if ($bandera){ ?>
                      <h4>No hay datos almacenados almacenelos porfavor</h4>
                      <button type="button" name="button" class="btn btn-ligth" onclick="Cambiar('Semestres','Formato')">Subir Archivos</button>
                    <?php }else {
                      include_once('../../Php/conf_tab.php');
                        $DB =new ConfigDB;
                        $DB->Mysql();
                        $codigo=$_SESSION["CODIGO_ES"];

                        $Consulta=$DB->CONSULTA("SELECT * FROM mixtaasignacion where CODIGO_ES='$codigo' ");
                       ?>
                  <table width="100%" border="1" >
                    <tr>
                      <th>Archivo</th>
                      <th>Comprobación</th>
                    </tr>
                    <?php while ($rs= $DB->Obtener_filas($Consulta)) {  ?>
                    <tr>
                      <td>Comprobante de aceptación o de inscripción al Programa de posgrado</td>
                      <td><?php if (!is_null($rs['ComprobanteArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Documento probatorio de promedio mínimo antecedente</td>
                      <td><?php if (!is_null($rs['promedioArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Certificado o constancia oficial del nivel inmediato anterior.</td>
                      <td><?php if (!is_null($rs['ConstanciaNivArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Certificado de calificaciones promedio recuperado.</td>
                      <td><?php if (!is_null($rs['PromediRecArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Identificación oficial con fotografía y firma del solicitante (IFE, cédula profesional o pasaporte vigente)</td>
                      <td><?php if (!is_null($rs['IdentificacionArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Carta compromiso en el formato establecido (dedicación exclusiva)</td>
                      <td><?php if (!is_null($rs['CartacompromisoArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Copia de VISA y “Tarjeta de residente temporal estudiante” (nacional distinta a la mexicana)</td>
                      <td><?php if (!is_null($rs['CopiaVISAArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Asignación de beca</td>
                      <td><?php if (!is_null($rs['AsignacionArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Convenio de asignación de beca</td>
                      <td><?php if (!is_null($rs['ConvenioArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Constancia dirigida al ISSSTE</td>
                      <td><?php if (!is_null($rs['ISSSTEArchivo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                  <?php } ?>
                  </table>
                  <button type="button" name="button" class="btn btn-ligth" onclick="Cambiar('Semestres','Formato')" style="float: right; margin-right: 10px;">Subir Archivos</button>
              <?php } ?>
              </div>
            </div>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <div id="Formato" style="display:none;">
                  <form class="" action="../../Php/CONACYT/AsignacionPhp.Php" method="post" enctype="multipart/form-data">
                    <table width="100%" border="1" >
                      <tr>
                        <th>Archivo</th>
                        <th>Comprobación</th>
                        <th>Archivos</th>
                      </tr>
                      <tr>
                        <td>Comprobante de aceptación o de inscripción al Programa de posgrado</td>
                        <td>

                            <input type="radio" name="COMPROBACION1" value="SI" onchange="enable(1)" id="ComprobacionSi1">
                            <label for="ComprobacionSi1">SI</label>
                            <input type="radio" name="COMPROBACION1" value="NO" onchange="disable(1)"  id="ComprobacionNo1" checked>
                            <label for="ComprobacionNo1">NO</label>

                        </td>
                        <td>
                          <input type="file" name="Comprobante" id="1" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Documento probatorio de promedio mínimo antecedente</td>
                        <td>
                          <fieldset>
                            <input type="radio" name="COMPROBACION2" value="SI" onchange="enable(2)" id="ComprobacionSi2">
                            <label for="ComprobacionSi2">SI</label>
                            <input type="radio" name="COMPROBACION2" value="NO" onchange="disable(2)"  id="ComprobacionNo2" checked>
                            <label for="ComprobacionNo2">NO</label>
                          </fieldset>
                        </td>
                        <td>
                          <input type="file" name="promedio" id="2" disabled accept="application/pdf"  >
                        </td>
                      </tr>
                      <tr>
                        <td>Certificado o constancia oficial del nivel inmediato anterior.</td>
                        <td>
                          <input type="radio" name="COMPROBACION3" value="SI" onchange="enable(3)" id="ComprobacionSi3">
                          <label for="ComprobacionSi3">SI</label>
                          <input type="radio" name="COMPROBACION3" value="NO" onchange="disable(3)"  id="ComprobacionNo3" checked>
                          <label for="ComprobacionNo3">NO</label>
                        </td>
                        <td>
                          <input type="file" name="ConstanciaNiv" id="3" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Certificado de calificaciones promedio recuperado.</td>
                        <td>
                          <input type="radio" name="COMPROBACION4" value="SI" onchange="enable(4)" id="ComprobacionSi4">
                          <label for="ComprobacionSi4">SI</label>
                          <input type="radio" name="COMPROBACION4" value="NO" onchange="disable(4)"  id="ComprobacionNo4" checked>
                          <label for="ComprobacionNo4">NO</label>
                        </td>
                        <td>
                          <input type="file" name="PromedioRec" id="4" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Identificación oficial con fotografía y firma del solicitante (IFE, cédula profesional o pasaporte vigente)</td>
                        <td>
                          <input type="radio" name="COMPROBACION5" value="SI" onchange="enable(5)" id="ComprobacionSi5">
                          <label for="ComprobacionSi5">SI</label>
                          <input type="radio" name="COMPROBACION5" value="NO" onchange="disable(5)"  id="ComprobacionNo5" checked>
                          <label for="ComprobacionNo5">NO</label>
                        </td>
                        <td>
                          <input type="file" name="Identificacion" id="5" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Carta compromiso en el formato establecido (dedicación exclusiva)</td>
                        <td>
                          <input type="radio" name="COMPROBACION6" value="SI" onchange="enable(6)" id="ComprobacionSi6">
                          <label for="ComprobacionSi6">SI</label>
                          <input type="radio" name="COMPROBACION6" value="NO" onchange="disable(6)"  id="ComprobacionNo6" checked>
                          <label for="ComprobacionNo6">NO</label>
                        </td>
                        <td>
                          <input type="file" name="CartaCompromiso" id="6" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Copia de VISA y “Tarjeta de residente temporal estudiante” (nacional distinta a la mexicana)</td>
                        <td>
                          <input type="radio" name="COMPROBACION7" value="SI" onchange="enable(7)" id="ComprobacionSi7">
                          <label for="ComprobacionSi7">SI</label>
                          <input type="radio" name="COMPROBACION7" value="NO" onchange="disable(7)"  id="ComprobacionNo7" checked>
                          <label for="ComprobacionNo7">NO</label>
                        </td>
                        <td>
                          <input type="file" name="CopiaVISA" id="7" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Asignación de beca</td>
                        <td>
                          <input type="radio" name="COMPROBACION8" value="SI" onchange="enable(8)" id="ComprobacionSi8">
                          <label for="ComprobacionSi8">SI</label>
                          <input type="radio" name="COMPROBACION8" value="NO" onchange="disable(8)"  id="ComprobacionNo8" checked>
                          <label for="ComprobacionNo8">NO</label>
                        </td>
                        <td>
                          <input type="file" name="Asignacion" id="8" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Convenio de asignación de beca</td>
                        <td>
                          <input type="radio" name="COMPROBACION9" value="SI" onchange="enable(9)" id="ComprobacionSi9">
                          <label for="ComprobacionSi9">SI</label>
                          <input type="radio" name="COMPROBACION9" value="NO" onchange="disable(9)"  id="ComprobacionNo9" checked>
                          <label for="ComprobacionNo9">NO</label>
                        </td>
                        <td>
                          <input type="file" name="Convenio" id="9" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Constancia dirigida al ISSSTE</td>
                        <td>
                          <input type="radio" name="COMPROBACION10" value="SI" onchange="enable(10)" id="ComprobacionSi10">
                          <label for="ComprobacionSi10">SI</label>
                          <input type="radio" name="COMPROBACION10" value="NO" onchange="disable(10)"  id="ComprobacionNo10" checked>
                          <label for="ComprobacionNo10">NO</label>
                        </td>
                        <td>
                            <input type="file" name="ISSSTE" id="10" disabled accept="application/pdf" >
                        </td>
                      </tr>
                    </table>
                    <input type="button" class="btn btn-ligth" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp()"style="margin-Top:10px;float:right; margin-right: 24px;">
                    <input type="submit" class="btn btn-ligth" value="Submit" style="margin-Top:10px;float:right; margin-right: 24px;">

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>
