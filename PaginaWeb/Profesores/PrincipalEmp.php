<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <div class="header">
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES" >Maestría en Gestion y Politícas de la Educación Superior</h2>
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
        <div class="usuario">
          <?php echo '<img style="width:130px" src="data:image/jpeg;base64,'.base64_encode($_SESSION["Fotografia"]).'" >' ;?>
          <p style="margin-top: 5px;"><?php  echo $_SESSION["nombre"]; ?></p>
          <p><b>Cargo:</b> Administrador</p>
          
        </div>
        <div class="menu_principal">
          <div class="cuadro"><a href="Aspirantes.php"><p>Aspirantes</p></a></div>
          <div class="cuadro"><a href="Reportes.php"><p>Reportes de Estudiantes</p></a></div>


        </div>
      </div>
    </div>
  </body>
</html>
