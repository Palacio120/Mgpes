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
        include('../../conf_tab.php');
        
        $DB= new ConfigDB();
        $DB->Mysql();

        $probatorio=$_FILES["Probatorio"]["tmp_name"];
        $tamnio_rep=$_FILES["Probatorio"]["size"];
        $nombre=$_FILES["Probatorio"]["name"];
        $Tipo_Rep=$_FILES["Probatorio"]["type"];
        $idActividades= $_SESSION["Primer_informe"];

        if ($probatorio != "none" ){
             $fp = fopen($probatorio, "rb");
             $contenido = fread($fp, $tamnio_rep);
             $contenido = addslashes($contenido);
             fclose($fp);
         
        

 
              $DB->CONSULTA("UPDATE `actividades` set Firmado='$contenido', Nombre='$nombre', Tipo='$Tipo_Rep' where idActividades= '$idActividades'");



              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";


        }

       ?>

  </body>
</html>
