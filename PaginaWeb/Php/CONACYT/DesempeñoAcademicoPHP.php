<?php

for ($i=10; $i>=42 ; $i++) {
  if (isset($_POST['Archivo'.$i])) {
    $Cadena='A'.$i;
    '$cadena'();
  }
}

function A11(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo11"]["name"];
  $Tamaño=$_FILE["Archivo11"]["size"];
  $Archivo=$_FILE["Archivo11"]["tmp_name"];
  $Tipo=$_FILE["Archivo11"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set (FormatoDeDesmpeño='',NombreFormato='',TipoFormato='')");

}
function A12(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo12"]["name"];
  $Tamaño=$_FILE["Archivo12"]["size"];
  $Archivo=$_FILE["Archivo12"]["tmp_name"];
  $Tipo=$_FILE["Archivo12"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set ()");

}
function A21(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo21"]["name"];
  $Tamaño=$_FILE["Archivo21"]["size"];
  $Archivo=$_FILE["Archivo21"]["tmp_name"];
  $Tipo=$_FILE["Archivo21"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set (FormatoDeDesmpeño='',NombreFormato='',TipoFormato='')");

}
function A22(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo22"]["name"];
  $Tamaño=$_FILE["Archivo22"]["size"];
  $Archivo=$_FILE["Archivo22"]["tmp_name"];
  $Tipo=$_FILE["Archivo22"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set ()");

}
function A31(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo31"]["name"];
  $Tamaño=$_FILE["Archivo31"]["size"];
  $Archivo=$_FILE["Archivo31"]["tmp_name"];
  $Tipo=$_FILE["Archivo31"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set (FormatoDeDesmpeño='',NombreFormato='',TipoFormato='')");

}
function A32(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo32"]["name"];
  $Tamaño=$_FILE["Archivo32"]["size"];
  $Archivo=$_FILE["Archivo32"]["tmp_name"];
  $Tipo=$_FILE["Archivo32"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set ()");

}
function A41(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo41"]["name"];
  $Tamaño=$_FILE["Archivo41"]["size"];
  $Archivo=$_FILE["Archivo41"]["tmp_name"];
  $Tipo=$_FILE["Archivo41"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set (FormatoDeDesmpeño='',NombreFormato='',TipoFormato='')");

}
function A42(){
  include_once('..\..\Php\conf_tab.php');

  $DB=new ConfigDB;
  $DB->Mysql();
  $codigo=$_SESSION["CODIGO_ES"];
  $Nombre=$_FILE["Archivo42"]["name"];
  $Tamaño=$_FILE["Archivo42"]["size"];
  $Archivo=$_FILE["Archivo42"]["tmp_name"];
  $Tipo=$_FILE["Archivo42"]["type"];

  $Consulta=$DB->CONSULTA("UPDATE conacytdesempeño set ()");

}


  function PrimerSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From conacytdesempeño where CODIGO_ES='$codigo' and Semestre='Primer Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,'$codigo','Primer Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
    }

  }

  function SegundoSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From conacytdesempeño where CODIGO_ES='$codigo' and Semestre='Segundo Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,'$codigo','Segundo Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
    }

  }

  function TercerSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From conacytdesempeño where CODIGO_ES='$codigo' and Semestre='Tercer Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,'$codigo','Tercer Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
    }

  }

  function CuartoSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $cero=0;
    $revision=$DB->CONSULTA("SELECT * From conacytdesempeño where CODIGO_ES='$codigo' and Semestre='Cuarto Semestre'");
    if ($cero==$DB->total_Filas($revision)) {
      $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,'$codigo','Cuarto Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
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
