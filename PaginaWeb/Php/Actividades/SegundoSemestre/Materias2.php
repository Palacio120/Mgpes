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



          $CODIGO_ES= $_SESSION["CODIGO_ES"];
          $Id_Act=$_SESSION["Segundo_informe"];


          $rs=$DB->CONSULTA("SELECT * From materias_semestres where Id_Est='$CODIGO_ES' and Semestre='Segundo Semestre' ");

           if($DB->total_Filas($rs)>=1){
              echo "<script>window.location='../../../Estudiante/actividades.php'</script>";
           }else{
              
              $rs=$DB->CONSULTA("INSERT INTO `materias_semestres` VALUES (0,'$CODIGO_ES',NULL, NULL, 'Segundo Semestre', $Id_Act)");
              
            }
             if(isset($rs)){
              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
             }

        
       ?>

  </body>
</html>
