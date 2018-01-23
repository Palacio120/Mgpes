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

        $Id=$_POST["Id_value"];
        $User=$_SESSION["DireccionTesis"];

        $query=("DELETE from plan_de_trabajo  where id= '$Id' and No_tesis= '$User'");

        try {
            $rs=mysqli_query($con,$query);
        } catch (Exception $e) {
          echo "<script>alert('problemas al eliminar el reporte')</script>";
        }


          echo "<script>window.location='../Estudiante/planes_trabajo.php'</script>";

       ?>

  </body>
</html>
