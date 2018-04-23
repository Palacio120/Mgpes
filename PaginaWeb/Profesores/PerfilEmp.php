<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    echo "<script> window.location= '/Mgpes/PaginaWeb/index.php'</script>";
  }
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="../Styles/Perfiles.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <div id="menu" class="menu_lateral" style="width: 0px; border: hidden;">
        <a href="#" class="boton-cerrar" onclick="ocultar2()">×</a>
        <ul class="menu">
          <!--<li><a href="#">Requisitos de ingresos</a></li>
          <li><a href="#">Beca CONACYT</a></li>
          <li><a href="#">Desempeño academico</a></li>-->
          <li><a href="Estudiantes.php">Estudiantes</a></li>
          <li><a href="Reportes.php">Reportes de Estudiantes</a></li>
          <li><a href="Aspirantes.php">Aspirantes</a></li>
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>

      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
          <h2 title="MGPES"> <a href="principal.Php">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        <div class="opcciones">
          <a href="#" id="opccion" onclick="desplegar();"><img src="../Image/Opcciones.png" alt="Opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="#"  id="D-letras1" style="color: white">Perfil</a></li>
              <li><a href="../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left: 0px;">
        </div>

        <div class="footer">

        </div>
      </div>
    </div>
  </body>
</html>
