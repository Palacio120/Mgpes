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




          $TemaTesis=$_POST["TemaTesis"];
          $CODIGO_ES= $_SESSION["CODIGO_ES"];
          $DireccionTesis=$_SESSION["DireccionTesis"];
          $Director=$_POST["DirectorTesis"];
          $Co_director=$_POST["Co-director"];
          $Lector_1=$_POST["Lector_1"];
          $Lector_2=$_POST["Lector_2"];
          $avances=$_POST["Avances"];
          $semestre=$_POST["semestre"];
          $Tesis=$_FILES["Tesis"]["tmp_name"];
          $tamnio_rep=$_FILES["Tesis"]["size"];
          $nombre=$_FILES["Tesis"]["name"];
          $Tipo_Rep=$_FILES["Tesis"]["type"];
          $Id= $_POST["Id_temp"];

          if ( $Tesis != "none" ){
             $fp = fopen($Tesis, "rb");
             $Contenido = fread($fp, $tamnio_rep);
             $Contenido = addslashes($Contenido);
             fclose($fp);

             if ($semestre =='Primer Semestre') {
               $Id_Act=$_SESSION["Primer_informe"];
             }elseif ($semestre== 'Segundo Semestre') {
               $Id_Act=$_SESSION["Segundo_informe"];
             }elseif ($semestre== 'Tercer Semestre') {
               $Id_Act=$_SESSION["Tercer_informe"];
             }elseif ($semestre== 'Cuarto Semestre') {
               $Id_Act=$_SESSION["Cuarto_informe"];
             }else {

             }

               $DB->CONSULTA("UPDATE proyectos_semestre set  Proyecto='$Contenido', TemaTesis='$TemaTesis', DirectorTesis='$Director', Co_director='$Co_director', Lector_1='$Lector_1', Lector_2='$Lector_2', Avance='$avances' where Codigo_es='$CODIGO_ES' and idActividades='$Id_Act' and Semestre='$semestre'and Direccion_de_tesis= '$DireccionTesis' ");

             }else{
               echo "<script> alert('Error al ingresar datos'); </script>;";
               echo "<script>window.location='../../Estudiante/Actividades.php'</script>";
             }






            echo "<script>window.location='../../Estudiante/Actividades.php'</script>";




       ?>

  </body>
</html>
