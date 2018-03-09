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


              $rs=$DB->CONSULTA("INSERT INTO `materias_semestres` VALUES (0,'$CODIGO_ES',NULL, NULL, 'Segundo Semestre', $Id_Act)");
<<<<<<< HEAD

              $rs=$DB->CONSULTA("SELECT * From materias_semestres where Id_Est='$CODIGO_ES' and Semestre='Segundo Semestre' ");

                while ($i=$DB->Obtener_filas($rs1)) {
                  $_SESSION["M_Segundo"]=$i["Id_Materias"];
                }

=======
              $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Segundo Semestre'");

                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Segundo"]=$i["Id_Materias"];
                  }
              
            }
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
             if(isset($rs)){
              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
             }


       ?>

  </body>
</html>
