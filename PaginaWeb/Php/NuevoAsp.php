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
      include('conf_tab.php');

      $DB= new ConfigDB();
      $DB->Mysql();




      $Nombre =$_POST["Nombre"];
      $Edad =$_POST["Edad"];
      $Siiau  =$_POST["Siiau"];
      $Curp =$_POST["Curp"];
      $LNacimiento=$_POST["LNacimiento"];
      $Civil =$_POST["Civil"];
      $Calendario =$_POST["Calendario"];
      $Genero=$_POST["Genero"];
      $Modalodad =$_POST["Modalodad"];
      $TelCasa=$_POST["TelCasa"];
      $Celular =$_POST["Celular"];
      $correo=$_POST["correo"];
      $calle =$_POST["calle"];
      $NumCalle =$_POST["NumCalle"];
      $CoPostal =$_POST["CoPostal"];
      $Estado =$_POST["Estado"];
      $Colonia =$_POST["Colonia"];
      $NumInt =$_POST["NumInt"];
      $Municipio =$_POST["Municipio"];
      $Licenciatura =$_POST["Licenciatura"];
      $Univerisdad =$_POST["Univerisdad"];
      $ProemedioLic =$_POST["ProemedioLic"];
      $Generacion =$_POST["Generacion"];
      $TemaTesis=$_POST["TemaTesis"];
      $LGCA=$_POST["LGCA"];
      $rfc=$_POST["RFC"];



      $Fotografia =$_FILES["Fotografia"]["tmp_name"];
      $NombreArchivo =$_FILES["Fotografia"]["name"];
      $Tamaño =$_FILES["Fotografia"]["size"];
      $Tipo =$_FILES["Fotografia"]["type"];

      if ( $Fotografia != "none" ){
         $fp = fopen($Fotografia, "rb");
         $contenido = fread($fp, $Tamaño);
         $contenido = addslashes($contenido);
         fclose($fp);

            $DB->CONSULTA("INSERT INTO `mgps`.`aspirante` VALUES (0,'$Fotografia','$Modalodad','$LGCA','Maestría en Gestión y Politicas Publicas de la Educación Superior','$Calendario','$Nombre','$Edad','$Genero','$Curp', '$calle','$NumCalle','$NumInt', '$Colonia','$CoPostal','$Municipio','$Estado','$TelCasa','$Celular','$correo','$LNacimiento','$Civil','$Licenciatura','$Univerisdad','$ProemedioLic','$Generacion','$Siiau','$TemaTesis','$rfc');");


            echo "<script>window.location='../index.php'</script>";


      }

     ?>

  </body>
</html>
