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
        include('conexion.php');
        $con=conexion();



          $Situacion=$_POST["Situacion"];
          $Fecha=$_POST["Fecha"];
          $No_tesis=$_SESSION["DireccionTesis"];
          $Progreso=$_POST["Progreso"];
          $Reportes=$_FILES['Reporte']["tmp_name"];
          $tamnio_rep=$_FILES['Reporte']["size"];
          $nombre_Rep=$_FILES["Reporte"]["name"];
          $Tipo_Rep=$_FILES["Reporte"]["type"];


          if ( $Reportes != "none" ){
             $fp = fopen($Reportes, "rb");
             $contenido = fread($fp, $tamnio_rep);
             $contenido = addslashes($contenido);
             fclose($fp);

                 $query=("INSERT INTO `reporte_trabajo` VALUES ('0','$Situacion', '$Fecha', '$No_tesis','$Progreso','$contenido','$nombre_Rep','$Tipo_Rep')");
                 $rs=mysqli_query($con,$query);

          }else {
              echo "problemas al insertertar el en servidor";
          }


        echo "<script>window.location='../Estudiante/Reporte_trabajo.php'</script>";

       ?>

  </body>
</html>
