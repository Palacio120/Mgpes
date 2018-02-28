<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aspirantes</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css" >
    <link rel="stylesheet" href="../Styles/tablas.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <div id="menu" class="menu_lateral" style="width: 0px; border: hidden;">
        <a href="#" class="boton-cerrar" onclick="ocultar2()">×</a>
        <ul class="menu">
          <li><a href="Reportes.php">Reportes de Estudiantes</a></li>
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="PrincipalEmp.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        </div>
        <div class="opcciones">
        <a href="#" id="opccion" onclick="desplegar();"><img src="../Image/Opcciones.png" alt="opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEst.Php"  id="D-letras1" style="color: white" onclick="Buscar_perfil();">Perfil</a></li>
              <li><a href="../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left:0px;">
          <div class="Titulo">
            <h3>Aspirantes</h3>

            <div class="Semestre" style="display:inline-block;">
              <?php
              require_once('../php/conf_tab.php');

              $DB= new ConfigDB();
              $DB->Mysql();
              $bandera=FALSE;

               $Consulta=$DB->CONSULTA("SELECT * FROM `Aspirante`");
               while ($rs= $DB->Obtener_filas($Consulta)) {
                  $bandera=TRUE;
               }
               if ($bandera==FALSE) {
                ?>
                  <h4>No hay nuevos Aspirantes</h4>
                <?php
                 }else{
                ?>
              <table>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre del aspirante</th>
                  <th>Acciones</th>
                </tr>



                <?php
                    $Consulta=$DB->CONSULTA("SELECT * FROM `Aspirante`");
                    while ($rs= $DB->Obtener_filas($Consulta)) {?>
                    <tr>
                      <td><?php echo $rs["codigo_Aspirante"]; ?></td>
                      <td><?php echo $rs["NombreCompleto"]; ?></td>
                      <td>
                         <a href="#"  onclick="DeplegarVentana(<?php echo $rs['codigo_Aspirante'] ?>)" >Desplegar datos</a><br>
                         <a href="#" onclick="MoverAEstudiante(<?php echo $rs["codigo_Aspirante"] ?>)">Hacer Estudiante</a>
                      </td>
                    </tr>
                  <?php }?>

              </table>
            <?php } ?>
            </div>

          </div>

        </div>
        <div class="Ventana" id="Ventan" style="display:none;" >

        </div>

      </div>
    </div>

  </body>
</html>
