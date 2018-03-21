<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  echo "<script> window.location= '../index.Php'</script>";
}
include_once('..\..\Php\CONACYT\DesempeñoAcademicoPHP.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desempeño academico</title>
    <link href="../../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="../../Styles/Tablas.css" type="text/css">
    <link rel="stylesheet" href="../../Styles/Actividades.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../Scripts/main.Js"></script>
    <script type="text/javascript" src="../../Scripts/Actividades.js">

    </script>
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
            <h3>Desempeño academico</h3>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <a href="#" id="Primero" onclick="desplegar_primero()" style="display:block; padding-bottom:10px"><p>Primer Semetre</p></a>
              </div>
              <div class="desplegar" style="display: none;" id="primer">
                <div id="tabla1" style="display:block">
                <?php
                include_once('../../Php/conf_tab.php');
                $DB =new ConfigDB;
                $DB->Mysql();
                $codigo=$_SESSION["CODIGO_ES"];
                $bandera=true;

                $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Primer Semestre' and CODIGO_Es='$codigo'");
                while ($rs= $DB->Obtener_filas($consulta)) {
                  $bandera=false;
                }
                if ($bandera){ ?>
                  <h4>No hay datos almacenados</h4>
                  <button type="button" name="button" onclick="AgregarDesempeño(1)" class="btn btn-light" style="margin:10px;">Agregar</button>
                <?php }else{ ?>
                  <table>
                    <tr>
                      <th>Archivo</th>
                      <th>Entregado</th>
                    </tr>
                    <?php $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Primer Semestre' and CODIGO_Es='$codigo'");
                      while ($rs=$DB->Obtener_filas($consulta)) {
                     ?>
                    <tr>
                      <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                      <td><?php if (!is_null($rs["FormatoDeDesmpeño"])) {echo "SI";}else {echo "NO";} ?></td>
                    </tr>
                    <tr>
                      <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                      <td><?php if (!is_null($rs["ComprobanteCalificaciones"])) {echo "SI";}else {echo "NO";} ?></td>
                    </tr>
                  <?php } ?>
                  </table>
                  <button type="button" name="button" class="btn btn-ligth" style="margin:10px;" onclick="Cambiar('tabla1','1')">Agregar archivos</button>
                <?php } ?>
                </div>
                <div class="FormatoSemestre" id="1" style="display:none;">
                  <form action="<?Php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                      <table>
                        <tr>
                          <th>Archivo</th>
                          <th>Comprobación</th>
                          <th>Archivos</th>
                        </tr>
                        <tr>
                          <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                          <td>

                              <input type="radio" name="COMPROBACION11" value="SI" onchange="enable(11)" id="ComprobacionSi11">
                              <label style="display:inline;" for="ComprobacionSi11">SI</label>
                              <input type="radio" name="COMPROBACION11" value="NO" onchange="disable(11)"  id="ComprobacionNo11" checked>
                              <label style="display:inline;" for="ComprobacionNo11">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo11" id="11" disabled>
                          </td>
                        </tr>
                        <tr>
                          <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                          <td>

                              <input type="radio" name="COMPROBACION12" value="SI" onchange="enable(12)" id="ComprobacionSi12">
                              <label style="display:inline;" for="ComprobacionSi12">SI</label>
                              <input type="radio" name="COMPROBACION12" value="NO" onchange="disable(12)"  id="ComprobacionNo12" checked>
                              <label style="display:inline;" for="ComprobacionNo12">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo12" id="12" disabled>
                          </td>
                        </tr>
                      </table>
                      <input type="submit" name="Submit1" value="Submit" class="btn btn-ligth" style="float:right;margin:10px;">
                      <input type="button" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp();" class="btn btn-ligth" style="float:right;margin:10px;">
                  </form>
                </div>
              </div>
            </div>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <a href="#" id="Segundo" onclick="desplegar_Segundo()" style="display:block; padding-bottom:10px"><p>Segundo Semetre</p></a>
              </div>
              <div class="desplegar" style="display: none;" id="Segund">
                <div id="tabla2" style="display:block;">
                  <?php
                  include_once('../../Php/conf_tab.php');
                  $DB =new ConfigDB;
                  $DB->Mysql();
                  $codigo=$_SESSION["CODIGO_ES"];
                  $bandera=true;

                  $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Segundo Semestre' and CODIGO_Es='$codigo'");
                  while ($rs= $DB->Obtener_filas($consulta)) {
                    $bandera=false;
                  }
                  if ($bandera){ ?>
                    <h4>No hay datos almacenados</h4>
                    <button type="button" name="button" onclick="AgregarDesempeño(2);" class="btn btn-light" style="margin:10px;">Agregar</button>
                  <?php }else{ ?>
                    <table>
                      <tr>
                        <th>Archivo</th>
                        <th>Entregado</th>
                      </tr>
                      <?php $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Segundo Semestre' and CODIGO_Es='$codigo'");
                        while ($rs=$DB->Obtener_filas($consulta)) {
                       ?>
                      <tr>
                        <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                        <td><?php if (!is_null($rs["FormatoDeDesmpeño"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                      <tr>
                        <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                        <td><?php if (!is_null($rs["ComprobanteCalificaciones"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                    <?php } ?>
                    </table>
                    <button type="button" name="button" class="btn btn-ligth" style="margin:10px;" onclick="Cambiar('tabla2','2')">Agregar archivos</button>
                  <?php } ?>
                </div>
                <div class="FormatoSemestre" id="2" style="display:none;">
                  <form action="<?Php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                      <table>
                        <tr>
                          <th>Archivo</th>
                          <th>Comprobación</th>
                          <th>Archivos</th>
                        </tr>
                        <tr>
                          <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                          <td>

                              <input type="radio" name="COMPROBACION21" value="SI" onchange="enable(21)" id="ComprobacionSi21">
                              <label style="display:inline;" for="ComprobacionSi21">SI</label>
                              <input type="radio" name="COMPROBACION21" value="NO" onchange="disable(21)"  id="ComprobacionNo21" checked>
                              <label style="display:inline;" for="ComprobacionNo21">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo21" id="21" disabled>
                          </td>
                        </tr>
                        <tr>
                          <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                          <td>

                              <input type="radio" name="COMPROBACION22" value="SI" onchange="enable(22)" id="ComprobacionSi22">
                              <label style="display:inline;" for="ComprobacionSi22">SI</label>
                              <input type="radio" name="COMPROBACION22" value="NO" onchange="disable(22)"  id="ComprobacionNo22" checked>
                              <label style="display:inline;" for="ComprobacionNo22">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo22" id="22" disabled>
                          </td>
                        </tr>
                      </table>
                      <input type="submit" name="Submit1" value="Submit" class="btn btn-ligth" style="float:right;margin:10px;">
                      <input type="button" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp();" class="btn btn-ligth" style="float:right;margin:10px;">
                  </form>
                </div>
              </div>
            </div>
            <div id="Semestres"  style="display: block;">
              <div class="Semestre">
                <a href="#" id="Tercero" onclick="desplegar_Tercero()" style="display:block; padding-bottom:10px"><p>Tercer Semetre</p></a>
              </div>
              <div class="desplegar" style="display: none;" id="Tercer">
                <div id="tabla3" style="display:block">
                  <?php
                  include_once('../../Php/conf_tab.php');
                  $DB =new ConfigDB;
                  $DB->Mysql();
                  $codigo=$_SESSION["CODIGO_ES"];
                  $bandera=true;

                  $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Tercer Semestre' and CODIGO_Es='$codigo'");
                  while ($rs= $DB->Obtener_filas($consulta)) {
                    $bandera=false;
                  }
                  if ($bandera){ ?>
                    <h4>No hay datos almacenados</h4>
                    <button type="button" name="button" onclick="AgregarDesempeño(3);" class="btn btn-light" style="margin:10px;">Agregar</button>
                  <?php }else{ ?>
                    <table>
                      <tr>
                        <th>Archivo</th>
                        <th>Entregado</th>
                      </tr>
                      <?php $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Tercer Semestre' and CODIGO_Es='$codigo'");
                        while ($rs=$DB->Obtener_filas($consulta)) {
                       ?>
                      <tr>
                        <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                        <td><?php if (!is_null($rs["FormatoDeDesmpeño"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                      <tr>
                        <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                        <td><?php if (!is_null($rs["ComprobanteCalificaciones"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                    <?php } ?>
                    </table>
                    <button type="button" name="button" class="btn btn-ligth" style="margin:10px;" onclick="Cambiar('tabla3','3')">Agregar archivos</button>
                  <?php } ?>
                </div>

                <div class="FormatoSemestre" id="3" style="display:none;">
                  <form action="<?Php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                      <table>
                        <tr>
                          <th>Archivo</th>
                          <th>Comprobación</th>
                          <th>Archivos</th>
                        </tr>
                        <tr>
                          <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                          <td>

                              <input type="radio" name="COMPROBACION31" value="SI" onchange="enable(31)" id="ComprobacionSi31">
                              <label style="display:inline;" for="ComprobacionSi31">SI</label>
                              <input type="radio" name="COMPROBACION31" value="NO" onchange="disable(31)"  id="ComprobacionNo31" checked>
                              <label style="display:inline;" for="ComprobacionNo31">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo31" id="31" disabled>
                          </td>
                        </tr>
                        <tr>
                          <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                          <td>

                              <input type="radio" name="COMPROBACION32" value="SI" onchange="enable(32)" id="ComprobacionSi32">
                              <label style="display:inline;" for="ComprobacionSi32">SI</label>
                              <input type="radio" name="COMPROBACION32" value="NO" onchange="disable(32)"  id="ComprobacionNo32" checked>
                              <label style="display:inline;" for="ComprobacionNo32">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo32" id="32" disabled>
                          </td>
                        </tr>
                      </table>
                      <input type="submit" name="Submit1" value="Submit" class="btn btn-ligth" style="float:right;margin:10px;">
                      <input type="button" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp();" class="btn btn-ligth" style="float:right;margin:10px;">
                  </form>
                </div>
              </div>
            </div>
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <a href="#" id="Cuarto" onclick="desplegar_Cuarto()" style="display:block; padding-bottom:10px"><p>Cuarto Semetre</p></a>
              </div>
              <div class="desplegar" style="display: none;" id="Cuar">
                <div id="tabla4" style="display:block">
                  <?php
                  include_once('../../Php/conf_tab.php');
                  $DB =new ConfigDB;
                  $DB->Mysql();
                  $codigo=$_SESSION["CODIGO_ES"];
                  $bandera=true;

                  $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Cuarto Semestre' and CODIGO_Es='$codigo'");
                  while ($rs= $DB->Obtener_filas($consulta)) {
                    $bandera=false;
                  }
                  if ($bandera){ ?>
                    <h4>No hay datos almacenados</h4>
                    <button type="button" name="button" onclick="AgregarDesempeño(4);" class="btn btn-light" style="margin:10px;">Agregar</button>
                  <?php }else{ ?>
                    <table>
                      <tr>
                        <th>Archivo</th>
                        <th>Entregado</th>
                      </tr>
                      <?php $consulta=$DB->CONSULTA("SELECT * FROM conacytdesempeño WHERE semestre='Cuarto Semestre' and CODIGO_Es='$codigo'");
                        while ($rs=$DB->Obtener_filas($consulta)) {
                       ?>
                      <tr>
                        <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                        <td><?php if (!is_null($rs["FormatoDeDesmpeño"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                      <tr>
                        <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                        <td><?php if (!is_null($rs["ComprobanteCalificaciones"])) {echo "SI";}else {echo "NO";} ?></td>
                      </tr>
                    <?php } ?>
                    </table>
                    <button type="button" name="button" class="btn btn-ligth" style="margin:10px;" onclick="Cambiar('tabla4','4')">Agregar archivos</button>
                  <?php } ?>
                </div>

                <div class="FormatoSemestre" id="4" style="display:none; padding-bottom:55px;">
                  <form action="<?Php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                      <table>
                        <tr>
                          <th>Archivo</th>
                          <th>Comprobación</th>
                          <th>Archivos</th>
                        </tr>
                        <tr>
                          <td>Formato de evaluación del desempeño del becario (resguardo tanto en físico como electrónico), debidamente firmado por el asesor y coordinador académico del posgrado.</td>
                          <td>

                              <input type="radio" name="COMPROBACION41" value="SI" onchange="enable(41)" id="ComprobacionSi41">
                              <label style="display:inline;" for="ComprobacionSi41">SI</label>
                              <input type="radio" name="COMPROBACION41" value="NO" onchange="disable(41)"  id="ComprobacionNo41" checked>
                              <label style="display:inline;" for="ComprobacionNo41">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo41" id="41" disabled >
                          </td>
                        </tr>
                        <tr>
                          <td>Comprobante oficial de calificaciones y/o acta de evaluación.</td>
                          <td>

                              <input type="radio" name="COMPROBACION42" value="SI" onchange="enable(42)" id="ComprobacionSi42">
                              <label style="display:inline;" for="ComprobacionSi42">SI</label>
                              <input type="radio" name="COMPROBACION42" value="NO" onchange="disable(42)"  id="ComprobacionNo42" checked>
                              <label style="display:inline;" for="ComprobacionNo42">NO</label>

                          </td>
                          <td>
                            <input type="file" name="Archivo42" id="42" disabled>
                          </td>
                        </tr>
                      </table>
                      <input type="submit" name="Submit1" value="Submit" class="btn btn-ligth" style="float:right;margin:10px;">
                      <input type="button" name="Cancelar" value="Cancelar" onclick="CancelarNuevoAsp();" class="btn btn-ligth" style="float:right;margin:10px;">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <form  action="<?Php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="FormatoSemestre">
            <input type="hidden" name="Semestre" value="" id="SemestreForm">
          </form>
        </div>

      </div>
    </div>

  </body>
</html>
