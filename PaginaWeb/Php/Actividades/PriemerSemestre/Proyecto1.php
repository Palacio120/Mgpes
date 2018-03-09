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
          $Id_Act=$_SESSION["Primer_informe"];
          $bandera=FALSE;
<<<<<<< HEAD

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
              $Consulta2= $DB->CONSULTA("INSERT into proyectos_semestre values(0,'$Director', '$Co_Director', '$Lector_1', '$Lector_2', 0, NULL, '$codigo', 'Primer Semestre', '$Id_Act', '$direcciondetesis', '$tema' )");
              $Consulta=$DB->CONSULTA("UPDATE direcciondetesis SET Semestre='Priemer Semestre'  where CODIGO_ES='$codigo' and No_Tesis='$direcciondetesis'");
                echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
          }else {?>
              <script type="text/javascript">alert('No se encontro la tesis')</script>
            <?php  echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
          }
=======

          $Consulta=$DB->CONSULTA("SELECT * from direcciondetesis  where CODIGO_ES='$codigo' and  Semestre='Primer Semestre'");

            while ($rs= $DB->Obtener_filas($Consulta)) {
                $tema= $rs['TemaTesis'];
                $Director=$rs['DirectorTesis'];
                $Co_Director=$rs['Co_Director'];
                $Lector_1=$rs['lector_1'];
                $Lector_2=$rs['lector_2'];
                $bandera=TRUE;

            }
          if ($bandera==TRUE) {
            

            $Consulta2= $DB->CONSULTA("INSERT into proyectos_semestre values(0,'$Director', '$Co_Director', '$Lector_1', '$Lector_2', 0, NULL, '$codigo', 'Primer Semestre', '$Id_Act', '$direcciondetesis', '$tema' )");

              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";

          }else {
             echo "<script>alert('Error al ingresar los datos');</script>";
             echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
          }

          


          



>>>>>>> c750a19e8ef2bf02b5fd4e821aeeecddd12f0957

       ?>

  </body>
</html>
