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
        include_once('funciones.php');

        $con=conexion();


          $Materias=$_POST["Materias"];
          $Semestre=$_POST["Semestre"];
          $Proyecto=$_POST["Proyecto"];
          $extracurriculares=$_POST["extracurriculares"];
          $investigacion=$_POST["investigacion"];
          $Ponencias=$_POST["Ponencias"];
          $Asesorias=$_POST["Asesorias"];
          $Tutorias=$_POST["Tutorias"];
          $Movilidad=$_POST["Movilidad"];
          $Vinculación=$_POST["Vinculación"];
          $No_tesis=$_SESSION["DireccionTesis"];
          $Producción=$_POST["Producción"];

          $Materias=CambiarEnter($Materias);
          $Semestre=CambiarEnter($Semestre);
          $Proyecto=CambiarEnter($Proyecto);
          $extracurriculares=CambiarEnter($extracurriculares);
          $investigacion=CambiarEnter($investigacion);
          $Ponencias=CambiarEnter($Ponencias);
          $Asesorias=CambiarEnter($Asesorias);
          $Tutorias=CambiarEnter($Tutorias);
          $Movilidad=CambiarEnter($Movilidad);
          $Vinculación=CambiarEnter($Vinculación);
          $Producción=CambiarEnter($Producción);


           $query=("INSERT INTO `plan_de_trabajo` VALUES ('0','$Semestre', '$Materias', '$Proyecto', '$Producción', '$extracurriculares', '$investigacion', '$Ponencias', '$Asesorias', '$Tutorias', '$Movilidad', '$Vinculación', '$No_tesis',NULL,NULL,NULL)");
         $rs=mysqli_query($con,$query);

         if(isset($rs)){
          
          echo "<script>window.location='../Estudiante/Planes_trabajo.php'</script>";
         }



       ?>

  </body>
</html>
