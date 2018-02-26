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
      include('../../conf_tab.php');

      $DB= new ConfigDB();
      $DB->Mysql();


            $DB->CONSULTA("");


            echo "<script>window.location='../index.php'</script>";


      }

     ?>

  </body>
</html>
