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
        include_once('../../conf_tab.php');

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
               echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";
             }

              include_once('../../conf_tab.php');

             $DB=new ConfigDB();
             $DB->Mysql();
             $nombre=$_SESSION["CODIGO_ES"];

             $Consulta=$DB->CONSULTA("SELECT * from Estudiante where Codigo_ES= '$nombre' ");

                  while ($row= $DB->Obtener_filas($Consulta)) {
                    //datos personales
                    $_SESSION["CODIGO_ES"]=$row["CODIGO_ES"];
                    $_SESSION["Codigo_ASP"]=$row["Codigo_ASP"];
                    $_SESSION["CodigoSIIAU"]=$row["CodigoSIIAU"];
                    $_SESSION["Fotografia"]= $row["Fotografia"];
                    $_SESSION["modalidad"]=$row["Modalidad"];
                    $_SESSION["Orientacion"]=$row["Orientacion"];
                    $_SESSION["NombrePrograma"]=$row["NombrePrograma"];
                    $_SESSION["calenadario_escolar"]=$row["calenadario_escolar"];
                    $_SESSION["NombreCompleto"]=$row["NombreCompleto"];
                    $_SESSION["Edad"]=$row["Edad"];
                    $_SESSION["Genero"]=$row["Genero"];
                    $_SESSION["CURP"]=$row["CURP"];
                    $_SESSION["RFC"]=$row["RFC"];
                    //vivienda
                    $_SESSION["Calle_Es"]=$row["Calle_Es"];
                    $_SESSION["Numero_Calle"]=$row["Numero_Calle"];
                    $_SESSION["Numero_interior"]=$row["Numero_interior"];
                    $_SESSION["Colonia_Es"]=$row["Colonia_Es"];
                    $_SESSION["CP_Es"]=$row["CP_Es"];
                    $_SESSION["Municipio_Es"]=$row["Municipio_Es"];
                    $_SESSION["Esatado_Es"]=$row["Estado_Es"];
                    //contacto
                    $_SESSION["Telefono_casa_Es"]=$row["Telefono_casa_Es"];
                    $_SESSION["Telefono_personal"]=$row["Telefono_personal"];
                    $_SESSION["Correo_Personal"]=$row["Correo_Personal"];
                    //datos personales 2
                    $_SESSION["Lugar_nacimiento"]=$row["Lugar_nacimiento"];
                    $_SESSION["EstadoCivil"]=$row["EstadoCivil"];
                    //datos academicos
                    $_SESSION["Licenciatura"]=$row["Licenciatura"];
                    $_SESSION["Universidad"]=$row["Universidad"];
                    $_SESSION["Promedio"]=$row["Promedio"];
                    $_SESSION["Generacion"]=$row["Generacion"];


                    //datos de tesis
                    $_SESSION["Proyecto"]=$row["Proyecto"];
                    $_SESSION["LíneasAplicaciónDelConocimiento"]=$row["LineasAplicacionDelConocimiento"];
                    $_SESSION["DireccionTesis"]=$row["DireccionTesis"];
                    $_SESSION["TemaTesis"]=$row["Tema_Tesis"];
                    $_SESSION["Vocal_1"]=$row["Vocal_1"];
                    $_SESSION["Vocal_2"]=$row["Vocal_2"];
                    //Datos Egresado
                    $_SESSION["EstadoDelEstudiante"]=$row["EstadoDelEstudiante"];

                    $_SESSION["OBSERVACIÓN"]=$row["OBSERVACIÓN"];
                    $_SESSION["Tutor_CONACYT"]=$row["Tutor_CONACYT"];
                    $_SESSION["Comité_Tutorial"]=$row["Comité_Tutorial"];
                    }

            echo "<script>window.location='../../../Estudiante/Actividades.php'</script>";

       ?>

  </body>
</html>
