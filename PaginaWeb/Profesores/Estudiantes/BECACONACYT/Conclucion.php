<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    echo "<script> window.location= '/Mgpes/PaginaWeb/index.php'</script>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conclucion de beca</title>
    <link href="../../../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="../../../Styles/tablas.css" type="text/css">
    <link rel="stylesheet" href="../../../Styles/Actividades.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../Scripts/main.Js"></script>
  </head>
  <body>
    <div class="page">
      <?php include_once('../../MenuLateral.php') ?>
      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../../../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
        <div class="contenedor">
          <img src="../../../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="../../PrincipalEmp.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        </div>
        <div class="opcciones">
        <a href="#" id="opccion" onclick="desplegar();"><img src="../../../Image/Opcciones.png" alt="opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEmp.Php"  id="D-letras1" style="color: white" onclick="Buscar_perfil();">Perfil</a></li>
              <li><a href="../../../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left:0px;">
          <div class="Titulo">
            <div id="tabla" style="display:block">
              <h3>Conclución de beca</h3>
              <table style="margin-bottom:30px;">
              <tr>
                <th>Codigo</th>
                <th>Estudiante</th>
                <th>Generación</th>
                <th>Acciones</th>
              </tr>
              <?php include_once('../../../Php/conf_tab.php');
              $DB=new ConfigDB;
              $DB->Mysql();

              $consulta=$DB->CONSULTA("SELECT * from Estudiante where  Estudiante.CODIGO_ES not in (SELECT CODIGO_ES From conacytconclucion)");

              while($i=$DB->Obtener_filas($consulta)){ ?>
                <tr>
                  <td><?php echo $i["CODIGO_ES"]; ?></td>
                  <td><?php echo $i["NombreCompleto"]; ?></td>
                  <td><?php echo $i["calenadario_escolar"]; ?></td>
                  <td>
                    <a href="#" onclick="Cambiar_php('tabla','formato','<?php echo $i['CODIGO_ES']; ?>')">Seleccionar conclución <br>de beca</a><br>
                  </td>
                </tr>
              <?php } ?>
              </table>
            </div>
            <div id="formato" style="display:none;">
              <h3>Seleccion de tipo de conclución de beca</h3>
              <div style="border: solid 1px; margin:10%">
                <form action="" method="post" id="Form">
                  <div class="row">
                    <div class="col-md-3" >
                      <label>Tipo de conclución de beca</label>
                      <select class="form-control" name="conclucion">
                        <option value="Objetivo cumplido">Objetivo de la beca cumplido</option>
                        <option value="Objetivo no cumplido">Objetivo de la beca no cumplido</option>
                      </select>
                    </div>
                    <div class="col-md-3" style="float: bottom;">
                      <br>
                      <button type="button" class=" btn btn-light" onclick="CancelarNuevoAsp()">Cancelar</button>
                      <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>

            </div>

          </div>

        </div>

        </div>
      </div>
    </div>

  </body>
</html>
