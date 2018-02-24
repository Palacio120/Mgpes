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
          $Semestre=$_POST["Semestre"];
          $Kardex=$_FILES["Kardex_inp"]["tmp_name"];
          $tamnio_rep=$_FILES["Kardex_inp"]["size"];
          $nombre=$_FILES["Kardex_inp"]["name"];
          $Tipo_Rep=$_FILES["Kardex_inp"]["type"];

          if ( $Kardex != "none" ){
             $fp2 = fopen($Kardex, "rb");
             $Contenido = fread($fp2, $tamnio_rep);
             $Contenido = addslashes($Contenido);
             fclose($fp2);

              
              $DB->CONSULTA("UPDATE Materias_Semestres set kardex='$Contenido', NombreArchivo='$nombre' where Id_Est='$CODIGO_ES' and Id_actividades='$Id_Act' and Semestre='$Semestre' ");
            }else{
              echo "<script> alert('Error al ingresar datos'); </script>;";
              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
            }


              echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";


        

       ?>

  </body>
</html>
