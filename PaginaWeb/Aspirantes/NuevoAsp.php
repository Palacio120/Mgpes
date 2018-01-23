<?php
session_start();
include "Php/conexion.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='principalEmp.php'</script>";
}elseif (isset($_SESSION['usuario'])) {
  echo "<script>window.location='principal.php'</script>";
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
      
        </div>
      </div>
    </div>
    <div class="footer">
    </div>
  </div>