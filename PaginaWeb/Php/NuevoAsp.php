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

        $Nombre=$_POST["Nombre"];
        $Siiau=$_POST["Siiau"];
        $Curp=$_POST["Curp"];
        $Modalodad=$_POST["Modalodad"];
        $LNacimiento=$_POST["LNacimiento"];
        $Civil=$_POST["Civil"];
        $Calendario=$_POST["Calendario"];
        $Genero=$_POST["Genero"];
        $TelCasa=$_POST["TelCasa"];
        $Celular=$_POST["Celular"];
        $correo=$_POST["correo"];
        $calle=$_POST["calle"];
        $NumCalle=$_POST["NumCalle"];
        $CoPostal=$_POST["CoPostal"];
        $Estado=$_POST["Estado"];
        $Colonia=$_POST["Colonia"];
        $NumInt=$_POST["NumInt"];
        $Municipio=$_POST["Municipio"];
        $Licenciatura=$_POST["Licenciatura"];
        $Univerisdad=$_POST["Univerisdad"];
        $ProemedioLic=$_POST["ProemedioLic"];
        $Generacion=$_POST["Generacion"];
        $Idioma=$_POST["Idioma"];
        $TemaTesis=$_POST["TemaTesis"];
        $LGCA=$_POST["LGCA"];
        $SubmitAsp=$_POST["SubmitAsp"];
        $button=$_POST["button"];

            $DB->CONSULTA("INSERT INTO `mgps`.`aspirante`(`Fotografia`,`modalidad`,`Orientacion`,`NombrePrograma`, `calendario_Escolar`,`NombreCompleto`,`Edad`,`Genero`,
`CURP`,
`RFC`,
`Calle_asp`,
`Numero_Calle`,
`numero_interior`,
`colonia_Asp`,
`cp_Asp`,
`Municipio_asp`,
`Estado_Asp`,
`Telefono_casa_asp`,
`Telefono_personal`,
`Correo_Personal`,
`Lugar_nacimiento`,
`ViveCon`,
`Dependientes`,
`EstadoCivil`,
`Licenciatura`,
`Universidad`,
`Promedio`,
`Generacion`,
`Estudios_act_term`,
`Idiomas`,
`Ocupacion`,
`Nombre_Empresa`,
`Puesto_desempeñado`,
`IngresoMensual`,
`Domicilio_Trabajo`,
`MunicipioTrabajo`,
`EstadoTrabajo`,
`Telefono_trabajo`,
`Extencion_trabajo`,
`CorreoTrabajo`,
`AntiguedadPuesto`,
`AntiguedadEmpresa`)
VALUES
(<{codigo_Aspirante: }>,
<{Fotografia: }>,
<{modalidad: }>,
<{Orientacion: }>,
<{NombrePrograma: }>,
<{Fecha_SecionInformativa: }>,
<{calendario_Escolar: }>,
<{NombreCompleto: }>,
<{Edad: 0}>,
<{Genero: M}>,
<{CURP: }>,
<{RFC: }>,
<{Calle_asp: }>,
<{Numero_Calle: }>,
<{numero_interior: }>,
<{colonia_Asp: }>,
<{cp_Asp: }>,
<{Municipio_asp: }>,
<{Estado_Asp: }>,
<{Telefono_casa_asp: }>,
<{Telefono_personal: }>,
<{Correo_Personal: }>,
<{Lugar_nacimiento: }>,
<{ViveCon: }>,
<{Dependientes: }>,
<{EstadoCivil: }>,
<{Licenciatura: }>,
<{Universidad: }>,
<{Promedio: 0.00}>,
<{Generacion: }>,
<{Estudios_act_term: }>,
<{Idiomas: }>,
<{Ocupacion: }>,
<{Nombre_Empresa: }>,
<{Puesto_desempeñado: }>,
<{IngresoMensual: 0.00}>,
<{Domicilio_Trabajo: }>,
<{MunicipioTrabajo: }>,
<{EstadoTrabajo: }>,
<{Telefono_trabajo: }>,
<{Extencion_trabajo: }>,
<{CorreoTrabajo: }>,
<{AntiguedadPuesto: 0}>,
<{AntiguedadEmpresa: 0}>);
");


            echo "<script>window.location='../index.php'</script>";


      }

     ?>

  </body>
</html>
