<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Validando..</title>
   </head>
   <body>

     <?php
        try {
          $conn= mysqli_connect("localhost", "MGPES", "BasededatosMGPES1", "mgps");
        } catch (Exception $e) {
          echo $e->getMessage();
          exit;
        }


         if (isset($_POST['login'])) {
           $nombre= $_POST['usuario'];
           $contraseña=md5($_POST['password']);

           $query= ("SELECT * from usuariosEst WHERE Usuario='$nombre' AND password= '$contraseña'");

           $rs= mysqli_query($conn, $query);


           if (mysqli_num_rows($rs)>0) {
             $row=mysqli_fetch_array($rs);
             $_SESSION["usuario"]=$nombre;
             $_SESSION["nombre"]=$row["nombre"];
               echo "<script>window.location='../Estudiante/principal.php'</script>";
           }else {
             echo "<script>
              alert('Usuario o contraseña incorrectos');
              </script>";

            echo "<script>window.location='../index.php'</script>";
           }

         }

      ?>

      <?php

      if (isset($_POST['login'])) {
        $nombre= $_POST['usuario'];
        $contraseña=$_POST['password'];
              try {
                $conn= mysqli_connect("localhost", "MGPES", "BasededatosMGPES1", "mgps");
              } catch (Exception $e) {
                echo $e->getMessage();
                exit;
              }




                 $query_Perfil=("SELECT * from Estudiante where Codigo_ES= '$nombre' ");
                 $rs2=mysqli_query($conn, $query_Perfil);

                  if (mysqli_num_rows($rs2)>0) {
                    $row=mysqli_fetch_array($rs2);
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
                    $_SESSION["ViveCon"]=$row["ViveCon"];
                    $_SESSION["Dependientes"]=$row["Dependientes"];
                    $_SESSION["EstadoCivil"]=$row["EstadoCivil"];
                    //datos academicos
                    $_SESSION["Licenciatura"]=$row["Licenciatura"];
                    $_SESSION["Universidad"]=$row["Universidad"];
                    $_SESSION["Promedio"]=$row["Promedio"];
                    $_SESSION["Generacion"]=$row["Generacion"];
                    $_SESSION["Idiomas"]=$row["Idiomas"];
                    //datos como aspirante
                    $_SESSION["LugarTrabajo_comoAspirante"]=$row["LugarTrabajo_comoAspirante "];
                    $_SESSION["PuestoDesempeñado_comoAspirante"]=$row["PuestoDesempeñado_comoAspirante"];
                    $_SESSION["TeléfonoOficina_comoAspirante"]=$row["TeléfonoOficina_comoAspirante "];
                    $_SESSION["Sueldo_comoAspirante"]=$row["Sueldo_comoAspirante"];
                    $_SESSION["Antigüedad_comoAspirante"]=$row["Antigüedad_comoAspirante"];
                    //datos de tesis
                    $_SESSION["Proyecto"]=$row["Proyecto"];
                    $_SESSION["LíneasAplicaciónDelConocimiento"]=$row["LineasAplicacionDelConocimiento"];
                    $_SESSION["Orientación"]=$row["Orientación"];
                    $_SESSION["DireccionTesis"]=$row["DireccionTesis"];
                    $_SESSION["Vocal_1"]=$row["Vocal_1"];
                    $_SESSION["Vocal_2"]=$row["Vocal_2"];
                    //Datos Egresado
                    $_SESSION["EstadoDelEstudiante"]=$row["EstadoDelEstudiante"];
                    $_SESSION["FechaTitulación"]=$row["FechaTitulación"];
                    $_SESSION["TiempoTitulación"]=$row["TiempoTitulación"];
                    $_SESSION["Núm_ActaTitulación"]=$row["Núm_ActaTitulación"];

                    $_SESSION["OBSERVACIÓN"]=$row["OBSERVACIÓN"];
                    $_SESSION["Tutor_CONACYT"]=$row["Tutor_CONACYT"];
                    $_SESSION["Comité_Tutorial"]=$row["Comité_Tutorial"];
                    $_SESSION["Premios_Reconocimientos"]=$row["Premios_Reconocimientos"];
                    $_SESSION["LugarTrabajo_comoEgresado"]=$row["LugarTrabajo_comoEgresado"];
                    $_SESSION["PuestoDesempeñado_comoEgresado"]=$row["PuestoDesempeñado_comoEgresado"];
                    $_SESSION["TeléfonoOficina_comoEgresado"]=$row["TeléfonoOficina_comoEgresado"];
                    $_SESSION["Sueldo_comoEgresado"]=$row["Sueldo_comoEgresado"];
                    $_SESSION["Antigüedad_comoEgresado"]=$row["Antigüedad_comoEgresado"];
                    }

                require_once('conf_tab.php');

                $DB= new ConfigDB();
                $DB->Mysql();
                $CODIGO_ES=$_SESSION["CODIGO_ES"];

                $rs1=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Primer Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["Primer_informe"]=$i["idActividades"];
                  }
                $rs1=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Segundo Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["Segundo_informe"]=$i["idActividades"];
                  }
                $rs1=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Tercer Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["Tercer_informe"]=$i["idActividades"];
                  }
                $rs1=$DB->CONSULTA("SELECT * from actividades where ID_Est= '$CODIGO_ES' and Semestre='Cuarto Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["Cuarto_informe"]=$i["idActividades"];
                  }

                  $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Primer Semestre'");

                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Primero"]=$i["Id_Materias"];
                  }

                  $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Segundo Semestre'");

                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Segundo"]=$i["Id_Materias"];
                  }

                  $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Tercer Semestre'");

                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Tercero"]=$i["Id_Materias"];
                  }


                  $rs1=$DB->CONSULTA("SELECT * FROM materias_semestres WHERE Id_Est= '$CODIGO_ES' and Semestre='Cuarto Semestre'");
                  while ($i=$DB->Obtener_filas($rs1)) {
                    $_SESSION["M_Cuarto"]=$i["Id_Materias"];
                  }



              }

      ?>

      <?php

        if (isset($_POST['login'])) {

            $No_tesis= $_SESSION["DireccionTesis"];

                try {
                  $conn= mysqli_connect("localhost", "MGPES", "BasededatosMGPES1", "mgps");
                } catch (Exception $e) {
                  echo $e->getMessage();
                  exit;
                }

                   $query=("SELECT * FROM `direcciondetesis` where No_Tesis= '$No_tesis'");
                   $rs2=mysqli_query($conn, $query);

                    if (mysqli_num_rows($rs2)>0) {
                      $row=mysqli_fetch_array($rs2);
                      $_SESSION["Director"]=$row["DirectorTesis"];
                      if (is_null($row["Co_Director"])) {
                      $_SESSION["Co_Director"]="...";
                    }else {
                      $_SESSION["Co_Director"]=$row["Co_Director"];
                    }
                      $_SESSION["GRADO"]=$row["GRADO"];
                      $_SESSION["Semestre"]=$row["Semestre"];
                      $_SESSION["TemaTesis"]= $row["TemaTesis"];
                      $_SESSION["lector_1"]= $row["lector_1"];

                      if (is_null($row["lector_2"])) {
                        $_SESSION["lector_2"]=0;
                      }
                      $_SESSION["lector_2"]= $row["lector_2"];
                    }

                  }




       ?>
   </body>
 </html>
