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
        $id=$_POST["id"];
        ?>

          <?php $rs1=$DB->CONSULTA("SELECT * FROM Aspirante where codigo_Aspirante= $id");
                while ($i=$DB->Obtener_filas($rs1)) {
                  $codigo_Aspirante = $i["codigo_Aspirante"];
                  $Fotografia = $i["Fotografia"];
                  $modalidad = $i["modalidad"];
                  $Orientacion = $i["Orientacion"];
                  $NombrePrograma = $i["NombrePrograma"];
                  $calendario_Escolar = $i["calendario_Escolar"];
                  $NombreCompleto = $i["NombreCompleto"];
                  $Edad = $i["Edad"];
                  $Genero = $i["Genero"];
                  $CURP = $i["CURP"];
                  $Calle_asp = $i["Calle_asp"];
                  $Numero_Calle = $i["Numero_Calle"];
                  $numero_interior = $i["numero_interior"];
                  $colonia_Asp = $i["colonia_Asp"];
                  $cp_Asp = $i["cp_Asp"];
                  $Municipio_asp = $i["Municipio_asp"];
                  $Estado_Asp = $i["Estado_Asp"];
                  $Telefono_casa_asp = $i["Telefono_casa_asp"];
                  $Telefono_personal = $i["Telefono_personal"];
                  $Correo_Personal = $i["Correo_Personal"];
                  $Lugar_nacimiento = $i["Lugar_nacimiento"];
                  $EstadoCivil = $i["EstadoCivil"];
                  $Licenciatura = $i["Licenciatura"];
                  $Universidad = $i["Universidad"];
                  $Promedio = $i["Promedio"];
                  $Generacion = $i["Generacion"];
                  $CodigoSIIAU = $i["CodigoSIIAU"];
                  $TemaTesis = $i["TemaTesis"];
                  $RFC=$i["RFC"];

                }

                switch ($Orientacion) {
                  case 'Calidad y mejoramiento':
                    $LGCA= "CYMLES";
                    break;
                  case 'Gestión y planeación':
                    $LGCA= "GYPLES";
                    break;
                  case 'Nuevos paradigmas':
                    $LGCA= "NPDES";
                    break;
                  case 'Cambio institucional':
                    $LGCA= "PPCIES";
                    break;
                }

                switch ($Orientacion) {
                  case 'Calidad y mejoramiento':
                    $LineasDeAplicacion= "Calidad y mejoramiento en la educación superior";
                    break;
                  case 'Gestión y planeación':
                    $LineasDeAplicacion= "Gestión y planeación de la educación superior";
                    break;
                  case 'Nuevos paradigmas':
                    $LineasDeAplicacion= "Nuevos paradigmas de educación superior";
                    break;
                  case 'Cambio institucional':
                    $LineasDeAplicacion= "Políticas públicas y cambio institucional en la educación superior";
                    break;
                  }

                $rs2=$DB->CONSULTA("INSERT INTO `mgps`.`estudiante` VALUES
                (0,
                '$codigo_Aspirante',
                '$CodigoSIIAU',
                '$Fotografia',
                '$modalidad',
                '$Orientacion',
                '$NombrePrograma',
                '$calendario_Escolar',
                '$NombreCompleto',
                '$Edad',
                '$Genero',
                '$CURP',
                '$RFC',
                '$Calle_asp',
                '$Numero_Calle',
                '$numero_interior',
                '$colonia_Asp',
                '$cp_Asp',
                '$Municipio_asp',
                '$Estado_Asp',
                '$Telefono_casa_asp',
                '$Telefono_personal',
                '$Correo_Personal',
                '$Lugar_nacimiento',
                '$EstadoCivil',
                '$Licenciatura',
                '$Universidad',
                '$Promedio',
                '$Generacion',
                0,
                '$LineasDeAplicacion',
                '$Orientacion',
                0,
                'Vocal_1',
                'Vocal_2',
                'Activo',
                'OBSERVACIÓN',
                'Tutor_CONACYT',
                'Comité_Tutorial',
                '$LGCA',
                '$TemaTesis');");

              if (isset($rs2)) {
                  echo "<h3>El aspirante ahora es estudiante</h3>";?>
                  <div class="row" style="bottom:10px; position:absolute; ">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-12">
                      <button type="button" name="button" class="btn btn-light" onclick="ocultarVentana()" style=" Rigth:10px; bottom:10px;">Cerrar</button>
                    </div>
                  </div>

              <?php
              $rs2=$DB->CONSULTA("SELECT * from Estudiante where Codigo_ASP='$codigo_Aspirante'");

              while ($i=$DB->Obtener_filas($rs2)) {
                $bandera=TRUE;
              }

              if ($bandera==TRUE) {
                $rs2=$DB->CONSULTA("DELETE from Aspirante where codigo_Aspirante='$id';");
              }else{ ?>
                <script type="text/javascript">alert('No se ingrsaron los datos a la base de datos.')</script>
              <?php } 

              };

               ?>

  </body>
</html>
