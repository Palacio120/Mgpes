<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  echo "<script> window.location= '/Mgpes/PaginaWeb/index.php'</script>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Asignacion de beca</title>
    <link href="../../../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="../../../Styles/Tablas.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <?php include_once('../../MenuLateral.php') ?>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../../../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../../../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="../../principal.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        </div>
        <div class="opcciones">
        <a href="#" id="opccion" onclick="desplegar();"><img src="../../../Image/Opcciones.png" alt="opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;background-color:white;">
            <ul>
              <li><a href="../../PerfilEst.Php"  id="D-letras1" style="color: white" onclick="Buscar_perfil();">Perfil</a></li>
              <li><a href="../../../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left:0px;">
          <div id="Titulo" class="Titulo">
            <h3>Asignación de beca</h3>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <?php
                    include_once('../../../Php/conf_tab.php');
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
                      include_once('../../../Php/conf_tab.php');
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
                      <td>Carta de aceptación oficial de la institución, empresa, organismo o dependencia donde se realizará la estancia.</td>
                      <td><?php if (!is_null($rs['CartaAceptacion'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Plan de trabajo.</td>
                      <td><?php if (!is_null($rs['PlanTrabajo'])) {?>
                        Si
                      <?php }else {?>
                        No
                      <?php } ?></td>
                    </tr>
                    <tr>
                      <td>Carta compromiso</td>
                      <td><?php if (!is_null($rs['CartaCompromiso'])) {?>
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
                  <form class="" action="../../../Php/CONACYT/AsignacionMixtaPhp.Php" method="post" enctype="multipart/form-data">
                    <table width="100%" border="1" >
                      <tr>
                        <th>Archivo</th>
                        <th>Comprobación</th>
                        <th>Archivos</th>
                      </tr>
                      <tr>
                        <td>Carta de aceptación oficial de la institución, empresa, organismo o dependencia donde se realizará la estancia.</td>
                        <td>

                            <input type="radio" name="COMPROBACION1" value="SI" onchange="enable(1)" id="ComprobacionSi1">
                            <label for="ComprobacionSi1">SI</label>
                            <input type="radio" name="COMPROBACION1" value="NO" onchange="disable(1)"  id="ComprobacionNo1" checked>
                            <label for="ComprobacionNo1">NO</label>

                        </td>
                        <td>
                          <input type="file" name="CartaAceptacion" id="1" disabled accept="application/pdf" >
                        </td>
                      </tr>
                      <tr>
                        <td>Plan de trabajo.</td>
                        <td>
                          <fieldset>
                            <input type="radio" name="COMPROBACION2" value="SI" onchange="enable(2)" id="ComprobacionSi2">
                            <label for="ComprobacionSi2">SI</label>
                            <input type="radio" name="COMPROBACION2" value="NO" onchange="disable(2)"  id="ComprobacionNo2" checked>
                            <label for="ComprobacionNo2">NO</label>
                          </fieldset>
                        </td>
                        <td>
                          <input type="file" name="Plan" id="2" disabled accept="application/pdf"  >
                        </td>
                      </tr>
                      <tr>
                        <td>Carta compromiso (debidamente firmada por el becario, coordinador de posgrado y asesor o tutor).</td>
                        <td>
                          <fieldset>
                            <input type="radio" name="COMPROBACION3" value="SI" onchange="enable(3)" id="ComprobacionSi3">
                            <label for="ComprobacionSi3">SI</label>
                            <input type="radio" name="COMPROBACION3" value="NO" onchange="disable(3)"  id="ComprobacionNo3" checked>
                            <label for="ComprobacionNo3">NO</label>
                          </fieldset>
                        </td>
                        <td>
                          <input type="file" name="Carta" id="3" disabled accept="application/pdf"  >
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
