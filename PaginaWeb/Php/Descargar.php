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
        include('conf_tab.php');

        $Id=$_POST["Id_value"];
        $No_tesis=$_SESSION["DireccionTesis"];
        $DB= new ConfigDB;
        $DB->Mysql();


             $query=$DB->CONSULTA("SELECT img_reporte, Tipo_Rep, nombre_Rep FROM `reporte_trabajo` where no_reporte= '$Id' and No_tesis='$No_tesis'");


             if (isset($Id)){


              while ($rs= $DB->Obtener_filas($query)){
                  $Tipo= $rs["Tipo_Rep"];
                  $nombre= $rs["nombre_Rep"];
                  $contenido= $rs["img_reporte"];
                }


             header("Content-type: $Tipo");
             header("Content-Disposition: attachment; filename=".$nombre);
             echo  $contenido;
             echo "<script>window.location='../Reporte_trabajo.php'</script>";
           }else {
             echo "<script>if(confirm('desea regresar')){ window.location='../Reporte_trabajo.php';  }else {return false;}</script>";
           }


       ?>

  </body>
</html>
