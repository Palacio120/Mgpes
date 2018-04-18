<?php
  session_start();
  $tipo= $_GET["tipo"];
  $Semestre=$_POST["Semestre"];
  $id=$_POST["Id"];


  if ($tipo=='Plan de trabajo') {
    include_once('../conf_tab.php');
    $DB=new ConfigDB();
    $DB->Mysql();
    $consulta=$DB->CONSULTA("SELECT * FROM plan_de_trabajo where id='$id' and Semestre ='$Semestre'");
    while ($i= $DB->Obtener_filas($consulta)) {
      header('Content-type: $i["Tipo_rep"]' );
      readfile( $i["img_reporte"]);
    }

  }else if ($tipo=='Reporte de actividades') {

  }

 ?>
