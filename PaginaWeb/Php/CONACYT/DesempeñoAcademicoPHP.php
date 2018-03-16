<?php






  function PrimerSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];

    $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,$codigo,'Primer Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
  }

  function SegundoSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];

    $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,$codigo,'Segundo Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
  }

  function TercerSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,$codigo,'Tercer Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
  }

  function CuartoSemestre(){
    include_once('..\..\Php\conf_tab.php');

    $DB=new ConfigDB;
    $DB->Mysql();
    $codigo=$_SESSION["CODIGO_ES"];
    $DB->CONSULTA("INSERT INTO conacytdesempeño values(0,$codigo,'Cuarto Semestre', NULL, NULL, NULL, NULL, NULL,NULL)");
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
