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
        include('../conf_tab.php');
        
        $DB= new ConfigDB();
        $DB->Mysql();




          $Materias=$_POST["Nombre_Curso"];
          $CODIGO_ES= $_SESSION["CODIGO_ES"];
          $Id_Materia=$_SESSION["M_Primero"];
          $Calendario=$_POST["Calendario"];
          $calificacion=$_POST["Calificacion"];
          $NombreProfesor=$_POST["Profesor"];
          $Id= $_POST["Id_Materia"];




              
              $DB->CONSULTA("UPDATE `materias_cursadas` set Nombre_Curso='$Materias' , Calendario= '$Calendario',  Calificacion='$calificacion',  NombreProfesor='$NombreProfesor' where Id_Materias= '$Id_Materia' and Id='$Id' ");



              echo "<script>window.location='../../Estudiante/Actividades.php'</script>";


        

       ?>

  </body>
</html>
