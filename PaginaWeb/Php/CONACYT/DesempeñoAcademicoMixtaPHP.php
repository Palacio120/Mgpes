<?php

for ($i=11; $i<=42 ; $i++) {
  $Cadena='Archivo'.$i;
  $Cadena2='A'.$i;
  if (isset($_FILES[$Cadena]["name"])) {
      $Cadena2();
  }
}

function A11(){
  include_once('..\..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILES["Archivo11"]["name"];
  $Tamaño=$_FILES["Archivo11"]["size"];
  $Archivo=$_FILES["Archivo11"]["tmp_name"];
  $Tipo=$_FILES["Archivo11"]["type"];

  if ( $Archivo != "none"){
     $fp = fopen($Archivo, "rb");
     $contenido = fread($fp, $Tamaño);
     $contenido = addslashes($contenido);
     fclose($fp);

     $Consulta=$DB->CONSULTA("UPDATE `mgps`.`mixtadesempeño` SET InformeActividades='$contenido',Informe_Nomb_Temp='$Nombre',Informe_Tipo='$Tipo' WHERE CODIGO_ES='$codigo' and Semestre='Primer Semestre'");

  }
}

function A21(){
  include_once('..\..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILES["Archivo21"]["name"];
  $Tamaño=$_FILES["Archivo21"]["size"];
  $Archivo=$_FILES["Archivo21"]["tmp_name"];
  $Tipo=$_FILES["Archivo21"]["type"];
  if ( $Archivo != "none"){
     $fp = fopen($Archivo, "rb");
     $contenido = fread($fp, $Tamaño);
     $contenido = addslashes($contenido);
     fclose($fp);

  $Consulta=$DB->CONSULTA("UPDATE `mgps`.`mixtadesempeño` SET InformeActividades='$contenido',Informe_Nomb_Temp='$Nombre',Informe_Tipo='$Tipo' WHERE CODIGO_ES='$codigo' and Semestre='Segundo Semestre'");
  }
}

function A31(){
  include_once('..\..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILES["Archivo31"]["name"];
  $Tamaño=$_FILES["Archivo31"]["size"];
  $Archivo=$_FILES["Archivo31"]["tmp_name"];
  $Tipo=$_FILES["Archivo31"]["type"];
  if ( $Archivo != "none"){
     $fp = fopen($Archivo, "rb");
     $contenido = fread($fp, $Tamaño);
     $contenido = addslashes($contenido);
     fclose($fp);

  $Consulta=$DB->CONSULTA("UPDATE `mgps`.`mixtadesempeño` SET InformeActividades='$contenido',Informe_Nomb_Temp='$Nombre',Informe_Tipo='$Tipo' WHERE CODIGO_ES='$codigo' and Semestre='Tercer Semestre'");
  }
}

function A41(){
  include_once('..\..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILES["Archivo41"]["name"];
  $Tamaño=$_FILES["Archivo41"]["size"];
  $Archivo=$_FILES["Archivo41"]["tmp_name"];
  $Tipo=$_FILES["Archivo41"]["type"];
  if ( $Archivo != "none"){
     $fp = fopen($Archivo, "rb");
     $contenido = fread($fp, $Tamaño);
     $contenido = addslashes($contenido);
     fclose($fp);

  $Consulta=$DB->CONSULTA("UPDATE `mgps`.`mixtadesempeño` SET InformeActividades='$contenido',Informe_Nomb_Temp='$Nombre',Informe_Tipo='$Tipo' WHERE CODIGO_ES='$codigo' and Semestre='Cuarto Semestre'");
  }
}



  function PrimerSemestre(){
    include_once('..\..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From `mixtadesempeño` where CODIGO_ES='$codigo' and Semestre='Primer Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO `mixtadesempeño` values(0,'$codigo','Primer Semestre', NULL, NULL, NULL)");
    }

  }

  function SegundoSemestre(){
    include_once('..\..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From `mixtadesempeño` where CODIGO_ES='$codigo' and Semestre='Segundo Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO `mixtadesempeño` values(0,'$codigo','Segundo Semestre', NULL, NULL, NULL)");
    }

  }

  function TercerSemestre(){
    include_once('..\..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From `mixtadesempeño` where CODIGO_ES='$codigo' and Semestre='Tercer Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO `mixtadesempeño` values(0,'$codigo','Tercer Semestre', NULL, NULL, NULL)");
    }

  }

  function CuartoSemestre(){
    include_once('..\..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From `mixtadesempeño` where CODIGO_ES='$codigo' and Semestre='Cuarto Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO `mixtadesempeño` values(0,'$codigo','Cuarto Semestre', NULL, NULL, NULL)");
    }

  }


if (isset($_POST["Semestre"]) ) {
  switch ($_POST["Semestre"]) {
    case 'Priemer Semestre':
      PrimerSemestre();
      break;
    case 'Segundo Semestre':
      SegundoSemestre();
      break;
    case 'Tercer Semestre':
      TercerSemestre();
      break;
    case 'Cuarto Semestre':
      CuartoSemestre();
      break;
  }

}




 ?>
