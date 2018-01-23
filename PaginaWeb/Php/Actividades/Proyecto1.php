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


          $codigo= $_SESSION["CODIGO_ES"];
          $direcciondetesis= $_SESSION["DireccionTesis"];
          $Id_Act=$_SESSION["Primer_informe"];

          $Consulta=$DB->CONSULTA("SELECT * , e.NombreCompleto as Nombre2 from direcciondetesis t join Lectores e on t.Lector_1=e.No_Lector join Lectores e2 on t.Lector_2= e2.No_Lector where t.CODIGO_ES='$codigo' and  t.Semestre='Primer Semestre'");

          while ($rs= $DB->Obtener_filas($Consulta)) {
              $tema= $rs['TemaTesis'];
              $Director=$rs['DirectorTesis'];
              $Co_Director=$rs['Co_Director'];
              $Lector_1=$rs['Nombre2'];
              $Lector_2=$rs['NombreCompleto'];

          }


          $Consulta2= $DB->CONSULTA("INSERT into proyectos_semestre values(0,'$Director', '$Co_Director', '$Lector_1', '$Lector_2', 0, NULL, '$codigo', 'Primer Semestre', '$Id_Act', '$direcciondetesis', '$tema' )");

              echo "<script>window.location='../../Estudiante/Actividades.php'</script>";




       ?>

  </body>
</html>
