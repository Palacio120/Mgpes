<?php
    session_start();
    session_destroy();

    echo "<script type'text/javascript'>alerte('prueba'); </script>";

    header('location: ../index.php');
?>
