<?php
function conexion(){

    define('DB_Server','localhost');
    define('DB_Name','MGPS');
    define('DB_User','MGPES');
    define('DB_Pass','BasededatosMGPES1');

    $mysqli=mysqli_connect(DB_Server,DB_User, DB_Pass, DB_Name);

    if ($mysqli->connect_error) {
      echo "<b> Fallo al conectar a la BD: </b>".$mysqli->connect_errno."----".$mysqli->connect_errno;
    }

    return $mysqli;
}

 ?>
