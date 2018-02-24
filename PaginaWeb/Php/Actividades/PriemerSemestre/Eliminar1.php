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


          $Id_Materia=$_POST["Materia_Id"];



              
              $DB->CONSULTA("DELETE from materias_cursadas where Id='$Id_Materia'");



              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";


        

       ?>

  </body>
</html>
