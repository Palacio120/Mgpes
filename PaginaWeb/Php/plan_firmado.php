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



             $query=("UPDATE reporte_trabajo set Semestre='$Semestre', Materias='$Materias', Proyecto_tesis='$Proyecto', Produccion='$Producción', extracurriculares='$extracurriculares',Gestión_de_apoyo='$investigacion', Asistencia_eventos='$Ponencias', Asesoria_esp='$Asesorias' ,Necesidades_tut='$Tutorias', Movilidad='$Movilidad', Vinculacion=$Vinculación  where id= '$Id' and No_tesis='$No_tesis'");
             $rs=mysqli_query($con,$query);

        if (!isset($rs)){
            echo "problemas al insertertar el en servidor";
        }

        echo "<script>window.location='../Estudiante/Planes_Trabajo.php'</script>";

       ?>

  </body>
</html>