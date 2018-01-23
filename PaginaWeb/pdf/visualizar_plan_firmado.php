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
        include('../php/conf_tab.php');

        $Id=$_POST["Id_Seleccionado"];
        $No_tesis=$_SESSION["DireccionTesis"];
        $DB= new ConfigDB;
        $DB->Mysql();


             $query=$DB->CONSULTA("SELECT img_reporte, Tipo_Rep, nombre_Rep FROM `plan_de_trabajo` where id= '$Id' and No_tesis='$No_tesis'");



              while ($rs= $DB->Obtener_filas($query)){
                  $Tipo= $rs["Tipo_Rep"];
                  $nombre= $rs["nombre_Rep"];
                  $contenido= $rs["img_reporte"];
                }

           if (!is_null($contenido)){

             header("Content-type: $Tipo");
             header("Content-Disposition: attachment; filename=".$nombre);
             echo  $contenido;
           }else {
             echo "<script>alert('No se encuentra el arvhivo'); window.location='../Estudiante/Planes_trabajo.php'</script>";
           }


       ?>

  </body>
</html>
