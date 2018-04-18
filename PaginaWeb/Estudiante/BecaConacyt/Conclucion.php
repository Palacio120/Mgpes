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
    <title>Conclucion de beca</title>
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
            <h3>Conclución de beca</h3>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <?php
                    include_once('../../Php/conf_tab.php');
                    $DB =new ConfigDB;
                    $DB->Mysql();
                    $codigo=$_SESSION["CODIGO_ES"];
                    $bandera=true;

                    $Consulta=$DB->CONSULTA("SELECT * FROM conacytconclucion where CODIGO_ES='$codigo' ");
                    while ($rs= $DB->Obtener_filas($Consulta)) {
                      $bandera=false;
                    }
                     if ($bandera){ ?>
                      <h4 style="margin-left:20px;">No ha concluido su BECA CONACYT</h4>
                      <h5 style="margin-left:20px;"> *Espere a que un administrador lo de de alta en el sistema</h5>
                      <a href="..\BecasCONACYT.php"><button type="button" class="btn btn-light" style="float:right; color:black;margin-right:20px;" name="button">Regresar</button></a>

                    <?php }else {
                      include_once('../../Php/conf_tab.php');
                        $DB =new ConfigDB;
                        $DB->Mysql();
                        $codigo=$_SESSION["CODIGO_ES"];

                        $Consulta=$DB->CONSULTA("SELECT * FROM conacytconclucion where CODIGO_ES='$codigo' ");
                       ?>
                <table>
                    <tr>
                      <th>Tipo de Archivo</th>
                      <th>Archivo Guardado</th>
                    </tr>
                  <?php while ($rs= $DB->Obtener_filas($Consulta)) {

                      if ($rs["Conclucion"]=='Objetivo cumplido') {
                        # en caso de que sea dado de alta como  cumplido
                        ?>
                        <tr>
                          <td>Al cumplir con el objeto de la beca, (Carta de Reconocimiento).</td>
                          <td>
                            <?php
                              if (!is_null($rs["Archivo"])) {
                                echo "SI";
                              }else {
                                echo "NO";
                              }
                            ?>
                        </td>
                        </tr>
                        <?php
                      }else {
                        ?>
                        <tr>
                          <th>De no haber cumplido con el objeto de la beca,(Carta de No Adeudo).</th>
                          <td>
                            <?php
                              if (!is_null($rs["Archivo"])) {
                                echo "SI";
                              }else {
                                echo "NO";
                              }
                            ?>
                          </td>
                        </tr>
                <?php
                      }
                     } ?>
                </table>
                <button type="button" class="btn btn-light" name="button" onclick="Cambiar('Semestres','Formato')" style="float:Right;margin-right:20px">Agregar Documentos</button>
              <?php } ?>
              </div>
            </div>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <div id="Formato" style="display:none;">
                  <form class="" action="../../Php/CONACYT/Conclucion.php" method="post" enctype="multipart/form-data">
                    <table width="100%" border="1" >
                      <tr>
                        <th>Tipo</th>
                        <th>Comprobación</th>
                        <th>Archivos</th>
                      </tr>
                      <?php
                      include_once('../../Php/conf_tab.php');
                        $DB =new ConfigDB;
                        $DB->Mysql();
                      $codigo=$_SESSION["CODIGO_ES"];

                      $Consulta=$DB->CONSULTA("SELECT * FROM conacytconclucion where CODIGO_ES='$codigo' ");
                      while ($rs= $DB->Obtener_filas($Consulta)) {

                          if ($rs["Conclucion"]=='Objetivo cumplido') { ?>
                      <tr>
                        <td>cumple con el objeto de la beca,(Carta de Reconocimiento).</td>
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
                    <?php }else {?>
                      <tr>
                        <td>No cumple con el objeto de la beca,(Carta de No Adeudo).</td>
                        <td>
                            <input type="radio" name="COMPROBACION2" value="SI" onchange="enable(2)" id="ComprobacionSi2">
                            <label for="ComprobacionSi1">SI</label>
                            <input type="radio" name="COMPROBACION2" value="NO" onchange="disable(2)"  id="ComprobacionNo2" checked>
                            <label for="ComprobacionNo1">NO</label>
                        </td>
                        <td>
                          <input type="file" name="Comprobante" id="2" disabled accept="application/pdf" >
                        </td>
                      </tr>
                    <?php }
                  } ?>
                    </table>
                    <input type="submit" class="btn btn-primary" value="Submit" style="margin-Top:10px;float:right; margin-right: 24px;">
                    <input type="button" class="btn btn-ligth" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp()"style="margin-Top:10px;float:right;margin-right: 24px;">


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
