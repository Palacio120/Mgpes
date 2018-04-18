<?php
session_start();
include_once('../conf_tab.php');
  $DB =new ConfigDB;
  $DB->Mysql();
$codigo=$_SESSION["CODIGO_ES"];

if (isset($_FILES["Comprobante"]["tmp_name"])) {
  $Archivo1 =$_FILES["Comprobante"]["tmp_name"];
  $NombreArchivo1 =$_FILES["Comprobante"]["name"];
  $Tamaño1 =$_FILES["Comprobante"]["size"];
  $Tipo1 =$_FILES["Comprobante"]["type"];

  if ( $Archivo1 != "none"){
     $fp1 = fopen($Archivo1, "rb");
     $contenido1 = fread($fp1, $Tamaño1);
     $contenido1 = addslashes($contenido1);
     fclose($fp1);

     $DB->CONSULTA("UPDATE `mgps`.`conacytconclucion` SET `Archivo` = '$contenido1',`TipoFormato` = '$Tipo1',`NombreArch` = '$NombreArchivo1'WHERE `CODIGO_ES` = '$codigo';");
   }
   header('location: \Mgpes\PaginaWeb\Estudiante\BecaConacyt\Conclucion.php');
 }


 ?>
