<?php
  session_start();
include('../conf_tab.php');
$DB=new ConfigDB();
$DB->Mysql();
$id=$_GET["id"];
$conclucion= $_POST["conclucion"];

$Consulta=$DB->CONSULTA("INSERT INTO conacytconclucion values(0, '$conclucion','$id',Null,null,null)");

header('location: \Mgpes\PaginaWeb\Profesores\Estudiantes\BECACONACYT\Conclucion.php')
 ?>
