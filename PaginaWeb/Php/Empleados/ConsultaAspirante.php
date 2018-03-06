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
              while ($i=$DB->Obtener_filas($rs1)) {?>
                <div class="Cuadro">
                  <div class="Titulo3">
                    <label>Datos Personales</label>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Codigo aspirante</label><br>
                      <?php echo $i['codigo_Aspirante']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Nombre Completo</label><br>
                      <?php echo $i['NombreCompleto']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Edad</label><br>
                      <?php echo $i['Edad']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Genero</label><br>
                      <?php echo $i["Genero"]; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Nombre del programa</label><br>
                      <?php echo $i['NombrePrograma']; ?>
                    </div>

                    <div class="col-md-3">
                      <label>Calendario escolar</label><br>
                      <?php echo $i['calendario_Escolar']; ?>
                    </div>

                    <div class="col-md-3">
                      <label>Modalidad</label><br>
                      <?php echo $i['modalidad']; ?>
                    </div>

                    <div class="col-md-3">
                      <label>Orientacion</label><br>
                      <?php echo $i['Orientacion']; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>CURP</label><br>
                      <?php echo $i['CURP']; ?>
                    </div>
                  </div>
                  <div class="Titulo3">
                    <label>Domicilio</label>
                  </div>
                  <div class="row">

                    <div class="col-md-3">
                      <label>Calle</label><br>
                      <?php echo $i['Calle_asp']; ?>
                    </div>

                    <div class="col-md-3">
                      <label>Numero</label><br>
                      <?php echo '#'.$i['Numero_Calle']; ?>
                    </div>

                    <div class="col-md-3">
                      <label>Numero Interior</label><br>
                      <?php echo '#'.$i['numero_interior']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Codigo postal</label><br>
                      <?php echo $i["cp_Asp"]; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Colonia</label><br>
                      <?php echo $i["colonia_Asp"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Municipio</label><br>
                      <?php echo $i["Municipio_asp"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Estado</label><br>
                      <?php echo $i["Estado_Asp"]; ?>
                    </div>
                  </div>
                  <div class="Titulo3">
                    <label>Datos de contacto</label><br>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Telefono de casa</label><br>
                      <?php echo $i["Telefono_casa_asp"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Telefono celular</label><br>
                      <?php echo $i["Telefono_personal"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Correo</label><br>
                      <?php echo $i["Correo_Personal"]; ?>
                    </div>
                  </div>
                  <div class="Titulo3">
                    <label>Datos academicos</label><br>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Licenciatura</label><br>
                      <?php echo $i["Licenciatura"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Universidad</label><br>
                      <?php echo $i["Universidad"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Promedio</label><br>
                      <?php echo $i["Promedio"]; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Generación</label><br>
                      <?php echo $i["Generacion"]; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label>Tema proyecto</label><br>
                      <?php echo $i["TemaTesis"]; ?>
                    </div>
                  </div>
                </div>
                <div class="row" style="bottom:10px; position:absolute; ">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-12">
                    <button type="button" name="2" class="btn btn-ligth" onclick="agregarEstudiante(<?php echo $i['codigo_Aspirante']; ?>)" style="display:inline-block; Rigth:10px; bottom:10px;">Mover a Estudiante</button>
                    <button type="button" name="button" class="btn btn-light" onclick="ocultarVentana()" style=" Rigth:10px; bottom:10px;">Cerrar</button>
                  </div>
                </div>
                <?php } ?>


  </body>
</html>
