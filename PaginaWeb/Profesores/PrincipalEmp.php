<?php
session_start();
if (!isset($_SESSION["user"])) {
   echo "<script> window.location = 'index.php' </script>";
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="Scripts/Main.Js"></script>
  </head>
  <body>
    <div class="page">
      <div id="menu" class="menu_lateral" style="width: 0px; border:hidden;">
        <a href="#" class="boton-cerrar" onclick="ocultar()">×</a>
        <ul class="menu">
          <li><a href="#">Reportes</a></li>
          <li><a href="#">Evidencias</a></li>
          <li><a href="#">Evaluación</a></li>
        </ul>
      </div>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()" style="display: inline;"> <img src="image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
          <h2 title="MGPES">Maestría en Gestion y Politícas de la Educación Superior</h2>
        </div>
        <div class="opcciones">
          <a href="#" id="opccion" onclick="desplegar();"><img src="Image\Opcciones.png" alt="BOpcc" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEmp.php"  id="D-letras1" style="color: white">Perfil</a></li>
              <li><a href="php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>

            <form id="form_perfil" action="php/Perfil_Es.php" method="post">
             <input type="hidden" name="Usuario" value=<?php echo $_SESSION["nombre"] ?>>
           </form>

          </div>
        </div>
        <h3 id="bienvenido" style="=marginLeft:0px;"><?php echo $_SESSION["nombre"]; ?> Bienvenido!!!</h3>
      </div>

      <div class="footer">

      </div>
    </div>
  </body>
</html>
