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
                <div class="">
                  <div class="row">
                    <div class="col-md-3">
                      <label>Codigo aspirante</label><br>
                      <?php echo $i['codigo_Aspirante']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>modalidad</label><br>
                      <?php echo $i['modalidad']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>modalidad</label><br>
                      <?php echo $i['modalidad']; ?>
                    </div>
                    <div class="col-md-3">
                      <label>Fotografia</label><br>
                      <?php echo '<img style="width:130px" src="data:image/jpeg;base64,'.base64_encode($i["Fotografia"]).'" >' ; ?>
                    </div>
                  </div>
                </div>
                <div class="row" style="bottom:10px; position:absolute; ">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-12">
                    <button type="button" name="2" class="btn btn-ligth" onclick="agregarEstudiante()" style="display:inline-block; Rigth:10px; bottom:10px;">Mover a Estudiante</button>
                    <button type="button" name="button" class="btn btn-light" onclick="ocultarVentana()" style=" Rigth:10px; bottom:10px;">Cerrar</button>
                  </div>
                </div>
                <?php } ?>


  </body>
</html>
