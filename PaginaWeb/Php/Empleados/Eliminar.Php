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

        $DB->CONSULTA("DELETE from Aspirante where codigo_Aspirante='$id'");
        $rs2=$DB->CONSULTA("SELECT * from Estudiante where Codigo_ASP='$id'");
        if (0==$DB->total_Filas($rs2])) {
          echo "<h3>El aspirante ha sido eliminado del sistema</h3>";
        }

        ?>
        <div class="row" style="bottom:10px; position:absolute; ">
          <div class="col-md-3">
          </div>
          <div class="col-md-12">
            <button type="button" name="button" class="btn btn-light" onclick="ocultarVentana()" style=" Rigth:10px; bottom:10px;">Cerrar</button>
          </div>
        </div>
  </body>
</html>
