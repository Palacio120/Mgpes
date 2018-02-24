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
        include('../../conf_tab.php');
        
        $DB= new ConfigDB();
        $DB->Mysql();




          $Materias=$_POST["Nombre_Curso"];
          $CODIGO_ES= $_SESSION["CODIGO_ES"];
          $Id_Materia=$_SESSION["M_Cuarto"];
          $Calendario=$_POST["Calendario"];
          $calificacion=$_POST["Calificacion"];
          $NombreProfesor=$_POST["Profesor"];





              
              $rs1=$DB->CONSULTA("INSERT INTO `materias_cursadas` VALUES (0,'$Materias', '$Calendario', '$Id_Materia', '$calificacion', '$NombreProfesor')");



              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";


        

       ?>

  </body>
</html>
