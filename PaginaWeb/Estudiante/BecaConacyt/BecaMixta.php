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
    <title>Becas Mixta</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <?php include_once('MenuLateral.php') ?>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="principal.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        </div>
        <div class="opcciones">
        <a href="#" id="opccion" onclick="desplegar();"><img src="../Image/Opcciones.png" alt="opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEst.Php"  id="D-letras1" style="color: white" onclick="Buscar_perfil();">Perfil</a></li>
              <li><a href="../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div  id="centro" style="marginLeft:0px;">
          <div class="menu_centrado">
            <div class="cuadro"><a href="BecaConacyt\BecaMixta\Asignacion.php"><p>Asignación de beca Mixta</p></a></div>
            <div class="cuadro"><a href="BecaConacyt\BecaMixta\DesempenoAcademico.php"><p>Desempeño academico de beca Mixta</p></a></div>
          </div>

        </div>

      </div>
    </div>

  </body>
</html>
