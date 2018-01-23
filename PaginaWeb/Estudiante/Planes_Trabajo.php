<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="../Styles/Tablas.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/Actividades.css" type="text/css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Scripts/main.Js"></script>
        <script type="text/javascript" src="../Scripts/Actividades.Js"></script>

  </head>
  <body>
    <div class="page">
      <div id="menu" class="menu_lateral" style="width: 0px; border: hidden;">
        <a href="#" class="boton-cerrar" onclick="ocultar2()">×</a>
        <ul class="menu">
          <!--<li><a href="#">Requisitos de ingresos</a></li>
          <li><a href="#">Beca CONACYT</a></li>
          <li><a href="#">Desempeño academico</a></li>-->
          <li><a href="Actividades.php">Informes de actividades</a></li>
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>

      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
          <img src="../image/logo_udg-gris.png" style="width:50px; height: 100%; margin-top: -15px">
          <h2 title="MGPES"> <a href="principal.Php">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
        </div>
        <div class="opcciones">
          <a href="#" id="opccion" onclick="desplegar();"><img src="../Image/Opcciones.png" alt="Opcciones" style="height: 18px; width:26px;"></a>
        </div>
      </div>
      <div id="center" style="marginLeft: 0px;">
        <div class="Rigth">
          <div id="opcciones" class="menu_desplegable" style="width: 0px; height: 0px; margin-top: 0px;">
            <ul>
              <li><a href="PerfilEst.Php"  id="D-letras1" style="color: white">Perfil</a></li>
              <li><a href="../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>

        <div class="centro" id="centro" style="margin-left:0px;">
          <div id="Titulo" class="Titulo">
            <h3 style="display: -webkit-inline-box;">Plan de trabajo</h3>
            <input type="button"  name="nuevoPlan" value="Nuevo Plan de estudios" onclick="Nuevo_plan()" id="NPlan" style=" display: inline; float: right; margin: 20px;">
            <div id="Semestres" style="display: block;">
              <div class="Semestre">
                <p>Primer Semetre</p>
                <a href="#" id="Primero" onclick="desplegar_primero()"><p style="float: right; margin-right: 10px;">+</p></a>
              </div>
              <div class="desplegar" style="display: none;" id="primer">
                <div id="Tabla" style="display: inline ;">
                  <?php
                    require_once("../php/conf_tab.php");

                    $DB= new ConfigDB();

                    $DB->Mysql();
                    $contador=0;
                    $No_tesis= $_SESSION["DireccionTesis"];


                    $Consulta=$DB->CONSULTA("SELECT * FROM `plan_de_trabajo`  where  No_tesis = '$No_tesis' and Semestre='Primer Semestre'");
                  ?>

                  <form class="" action="" method="post" style="padding:10px;">

                    <table>
                      <tbody>


                      <tr>
                        <th>No.</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                      </tr>


                      <?php
                        include_once("../php/funciones.php");

                        while ($rs= $DB->Obtener_filas($Consulta)) {
                            $datos="'".$rs[0]."||".
                                   $rs[1]."||".
                                   $rs[2]."||".
                                   $rs[3]."||".
                                   $rs[4]."||".
                                   $rs[5]."||".
                                   $rs[6]."||".
                                   $rs[7]."||".
                                   $rs[8]."||".
                                   $rs[9]."||".
                                   $rs[10]."||".
                                   $rs[11]."||".
                                   $rs[12]."'";
                            $datos=CambiarEnter($datos);
                          ?>

                          <tr>
                            <td><?php echo $contador= $contador + 1 ?></td>
                            <td><?php echo $rs["Semestre"] ?> </td>
                            <td><a href="javascript:;" id="<?php echo $rs['id']; ?>" onclick="Editar_reporte(<?php echo $datos;?>)">Editar</a><br>
                              <a href="javascript:;" id="<?php echo $rs['id'];?>" onclick="Eliminar_Reporte(<?php echo $rs['id'];?>)">Eliminar</a><br>
                              <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="mostrarVentana(<?php  echo $rs['id'];?>)">Visualizar</a><br>
                               <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="Subir_plan(<?php  echo $rs['id'];?>)">Subir Firmado</a>

                            </td>
                        </tr>
                      <?php } ?>



                      </tbody>
                    </table>


                  </form>
                </div>

              </div>
              <div class="Semestre">
                <p>Segundo Semetre</p>
                <a href="#" id="Segundo" onclick="desplegar_Segundo()"><p style="float: right; margin-right: 10px;" >+</p></a>
              </div>
              <div class="desplegar" style="display: none" id="Segund">
                <div id="Tabla" style="display: inline ;">
                  <?php
                    require_once("../php/conf_tab.php");

                    $DB= new ConfigDB();

                    $DB->Mysql();
                    $contador=0;
                    $No_tesis= $_SESSION["DireccionTesis"];


                    $Consulta=$DB->CONSULTA("SELECT * FROM `plan_de_trabajo`  where  No_tesis = '$No_tesis' and Semestre='Segundo Semestre'");
                  ?>

                  <form class="" action="" method="post" style="padding:10px;">

                    <table >
                      <tbody>


                      <tr>
                        <th>No.</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                      </tr>


                      <?php


                        while ($rs= $DB->Obtener_filas($Consulta)) {
                          $datos="'".$rs[0]."||".
                                 $rs[1]."||".
                                 $rs[2]."||".
                                 $rs[3]."||".
                                 $rs[4]."||".
                                 $rs[5]."||".
                                 $rs[6]."||".
                                 $rs[7]."||".
                                 $rs[8]."||".
                                 $rs[9]."||".
                                 $rs[10]."||".
                                 $rs[11]."||".
                                 $rs[12]."'";

                          ?>

                          <tr>
                          <td><?php echo $contador= $contador + 1 ?></td>
                          <td><?php echo $rs["Semestre"] ?> </td>
                          <td><a href="javascript:;" id="<?php echo $rs['id']; ?>" onclick="Editar_reporte(<?php echo $datos;?>)">Editar</a><br>
                              <a href="javascript:;" id="<?php echo $rs['id'];?>" onclick="Eliminar_Reporte(<?php echo $rs['id'];?>)">Eliminar</a><br>
                              <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="mostrarVentana(<?php  echo $rs['id'];?>)">Visualizar</a><br>
                               <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="Subir_plan(<?php  echo $rs['id'];?>)">Subir Firmado</a>

                            </td>
                        </tr>
                      <?php } ?>



                      </tbody>
                    </table>


                  </form>
                </div>
              </div>

              <div class="Semestre">
                <p>Tercer Semetre</p>
                <a href="#" id="Tercero" onclick="desplegar_Tercero()"><p style="float: right; margin-right: 10px;">+</p></a>
              </div>
              <div class="desplegar" style="display: none" id="Tercer">

                <div id="Tabla" style="display: inline ;">
                  <?php
                    require_once("../php/conf_tab.php");

                    $DB= new ConfigDB();

                    $DB->Mysql();
                    $contador=0;
                    $No_tesis= $_SESSION["DireccionTesis"];


                    $Consulta=$DB->CONSULTA("SELECT * FROM `plan_de_trabajo`  where  No_tesis = '$No_tesis' and Semestre='Tercer Semestre'");
                  ?>

                  <form class="" action="" method="post" style="padding:10px;">

                    <table>
                      <tbody>


                      <tr>
                        <th>No.</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                      </tr>


                      <?php


                        while ($rs= $DB->Obtener_filas($Consulta)) { $datos="'".$rs[0]."||".
                               $rs[1]."||".
                               $rs[2]."||".
                               $rs[3]."||".
                               $rs[4]."||".
                               $rs[5]."||".
                               $rs[6]."||".
                               $rs[7]."||".
                               $rs[8]."||".
                               $rs[9]."||".
                               $rs[10]."||".
                               $rs[11]."||".
                               $rs[12]."'";

                      ?>

                      <tr>
                        <td><?php echo $contador= $contador + 1 ?></td>
                        <td><?php echo $rs["Semestre"] ?> </td>
                        <td><a href="javascript:;" id="<?php echo $rs['id']; ?>" onclick="Editar_reporte(<?php echo $datos;?>)">Editar</a><br>
                              <a href="javascript:;" id="<?php echo $rs['id'];?>" onclick="Eliminar_Reporte(<?php echo $rs['id'];?>)">Eliminar</a><br>
                              <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="mostrarVentana(<?php  echo $rs['id'];?>)">Visualizar</a><br>
                               <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="Subir_plan(<?php  echo $rs['id'];?>)">Subir Firmado</a>

                            </td>
                        </tr>
                      <?php } ?>



                      </tbody>
                    </table>


                  </form>
                </div>
              </div>
              <div class="Semestre">
                <p>Cuarto Semetre</p>
                <a href="#" id="Cuarto" onclick="desplegar_Cuarto()"><p style="float: right; margin-right: 10px;">+</p></a>
              </div>
              <div class="desplegar" style="display: none" id="Cuar">
                <div id="Tabla" style="display: inline ;">
                  <?php
                    require_once("../php/conf_tab.php");

                    $DB= new ConfigDB();

                    $DB->Mysql();
                    $contador=0;
                    $No_tesis= $_SESSION["DireccionTesis"];


                    $Consulta=$DB->CONSULTA("SELECT * FROM `plan_de_trabajo`  where  No_tesis = '$No_tesis' and Semestre='Cuarto Semestre'");
                  ?>

                  <form class="" action="" method="post" style="padding:10px;">

                    <table>
                      <tbody>


                      <tr>
                        <th>No.</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                      </tr>


                      <?php


                        while ($rs= $DB->Obtener_filas($Consulta)) {


                         $datos="'".$rs[0]."||".
                               $rs[1]."||".
                               $rs[2]."||".
                               $rs[3]."||".
                               $rs[4]."||".
                               $rs[5]."||".
                               $rs[6]."||".
                               $rs[7]."||".
                               $rs[8]."||".
                               $rs[9]."||".
                               $rs[10]."||".
                               $rs[11]."||".
                               $rs[12]."'";

                      ?>

                      <tr>
                        <td><?php echo $contador= $contador + 1 ?></td>
                        <td><?php echo $rs["Semestre"] ?> </td>
                        <td><a href="javascript:;" id="<?php echo $rs['id']; ?>" onclick="Editar_reporte(<?php echo $datos;?>)">Editar</a><br>
                              <a href="javascript:;" id="<?php echo $rs['id'];?>" onclick="Eliminar_Reporte(<?php echo $rs['id'];?>)">Eliminar</a><br>
                              <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="mostrarVentana(<?php  echo $rs['id'];?>)">Visualizar</a><br>
                               <a href="javascript:;" id="<?Php echo $rs['id'];?>" onclick="Subir_plan(<?php  echo $rs['id'];?>)">Subir Firmado</a>

                            </td>
                        </tr>
                      <?php } ?>



                      </tbody>
                    </table>


                  </form>
                </div>
              </div>
            </div>



            <div id="Nuevo" style="display:none;">

              <legend></legend>
                <form class="formato" id="FormReporte" action="../php/Nuevo_plan.php" method="post" enctype="multipart/form-data" style="display: inline;">

                  <input type="hidden" id="Id" name="Id_value" value="0" class="form-control">
                    <div class="contenido">
                      <label>Semestre</label>
                      <select name="Semestre" class="form-control" id="Semestre">
                        <option></option>
                        <option>Primer Semestre</option>
                        <option>Segundo Semestre</option>
                        <option>Tercer Semestre</option>
                        <option>Cuarto Semestre</option>
                      </select >
                    <div class="col-md-4">
                      <label>Materias curriculares</label>
                      <textarea name="Materias" class="form-control" id="Materias"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Proyecto de tesis</label>
                      <textarea name="Proyecto" class="form-control" id="Proyecto"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Producción académica</label>
                      <textarea name="Producción" class="form-control" id="Produccion"></textarea>
                    </div>

                    <div class="col-md-4">
                      <label>Actividades extracurriculares</label>
                      <textarea name="extracurriculares" class="form-control" id="extracurriculares"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Gestión de apoyo externo para la investigación</label>
                      <textarea name="investigacion" class="form-control" id="investigacion"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Asistencia a eventos académicos como ponente</label>
                      <textarea name="Ponencias" class="form-control" id='Ponencias'></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Asesoría especializada</label>
                      <textarea name="Asesorias" class="form-control" id="Asesoria"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Necesidades tutoriales</label>
                      <textarea name="Tutorias" class="form-control" id="Tutorias"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Movilidad académica</label>
                      <textarea name="Movilidad" class="form-control" id="Movilidad"></textarea>
                    </div>
                    <div class="col-md-4">
                      <label>Vinculación académica</label>
                      <textarea name="Vinculación" class="form-control" id="Vinculacion"></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12">
                      <input type="submit" id="Submit" name="Descargar" value="Enviar" style="display:inline-block">
                      <input type="button" name="Cancelar" value="Cancelar" style="display:inline-block" onclick="Cancelar1();">
                    </div>


                  </div>

                </form>

                <div class="">
                  <form id="Firmado" action="../php/Firmado.php" method="post" enctype="multipart/form-data" style="display: none; margin-top: 10px;" >
                    <input type="hidden"  name="Id_Firma"  value="0" id="Id_Firma">
                    <input type="file" name="img_firma"style="display: block;" class="form-control">
                    <input type="submit" name="Guardar" value="Guardar">
                    <input type="button" value="Cancelar" onclick="Cancelar1()">
                  </form>
                </div>

                <br>
            </div>
          </div>
            <br>
        </div>
      </div>
    </div>
    <div id="miVentana" style="position: fixed; width: 350px; height: 190px; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; border: #333333 3px solid; background-color: #FAFAFA; color: #000000; display:none;" onload="cambiar()">
    <a class="boton-cerrar"  href="<?php  echo $_SERVER['PHP_SELF'];?>" >x</a>
    <div>
      <p>Selecciona el plan de trabajo que quieras visualizar</p>
      <form action="../pdf/Plan_de_trabajo.php" id="Form_de_seleccion" method="post" enctype="multipart/form-data" target="_blank">

        <input type="hidden" value="0" name="Id_Seleccionado" id="Id_Seleccionado">

        <select name="visualizar" id="Vizualisador" style="margin:10px; display: block;" onchange="cambiar()">
          <option value="../pdf/visualizar_plan_firmado.php" id="CF" >Firmado</option>
          <option value="../pdf/Plan_de_trabajo.php" id="SF">Sin firmar</option>
        </select>
        <script>
          var valor= $("#Vizualisador").val();
          cambio(valor);

          function cambiar(){
            var valor= $("#Vizualisador").val();
            cambio(valor);
          }

        </script>

        <input type="submit" value="Descargar" style="display: inline-block; margin:10px;" onclick="ocultarVentana()" id="Enviar">
        <input type="button" value="Cancelar" onclick="Cancelar1()" >
      </form>

    </div>
  </div>
  </body>
</html>
