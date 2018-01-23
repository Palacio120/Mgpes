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

        $Id=$_POST["Id_value"];
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



             $query=("UPDATE plan_de_trabajo set Semestre='$Semestre', Materias='$Materias', Proyecto_tesis='$Proyecto', Produccion='$Producción', extracurriculares='$extracurriculares',Gestión_de_apoyo='$investigacion', Asistencia_eventos='$Ponencias', Asesoria_esp='$Asesorias' ,Necesidades_tut='$Tutorias', Movilidad='$Movilidad', Vinculacion='$Vinculación' , img_reporte=NULL, Nombre_rep= NULL where id= '$Id' and No_tesis='$No_tesis'");

            mysqli_query($con,$query);


        echo "<script>window.location='../Estudiante/Planes_Trabajo.php'</script>";

       ?>

  </body>
</html>
