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
<<<<<<< HEAD

=======
        
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957
        $DB= new ConfigDB();
        $DB->Mysql();



          $CODIGO_ES= $_SESSION["CODIGO_ES"];
          $Id_Act=$_SESSION["Primer_informe"];


<<<<<<< HEAD
=======
          
           if($DB->total_Filas($rs)>=1){
              echo "<script>window.location='../../Estudiante/actividades.php'</script>";
           }else{
          
              $rs=$DB->CONSULTA("INSERT INTO `materias_semestres` VALUES ('0','$CODIGO_ES', NULL,NULL, 'Primer Semestre', $Id_Act)");
              $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Primer Semestre'");

                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Primero"]=$i["Id_Materias"];
                  }
>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957

          $rs=$DB->CONSULTA("INSERT INTO `materias_semestres` VALUES ('0','$CODIGO_ES', NULL,NULL, 'Primer Semestre', $Id_Act)");

          $rs=$DB->CONSULTA("SELECT * From materias_semestres where Id_Est='$CODIGO_ES' and Semestre='Primer Semestre' ");
            while ($i=$DB->Obtener_filas($rs1)) {
              $_SESSION["M_Primero"]=$i["Id_Materias"];
            }
             if(isset($rs)){
              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
             }


       ?>

  </body>
</html>
