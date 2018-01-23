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
        include('conexion.Php');
        include('conf_tab.php');
         $DB=new ConfigDB;
         $DB->Mysql();

        $Id=$_POST["Id_value"];
        $No_tesis=$_SESSION["DireccionTesis"];

        $querry=$DB->CONSULTA("SELECT * FROM Reporte_trabajo where no_reporte= '$Id' and No_tesis='$No_tesis' ");



        
        echo "<script>window.location='../Reporte_trabajo.php'</script>";

       ?>

  </body>
</html>
