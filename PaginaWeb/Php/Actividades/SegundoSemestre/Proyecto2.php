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


          $codigo= $_SESSION["CODIGO_ES"];
          $direcciondetesis= $_SESSION["DireccionTesis"];
          $Id_Act=$_SESSION["Segundo_informe"];
          $bandera=FALSE;

          $Consulta=$DB->CONSULTA("SELECT *  from direcciondetesis  where CODIGO_ES='$codigo'");

          while ($rs= $DB->Obtener_filas($Consulta)) {
              $tema= $rs['TemaTesis'];
              $Director=$rs['DirectorTesis'];
              $Co_Director=$rs['Co_Director'];
              $Lector_1=$rs['lector_1'];
              $Lector_2=$rs['lector_2'];
              $bandera=TRUE;

          }

          if ($bandera) {
            $Consulta2= $DB->CONSULTA("INSERT into proyectos_semestre values(0,'$Director', '$Co_Director', '$Lector_1', '$Lector_2', 0, NULL, '$codigo', 'Segundo Semestre', '$Id_Act', '$direcciondetesis', '$tema' )");
            $Consulta=$DB->CONSULTA("UPDATE direcciondetesis SET Semestre='Segundo Semestre'  where CODIGO_ES='$codigo' and No_Tesis='$direcciondetesis'");
            echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
          }else {?>
              <script type="text/javascript">alert('No se encontro la tesis')</script>
            <?php  echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
          }

       ?>

  </body>
</html>
