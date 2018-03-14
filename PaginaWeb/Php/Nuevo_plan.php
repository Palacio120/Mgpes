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
        include_once('funciones.php');

        $DB=new ConfigDB;
        $DB->Mysql();


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


           $query=$DB->CONSULTA("INSERT INTO `plan_de_trabajo` VALUES ('0','$Semestre', '$Materias', '$Proyecto', '$Producción', '$extracurriculares', '$investigacion', '$Ponencias', '$Asesorias', '$Tutorias', '$Movilidad', '$Vinculación', '$No_tesis',NULL,NULL,NULL,NULL)");

         if(isset($rs)){

          echo "<script>window.location='../Estudiante/Planes_trabajo.php'</script>";
         }



       ?>

  </body>
</html>
