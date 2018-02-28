<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>validando...</title>
   </head>
   <body>

     <?php
        try {
          $conn= mysqli_connect("localhost", "MGPES", "BasededatosMGPES1", "mgps");
        } catch (Exception $e) {
          echo $e->getMessage();
          exit;
        }


         if (isset($_POST['login'])) {
           $nombre= $_POST['user'];
           $contraseña=md5($_POST['password']);

           $query= ("SELECT * from usuariosEmp WHERE Usuario='$nombre' AND password= '$contraseña'");

           $rs= mysqli_query($conn, $query);

           if (mysqli_num_rows($rs)>0) {
             $row=mysqli_fetch_array($rs);
             $_SESSION["user"]=$nombre;
             $_SESSION["nombre"]=$row["nombre"];
             header("location: ../Profesores/principalEmp.php");
           }else {
             echo "<script>
              alert('Usuario o contraseña incorrectos');
              </script>";

              echo "<script>window.location='../index.php';</script>";

           }


         }

         if (isset($_POST['login'])) {
           $nombre= $_POST['user'];
           $contraseña=$_POST['password'];
                 try {
                   $conn= mysqli_connect("localhost", "MGPES", "BasededatosMGPES1", "mgps");
                 } catch (Exception $e) {
                   echo $e->getMessage();
                   exit;
                 }

                 $query_Perfil=("SELECT * from Empleados where CodigoEmp= '$nombre' ");
                 $rs2=mysqli_query($conn, $query_Perfil);
                 if (mysqli_num_rows($rs2)>0) {
                   $row=mysqli_fetch_array($rs2);

                   $_SESSION["Fotografia"]=$row["Fotografia"];
                 }
               }
      ?>

   </body>
 </html>
