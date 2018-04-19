<?php
  session_start();

  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <?php
      $tipo= $_GET["tipo"];



      if ($tipo=='Plan de trabajo') {
        include_once('../conf_tab.php');
        $DB=new ConfigDB();
        $DB->Mysql();
        $Semestre=$_POST["Semestre"];
        $id=$_POST["Id"];
        $consulta=$DB->CONSULTA("SELECT * FROM plan_de_trabajo where No_tesis=(select DireccionTesis from estudiante Where CODIGO_ES='$id') and Semestre='$Semestre'");
        if ($DB->total_Filas($Consulta)==0) {
          ?><script type="text/javascript">
              alert("No se encontro el archivo, es posible que este todavia no haya sido subido por el alumno");
              window.close();
          </script>  <?php
        }
        while ($i= $DB->Obtener_filas($consulta)) {
          $Tipo=$i['Tipo_rep'];
          header("Content-type: $Tipo");
          echo $i["img_reporte"];
        }

      }else if ($tipo=='Reporte de actividades') {
        include_once('../conf_tab.php');
        $DB=new ConfigDB();
        $DB->Mysql();
        $Semestre=$_POST["Semestre"];
        $id=$_POST["Id"];
        $consulta=$DB->CONSULTA("SELECT * FROM actividades join materias_semestres on Actividades.idActividades=materias_semestres.Id_actividades where Actividades.ID_Est='$id' and Actividades.Semestre='$Semestre'");
        if ($DB->total_Filas($Consulta)==0) {
          ?><script type="text/javascript">
              alert("No se encontro el archivo, es posible que este todavia no haya sido subido por el alumno");
              window.close();
          </script>  <?php
        }
        while ($i= $DB->Obtener_filas($consulta)) {
          $Tipo=$i['Tipo'];
          header("Content-type: $Tipo");
          echo $i["Firmado"];
        }
      }

     ?>
    </body>
  </html>
