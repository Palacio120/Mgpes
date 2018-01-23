<?php
session_start();
include "Php/conexion.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='Estudiante/principalEmp.php'</script>";
}elseif (isset($_SESSION['usuario'])) {
  echo "<script>window.location='Estudiante/principal.php'</script>";
}
 ?>
<!Doctype html>
<html lang="es">
<head>

  <meta charset="utf-8" http-equiv="content-type"/>
  <title>login</title>
  <link href="Styles/Default.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="page">
      <div class="header">
        <div class="title">
          <h1><a href="http://mgpes.cucea.udg.mx/">Maestría en Gestion y Politícas de la Educación Superior</a></h1>
        </div>
      </div>
    <div class="main">
      <div class="center">
        <div id="centrar">
          <input id="tab-1" type="radio" name="tab-group" checked="checked">
          <label for="tab-1">Estudiantes</label>
          <input id="tab-2" type="radio" name="tab-group">
          <label for="tab-2">Empleados</label>
         <div id="Contenido">
           <div class="section" id="contenido-1">
             <form action="php/logEst.php" method="post" class="login">
               <p>Login para estudiantes</p>
               <div><label>Username</label><input title="Se requiere el nombre del usuario" name="usuario" type="text" required></div>
               <div><label>Password</label><input title="Se requiere la contraseña"name="password" type="password" required></div>
               <div><input name="login" type="submit" value="login" ></div>
             </form>
           </div>
          <div class="section" id="contenido-2">
            <form class="login" action="php/logEmp.php" method="post">
                <p>login para empleados de la maestria.</p>
                <div ><label> Username</label><input type="text" name="user" required></div>
                <div><label>Password</label><input type="password" name="password" required></div>
                <div><input name="login" type="submit" value="login"></div>
            </form>
          </div>
         </div>
        </div>
      </div>

    </div>
    <div class="footer">
            <a href="" style="bottom: 10px; color: black;">Nuevo Aspirante</a>
    </div>
  </div>
</body>
</html>
