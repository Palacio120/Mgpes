<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
      include('../conf_tab.php');

      $DB= new ConfigDB();
      $DB->Mysql();
      $codigo=$_SESSION["CODIGO_ES"];

      $consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`conacytasignacion` WHERE CODIGO_ES= '$codigo'");

      if ($DB->total_Filas($consulta)>=1) {

      }else {
        $DB->CONSULTA("INSERT INTO `mgps`.`conacytasignacion` VALUES
                      (0,
                      '$codigo',
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL,
                      NULL);
                      ");

      }

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

           $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET `ComprobanteArchivo` = '$contenido1',`ComprobanteTypo` = '$Tipo1',`ComprobanteNombreTmp` = '$NombreArchivo1'WHERE `CODIGO_ES` = '$codigo';");
         }
      }

      if (isset($_FILES["promedio"]["tmp_name"])) {
        $Archivo2 =$_FILES["promedio"]["tmp_name"];
        $NombreArchivo2 =$_FILES["promedio"]["name"];
        $Tamaño2 =$_FILES["promedio"]["size"];
        $Tipo2 =$_FILES["promedio"]["type"];

        if ( $Archivo2 != "none" )  {
        $fp2 = fopen($Archivo2, "rb");
        $contenido2 = fread($fp2, $Tamaño2);
        $contenido2 = addslashes($contenido2);
        fclose($fp2);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET `promedioArchivo` = '$contenido2',`promedioTypo` = '$Tipo2',`promedioNombreTmp` = '$NombreArchivo2'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["ConstanciaNiv"]["tmp_name"])) {
        $Archivo3 =$_FILES["ConstanciaNiv"]["tmp_name"];
        $NombreArchivo3 =$_FILES["ConstanciaNiv"]["name"];
        $Tamaño3 =$_FILES["ConstanciaNiv"]["size"];
        $Tipo3 =$_FILES["ConstanciaNiv"]["type"];

        if ( $Archivo3 != "none" )  {
        $fp3 = fopen($Archivo3, "rb");
        $contenido3 = fread($fp3, $Tamaño3);
        $contenido3 = addslashes($contenido3);
        fclose($fp3);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `ConstanciaNivArchivo` = '$contenido3',`ConstanciaNivTypo` = '$Tipo3',`ConstanciaNivTmp` = '$NombreArchivo3'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["PromedioRec"]["tmp_name"])) {
        $Archivo4 =$_FILES["PromedioRec"]["tmp_name"];
        $NombreArchivo4 =$_FILES["PromedioRec"]["name"];
        $Tamaño4 =$_FILES["PromedioRec"]["size"];
        $Tipo4 =$_FILES["PromedioRec"]["type"];

        if ( $Archivo4 != "none" )  {
        $fp4 = fopen($Archivo4, "rb");
        $contenido4 = fread($fp4, $Tamaño4);
        $contenido4 = addslashes($contenido4);
        fclose($fp4);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `PromediRecArchivo` = '$contenido4',`PromediRecTypo` = '$Tipo4',`PromediRecTmp` = '$NombreArchivo4'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["Identificacion"]["tmp_name"])) {
        $Archivo5 =$_FILES["Identificacion"]["tmp_name"];
        $NombreArchivo5 =$_FILES["Identificacion"]["name"];
        $Tamaño5 =$_FILES["Identificacion"]["size"];
        $Tipo5 =$_FILES["Identificacion"]["type"];

        if ( $Archivo5 != "none" )  {
        $fp5 = fopen($Archivo5, "rb");
        $contenido5 = fread($fp5, $Tamaño5);
        $contenido5 = addslashes($contenido5);
        fclose($fp5);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `IdentificacionArchivo` = '$contenido5',`IdentificacionTypo` = '$Tipo5',`IdentificacionTmp` = '$NombreArchivo5'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["CartaCompromiso"]["tmp_name"])) {
        $Archivo6 =$_FILES["CartaCompromiso"]["tmp_name"];
        $NombreArchivo6 =$_FILES["CartaCompromiso"]["name"];
        $Tamaño6 =$_FILES["CartaCompromiso"]["size"];
        $Tipo6 =$_FILES["CartaCompromiso"]["type"];

        if ( $Archivo6 != "none" )  {
        $fp6 = fopen($Archivo6, "rb");
        $contenido6 = fread($fp6, $Tamaño6);
        $contenido6 = addslashes($contenido6);
        fclose($fp6);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `CartacompromisoArchivo` = '$contenido6',`CartacompromisoTypo` = '$Tipo6',`CartacompromisoTmp` = '$NombreArchivo6'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["CopiaVISA"]["tmp_name"])) {
        $Archivo7 =$_FILES["CopiaVISA"]["tmp_name"];
        $NombreArchivo7 =$_FILES["CopiaVISA"]["name"];
        $Tamaño7 =$_FILES["CopiaVISA"]["size"];
        $Tipo7 =$_FILES["CopiaVISA"]["type"];

        if ( $Archivo7 != "none" )  {
        $fp7 = fopen($Archivo7, "rb");
        $contenido7 = fread($fp7, $Tamaño7);
        $contenido7 = addslashes($contenido7);
        fclose($fp7);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `CopiaVISAArchivo` = '$contenido7',`CopiaVISATypo` = '$Tipo7',`CopiaVISATmp` = '$NombreArchivo7'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["Asignacion"]["tmp_name"])) {
        $Archivo8 =$_FILES["Asignacion"]["tmp_name"];
        $NombreArchivo8 =$_FILES["Asignacion"]["name"];
        $Tamaño8 =$_FILES["Asignacion"]["size"];
        $Tipo8 =$_FILES["Asignacion"]["type"];

        if ( $Archivo8 != "none" )  {
        $fp8 = fopen($Archivo8, "rb");
        $contenido8 = fread($fp8, $Tamaño8);
        $contenido8 = addslashes($contenido8);
        fclose($fp8);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `AsignacionArchivo` = '$contenido8',`AsignacionTypo` = '$Tipo8', `AsignacionTmp` = '$NombreArchivo8'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["Convenio"]["tmp_name"])) {
        $Archivo9 =$_FILES["Convenio"]["tmp_name"];
        $NombreArchivo9 =$_FILES["Convenio"]["name"];
        $Tamaño9 =$_FILES["Convenio"]["size"];
        $Tipo9 =$_FILES["Convenio"]["type"];

        if ( $Archivo9 != "none" )  {
        $fp9 = fopen($Archivo9, "rb");
        $contenido9 = fread($fp9, $Tamaño9);
        $contenido9 = addslashes($contenido9);
        fclose($fp9);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `ConvenioArchivo` = '$contenido9',`ConvenioTypo` = '$Tipo9', `ConvenioTmp` = '$NombreArchivo9'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["ISSSTE"]["tmp_name"])) {
        $Archivo10 =$_FILES["ISSSTE"]["tmp_name"];
        $NombreArchivo10 =$_FILES["ISSSTE"]["name"];
        $Tamaño10 =$_FILES["ISSSTE"]["size"];
        $Tipo10 =$_FILES["ISSSTE"]["type"];

        if ( $Archivo10 != "none" )  {
        $fp10 = fopen($Archivo10, "rb");
        $contenido10 = fread($fp10, $Tamaño10);
        $contenido10 = addslashes($contenido10);
        fclose($fp10);

        $DB->CONSULTA("UPDATE `mgps`.`conacytasignacion` SET  `ISSSTEArchivo` = '$contenido10', `ISSSTETypo` = '$Tipo10', `ISSSTETmp` ='$NombreArchivo10'WHERE `CODIGO_ES` = '$codigo';");

        }
      }




            echo "<script>window.location='../../Estudiante/BecaConacyt/Asignacion.php'</script>";
