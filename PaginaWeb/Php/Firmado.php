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
        $con=conexion();

          $id=$_POST["Id_Firma"];
          $No_tesis=$_SESSION["DireccionTesis"];
          $Reportes=$_FILES["img_firma"]["tmp_name"];
          $tamnio_rep=$_FILES["img_firma"]["size"];
          $nombre=$_FILES["img_firma"]["name"];
          $Tipo_Rep=$_FILES["img_firma"]["type"];


          if ( $Reportes != "none" ){
             $fp = fopen($Reportes, "rb");
             $contenido = fread($fp, $tamnio_rep);
             $contenido = addslashes($contenido);
             fclose($fp);

                 $query=("UPDATE `plan_de_trabajo` set img_reporte='$contenido', Nombre_rep= '$nombre', Tipo_rep='$Tipo_Rep' where id='$id' and  No_tesis='$No_tesis'");

                 $rs=mysqli_query($con,$query);

          }else {
              echo "problemas al insertertar el en servidor";
          }

        echo "<script>window.location='../Estudiante/Planes_trabajo.php'</script>";

       ?>

  </body>
</html>
