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


          $id= $_POST["Id_tesis"];
          $Semestre=$_POST["Semestre"];



              $DB->CONSULTA("DELETE from proyectos_semestre where Id_tesis= '$id' and Semestre='$Semestre' ");



              echo "<script>window.location='../../Estudiante/Actividades.php'</script>";




       ?>

  </body>
</html>
