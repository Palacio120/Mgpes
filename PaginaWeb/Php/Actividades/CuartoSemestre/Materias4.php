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
          $Id_Act=$_SESSION["Cuarto_informe"];

              
              $rs=$DB->CONSULTA("INSERT INTO `materias_semestres` VALUES ('0','$CODIGO_ES', '',NULL, 'Cuarto Semestre', $Id_Act)");
              
              $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Cuarto Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Cuarto"]=$i["Id_Materias"];
                  }
            
             if(isset($rs)){
              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
             }

        
       ?>

  </body>
</html>
