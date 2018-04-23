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

      $consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`mixtaasignacion` WHERE CODIGO_ES= '$codigo'");

      if ($DB->total_Filas($consulta)>=1) {

      }else {
        $DB->CONSULTA("INSERT INTO `mgps`.`mixtaasignacion` VALUES
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
                      NULL);
                      ");

      }


      if (isset($_FILES["CartaAceptacion"]["tmp_name"])) {
        $Archivo8 =$_FILES["CartaAceptacion"]["tmp_name"];
        $NombreArchivo8 =$_FILES["CartaAceptacion"]["name"];
        $Tamaño8 =$_FILES["CartaAceptacion"]["size"];
        $Tipo8 =$_FILES["CartaAceptacion"]["type"];

        if ( $Archivo8 != "none" )  {
        $fp8 = fopen($Archivo8, "rb");
        $contenido8 = fread($fp8, $Tamaño8);
        $contenido8 = addslashes($contenido8);
        fclose($fp8);

        $DB->CONSULTA("UPDATE `mgps`.`mixtaasignacion` SET  `CartaAceptacion` = '$contenido8',`Aceptacion_Tipo` = '$Tipo8', `Aceptacion_Nom_temp` = '$NombreArchivo8'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["Plan"]["tmp_name"])) {
        $Archivo9 =$_FILES["Plan"]["tmp_name"];
        $NombreArchivo9 =$_FILES["Plan"]["name"];
        $Tamaño9 =$_FILES["Plan"]["size"];
        $Tipo9 =$_FILES["Plan"]["type"];

        if ( $Archivo9 != "none" )  {
        $fp9 = fopen($Archivo9, "rb");
        $contenido9 = fread($fp9, $Tamaño9);
        $contenido9 = addslashes($contenido9);
        fclose($fp9);

        $DB->CONSULTA("UPDATE `mgps`.`mixtaasignacion` SET  `PlanTrabajo` = '$contenido9',`Plan_Tipo` = '$Tipo9', `Plan_Nom_temp` = '$NombreArchivo9'WHERE `CODIGO_ES` = '$codigo';");

        }
      }

      if (isset($_FILES["Carta"]["tmp_name"])) {
        $Archivo10 =$_FILES["Carta"]["tmp_name"];
        $NombreArchivo10 =$_FILES["Carta"]["name"];
        $Tamaño10 =$_FILES["Carta"]["size"];
        $Tipo10 =$_FILES["Carta"]["type"];

        if ( $Archivo10 != "none" )  {
        $fp10 = fopen($Archivo10, "rb");
        $contenido10 = fread($fp10, $Tamaño10);
        $contenido10 = addslashes($contenido10);
        fclose($fp10);

        $DB->CONSULTA("UPDATE `mgps`.`mixtaasignacion` SET  `CartaCompromiso` = '$contenido10', `Carta_Tipo` = '$Tipo10',, `Carta_Nom_temp` ='$NombreArchivo10'WHERE `CODIGO_ES` = '$codigo';");

        }
      }




            echo "<script>window.location='/Mgpes/PaginaWeb/Estudiante/BecaConacyt/BecaMixta/Asignacion.php'</script>";
