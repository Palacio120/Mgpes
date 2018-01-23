<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= 'index.Php'</script>";
  }
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="Styles/Tablas.css" type="text/css">
    <link rel="stylesheet" href="Styles/Evaluacion.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="Scripts/main.Js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="page">
      <div id="menu" class="menu_lateral" style="width: 0px; border: hidden;">
        <a href="#" class="boton-cerrar" onclick="ocultar2()">×</a>
        <ul class="menu">
          <li><a href="Reporte_trabajo.Php">Reportes</a></li>
          <li><a href="EvaluacionEs.php">Evalución</a></li>
          <!--<li><a href="#">Vinculaciones</a></li>
          <li><a href="#">Tesis</a></li>
          <li><a href="#">Produccion</a></li>-->
          <li><a class="logout" href="php/logout.php">Logout</a></li>
        </ul>
      </div>

      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
          <h2 title="MGPES"> <a href="principal.Php">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        <div class="opcciones">
          <a href="#" id="opccion" onclick="desplegar();"><img src="Image\Opcciones.png" alt="Opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEst.Php"  id="D-letras1" style="color: white">Perfil</a></li>
              <li><a href="php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div  id="centro">
          <div class="Tabs_Evaluacion"  >
            <div class="tabs">
              <ul>
                <li id="S"class="Selected" onclick=""><label>Horario</label></li>
                <li id="U" class="UnSelected" onclick="Select();"><label>Calificaciones</label></li>
              </ul>
            </div>

            <div id="Selected"  class="Horario" style="display:block;">
              <legend></legend>

              <?php
                include("php/conf_tab.php");
                $DB= new ConfigDB();
                $DB->Mysql();
                $CodigoEs=$_SESSION["CODIGO_ES"];
                $Periodo='2017-B';
                $Consulta=$DB->CONSULTA("SELECT 'Periodo' from ofertaacademica  join asignaturasest on asignaturasest.Codigo_Asignatura= ofertaacademica.Codigo_Asignatura where CodigoEs='$CodigoEs' group by Periodo;");


               ?>
              <form class="" action="" method="post"style="padding:10px;">

                <select class="" name="Ciclo">
                    <option value=""><?php echo $Periodo; ?></option>
                    <?php while ($rs=$DB->Obtener_filas($Consulta) ) { ?>
                      <option><?php echo $rs["Periodo"]; ?></option>;
                  <?php  } ?>
                </select>
                <table style="width: 90%;">
                  <tbody>
                    <tr>
                      <th>NRC</th>
                      <th>CVE</th>
                      <th>Materia</th>
                      <th>Horario</th>
                      <th class="day">L</th>
                      <th class="day">M</th>
                      <th class="day">I</th>
                      <th class="day">J</th>
                      <th class="day">V</th>
                      <th class="day">S</th>
                      <th>Edif</th>
                      <th>Aula</th>
                      <th>Profesor</th>
                    </tr>

                    <?php
                      $Consulta=$DB->CONSULTA("SELECT * from ofertaacademica join asignaturasest on ofertaacademica.NRC=asignaturasest.NRC where asignaturasest.CodigoEs='$CodigoEs' AND ofertaacademica.Periodo='$Periodo'");
                      while ($rs=$DB->Obtener_filas($Consulta)) {

                      }?>

                  </tbody>
                </table>
            </form>
            </div>
            <div id="UnSelected" class="Calificaciones" style="display: none;">
              <form class="" action="" method="post" style="padding:10px;">
                <legend></legend>
                <select class="" name="Ciclo">
                  <option value="">2017-B</option>
                </select>
                <table>
                  <tbody>
                    <tr>
                      <th>NRC</th>
                      <th>Clave</th>
                      <th style="width: 365px">Materia</th>
                      <th style="width:200px;">Calificacion</th>
                      <th>Fecha</th>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
      </div>
      </div>

      <div class="footer">



      </div>
    </div>
  </body>
</html>
