<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }

  include('../php/Actividades/PriemerSemestre/Produccion1.php');
  include('../php/Actividades/SegundoSemestre/Produccion2.php');
  include('../php/Actividades/TercerSemestre/Produccion3.php');
  include('../php/Actividades/CuartoSemestre/Produccion4.php');


?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="../Styles/tablas.css" type="text/css">
    <link rel="stylesheet" href="../Styles/Actividades.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
          <li><a href="#">Desempeño academico</a></li>-->
          <li><a href="BecasCONACYT.php">Beca CONACYT</a></li>
          <li><a href="Planes_Trabajo.php">Plan de trabajo</a></li>
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>

      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
          <img src="../image/logo_udg-gris.png" >
          <h2 title="MGPES"> <a href="principal.Php" id="Letras">Maestría en Gestion y Politícas de la Educación Superior</a></h2>
          <h2 title="MGPES"> <a href="principal.Php" id="Letras2" style="display: none;">MGPES</a></h2>
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
          <div class="Titulo">
            <h3>Informe de actividades</h3>

            <div class="Semestre">
              <a href="#" id="Primero" onclick="desplegar_primero()"><p>Primer Semetre</p></a>
              <a href="#" id="Primero" onclick="desplegar_primero()"><p style="float: right; margin-right: 10px;" >+</p></a>
              <div class="desplegar" style="display: none;" id="primer">
                <div id="tabs1" style="display: block;">
                  <?php
                  require_once('../php/conf_tab.php');

                  $DB= new ConfigDB();
                  $DB->Mysql();
                  $codigo=$_SESSION["CODIGO_ES"];
                  $bandera=FALSE;

                   $Consulta=$DB->CONSULTA("SELECT * FROM `actividades`  where  ID_Est = '$codigo' and Semestre='Primer Semestre'");
                   while ($rs= $DB->Obtener_filas($Consulta)) {
                      $bandera=TRUE;
                   }
                   if ($bandera==FALSE) {
                    ?>
                    <input type='button' value='nuevo Informe' onclick="nuevoInforme1()" style="margin: 10px;">
                    </div>
                    </div>
                    <?php
                     }else{
                    ?>
                  <div class="Semestre">
                    <a href="#" onclick="Desplegar('Materias1')" id="Materia1"><p >Materias curriculares</p></a>
                     <div class="desplegar" id="Materias1" style="display: none;">
                      <div class="Contenido">
                      <div id="tabla_Materias1" style="display: block;">

                        <?php
                          require_once('../php/conf_tab.php');

                          $DB=new ConfigDB();
                          $DB->Mysql();

                        $Consulta=$DB->CONSULTA("SELECT * FROM `Materias_Semestres`  where  ID_Est = '$codigo' and Semestre='Primer Semestre'");
                         while ($rs= $DB->Obtener_filas($Consulta)) {
                            $bandera=FALSE;
                         }

                         if ($bandera==TRUE) {?>
                           <input type="button" style=" margin: 10px; " name="nuevo" value="Ingresar Materias" onclick="Materias_Semestres(1) ">
                           </div>
                           <?php } else{ ?>
                                <table>
                                  <tbody>


                                    <tr>
                                      <th>No.</th>
                                      <th>Nombre del Curso</th>
                                      <th>Calendario</th>
                                      <th>Calificación</th>
                                      <th>Nombre del profesor</th>
                                      <th>Acciones</th>
                                    </tr>

                                <?php
                            require_once('../php/conf_tab.php');

                              $DB=new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["CODIGO_ES"];
                              $contador=0;

                            $Consulta=$DB->CONSULTA("SELECT * from materias_cursadas c join materias_semestres s on c.Id_Materias=s.Id_Materias where s.Id_Est='$codigo' and  s.Semestre='Primer Semestre'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                             $contador++; ?>

                                    <tr>
                                      <td><?php echo $contador; ?></td>
                                      <td><?php echo $rs["Nombre_Curso"] ?></td>
                                      <td><?php echo $rs["Calendario"]; ?></td>
                                      <td><?php echo $rs["Calificacion"]; ?></td>
                                      <td><?php echo $rs["NombreProfesor"]; ?></td>
                                      <td>
                                        <a href="#" onclick="Editar_Materias1(<?php echo $rs['Id'];?>)">Editar</a><br>
                                        <a href="#" onclick="Eliminar_Materia(<?php echo $rs['Id'];?>)">Eliminar</a>
                                      </td>

                                    </tr>

                            <?php } ?>
                            </tbody>
                          </table>
                        <div class="row" style=" margin: 10px;">
                          <div style="margin-right: 10px;" >
                            <input type="button" value="Gurdar Kardex" onclick="Kardex(1);"  class="Botones">
                            <input type="button" value="Nueva Materia" onclick="nueva_materia(1)" class="Botones">
                          </div>
                        </div>



                        </div>

                      <div>
                        <form action="../php/Actividades/PriemerSemestre/Eliminar1.php"  method="post" enctype="multipart/form-data" id="Eliminar">
                          <input type="hidden" id="Id" value="0" name="Materia_Id">
                        </form>

                        <form action="../php/Actividades/PriemerSemestre/nuevamateria1.php"  method="post" enctype="multipart/form-data" class="form"  id="formatos_primero" style="display: none;">
                            <input type="hidden" name="Id_Materia" id="Id1" value="0" required>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Nombre del curso</label>
                                  <input type="text" class="form-control" name="Nombre_Curso" value="Nombre del curso" required>
                                </div>
                                <div class="col-md-6">
                                  <label>Calendario</label>
                                  <input type="date" class="form-control" name="Calendario" max="<?php echo date('Y-m-d');?>" value="<?php  echo date('Y-m-d');?>" title="Fecha requerida" required>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Calificación</label>
                                  <input type="number" name="Calificacion" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                  <label>Nombre del profesor</label>
                                  <input type="text" name="Profesor" value="Nombre del profesor" class="form-control" required>
                                </div>
                              </div>
                              <div class="row" style="margin: 10px; ">
                                  <input type="submit" value="Guardar" >
                                  <input type="button" value="Cancelar" onclick="cancelar_Actvidades()" >
                              </div>

                          </form>
                          <form action="../php/Actividades/PriemerSemestre/kardex1.php" id="kardex1" method="post" enctype="multipart/form-data" style="display: none;">

                            <input type="File" id="Kardex_inp" class="form-control" name="Kardex_inp" accept="application/pdf">
                            <input type="hidden" name="Semestre" id="Semestre1">

                            <input type="submit" value="Guardar" class="Botones" >
                            <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">

                          </form>
                      </div>


                      <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="Semestre">
                      <a href="#" onclick="Desplegar('Proyecto1')" id="Proyectos1"><p>Proyecto de tesis</p></a>
                      <div class="desplegar" id="Proyecto1" style="display: none;">
                        <div id="tab_Pro">
                      <?php
                        require_once('../php/conf_tab.php');

                        $DB= new ConfigDB();
                        $DB->Mysql();
                        $codigo=$_SESSION["CODIGO_ES"];
                        $bandera=FALSE;

                         $Consulta=$DB->CONSULTA("SELECT * FROM proyectos_semestre where  CODIGO_ES = '$codigo' and Semestre='Primer Semestre'");
                         while ($rs= $DB->Obtener_filas($Consulta)) {
                            $bandera=TRUE;
                         }
                         if ($bandera==FALSE) {
                          ?>
                          <input type='button' value='Nuevo Informe' onclick="Nuevo_Proyecto(1)" style="margin: 10px; margin-left: 25px;">
                          </div>
                          <?php
                           }else{
                          ?>
                                  <table>
                                    <tbody>

                                      <tr>
                                        <th>Titulo del Proyecto</th>
                                        <th>Director de Tesis</th>
                                        <th>Co-director de tesis</th>
                                        <th>Lector 1</th>
                                        <th>Lector 2</th>
                                        <th>Avances</th>
                                        <th>Acciones</th>
                                      </tr>

                                  <?php
                              require_once('../php/conf_tab.php');

                                $DB=new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["CODIGO_ES"];
                                $contador=0;

                              $Consulta=$DB->CONSULTA("SELECT * from proyectos_semestre where Codigo_es='$codigo' and  Semestre='Primer Semestre'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                               $contador++; ?>



                                      <tr>
                                        <td><?php echo $rs["TemaTesis"]; ?></td>
                                        <td><?php echo $rs["DirectorTesis"];?></td>
                                        <td><?php echo $rs["Co_director"]; ?></td>
                                        <td><?php echo $rs["Lector_1"]; ?></td>
                                        <td><?php echo $rs["Lector_2"]; ?></td>
                                        <td><?php echo $rs["Avance"]; ?></td>

                                        <td>
                                          <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                          <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                        </td>

                                      </tr>

                              <?php } ?>
                              </tbody>
                            </table>
                          </div>
                          <?php  ?>
                            <div class="forms">
                              <form id="Editar_proyectos" action="../Php/Actividades/PriemerSemestre/Editar_proyectos1.php" method="post" enctype="multipart/form-data" style="display: none;">
                              <input type="hidden" name="Id_temp" id="Id_temp" value="0">
                              <input type="hidden" name="semestre" value="Primer Semestre">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tema de la tesis</label>
                                    <textarea name="TemaTesis" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Nombre del Director de la Tesis</label>
                                    <textarea name="DirectorTesis" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Co-Director de tesis</label>
                                    <textarea name="Co-director" class="form-control" rows="1"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Lector 1</label>
                                    <textarea name="Lector_1" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Lector 2</label>
                                    <textarea name="Lector_2" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Avances</label>
                                  <input type="number" name="Avances" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tesis</label>
                                    <input type="file" name="Tesis" class="form-control">
                                  </div>
                                </div>
                                <div class="row" style="margin: 10px;">
                                  <input type="submit" value="Enviar">
                                  <input type="button" value="Cancelar" onclick="cancelar_Actvidades();">
                                </div>
                              </div>
                              </form>
                              <form id="Eliminar_proyecto" action="../php/Actividades/PriemerSemestre/Eliminar_proyectos1.php" method="post">
                                <input type="hidden" name="Id_tesis" value="0" id="Id_tesis">
                                <input type="hidden" name="Semestre" value="Primer Semestre">
                              </form>
                            </div>

                            <?php } ?>
                          </div>
                  </div>

                  <div class="Semestre" >
                      <a href="#"  id="Producc1" onclick="Desplegar('Produccion1')" ><p>Producción académica</p></a>
                        <div class="desplegar" id="Produccion1" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalProduccion" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["CODIGO_ES"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM produccionAlumnos  where  CODIGO_ES = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['NO_Publicacion'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Titulo</th>
                                              <th>Tipo de Produccion</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Primer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * from produccionAlumnos where IdActividades='$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Titulo"]; ?></td>
                                              <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                              <td><?php if (!$rs["Probatorio"]){echo "No";}else{echo "Si";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Produccion(<?php
                                                  switch ($rs["TipoDeProduccion"]) {
                                                    case 'Artículo de difusión y divulgación':
                                                      echo "1, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo Arbitrado':
                                                      echo "2, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo en revista indexada':
                                                      echo "3, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Capítulo del libro':
                                                      echo "4, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Consultoría':
                                                      echo "5, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Informe técnico':
                                                      echo "6, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Libro':
                                                      echo "7, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Manuales de operación':
                                                      echo "8, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material de apoyo':
                                                      echo "9, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material didáctico':
                                                      echo "10, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Memorias':
                                                      echo "11, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Productividad innovadora':
                                                      echo "12, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Producción artística':
                                                      echo "13, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Prototipo':
                                                      echo "14, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Otro':
                                                      echo "15, {$rs['NO_Publicacion']}";
                                                      break;
                                                    }

                                                    ?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_Produccion(<?php

                                                  switch ($rs["TipoDeProduccion"]) {
                                                    case 'Artículo de difusión y divulgación':
                                                      echo "1, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo Arbitrado':
                                                      echo "2, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo en revista indexada':
                                                      echo "3, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Capítulo del libro':
                                                      echo "4, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Consultoría':
                                                      echo "5, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Informe técnico':
                                                      echo "6, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Libro':
                                                      echo "7, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Manuales de operación':
                                                      echo "8, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material de apoyo':
                                                      echo "9, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material didáctico':
                                                      echo "10, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Memorias':
                                                      echo "11, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Productividad innovadora':
                                                      echo "12, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Producción artística':
                                                      echo "13, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Prototipo':
                                                      echo "14, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Otro':
                                                      echo "15, {$rs['NO_Publicacion']}";
                                                      break;
                                                    }

                                                 ?>)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                        <script>

                            function cambiar(){
                              var valor= $("#Vizualisador").val();
                              cambio1(valor);
                            }

                          </script>
                        <div class="Forms_Produccion" style="display:none;" id="Forms_Produccion">
                            <select name="SelSeccion" id=Vizualisador style="margin-top:10px;" onchange="cambiar()" class="form-control">
                              <option value="1" selected="selected">Artículo de difusión y divulgación</option>
                              <option value="2">Artículo Arbitrado</option>
                              <option value="3">Artículo en revista indexada</option>
                              <option value="4">Capítulo del libro</option>
                              <option value="5">Consultoría</option>
                              <option value="6">Informe técnico</option>
                              <option value="7">Libro</option>
                              <option value="8">Manuales de operación</option>
                              <option value="9">Material de apoyo</option>
                              <option value="10">Material didáctico</option>
                              <option value="11">Memorias</option>
                              <option value="12">Productividad innovadora</option>
                              <option value="13">Producción artística</option>
                              <option value="14">Prototipo</option>
                              <option value="15">Otra</option>
                            </select>

                            <div id="1" style="display:inline;">
                              <?php
                                echo ArticuloDifucion();
                               ?>
                            </div>
                            <div id="2" style="display:none;">
                              <?php   echo articuloArbitrado(); ?>
                            </div>
                            <div id="3" style="display:none;">
                              <?php echo RevistaIndexada(); ?>
                            </div>
                            <div id="4" style="display:none;">
                              <?php  echo CapituloDeLibro();?>
                            </div>
                            <div id="5" style="display:none;">
                              <?php echo consultoria(); ?>
                            </div>
                            <div id="6" style="display:none;">
                              <?php echo InformeTecnico();  ?>
                            </div>
                            <div id="7" style="display:none;">
                              <?php echo Libro();?>
                            </div>
                            <div id="8" style="display:none;">
                              <?php echo ManualesDeOperacion(); ?>
                            </div>
                            <div id="9" style="display:none;">
                              <?php echo MaterialDeApoyo();  ?>
                            </div>
                            <div id="10" style="display:none;">
                              <?php echo MaterialDidactico();?>
                            </div>
                            <div id="11" style="display:none;">
                              <?php echo Memorias(); ?>
                            </div>
                            <div id="12" style="display:none;">
                              <?php echo ProductividadInnovadora(); ?>
                            </div>
                            <div id="13" style="display:none;">
                              <?php echo ProduccionArtistica(); ?>
                            </div>
                            <div id="14" style="display:none;">
                              <?php  echo Prototipo();  ?>
                            </div>
                            <div id="15" style="display:none;">
                              <?php echo Otra(); ?>
                            </div>
                          </div>
                          <div class="forms" style="display: none;">
                            <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" id="Eliminar_produccion" style="display: none;" >
                              <input type="hidden" name="id_Eliminar" id="Id_Pro" value="">
                              <input type="hidden" name="Tipo_Eliminar" id="Tipo_Eliminar" value="">
                            </form>
                          </div>
                        </div>
                  </div>

                  <div class="Semestre" >
                    <a href="#"  id="Extra1" onclick="Desplegar('Extracurriculares1')" ><p>Actividades Extracurriculares</p></a>
                      <div class="desplegar" id="Extracurriculares1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalExtracurriculares1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Tipo de Actividad</th>
                                            <th>Institucion Organizadora</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Tipo_Actividad"]; ?></td>
                                            <td><?php echo $rs["Institucion_Organizadora"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Extracurriculares(<?php echo $rs['idActividades_Extracurriculares'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idActividades_Extracurriculares'];?>, 1)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="form_Extracurriculares1" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="form_Extra1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tipo Activiadad</label>
                                    <select name="Activiadad_Extra" class="form-control" required>
                                      <option>Seminario</option>
                                      <option>Taller</option>
                                      <option>Curso</option>
                                      <option>Conferencia</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Nombre del profesor encargado</label>
                                    <input type="text" name="Profesor_Act" class="form-control" maxlength="255" required>
                                  </div>
                                  <?php echo formPais(); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Ciudad</label>
                                    <input type="text" name="Ciudad" class="form-control" maxlength="255" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" class="form-control" required>
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Continente</label>
                                    <select name="Continente" class="form-control" required>
                                      <option>Asia</option>
                                      <option>Africa</option>
                                      <option>America</option>
                                      <option>Europa</option>
                                      <option>Ociania</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="Fecha_Inicio" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de termino</label>
                                    <input type="date" name="Fecha_Final" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Institucion Organizadora</label>
                                    <input type="text" name="Institucion_Organizadora" class="form-control" maxlength="255" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Consatancia</label>
                                    <input type="file" name="Constancia" class="form-control" required>
                                  </div>
                                </div>
                                <div style="margin: 10px;">
                                  <input type="submit" name="Submit_Extracurriculares1" value="Guardar">
                                  <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Investi1" onclick="Desplegar('ApoyoInvestigacion1')" ><p>Gestión de apoyo externo para la investigación</p></a>
                      <div class="desplegar" id="ApoyoInvestigacion1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalapoyo1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Descripccion</th>
                                            <th>Documento probatorio</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Descripccion"]; ?></td>
                                            <td><?php if (isset($rs["Probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Gestion(<?php echo $rs['idgestionapoyoinv'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idgestionapoyoinv'];?>, 2)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div class="" id="Forms_apoyo1" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="Form_apoyo1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                              <input type="hidden" name="id_Apoyo1" id="id_Apoyo1" >
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6 " style="align-content: center;">
                                    <label>Descripcción</label>
                                    <textarea name="Descripccion" id="Descripccion_Apoyo" rows="10" required class="form-control" style="margin: auto; display: block;"></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6" >
                                      <label>Probatorio</label>
                                      <input type="File" id="File_Apoyo" name="Probatorio" required class="form-control">
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <input type="submit" name="Submit_Apoyo1" id="Submit_Apoyo1" value="Guardar">
                                    <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades();" class="Botones">
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                 <div class="Semestre" >
                    <a href="#"  id="Pon1" onclick="Desplegar('Ponentes1')" ><p>Asistencia a eventos academicos como ponente</p></a>
                      <div class="desplegar" id="Ponentes1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalCongresos1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$codigo';");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Evento' onclick="NuevoCongreso(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Nombre del congreso</th>
                                            <th>Titulo del congreso</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$Id_Act';");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["NombreCongreso"]; ?></td>
                                            <td><?php echo $rs["Titulo_del_Trabajo"]; ?></td>
                                            <td><?php echo $rs["Fecha_inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Congreso(<?php echo $rs['id_Congresos_Ponente'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['id_Congresos_Ponente'];?>, 3)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevoCongreso(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="forms_congresos1" style="display: none;">
                          <form enctype="multipart/form-data" method="post" id="Form_Cong1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                            <div class="form-group">
                            <input type="hidden" name="Id_congresos1" id="Id_congresos1">
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Nombre del congreso</label>
                                  <input type="text" name="Nombre" maxlength="255" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Titulo del Trabajo</label>
                                  <input type="text" name="Titulo" maxlength="255" class="form-control" required >
                                </div>
                                <div class="col-md-4">
                                  <label>Tipo de participacion de congresos</label>
                                  <select name="Tipo_Congreso" class="form-control" required>
                                    <option>Conferencia Magistral</option>
                                    <option>Moderador</option>
                                    <option>Orfanizador del Evento</option>
                                    <option>Participante en mesa redonda</option>
                                    <option>Ponencia</option>
                                    <option>Poster</option>
                                    <option>Presentaci de articulo en extenso</option>
                                    <option>Asistencia</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Fecha de inicio</label>
                                  <input type="date" name="Fecha_Inicio_Congreso" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Fecha termino</label>
                                  <input type="date" name="Fecha_Final_Congreso" class="form-control" required>
                                </div>
                                <?php formPais(); ?>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Constancia</label>
                                  <input type="file" name="constancia_Congreso" class="form-control" required>
                                </div>
                              </div>
                              <div style="margin: 10px;">
                                <input type="submit" name="Submit_Congreso1" id="Submit_Congreso1" value="Guardar">
                                <input type="button" name="cancelar" onclick="cancelar_Actvidades()" value="Cancelar">
                              </div>
                            </div>
                          </form>
                        </div>
                        </div>

                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Asesoria1" onclick="Desplegar('AsesoriaEsp1')" ><p>Asesoría especializada</p></a>
                      <div class="desplegar" id="AsesoriaEsp1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalEspecializada1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Fecha</th>
                                            <th>Calendario escolar</th>
                                            <th>Documento probatorio</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Fecha"]; ?></td>
                                            <td><?php echo $rs["Calendario_Escolar"]; ?></td>
                                            <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Especialidad(<?php echo $rs['idAsesoria_Especializada'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idAsesoria_Especializada'];?>, 4)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="Form_Especializada1" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="id_Especializada1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha del Reporte</label>
                                    <input type="date" name="Fech_Reporte" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Actividades realizadas</label>
                                    <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Tareas realizadas</label>
                                    <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Observaciones</label>
                                    <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha de la Siguiente asesorìa</label>
                                    <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="margin: 10px;">
                                      <input type="submit" name="Submit_Especializada1" value="Gardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Tutorias1" onclick="Desplegar('NecesidadesTuto1')" ><p>Necesidades tutoriales</p></a>
                      <div class="desplegar" id="NecesidadesTuto1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalTutorias1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Fecha</th>
                                            <th>Calendario Escolar</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Fecha"]; ?></td>
                                            <td><?php echo $rs["Calendario_Escolar"]?> </td>

                                            <td>
                                              <a href="#" onclick="Editar_Asesoria(<?php echo $rs['idReporte_Asesorias'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idReporte_Asesorias'];?>, 5)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="Form_Tutoriar1" style="display: none;">
                            <form method="post" enctype="multipart/form-data" id="Id_Reporte_tutoria1"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha del Reporte</label>
                                    <input type="date" name="Fech_Reporte" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Actividades realizadas</label>
                                    <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Tareas realizadas</label>
                                    <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Observaciones</label>
                                    <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha de la Siguiente asesorìa</label>
                                    <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="margin: 10px;">
                                      <input type="submit" name="Submit_Asesorias1" value="Gardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Movi1" onclick="Desplegar('MovilidadAca1')" ><p>Movilidad académica</p></a>
                      <div class="desplegar" id="MovilidadAca1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalMovilidad1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $NumeroPublicacion=$rs['RegistroMovilidadEs'];
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Tipo de Movilidad</th>
                                            <th>Institucion</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Tipo_Movilidad"]; ?></td>
                                            <td><?php echo $rs["Institucion"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Facha_Termino"]; ?></td>
                                            <td>
                                              <a href="#" onclick="Editar_Movilidad(<?php echo $rs['RegistroMovilidadEs'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['RegistroMovilidadEs'];?>, 6)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(1)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="form_Movilidad1" style="display: none;">
                            <form method="post" id="Id_Movilidad1" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tipo de Movilidad</label>
                                    <select name="Tipo_Movilidad" class="form-control" required>
                                      <option>Sector Educativo</option>
                                      <option>Organizaciones Promotoras</option>
                                      <option>Sector Empresarial</option>
                                      <option>Sector Gubernamental</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" id="ambito_Mov" required class="form-control">
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <?php formPais(); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Institucion</label>
                                    <input type="text" name="Institucion" id="Institucion_movilidad" class="form-control" maxlength="255" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Objetivo</label>
                                    <textarea name="Objetivo" id="Objetivo_Movilidad" class="form-control" rows="1" required></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Producto</label>
                                    <input type="text" name="Producto" class="form-control" maxlength="255" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de Inicio</label>
                                    <input type="date" name="Fecha_Inicio" id="Fecha_Inicio_Movilidad" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de Termino</label>
                                    <input type="date" name="Fecha_Final" id="Fecha_Final_Movilidad"  class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Institucion de apoyo</label>
                                    <textarea name="Institucion_apoyo" id="Inst_Apoy_Movil" class="form-control" rows="1"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Apoyo Economico</label>
                                    <input type="number" name="ApoyoEconomico"  id="ApoyoEconomico_Movilidad" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Plan de trabajo</label>
                                    <input type="file" name="Planes_Trabajo_Movilidad" id="Planes_Trabajo_Movilidad" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Constancia</label>
                                    <input type="File" name="Constancia" id="Constancia_Movildad" class="form-control" required>
                                  </div>
                                </div>
                                <div style="margin: 10px;">
                                  <input type="submit" name="Submit_Movilidad1" id="Submit_Movilidad1" value="Guardar">
                                  <input type="button" name="Cancelar" onclick="cancelar_Actvidades()" value="Cancelar" >
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Vincu1" onclick="Desplegar('VinculacionAcade1')" ><p>Vinculación académica</p></a>
                      <div class="desplegar" id="VinculacionAcade1" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalVinculacion1" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Primer_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $NumeroPublicacion=$rs['No_vinculacion'];
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Vinculación' onclick="NuevaVinculacion(1)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Producto Obtenido</th>
                                            <th>Ambito</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Primer_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["ProductoObtenido"]; ?></td>
                                            <td><?php echo $rs["Ambito"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"];?><br><?php echo $rs["Fecha_Final"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Vinculacion(<?php echo $rs['No_vinculacion'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['No_vinculacion'];?>, 7)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaVinculacion(1)" style="margin: 10px;">
                            <?php } ?>
                        </div>
                        <div class="" id="Forms_Vinculacion1" style="display: none;">
                          <form method="post" id="Id_Vinculacion1" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>  >
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Ambito</label>
                                  <select name="Ambito" id="ambito1" required class="form-control">
                                    <option>Nacional</option>
                                    <option>Internacional</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Producto Obtenido</label>
                                  <select name="ProductoObtenido" id="ProductoObtenido1" class="form-control" >
                                    <option>Ponencia</option>
                                    <option>Capitulo de libro</option>
                                    <option>Libro publicado</option>
                                    <option>Asistencias a eventos</option>
                                    <option>Articulos</option>
                                    <option>Otro</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Sector</label>
                                  <select name="Sector" id="Sector1" class="form-control" required>
                                    <option>Sector Educativo</option>
                                    <option>Organizaciones Promotoras</option>
                                    <option>Sector Empresarial</option>
                                    <option>Sector Gubernamental</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Institucion</label>
                                  <textarea name="Institucion" id="Institucion1" class="form-control" rows="1" required></textarea>
                                </div>
                                <?php formPais(); ?>
                                <div class="col-md-4">
                                  <label>Objetivo</label>
                                  <textarea name="Objetivo" id="Objetivo1" class="form-control" rows="1" required></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Fecha de inicio</label>
                                  <input type="date" name="Fecha_Inicio" id="Fecha_Inicio1"  class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Fecha de termino</label>
                                  <input type="date" name="Fecha_Final" id="Fecha_Final1" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Tipo de vinculacion</label>
                                  <select name="TipoVinc" id="TipoVinc" class="form-control">
                                    <option>Proyectos</option>
                                    <option>Asesoria</option>
                                    <option>Intercambio academico</option>
                                    <option>Asistencia tecnica</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Mecanismo</label>
                                  <select name="Mecanismo" id="Mecanismo1" required class="form-control
                                  ">
                                    <option>Convenio</option>
                                    <option>Contrato</option>
                                    <option>Gestion directa</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Resultado</label>
                                  <textarea name="Resultado" id="Resultado1" rows="1" class="form-control"></textarea>
                                </div>
                                <div class="col-md-4">
                                  <label>Beneficio</label>
                                  <textarea name="Beneficio" id="Beneficio1" rows="1" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Probatorio</label>
                                  <input type="file" name="Probatorio" class="form-control" required>
                                </div>
                              </div>
                              <input type="submit" value="Guardar" name="submitVinculacion1" id="Submit_Vinculacion">
                              <input type="button" value="Cancelar" name="cancelar" onclick="cancelar_Actvidades();" class='Botones' >
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>

                  <div id="form_Eliminar" style="display: none;">
                    <form method="post" id="form_Eliminar_varios" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                      <input type="hidden" name="id_Eliminar_1" id="id_Eliminar_1" value="">
                      <input type="hidden" name="Tipo_Eliminar1" id="Tipo_Eliminar1" value="">
                    </form>
                  </div>

                  <form action="../pdf/Informe_de_Actividades.php" id="Form_Generacion1" method="post" enctype="multipart/form-data" target="_blank" >
                    <input type="submit" value="Gener informe de Actividades" style="float: left; margin: 10px;" id="Boton">
                  </form>

                    <input type="button" style="display: block; margin: 10px;" value="Subir informe de actividades firmado" id="Boton" onclick="ocultarTabla(1)" >

                </div>

                <form action="../Php/Actividades/PriemerSemestre/AgregarFirmado1.php" style="display: none; margin: 5px;" id="Archivo1" enctype="multipart/form-data" method="POST">
                  <label><h3>Subir informe Firmado</h2></label>
                  <input type="file" name="Probatorio" class="form-control">
                  <br>
                  <input type="Submit" value="Subir archivo" class="Botones">
                  <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">
                </form>


                </div>

                <?php } ?>
              </div>


            <div class="Semestre">
              <a href="#" id="Segundo" onclick="desplegar_Segundo()"><p>Segundo Semetre</p></a>
              <a href="#" id="Segundo" onclick="desplegar_Segundo()"><p style="float: right; margin-right: 10px;" >+</p></a>
              <div class="desplegar" style="display: none" id="Segund">
                <div id="tabs2" style="display: block;" >
                  <?php
                  require_once('../php/conf_tab.php');

                  $DB= new ConfigDB();
                  $DB->Mysql();
                  $codigo=$_SESSION["CODIGO_ES"];
                  $bandera=FALSE;

                   $Consulta=$DB->CONSULTA("SELECT * FROM `actividades`  where  ID_Est = '$codigo' and Semestre='Segundo Semestre'");
                   while ($rs= $DB->Obtener_filas($Consulta)) {
                      $bandera=TRUE;
                   }
                   if ($bandera==FALSE) {
                    ?>
                    <input type='button' value='nuevo Informe' onclick="nuevoInforme2()" style="margin: 10px;">
                    </div>
                    </div>
                    <?php
                     }else{
                    ?>
                  <div class="Semestre">
                    <a href="#" onclick="Desplegar('Materias2')" id="Materia2"><p >Materias curriculares</p></a>
                     <div class="desplegar" id="Materias2" style="display: none;">
                      <div class="Contenido">
                      <div id="tabla_Materias2" style="display: block;">

                        <?php
                          require_once('../php/conf_tab.php');

                          $DB=new ConfigDB();
                          $DB->Mysql();

                        $Consulta=$DB->CONSULTA("SELECT * FROM `Materias_Semestres`  where  ID_Est = '$codigo' and Semestre='Segundo Semestre'");
                         while ($rs= $DB->Obtener_filas($Consulta)) {
                            $bandera=FALSE;
                         }

                         if ($bandera==TRUE) {?>
                           <input type="button" style=" margin: 10px; " name="nuevo" value="Ingresar Materias" onclick="Materias_Semestres(2) ">
                           </div>
                           <?php } else{ ?>
                                <table>
                                  <tbody>


                                    <tr>
                                      <th>No.</th>
                                      <th>Nombre del Curso</th>
                                      <th>Calendario</th>
                                      <th>Calificación</th>
                                      <th>Nombre del profesor</th>
                                      <th>Acciones</th>
                                    </tr>

                                <?php
                            require_once('../php/conf_tab.php');

                              $DB=new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["CODIGO_ES"];
                              $contador=0;

                            $Consulta=$DB->CONSULTA("SELECT * from materias_cursadas c join materias_semestres s on c.Id_Materias=s.Id_Materias where s.Id_Est='$codigo' and  s.Semestre='Segundo Semestre'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                             $contador++; ?>

                                    <tr>
                                      <td><?php echo $contador; ?></td>
                                      <td><?php echo $rs["Nombre_Curso"] ?></td>
                                      <td><?php echo $rs["Calendario"]; ?></td>
                                      <td><?php echo $rs["Calificacion"]; ?></td>
                                      <td><?php echo $rs["NombreProfesor"]; ?></td>
                                      <td>
                                        <a href="#" onclick="Editar_Materias2(<?php echo $rs['Id'];?>)">Editar</a><br>
                                        <a href="#" onclick="Eliminar_Materia(<?php echo $rs['Id'];?>)">Eliminar</a>
                                      </td>

                                    </tr>

                            <?php } ?>
                            </tbody>
                          </table>
                        <div class="row" style=" margin: 10px;">
                          <div style="margin-right: 10px;" >
                            <input type="button" value="Gurdar Kardex" onclick="Kardex(2);"  class="Botones">
                            <input type="button" value="Nueva Materia" onclick="nueva_materia(2)" class="Botones">
                          </div>
                        </div>



                        </div>

                      <div>


                        <form action="../php/Actividades/SegundoSemestre/nuevamateria2.php"  method="post" enctype="multipart/form-data" class="form"  id="formatos_Segundo" style="display: none;">
                            <input type="hidden" name="Id_Materia" id="Id2" value="0" required>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Nombre del curso</label>
                                  <input type="text" class="form-control" name="Nombre_Curso" value="Nombre del curso" required>
                                </div>
                                <div class="col-md-6">
                                  <label>Calendario</label>
                                  <input type="date" class="form-control" name="Calendario" max="<?php echo date('Y-m-d');?>" value="<?php  echo date('Y-m-d');?>" title="Fecha requerida" required>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Calificación</label>
                                  <input type="number" name="Calificacion" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                  <label>Nombre del profesor</label>
                                  <input type="text" name="Profesor" value="Nombre del profesor" class="form-control" required>
                                </div>
                              </div>
                              <div class="row" style="margin: 10px; ">
                                  <input type="submit" value="Guardar" >
                                  <input type="button" value="Cancelar" onclick="cancelar_Actvidades()" >
                              </div>

                          </form>
                          <form action="../php/Actividades/SegundoSemestre/kardex2.php" id="kardex2" method="post" enctype="multipart/form-data" style="display: none;">

                            <input type="File" id="Kardex_inp" class="form-control" name="Kardex_inp" accept="application/pdf">
                            <input type="hidden" name="Semestre" id="Semestre2">

                            <input type="submit" value="Guardar" class="Botones" >
                            <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">

                          </form>
                      </div>


                      <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="Semestre">
                      <a href="#" onclick="Desplegar('Proyecto2')" id="Proyectos2"><p>Proyecto de tesis</p></a>
                      <div class="desplegar" id="Proyecto2" style="display: none;">
                        <div id="tab_Pro2">
                      <?php
                        require_once('../php/conf_tab.php');

                        $DB= new ConfigDB();
                        $DB->Mysql();
                        $codigo=$_SESSION["CODIGO_ES"];
                        $bandera=FALSE;

                         $Consulta=$DB->CONSULTA("SELECT * FROM proyectos_semestre where  CODIGO_ES = '$codigo' and Semestre='Segundo Semestre'");
                         while ($rs= $DB->Obtener_filas($Consulta)) {
                            $bandera=TRUE;
                         }
                         if ($bandera==FALSE) {
                          ?>
                          <input type='button' value='Nuevo Informe' onclick="Nuevo_Proyecto(2)" style="margin: 10px; margin-left: 25px;">
                          </div>
                          <?php
                           }else{
                          ?>
                                  <table>
                                    <tbody>

                                      <tr>
                                        <th>Titulo del Proyecto</th>
                                        <th>Director de Tesis</th>
                                        <th>Co-director de tesis</th>
                                        <th>Lector 1</th>
                                        <th>Lector 2</th>
                                        <th>Avances</th>
                                        <th>Acciones</th>
                                      </tr>

                                  <?php
                              require_once('../php/conf_tab.php');

                                $DB=new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["CODIGO_ES"];
                                $contador=0;

                              $Consulta=$DB->CONSULTA("SELECT * from proyectos_semestre where Codigo_es='$codigo' and  Semestre='Segundo Semestre'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                               $contador++; ?>



                                      <tr>
                                        <td><?php echo $rs["TemaTesis"]; ?></td>
                                        <td><?php echo $rs["DirectorTesis"];?></td>
                                        <td><?php echo $rs["Co_director"]; ?></td>
                                        <td><?php echo $rs["Lector_1"]; ?></td>
                                        <td><?php echo $rs["Lector_2"]; ?></td>
                                        <td><?php echo $rs["Avance"]; ?></td>

                                        <td>
                                          <a href="#" onclick="Editar_proyectos2(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                          <a href="#" onclick="Eliminar_proyectos2(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                        </td>

                                      </tr>

                              <?php } ?>
                              </tbody>
                            </table>
                          </div>
                          <?php  ?>
                            <div class="forms">
                              <form id="Editar_proyectos2" action="../Php/Actividades/SegundoSemestre/Editar_proyectos2.php" method="post" enctype="multipart/form-data" style="display: none;">
                              <input type="hidden" name="Id_temp" id="Id_temp2" value="0">
                              <input type="hidden" name="semestre" value="Segundo Semestre">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tema de la tesis</label>
                                    <textarea name="TemaTesis" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Nombre del Director de la Tesis</label>
                                    <textarea name="DirectorTesis" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Co-Director de tesis</label>
                                    <textarea name="Co-director" class="form-control" rows="1"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Lector 1</label>
                                    <textarea name="Lector_1" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Lector 2</label>
                                    <textarea name="Lector_2" class="form-control" rows="1"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Avances</label>
                                  <input type="number" name="Avances" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tesis</label>
                                    <input type="file" name="Tesis" class="form-control">
                                  </div>
                                </div>
                                <div class="row" style="margin: 10px;">
                                  <input type="submit" value="Enviar">
                                  <input type="button" value="Cancelar" onclick="cancelar_Actvidades();">
                                </div>
                              </div>
                              </form>
                              <form id="Eliminar_proyecto2" action="../php/Actividades/SegundoSemestre/Eliminar_proyectos2.php" method="post">
                                <input type="hidden" name="Id_tesis" value="0" id="Id_tesis2">
                                <input type="hidden" name="Semestre" value="Segundo Semestre">
                              </form>
                            </div>

                            <?php } ?>
                          </div>
                  </div>

                  <div class="Semestre" >
                      <a href="#"  id="Producc2" onclick="Desplegar('Produccion2')" ><p>Producción académica</p></a>
                        <div class="desplegar" id="Produccion2" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalProduccion2" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Segundo_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM produccionAlumnos  where  IdActividades = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['NO_Publicacion'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(2)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Titulo</th>
                                              <th>Tipo de Produccion</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Segundo_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * from produccionAlumnos where IdActividades='$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Titulo"]; ?></td>
                                              <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                              <td><?php if (!$rs["Probatorio"]){echo "No";}else{echo "Si";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Produccion2(<?php
                                                  switch ($rs["TipoDeProduccion"]) {
                                                    case 'Artículo de difusión y divulgación':
                                                      echo "201, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo Arbitrado':
                                                      echo "202, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo en revista indexada':
                                                      echo "203, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Capítulo del libro':
                                                      echo "204, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Consultoría':
                                                      echo "205, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Informe técnico':
                                                      echo "206, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Libro':
                                                      echo "207, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Manuales de operación':
                                                      echo "208, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material de apoyo':
                                                      echo "209, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material didáctico':
                                                      echo "210, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Memorias':
                                                      echo "211, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Productividad innovadora':
                                                      echo "212, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Producción artística':
                                                      echo "213, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Prototipo':
                                                      echo "214, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Otro':
                                                      echo "215, {$rs['NO_Publicacion']}";
                                                      break;
                                                    }

                                                    ?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_Produccion(<?php

                                                  switch ($rs["TipoDeProduccion"]) {
                                                    case 'Artículo de difusión y divulgación':
                                                      echo "201, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo Arbitrado':
                                                      echo "202, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Artículo en revista indexada':
                                                      echo "203, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Capítulo del libro':
                                                      echo "204, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Consultoría':
                                                      echo "205, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Informe técnico':
                                                      echo "206, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Libro':
                                                      echo "207, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Manuales de operación':
                                                      echo "208, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material de apoyo':
                                                      echo "209, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Material didáctico':
                                                      echo "210, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Memorias':
                                                      echo "211, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Productividad innovadora':
                                                      echo "212, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Producción artística':
                                                      echo "213, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Prototipo':
                                                      echo "214, {$rs['NO_Publicacion']}";
                                                      break;
                                                    case 'Otro':
                                                      echo "215, {$rs['NO_Publicacion']}";
                                                      break;
                                                    }

                                                 ?>)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(2)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                        <script>

                            function cambiar2(){
                              var valor= $("#Vizualisador2").val();
                              cambio2(valor);
                            }

                          </script>
                        <div class="Forms_Produccion" style="display:none;" id="Forms_Produccion2">
                            <select name="SelSeccion" id=Vizualisador2 style="margin-top:10px;" onchange="cambiar2()" class="form-control">
                              <option value="201" selected="selected">Artículo de difusión y divulgación</option>
                              <option value="202">Artículo Arbitrado</option>
                              <option value="203">Artículo en revista indexada</option>
                              <option value="204">Capítulo del libro</option>
                              <option value="205">Consultoría</option>
                              <option value="206">Informe técnico</option>
                              <option value="207">Libro</option>
                              <option value="208">Manuales de operación</option>
                              <option value="209">Material de apoyo</option>
                              <option value="210">Material didáctico</option>
                              <option value="211">Memorias</option>
                              <option value="212">Productividad innovadora</option>
                              <option value="213">Producción artística</option>
                              <option value="214">Prototipo</option>
                              <option value="215">Otra</option>
                            </select>

                            <div id="201" style="display:inline;">
                              <?php
                                echo ArticuloDifucion2();
                               ?>
                            </div>
                            <div id="202" style="display:none;">
                              <?php   echo articuloArbitrado2(); ?>
                            </div>
                            <div id="203" style="display:none;">
                              <?php echo RevistaIndexada2(); ?>
                            </div>
                            <div id="204" style="display:none;">
                              <?php  echo CapituloDeLibro2();?>
                            </div>
                            <div id="205" style="display:none;">
                              <?php echo consultoria2(); ?>
                            </div>
                            <div id="206" style="display:none;">
                              <?php echo InformeTecnico2();  ?>
                            </div>
                            <div id="207" style="display:none;">
                              <?php echo Libro2();?>
                            </div>
                            <div id="208" style="display:none;">
                              <?php echo ManualesDeOperacion2(); ?>
                            </div>
                            <div id="209" style="display:none;">
                              <?php echo MaterialDeApoyo2();  ?>
                            </div>
                            <div id="210" style="display:none;">
                              <?php echo MaterialDidactico2();?>
                            </div>
                            <div id="211" style="display:none;">
                              <?php echo Memorias2(); ?>
                            </div>
                            <div id="212" style="display:none;">
                              <?php echo ProductividadInnovadora2(); ?>
                            </div>
                            <div id="213" style="display:none;">
                              <?php echo ProduccionArtistica2(); ?>
                            </div>
                            <div id="214" style="display:none;">
                              <?php  echo Prototipo2();  ?>
                            </div>
                            <div id="215" style="display:none;">
                              <?php echo Otra2(); ?>
                            </div>
                          </div>
                        </div>
                  </div>

                  <div class="Semestre" >
                    <a href="#"  id="Extra2" onclick="Desplegar('Extracurriculares2')" ><p>Actividades Extracurriculares</p></a>
                      <div class="desplegar" id="Extracurriculares2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalExtracurriculares2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Actividad Extracurricular' onclick="NuevaExtracurricular(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Tipo de Actividad</th>
                                            <th>Institucion Organizadora</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Tipo_Actividad"]; ?></td>
                                            <td><?php echo $rs["Institucion_Organizadora"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Extracurriculares2(<?php echo $rs['idActividades_Extracurriculares'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idActividades_Extracurriculares'];?>, 1)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="form_Extracurriculares2" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="form_Extra2" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tipo Activiadad</label>
                                    <select name="Activiadad_Extra" class="form-control" required>
                                      <option>Seminario</option>
                                      <option>Taller</option>
                                      <option>Curso</option>
                                      <option>Conferencia</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Nombre del profesor encargado</label>
                                    <input type="text" name="Profesor_Act" class="form-control" maxlength="255" required>
                                  </div>
                                  <?php echo formPais(); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Ciudad</label>
                                    <input type="text" name="Ciudad" class="form-control" maxlength="255" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" class="form-control" required>
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Continente</label>
                                    <select name="Continente" class="form-control" required>
                                      <option>Asia</option>
                                      <option>Africa</option>
                                      <option>America</option>
                                      <option>Europa</option>
                                      <option>Ociania</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="Fecha_Inicio" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de termino</label>
                                    <input type="date" name="Fecha_Final" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Institucion Organizadora</label>
                                    <input type="text" name="Institucion_Organizadora" class="form-control" maxlength="255" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Consatancia</label>
                                    <input type="file" name="Constancia" class="form-control" required>
                                  </div>
                                </div>
                                <div style="margin: 10px;">
                                  <input type="submit" name="Submit_Extracurriculares2" value="Guardar">
                                  <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Investi2" onclick="Desplegar('ApoyoInvestigacion2')" ><p>Gestión de apoyo externo para la investigación</p></a>
                      <div class="desplegar" id="ApoyoInvestigacion2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalapoyo2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Descripccion</th>
                                            <th>Documento probatorio</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Descripccion"]; ?></td>
                                            <td><?php if (isset($rs["Probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Gestion2(<?php echo $rs['idgestionapoyoinv'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idgestionapoyoinv'];?>, 2)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div class="" id="Forms_apoyo2" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="Form_apoyo2" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                              <input type="hidden" name="id_Apoyo2" id="id_Apoyo2" >
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6 " style="align-content: center;">
                                    <label>Descripcción</label>
                                    <textarea name="Descripccion" id="Descripccion_Apoyo" rows="10" required class="form-control" style="margin: auto; display: block;"></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6" >
                                      <label>Probatorio</label>
                                      <input type="File" id="File_Apoyo" name="Probatorio" required class="form-control">
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <input type="submit" name="Submit_Apoyo2" id="Submit_Apoyo2" value="Guardar">
                                    <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades();" class="Botones">
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                 <div class="Semestre" >
                    <a href="#"  id="Pon2" onclick="Desplegar('Ponentes2')" ><p>Asistencia a eventos academicos como ponente</p></a>
                      <div class="desplegar" id="Ponentes2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalCongresos2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$codigo';");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Evento' onclick="NuevoCongreso(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Nombre del congreso</th>
                                            <th>Titulo del congreso</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$Id_Act';");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["NombreCongreso"]; ?></td>
                                            <td><?php echo $rs["Titulo_del_Trabajo"]; ?></td>
                                            <td><?php echo $rs["Fecha_inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Congreso2(<?php echo $rs['id_Congresos_Ponente'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['id_Congresos_Ponente'];?>, 3)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevoCongreso(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="forms_congresos2" style="display: none;">
                          <form enctype="multipart/form-data" method="post" id="Form_Cong2" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                            <div class="form-group">
                            <input type="hidden" name="Id_congresos1" id="Id_congresos1">
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Nombre del congreso</label>
                                  <input type="text" name="Nombre" maxlength="255" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Titulo del Trabajo</label>
                                  <input type="text" name="Titulo" maxlength="255" class="form-control" required >
                                </div>
                                <div class="col-md-4">
                                  <label>Tipo de participacion de congresos</label>
                                  <select name="Tipo_Congreso" class="form-control" required>
                                    <option>Conferencia Magistral</option>
                                    <option>Moderador</option>
                                    <option>Orfanizador del Evento</option>
                                    <option>Participante en mesa redonda</option>
                                    <option>Ponencia</option>
                                    <option>Poster</option>
                                    <option>Presentaci de articulo en extenso</option>
                                    <option>Asistencia</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Fecha de inicio</label>
                                  <input type="date" name="Fecha_Inicio_Congreso" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Fecha termino</label>
                                  <input type="date" name="Fecha_Final_Congreso" class="form-control" required>
                                </div>
                                <?php formPais(); ?>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Constancia</label>
                                  <input type="file" name="constancia_Congreso" class="form-control" required>
                                </div>
                              </div>
                              <div style="margin: 10px;">
                                <input type="submit" name="Submit_Congreso2" id="Submit_Congreso2" value="Guardar">
                                <input type="button" name="cancelar" onclick="cancelar_Actvidades()" value="Cancelar">
                              </div>
                            </div>
                          </form>
                        </div>
                        </div>

                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Asesoria2" onclick="Desplegar('AsesoriaEsp2')" ><p>Asesoría especializada</p></a>
                      <div class="desplegar" id="AsesoriaEsp2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalEspecializada2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Fecha</th>
                                            <th>Calendario escolar</th>
                                            <th>Documento probatorio</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Fecha"]; ?></td>
                                            <td><?php echo $rs["Calendario_Escolar"]; ?></td>
                                            <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Especialidad2(<?php echo $rs['idAsesoria_Especializada'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idAsesoria_Especializada'];?>, 4)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="Form_Especializada2" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="id_Especializada2" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha del Reporte</label>
                                    <input type="date" name="Fech_Reporte" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Actividades realizadas</label>
                                    <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Tareas realizadas</label>
                                    <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Observaciones</label>
                                    <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha de la Siguiente asesorìa</label>
                                    <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="margin: 10px;">
                                      <input type="submit" name="Submit_Especializada2" value="Gardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Tutorias2" onclick="Desplegar('NecesidadesTuto2')" ><p>Necesidades tutoriales</p></a>
                      <div class="desplegar" id="NecesidadesTuto2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalTutorias2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $Id_Act =$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Fecha</th>
                                            <th>Calendario Escolar</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $codigo=$_SESSION["CODIGO_ES"];
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Fecha"]; ?></td>
                                            <td><?php echo $rs["Calendario_Escolar"]?> </td>

                                            <td>
                                              <a href="#" onclick="Editar_Asesoria2(<?php echo $rs['idReporte_Asesorias'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['idReporte_Asesorias'];?>, 5)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="Form_Tutoriar2" style="display: none;">
                            <form method="post" enctype="multipart/form-data" id="Id_Reporte_tutoria2"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha del Reporte</label>
                                    <input type="date" name="Fech_Reporte" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Actividades realizadas</label>
                                    <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Tareas realizadas</label>
                                    <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Observaciones</label>
                                    <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Fecha de la Siguiente asesorìa</label>
                                    <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                  <div class="col-md-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" style="margin: 10px;">
                                      <input type="submit" name="Submit_Asesorias2" value="Gardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Movi2" onclick="Desplegar('MovilidadAca2')" ><p>Movilidad académica</p></a>
                      <div class="desplegar" id="MovilidadAca2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalMovilidad2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $NumeroPublicacion=$rs['RegistroMovilidadEs'];
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Tipo de Movilidad</th>
                                            <th>Institucion</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["Tipo_Movilidad"]; ?></td>
                                            <td><?php echo $rs["Institucion"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Facha_Termino"]; ?></td>
                                            <td>
                                              <a href="#" onclick="Editar_Movilidad2(<?php echo $rs['RegistroMovilidadEs'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['RegistroMovilidadEs'];?>, 6)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(2)" style="margin: 10px;">
                            <?php } ?>
                          </div>
                          <div id="form_Movilidad2" style="display: none;">
                            <form method="post" id="Id_Movilidad2" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Tipo de Movilidad</label>
                                    <select name="Tipo_Movilidad" class="form-control" required>
                                      <option>Sector Educativo</option>
                                      <option>Organizaciones Promotoras</option>
                                      <option>Sector Empresarial</option>
                                      <option>Sector Gubernamental</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" id="ambito_Mov" required class="form-control">
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <?php formPais(); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Institucion</label>
                                    <input type="text" name="Institucion" id="Institucion_movilidad" class="form-control" maxlength="255" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Objetivo</label>
                                    <textarea name="Objetivo" id="Objetivo_Movilidad" class="form-control" rows="1" required></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Producto</label>
                                    <input type="text" name="Producto" class="form-control" maxlength="255" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de Inicio</label>
                                    <input type="date" name="Fecha_Inicio" id="Fecha_Inicio_Movilidad" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de Termino</label>
                                    <input type="date" name="Fecha_Final" id="Fecha_Final_Movilidad"  class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Institucion de apoyo</label>
                                    <textarea name="Institucion_apoyo" id="Inst_Apoy_Movil" class="form-control" rows="1"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Apoyo Economico</label>
                                    <input type="number" name="ApoyoEconomico"  id="ApoyoEconomico_Movilidad" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Plan de trabajo</label>
                                    <input type="file" name="Planes_Trabajo_Movilidad" id="Planes_Trabajo_Movilidad" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Constancia</label>
                                    <input type="File" name="Constancia" id="Constancia_Movildad" class="form-control" required>
                                  </div>
                                </div>
                                <div style="margin: 10px;">
                                  <input type="submit" name="Submit_Movilidad2" id="Submit_Movilidad2" value="Guardar">
                                  <input type="button" name="Cancelar" onclick="cancelar_Actvidades()" value="Cancelar" >
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                  <div class="Semestre" >
                    <a href="#"  id="Vincu2" onclick="Desplegar('VinculacionAcade2')" ><p>Vinculación académica</p></a>
                      <div class="desplegar" id="VinculacionAcade2" style="display: none;">
                        <div class="contenido" id="contenidoPrincipalVinculacion2" style="display:block;">
                          <?php
                            require_once('../php/conf_tab.php');

                            $DB= new ConfigDB();
                            $DB->Mysql();
                            $codigo=$_SESSION["Segundo_informe"];
                            $bandera=FALSE;

                             $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$codigo'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $NumeroPublicacion=$rs['No_vinculacion'];
                                $bandera=TRUE;
                             }
                             if ($bandera==FALSE) {
                              ?>
                              <input type='button' value='Agrega Vinculación' onclick="NuevaVinculacion(2)" style="margin: 10px;">
                              <?php
                               }else{
                              ?>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <th>No.</th>
                                            <th>Producto Obtenido</th>
                                            <th>Ambito</th>
                                            <th>Periodo</th>
                                            <th>Acciones</th>
                                          </tr>
                                      <?php
                                  require_once('../php/conf_tab.php');

                                    $DB=new ConfigDB();
                                    $DB->Mysql();
                                    $Id_Act =$_SESSION["Segundo_informe"];
                                    $contador=0;

                                  $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$Id_Act'");
                                   while ($rs= $DB->Obtener_filas($Consulta)) {
                                   $contador++; ?>

                                          <tr>
                                            <td><?php echo $contador; ?> </td>
                                            <td><?php echo $rs["ProductoObtenido"]; ?></td>
                                            <td><?php echo $rs["Ambito"]; ?></td>
                                            <td><?php echo $rs["Fecha_Inicio"];?><br><?php echo $rs["Fecha_Final"]; ?></td>

                                            <td>
                                              <a href="#" onclick="Editar_Vinculacion2(<?php echo $rs['No_vinculacion'];?>)">Editar</a><br>
                                              <a href="#" onclick="Eliminar_varios(<?php echo $rs['No_vinculacion'];?>, 7)">Eliminar</a>
                                            </td>

                                          </tr>

                                  <?php } ?>
                                  </tbody>
                                </table>
                                <input type='button' value='Agrega Produccion' onclick="NuevaVinculacion(2)" style="margin: 10px;">
                            <?php } ?>
                        </div>
                        <div class="" id="Forms_Vinculacion2" style="display: none;">
                          <form method="post" id="Id_Vinculacion2" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>  >
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Ambito</label>
                                  <select name="Ambito" id="ambito1" required class="form-control">
                                    <option>Nacional</option>
                                    <option>Internacional</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Producto Obtenido</label>
                                  <select name="ProductoObtenido" id="ProductoObtenido1" class="form-control" >
                                    <option>Ponencia</option>
                                    <option>Capitulo de libro</option>
                                    <option>Libro publicado</option>
                                    <option>Asistencias a eventos</option>
                                    <option>Articulos</option>
                                    <option>Otro</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Sector</label>
                                  <select name="Sector" id="Sector1" class="form-control" required>
                                    <option>Sector Educativo</option>
                                    <option>Organizaciones Promotoras</option>
                                    <option>Sector Empresarial</option>
                                    <option>Sector Gubernamental</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Institucion</label>
                                  <textarea name="Institucion" id="Institucion1" class="form-control" rows="1" required></textarea>
                                </div>
                                <?php formPais(); ?>
                                <div class="col-md-4">
                                  <label>Objetivo</label>
                                  <textarea name="Objetivo" id="Objetivo1" class="form-control" rows="1" required></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Fecha de inicio</label>
                                  <input type="date" name="Fecha_Inicio" id="Fecha_Inicio1"  class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Fecha de termino</label>
                                  <input type="date" name="Fecha_Final" id="Fecha_Final1" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                  <label>Tipo de vinculacion</label>
                                  <select name="TipoVinc" id="TipoVinc" class="form-control">
                                    <option>Proyectos</option>
                                    <option>Asesoria</option>
                                    <option>Intercambio academico</option>
                                    <option>Asistencia tecnica</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Mecanismo</label>
                                  <select name="Mecanismo" id="Mecanismo1" required class="form-control
                                  ">
                                    <option>Convenio</option>
                                    <option>Contrato</option>
                                    <option>Gestion directa</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                  <label>Resultado</label>
                                  <textarea name="Resultado" id="Resultado1" rows="1" class="form-control"></textarea>
                                </div>
                                <div class="col-md-4">
                                  <label>Beneficio</label>
                                  <textarea name="Beneficio" id="Beneficio1" rows="1" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Probatorio</label>
                                  <input type="file" name="Probatorio" class="form-control" required>
                                </div>
                              </div>
                              <input type="submit" value="Guardar" name="submitVinculacion2" id="Submit_Vinculacion2">
                              <input type="button" value="Cancelar" name="cancelar" onclick="cancelar_Actvidades();" class='Botones' >
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>

                  <form action="../pdf/Informe_de_Actividades2.php" id="Form_Generacion1" method="post" enctype="multipart/form-data" target="_blank">
                    <input type="submit" value="Gener informe de Actividades" style="float: left; margin: 10px;" id="Boton">
                  </form>

                  <input type="button" style="display: block; margin: 10px;" value="Subir infrome de actividades firmado" onclick="ocultarTabla(2)">
                </div>



                <form action="../Php/Actividades/PriemerSemestre/AgregarFirmado2.php" style="display: none; margin: 5px;" id="Archivo2" enctype="multipart/form-data" method="POST">
                  <label><h3>Subir informe Firmado</h2></label>
                  <input type="file" name="Probatorio" class="form-control">
                  <br>
                  <input type="Submit" value="Subir archivo" class="Botones">
                  <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">
                </form>


                </div>
                <?php } ?>
            </div>




            <div class="Semestre">
              <a href="#" id="Tercero" onclick="desplegar_Tercero()"><p>Tercer Semetre</p></a>
              <a href="#" id="Tercero" onclick="desplegar_Tercero()"><p style="float: right; margin-right: 10px;">+</p></a>
              <div class="desplegar" style="display: none" id="Tercer">
                  <div id="tabs3" style="display: block;">
                    <?php
                    require_once('../php/conf_tab.php');

                    $DB= new ConfigDB();
                    $DB->Mysql();
                    $codigo=$_SESSION["CODIGO_ES"];
                    $bandera=FALSE;

                     $Consulta=$DB->CONSULTA("SELECT * FROM `actividades`  where  ID_Est = '$codigo' and Semestre='Tercer Semestre'");
                     while ($rs= $DB->Obtener_filas($Consulta)) {
                        $bandera=TRUE;
                     }
                     if ($bandera==FALSE) {
                      ?>
                      <input type='button' value='nuevo Informe' onclick="nuevoInforme3()" style="margin: 10px;">
                      </div>
                      </div>
                      <?php
                       }else{
                      ?>
                    <div class="Semestre">
                      <a href="#" onclick="Desplegar('Materias3')" id="Materia3"><p >Materias curriculares</p></a>
                       <div class="desplegar" id="Materias3" style="display: none;">
                        <div class="Contenido">
                          <div id="tabla_Materias3" style="display: block;">

                            <?php
                              require_once('../php/conf_tab.php');

                              $DB=new ConfigDB();
                              $DB->Mysql();

                            $Consulta=$DB->CONSULTA("SELECT * FROM `Materias_Semestres`  where  ID_Est = '$codigo' and Semestre='Tercer Semestre'");
                             while ($rs= $DB->Obtener_filas($Consulta)) {
                                $bandera=FALSE;
                             }

                             if ($bandera==TRUE) {?>
                               <input type="button" style=" margin: 10px; " name="nuevo" value="Ingresar Materias" onclick="Materias_Semestres(3) ">
                               </div>
                               <?php } else{ ?>
                                    <table>
                                      <tbody>


                                        <tr>
                                          <th>No.</th>
                                          <th>Nombre del Curso</th>
                                          <th>Calendario</th>
                                          <th>Calificación</th>
                                          <th>Nombre del profesor</th>
                                          <th>Acciones</th>
                                        </tr>

                                    <?php
                                require_once('../php/conf_tab.php');

                                  $DB=new ConfigDB();
                                  $DB->Mysql();
                                  $codigo=$_SESSION["CODIGO_ES"];
                                  $contador=0;

                                $Consulta=$DB->CONSULTA("SELECT * from materias_cursadas c join materias_semestres s on c.Id_Materias=s.Id_Materias where s.Id_Est='$codigo' and  s.Semestre='Tercer Semestre'");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>

                                        <tr>
                                          <td><?php echo $contador; ?></td>
                                          <td><?php echo $rs["Nombre_Curso"] ?></td>
                                          <td><?php echo $rs["Calendario"]; ?></td>
                                          <td><?php echo $rs["Calificacion"]; ?></td>
                                          <td><?php echo $rs["NombreProfesor"]; ?></td>
                                          <td>
                                            <a href="#" onclick="Editar_Materias2(<?php echo $rs['Id'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_Materia(<?php echo $rs['Id'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                          <div class="row" style=" margin: 10px;">
                            <div style="margin-right: 10px;" >
                              <input type="button" value="Gurdar Kardex" onclick="Kardex(3);" class="Botones">
                              <input type="button" value="Nueva Materia" onclick="nueva_materia(3)" class="Botones">
                            </div>
                          </div>



                          </div>

                        <div>


                          <form action="../php/Actividades/TercerSemestre/nuevamateria3.php"  method="post" enctype="multipart/form-data" class="form"  id="formatos_Tercero" style="display: none;">
                              <input type="hidden" name="Id_Materia" id="Id3" value="0" required>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Nombre del curso</label>
                                    <input type="text" class="form-control" name="Nombre_Curso" value="Nombre del curso" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Calendario</label>
                                    <input type="date" class="form-control" name="Calendario" max="<?php echo date('Y-m-d');?>" value="<?php  echo date('Y-m-d');?>" title="Fecha requerida" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Calificación</label>
                                    <input type="number" name="Calificacion" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Nombre del profesor</label>
                                    <input type="text" name="Profesor" value="Nombre del profesor" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row" style="margin: 10px; ">
                                    <input type="submit" value="Guardar" >
                                    <input type="button" value="Cancelar" onclick="cancelar_Actvidades()" >
                                </div>

                            </form>
                            <form action="../php/Actividades/TercerSemestre/kardex3.php" id="kardex3" method="post" enctype="multipart/form-data" style="display: none;">

                              <input type="File" id="Kardex_inp" class="form-control" name="Kardex_inp" accept="application/pdf">
                              <input type="hidden" name="Semestre" id="Semestre3">

                              <input type="submit" value="Guardar" class="Botones" >
                              <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">

                            </form>
                        </div>


                        <?php } ?>
                        </div>
                      </div>
                    </div>

                    <div class="Semestre">
                        <a href="#" onclick="Desplegar('Proyecto3')" id="Proyectos3"><p>Proyecto de tesis</p></a>
                        <div class="desplegar" id="Proyecto3" style="display: none;">
                          <div id="tab_Pro3">
                        <?php
                          require_once('../php/conf_tab.php');

                          $DB= new ConfigDB();
                          $DB->Mysql();
                          $codigo=$_SESSION["CODIGO_ES"];
                          $bandera=FALSE;

                           $Consulta=$DB->CONSULTA("SELECT * FROM proyectos_semestre where  CODIGO_ES = '$codigo' and Semestre='Tercer Semestre'");
                           while ($rs= $DB->Obtener_filas($Consulta)) {
                              $bandera=TRUE;
                           }
                           if ($bandera==FALSE) {
                            ?>
                            <input type='button' value='Nuevo Informe' onclick="Nuevo_Proyecto(3)" style="margin: 10px; margin-left: 25px;">
                            </div>
                            <?php
                             }else{
                            ?>
                                    <table>
                                      <tbody>

                                        <tr>
                                          <th>Titulo del Proyecto</th>
                                          <th>Director de Tesis</th>
                                          <th>Co-director de tesis</th>
                                          <th>Lector 1</th>
                                          <th>Lector 2</th>
                                          <th>Avances</th>
                                          <th>Acciones</th>
                                        </tr>

                                    <?php
                                require_once('../php/conf_tab.php');

                                  $DB=new ConfigDB();
                                  $DB->Mysql();
                                  $codigo=$_SESSION["CODIGO_ES"];
                                  $contador=0;

                                $Consulta=$DB->CONSULTA("SELECT * from proyectos_semestre where Codigo_es='$codigo' and  Semestre='Tercer Semestre'");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>



                                        <tr>
                                          <td><?php echo $rs["TemaTesis"]; ?></td>
                                          <td><?php echo $rs["DirectorTesis"];?></td>
                                          <td><?php echo $rs["Co_director"]; ?></td>
                                          <td><?php echo $rs["Lector_1"]; ?></td>
                                          <td><?php echo $rs["Lector_2"]; ?></td>
                                          <td><?php echo $rs["Avance"]; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos3(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos3(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            <?php  ?>
                              <div class="forms">
                                <form id="Editar_proyectos" action="../Php/Actividades/TercerSemestre/Editar_proyectos3.php" method="post" enctype="multipart/form-data" style="display: none;">
                                <input type="hidden" name="Id_temp" id="Id_temp" value="0">
                                <input type="hidden" name="semestre" value="Tercer Semestre">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tema de la tesis</label>
                                      <textarea name="TemaTesis" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Nombre del Director de la Tesis</label>
                                      <textarea name="DirectorTesis" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Co-Director de tesis</label>
                                      <textarea name="Co-director" class="form-control" rows="1"></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Lector 1</label>
                                      <textarea name="Lector_1" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Lector 2</label>
                                      <textarea name="Lector_2" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Avances</label>
                                    <input type="number" name="Avances" class="form-control">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tesis</label>
                                      <input type="file" name="Tesis" class="form-control">
                                    </div>
                                  </div>
                                  <div class="row" style="margin: 10px;">
                                    <input type="submit" value="Enviar">
                                    <input type="button" value="Cancelar" onclick="cancelar_Actvidades();">
                                  </div>
                                </div>
                                </form>
                                <form id="Eliminar_proyecto" action="../php/Actividades/TercerSemestre/Eliminar_proyectos3.php" method="post">
                                  <input type="hidden" name="Id_tesis" value="0" id="Id_tesis">
                                  <input type="hidden" name="Semestre" value="Tercer Semestre">
                                </form>
                              </div>

                              <?php } ?>
                            </div>
                    </div>

                    <div class="Semestre" >
                        <a href="#"  id="Producc3" onclick="Desplegar('Produccion3')" ><p>Producción académica</p></a>
                          <div class="desplegar" id="Produccion3" style="display: none;">
                            <div class="contenido" id="contenidoPrincipalProduccion3" style="display:block;">
                              <?php
                                require_once('../php/conf_tab.php');

                                $DB= new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["Tercer_informe"];
                                $bandera=FALSE;

                                 $Consulta=$DB->CONSULTA("SELECT * FROM produccionAlumnos  where  IdActividades = '$codigo'");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                    $NumeroPublicacion=$rs['NO_Publicacion'];
                                    $bandera=TRUE;
                                 }
                                 if ($bandera==FALSE) {
                                  ?>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(3)" style="margin: 10px;">
                                  <?php
                                   }else{
                                  ?>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>No.</th>
                                                <th>Titulo</th>
                                                <th>Tipo de Produccion</th>
                                                <th>Documento probatorio</th>
                                                <th>Acciones</th>
                                              </tr>
                                          <?php
                                      require_once('../php/conf_tab.php');

                                        $DB=new ConfigDB();
                                        $DB->Mysql();
                                        $codigo=$_SESSION["CODIGO_ES"];
                                        $Id_Act =$_SESSION["Tercer_informe"];
                                        $contador=0;

                                      $Consulta=$DB->CONSULTA("SELECT * from produccionAlumnos where IdActividades='$Id_Act'");
                                       while ($rs= $DB->Obtener_filas($Consulta)) {
                                       $contador++; ?>

                                              <tr>
                                                <td><?php echo $contador; ?> </td>
                                                <td><?php echo $rs["Titulo"]; ?></td>
                                                <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                                <td><?php if (!$rs["Probatorio"]){echo "No";}else{echo "Si";}; ?></td>

                                                <td>
                                                  <a href="#" onclick="Editar_Produccion3(<?php
                                                    switch ($rs["TipoDeProduccion"]) {
                                                      case 'Artículo de difusión y divulgación':
                                                        echo "301, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo Arbitrado':
                                                        echo "302, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo en revista indexada':
                                                        echo "303, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Capítulo del libro':
                                                        echo "304, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Consultoría':
                                                        echo "305, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Informe técnico':
                                                        echo "306, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Libro':
                                                        echo "307, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Manuales de operación':
                                                        echo "308, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material de apoyo':
                                                        echo "309, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material didáctico':
                                                        echo "310, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Memorias':
                                                        echo "311, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Productividad innovadora':
                                                        echo "312, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Producción artística':
                                                        echo "313, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Prototipo':
                                                        echo "314, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Otro':
                                                        echo "315, {$rs['NO_Publicacion']}";
                                                        break;
                                                      }

                                                      ?>)">Editar</a><br>
                                                  <a href="#" onclick="Eliminar_Produccion(<?php

                                                    switch ($rs["TipoDeProduccion"]) {
                                                      case 'Artículo de difusión y divulgación':
                                                        echo "301, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo Arbitrado':
                                                        echo "302, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo en revista indexada':
                                                        echo "303, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Capítulo del libro':
                                                        echo "304, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Consultoría':
                                                        echo "305, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Informe técnico':
                                                        echo "306, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Libro':
                                                        echo "307, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Manuales de operación':
                                                        echo "308, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material de apoyo':
                                                        echo "309, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material didáctico':
                                                        echo "310, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Memorias':
                                                        echo "311, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Productividad innovadora':
                                                        echo "312, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Producción artística':
                                                        echo "313, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Prototipo':
                                                        echo "314, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Otro':
                                                        echo "315, {$rs['NO_Publicacion']}";
                                                        break;
                                                      }

                                                   ?>)">Eliminar</a>
                                                </td>

                                              </tr>

                                      <?php } ?>
                                      </tbody>
                                    </table>
                                    <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(3)" style="margin: 10px;">
                                <?php } ?>
                              </div>
                            <script>

                                function cambiar3(){
                                  var valor= $("#Vizualisador3").val();
                                  cambio3(valor);
                                }

                            </script>
                          <div class="Forms_Produccion" style="display:none;" id="Forms_Produccion3">
                              <select name="SelSeccion" id=Vizualisador3 style="margin-top:10px;" onchange="cambiar3()" class="form-control">
                                <option value="301" selected="selected">Artículo de difusión y divulgación</option>
                                <option value="302">Artículo Arbitrado</option>
                                <option value="303">Artículo en revista indexada</option>
                                <option value="304">Capítulo del libro</option>
                                <option value="305">Consultoría</option>
                                <option value="306">Informe técnico</option>
                                <option value="307">Libro</option>
                                <option value="308">Manuales de operación</option>
                                <option value="309">Material de apoyo</option>
                                <option value="310">Material didáctico</option>
                                <option value="311">Memorias</option>
                                <option value="312">Productividad innovadora</option>
                                <option value="313">Producción artística</option>
                                <option value="314">Prototipo</option>
                                <option value="315">Otra</option>
                              </select>

                              <div id="301" style="display:inline;">
                                <?php
                                  echo ArticuloDifucion();
                                 ?>
                              </div>
                              <div id="302" style="display:none;">
                                <?php   echo articuloArbitrado3(); ?>
                              </div>
                              <div id="303" style="display:none;">
                                <?php echo RevistaIndexada3(); ?>
                              </div>
                              <div id="304" style="display:none;">
                                <?php  echo CapituloDeLibro3();?>
                              </div>
                              <div id="305" style="display:none;">
                                <?php echo consultoria3(); ?>
                              </div>
                              <div id="306" style="display:none;">
                                <?php echo InformeTecnico3();  ?>
                              </div>
                              <div id="307" style="display:none;">
                                <?php echo Libro3();?>
                              </div>
                              <div id="308" style="display:none;">
                                <?php echo ManualesDeOperacion3(); ?>
                              </div>
                              <div id="309" style="display:none;">
                                <?php echo MaterialDeApoyo3();  ?>
                              </div>
                              <div id="310" style="display:none;">
                                <?php echo MaterialDidactico3();?>
                              </div>
                              <div id="311" style="display:none;">
                                <?php echo Memorias3(); ?>
                              </div>
                              <div id="312" style="display:none;">
                                <?php echo ProductividadInnovadora3(); ?>
                              </div>
                              <div id="313" style="display:none;">
                                <?php echo ProduccionArtistica3(); ?>
                              </div>
                              <div id="314" style="display:none;">
                                <?php  echo Prototipo3();  ?>
                              </div>
                              <div id="315" style="display:none;">
                                <?php echo Otra3(); ?>
                              </div>
                            </div>

                          </div>
                        </div>



                    <div class="Semestre" >
                      <a href="#"  id="Extra3" onclick="Desplegar('Extracurriculares3')" ><p>Actividades Extracurriculares</p></a>
                        <div class="desplegar" id="Extracurriculares3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalExtracurriculares3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Tipo de Actividad</th>
                                              <th>Institucion Organizadora</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Tipo_Actividad"]; ?></td>
                                              <td><?php echo $rs["Institucion_Organizadora"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Extracurriculares3(<?php echo $rs['idActividades_Extracurriculares'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idActividades_Extracurriculares'];?>, 1)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(3)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="form_Extracurriculares3" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="form_Extra3" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tipo Activiadad</label>
                                      <select name="Activiadad_Extra" class="form-control" required>
                                        <option>Seminario</option>
                                        <option>Taller</option>
                                        <option>Curso</option>
                                        <option>Conferencia</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Nombre del profesor encargado</label>
                                      <input type="text" name="Profesor_Act" class="form-control" maxlength="255" required>
                                    </div>
                                    <?php echo formPais(); ?>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Ciudad</label>
                                      <input type="text" name="Ciudad" class="form-control" maxlength="255" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Ambito</label>
                                      <select name="Ambito" class="form-control" required>
                                        <option>Nacional</option>
                                        <option>Internacional</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Continente</label>
                                      <select name="Continente" class="form-control" required>
                                        <option>Asia</option>
                                        <option>Africa</option>
                                        <option>America</option>
                                        <option>Europa</option>
                                        <option>Ociania</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Fecha de inicio</label>
                                      <input type="date" name="Fecha_Inicio" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Fecha de termino</label>
                                      <input type="date" name="Fecha_Final" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Institucion Organizadora</label>
                                      <input type="text" name="Institucion_Organizadora" class="form-control" maxlength="255" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Consatancia</label>
                                      <input type="file" name="Constancia" class="form-control" required>
                                    </div>
                                  </div>
                                  <div style="margin: 10px;">
                                    <input type="submit" name="Submit_Extracurriculares3" value="Guardar">
                                    <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Investi3" onclick="Desplegar('ApoyoInvestigacion3')" ><p>Gestión de apoyo externo para la investigación</p></a>
                        <div class="desplegar" id="ApoyoInvestigacion3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalapoyo3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Descripccion</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Descripccion"]; ?></td>
                                              <td><?php if (isset($rs["Probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Gestion3(<?php echo $rs['idgestionapoyoinv'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idgestionapoyoinv'];?>, 2)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(3)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div class="" id="Forms_apoyo3" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="Form_apoyo3" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                <input type="hidden" name="id_Apoyo" id="id_Apoyo3" >
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6 " style="align-content: center;">
                                      <label>Descripcción</label>
                                      <textarea name="Descripccion" id="Descripccion_Apoyo" rows="10" required class="form-control" style="margin: auto; display: block;"></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" >
                                        <label>Probatorio</label>
                                        <input type="File" id="File_Apoyo" name="Probatorio" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <input type="submit" name="Submit_Apoyo3" id="Submit_Apoyo3" value="Guardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades();" class="Botones">
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                        <a href="#"  id="Pon3" onclick="Desplegar('Ponentes3')" ><p>Asistencia a eventos academicos como ponente</p></a>
                          <div class="desplegar" id="Ponentes3" style="display: none;">
                            <div class="contenido" id="contenidoPrincipalCongresos3" style="display:block;">
                              <?php
                                require_once('../php/conf_tab.php');

                                $DB= new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["Tercer_informe"];
                                $bandera=FALSE;

                                 $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$codigo';");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                    $bandera=TRUE;
                                 }
                                 if ($bandera==FALSE) {
                                  ?>
                                  <input type='button' value='Agrega Evento' onclick="NuevoCongreso(3)" style="margin: 10px;">
                                  <?php
                                   }else{
                                  ?>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>No.</th>
                                                <th>Nombre del congreso</th>
                                                <th>Titulo del congreso</th>
                                                <th>Periodo</th>
                                                <th>Acciones</th>
                                              </tr>
                                          <?php
                                      require_once('../php/conf_tab.php');

                                        $DB=new ConfigDB();
                                        $DB->Mysql();
                                        $Id_Act =$_SESSION["Tercer_informe"];
                                        $contador=0;

                                      $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$Id_Act';");
                                       while ($rs= $DB->Obtener_filas($Consulta)) {
                                       $contador++; ?>

                                              <tr>
                                                <td><?php echo $contador; ?> </td>
                                                <td><?php echo $rs["NombreCongreso"]; ?></td>
                                                <td><?php echo $rs["Titulo_del_Trabajo"]; ?></td>
                                                <td><?php echo $rs["Fecha_inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                                <td>
                                                  <a href="#" onclick="Editar_Congreso3(<?php echo $rs['id_Congresos_Ponente'];?>)">Editar</a><br>
                                                  <a href="#" onclick="Eliminar_varios(<?php echo $rs['id_Congresos_Ponente'];?>, 3)">Eliminar</a>
                                                </td>

                                              </tr>

                                      <?php } ?>
                                      </tbody>
                                    </table>
                                    <input type='button' value='Agrega Produccion' onclick="NuevoCongreso(3)" style="margin: 10px;">
                                <?php } ?>
                              </div>
                              <div id="forms_congresos3" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="Form_Cong3" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                <input type="hidden" name="Id_congresos3" id="Id_congresos3">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Nombre del congreso</label>
                                      <input type="text" name="Nombre" maxlength="255" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Titulo del Trabajo</label>
                                      <input type="text" name="Titulo" maxlength="255" class="form-control" required >
                                    </div>
                                    <div class="col-md-4">
                                      <label>Tipo de participacion de congresos</label>
                                      <select name="Tipo_Congreso" class="form-control" required>
                                        <option>Conferencia Magistral</option>
                                        <option>Moderador</option>
                                        <option>Orfanizador del Evento</option>
                                        <option>Participante en mesa redonda</option>
                                        <option>Ponencia</option>
                                        <option>Poster</option>
                                        <option>Presentaci de articulo en extenso</option>
                                        <option>Asistencia</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Fecha de inicio</label>
                                      <input type="date" name="Fecha_Inicio_Congreso" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Fecha termino</label>
                                      <input type="date" name="Fecha_Final_Congreso" class="form-control" required>
                                    </div>
                                    <?php formPais(); ?>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Constancia</label>
                                      <input type="file" name="constancia_Congreso" class="form-control" required>
                                    </div>
                                  </div>
                                  <div style="margin: 10px;">
                                    <input type="submit" name="Submit_Congreso1" id="Submit_Congreso3" value="Guardar">
                                    <input type="button" name="cancelar" onclick="cancelar_Actvidades()" value="Cancelar">
                                  </div>
                                </div>
                              </form>
                            </div>
                            </div>

                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Asesoria3" onclick="Desplegar('AsesoriaEsp3')" ><p>Asesoría especializada</p></a>
                        <div class="desplegar" id="AsesoriaEsp3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalEspecializada3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Fecha</th>
                                              <th>Calendario escolar</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Fecha"]; ?></td>
                                              <td><?php echo $rs["Calendario_Escolar"]; ?></td>
                                              <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Especialidad3(<?php echo $rs['idAsesoria_Especializada'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idAsesoria_Especializada'];?>, 4)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(3)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="Form_Especializada3" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="id_Especializada3" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha del Reporte</label>
                                      <input type="date" name="Fech_Reporte" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Actividades realizadas</label>
                                      <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Tareas realizadas</label>
                                      <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Observaciones</label>
                                      <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha de la Siguiente asesorìa</label>
                                      <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Probatorio</label>
                                      <input type="file" name="Probatorio" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-3"></div>
                                      <div class="col-md-6" style="margin: 10px;">
                                        <input type="submit" name="Submit_Especializada3" value="Gardar">
                                        <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Tutorias3" onclick="Desplegar('NecesidadesTuto3')" ><p>Necesidades tutoriales</p></a>
                        <div class="desplegar" id="NecesidadesTuto3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalTutorias3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Fecha</th>
                                              <th>Calendario Escolar</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Fecha"]; ?></td>
                                              <td><?php echo $rs["Calendario_Escolar"]?> </td>

                                              <td>
                                                <a href="#" onclick="Editar_Asesoria3(<?php echo $rs['idReporte_Asesorias'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idReporte_Asesorias'];?>, 5)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(3)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="Form_Tutoriar3" style="display: none;">
                              <form method="post" enctype="multipart/form-data" id="Id_Reporte_tutoria3"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha del Reporte</label>
                                      <input type="date" name="Fech_Reporte" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Actividades realizadas</label>
                                      <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Tareas realizadas</label>
                                      <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Observaciones</label>
                                      <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha de la Siguiente asesorìa</label>
                                      <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Probatorio</label>
                                      <input type="file" name="Probatorio" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-3"></div>
                                      <div class="col-md-6" style="margin: 10px;">
                                        <input type="submit" name="Submit_Asesorias3" value="Gardar">
                                        <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Movi3" onclick="Desplegar('MovilidadAca3')" ><p>Movilidad académica</p></a>
                        <div class="desplegar" id="MovilidadAca3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalMovilidad3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['RegistroMovilidadEs'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Tipo de Movilidad</th>
                                              <th>Institucion</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Tipo_Movilidad"]; ?></td>
                                              <td><?php echo $rs["Institucion"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Facha_Termino"]; ?></td>
                                              <td>
                                                <a href="#" onclick="Editar_Movilidad3(<?php echo $rs['RegistroMovilidadEs'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['RegistroMovilidadEs'];?>, 6)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(3)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="form_Movilidad3" style="display: none;">
                              <form method="post" id="Id_Movilidad3" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tipo de Movilidad</label>
                                      <select name="Tipo_Movilidad" class="form-control" required>
                                        <option>Sector Educativo</option>
                                        <option>Organizaciones Promotoras</option>
                                        <option>Sector Empresarial</option>
                                        <option>Sector Gubernamental</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Ambito</label>
                                      <select name="Ambito" id="ambito_Mov" required class="form-control">
                                        <option>Nacional</option>
                                        <option>Internacional</option>
                                      </select>
                                    </div>
                                    <?php formPais(); ?>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Institucion</label>
                                      <input type="text" name="Institucion" id="Institucion_movilidad" class="form-control" maxlength="255" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Objetivo</label>
                                      <textarea name="Objetivo" id="Objetivo_Movilidad" class="form-control" rows="1" required></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Producto</label>
                                      <input type="text" name="Producto" class="form-control" maxlength="255" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Fecha de Inicio</label>
                                      <input type="date" name="Fecha_Inicio" id="Fecha_Inicio_Movilidad" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Fecha de Termino</label>
                                      <input type="date" name="Fecha_Final" id="Fecha_Final_Movilidad"  class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Institucion de apoyo</label>
                                      <textarea name="Institucion_apoyo" id="Inst_Apoy_Movil" class="form-control" rows="1"></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Apoyo Economico</label>
                                      <input type="number" name="ApoyoEconomico"  id="ApoyoEconomico_Movilidad" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label>Plan de trabajo</label>
                                      <input type="file" name="Planes_Trabajo_Movilidad" id="Planes_Trabajo_Movilidad" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Constancia</label>
                                      <input type="File" name="Constancia" id="Constancia_Movildad" class="form-control" required>
                                    </div>
                                  </div>
                                  <div style="margin: 10px;">
                                    <input type="submit" name="Submit_Movilidad3" id="Submit_Movilidad3" value="Guardar">
                                    <input type="button" name="Cancelar" onclick="cancelar_Actvidades()" value="Cancelar" >
                                  </div>

                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Vincu3" onclick="Desplegar('VinculacionAcade3')" ><p>Vinculación académica</p></a>
                        <div class="desplegar" id="VinculacionAcade3" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalVinculacion3" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Tercer_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['No_vinculacion'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Vinculación' onclick="NuevaVinculacion(3)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Producto Obtenido</th>
                                              <th>Ambito</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Tercer_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["ProductoObtenido"]; ?></td>
                                              <td><?php echo $rs["Ambito"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"];?><br><?php echo $rs["Fecha_Final"]; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Vinculacion3(<?php echo $rs['No_vinculacion'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['No_vinculacion'];?>, 7)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaVinculacion(3)" style="margin: 10px;">
                              <?php } ?>
                          </div>
                          <div class="" id="Forms_Vinculacion3" style="display: none;">
                            <form method="post" id="Id_Vinculacion3" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>  >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" id="ambito1" required class="form-control">
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Producto Obtenido</label>
                                    <select name="ProductoObtenido" id="ProductoObtenido1" class="form-control" >
                                      <option>Ponencia</option>
                                      <option>Capitulo de libro</option>
                                      <option>Libro publicado</option>
                                      <option>Asistencias a eventos</option>
                                      <option>Articulos</option>
                                      <option>Otro</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Sector</label>
                                    <select name="Sector" id="Sector1" class="form-control" required>
                                      <option>Sector Educativo</option>
                                      <option>Organizaciones Promotoras</option>
                                      <option>Sector Empresarial</option>
                                      <option>Sector Gubernamental</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Institucion</label>
                                    <textarea name="Institucion" id="Institucion1" class="form-control" rows="1" required></textarea>
                                  </div>
                                  <?php formPais(); ?>
                                  <div class="col-md-4">
                                    <label>Objetivo</label>
                                    <textarea name="Objetivo" id="Objetivo1" class="form-control" rows="1" required></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="Fecha_Inicio" id="Fecha_Inicio1"  class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de termino</label>
                                    <input type="date" name="Fecha_Final" id="Fecha_Final1" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Tipo de vinculacion</label>
                                    <select name="TipoVinc" id="TipoVinc" class="form-control">
                                      <option>Proyectos</option>
                                      <option>Asesoria</option>
                                      <option>Intercambio academico</option>
                                      <option>Asistencia tecnica</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Mecanismo</label>
                                    <select name="Mecanismo" id="Mecanismo1" required class="form-control
                                    ">
                                      <option>Convenio</option>
                                      <option>Contrato</option>
                                      <option>Gestion directa</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Resultado</label>
                                    <textarea name="Resultado" id="Resultado1" rows="1" class="form-control"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Beneficio</label>
                                    <textarea name="Beneficio" id="Beneficio1" rows="1" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                </div>
                                <input type="submit" value="Guardar" name="submitVinculacion3" id="Submit_Vinculacion3">
                                <input type="button" value="Cancelar" name="cancelar" onclick="cancelar_Actvidades();" class='Botones' >
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>


                    <form action="../pdf/Informe_de_Actividades3.php" id="Form_Generacion1" method="post" enctype="multipart/form-data" target="_blank">
                      <input type="submit" value="Gener informe de Actividades" style="float: left; margin: 10px;" id="Boton">
                    </form>

                     <input type="button" style="display: block; margin: 10px;" value="Subir infrome de actividades firmado" onclick="ocultarTabla(3)">
                </div>



                <form action="../Php/Actividades/PriemerSemestre/AgregarFirmado3.php" style="display: none; margin: 5px;" id="Archivo3" enctype="multipart/form-data" method="POST">
                  <label><h3>Subir informe Firmado</h2></label>
                  <input type="file" name="Probatorio" class="form-control">
                  <br>
                  <input type="Submit" value="Subir archivo" class="Botones">
                  <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">
                </form>

              </div>
              <?php } ?>
            </div>




            <div class="Semestre">
              <a href="#" id="Cuarto" onclick="desplegar_Cuarto()"><p>Cuarto Semetre</p></a>
              <a href="#" id="Cuarto" onclick="desplegar_Cuarto()"><p style="float: right; margin-right: 10px;">+</p></a>
              <div class="desplegar" style="display: none" id="Cuar">
                  <div id="tabs4">
                    <?php
                    require_once('../php/conf_tab.php');

                    $DB= new ConfigDB();
                    $DB->Mysql();
                    $codigo=$_SESSION["CODIGO_ES"];
                    $bandera=FALSE;

                     $Consulta=$DB->CONSULTA("SELECT * FROM `actividades`  where  ID_Est = '$codigo' and Semestre='Cuarto Semestre'");
                     while ($rs= $DB->Obtener_filas($Consulta)) {
                        $bandera=TRUE;
                     }
                     if ($bandera==FALSE) {
                      ?>
                      <input type='button' value='nuevo Informe' onclick="nuevoInforme4()" style="margin: 10px;">
                      </div>
                      </div>
                      <?php
                       }else{
                      ?>
                    <div class="Semestre">
                      <a href="#" onclick="Desplegar('Materias4')" id="Materia4"><p >Materias curriculares</p></a>
                       <div class="desplegar" id="Materias4" style="display: none;">
                        <div class="Contenido">
                        <div id="tabla_Materias4" style="display: block;">

                          <?php
                            require_once('../php/conf_tab.php');

                            $DB=new ConfigDB();
                            $DB->Mysql();

                          $Consulta=$DB->CONSULTA("SELECT * FROM `Materias_Semestres`  where  ID_Est = '$codigo' and Semestre='Cuarto Semestre'");
                           while ($rs= $DB->Obtener_filas($Consulta)) {
                              $bandera=FALSE;
                           }

                           if ($bandera==TRUE) {?>
                             <input type="button" style=" margin: 10px; " name="nuevo" value="Ingresar Materias" onclick="Materias_Semestres(4) ">
                             </div>
                             <?php } else{ ?>
                                  <table>
                                    <tbody>


                                      <tr>
                                        <th>No.</th>
                                        <th>Nombre del Curso</th>
                                        <th>Calendario</th>
                                        <th>Calificación</th>
                                        <th>Nombre del profesor</th>
                                        <th>Acciones</th>
                                      </tr>

                                  <?php
                              require_once('../php/conf_tab.php');

                                $DB=new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["CODIGO_ES"];
                                $contador=0;

                              $Consulta=$DB->CONSULTA("SELECT * from materias_cursadas c join materias_semestres s on c.Id_Materias=s.Id_Materias where s.Id_Est='$codigo' and  s.Semestre='Cuarto Semestre'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                               $contador++; ?>

                                      <tr>
                                        <td><?php echo $contador; ?></td>
                                        <td><?php echo $rs["Nombre_Curso"] ?></td>
                                        <td><?php echo $rs["Calendario"]; ?></td>
                                        <td><?php echo $rs["Calificacion"]; ?></td>
                                        <td><?php echo $rs["NombreProfesor"]; ?></td>
                                        <td>
                                          <a href="#" onclick="Editar_Materias2(<?php echo $rs['Id'];?>)">Editar</a><br>
                                          <a href="#" onclick="Eliminar_Materia(<?php echo $rs['Id'];?>)">Eliminar</a>
                                        </td>

                                      </tr>

                              <?php } ?>
                              </tbody>
                            </table>
                          <div class="row" style=" margin: 10px;">
                            <div style="margin-right: 10px;" >
                              <input type="button" value="Gurdar Kardex" onclick="Kardex(4);" class="Botones">
                              <input type="button" value="Nueva Materia" onclick="nueva_materia(4)" class="Botones">
                            </div>
                          </div>



                          </div>

                        <div>


                          <form action="../php/Actividades/CuartoSemestre/nuevamateria4.php"  method="post" enctype="multipart/form-data" class="form"  id="formatos_Cuarto" style="display: none;">
                              <input type="hidden" name="Id_Materia" id="Id4" value="0" required>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Nombre del curso</label>
                                    <input type="text" class="form-control" name="Nombre_Curso" value="Nombre del curso" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Calendario</label>
                                    <input type="date" class="form-control" name="Calendario" max="<?php echo date('Y-m-d');?>" value="<?php  echo date('Y-m-d');?>" title="Fecha requerida" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Calificación</label>
                                    <input type="number" name="Calificacion" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Nombre del profesor</label>
                                    <input type="text" name="Profesor" value="Nombre del profesor" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row" style="margin: 10px; ">
                                    <input type="submit" value="Guardar" >
                                    <input type="button" value="Cancelar" onclick="cancelar_Actvidades()" >
                                </div>

                            </form>
                            <form action="../php/Actividades/CuartoSemestre/kardex4.php" id="kardex3" method="post" enctype="multipart/form-data" style="display: none;">

                              <input type="File" id="Kardex_inp" class="form-control" name="Kardex_inp" accept="application/pdf">
                              <input type="hidden" name="Semestre" id="Semestre4">

                              <input type="submit" value="Guardar" class="Botones" >
                              <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">

                            </form>
                        </div>


                        <?php } ?>
                        </div>
                      </div>
                    </div>

                    <div class="Semestre">
                        <a href="#" onclick="Desplegar('Proyecto4')" id="Proyectos4"><p>Proyecto de tesis</p></a>
                        <div class="desplegar" id="Proyecto4" style="display: none;">
                          <div id="tab_Pro4">
                        <?php
                          require_once('../php/conf_tab.php');

                          $DB= new ConfigDB();
                          $DB->Mysql();
                          $codigo=$_SESSION["CODIGO_ES"];
                          $bandera=FALSE;

                           $Consulta=$DB->CONSULTA("SELECT * FROM proyectos_semestre where  CODIGO_ES = '$codigo' and Semestre='Cuarto Semestre'");
                           while ($rs= $DB->Obtener_filas($Consulta)) {
                              $bandera=TRUE;
                           }
                           if ($bandera==FALSE) {
                            ?>
                            <input type='button' value='Nuevo Informe' onclick="Nuevo_Proyecto(4)" style="margin: 10px; margin-left: 25px;">
                            </div>
                            <?php
                             }else{
                            ?>
                                    <table>
                                      <tbody>

                                        <tr>
                                          <th>Titulo del Proyecto</th>
                                          <th>Director de Tesis</th>
                                          <th>Co-director de tesis</th>
                                          <th>Lector 1</th>
                                          <th>Lector 2</th>
                                          <th>Avances</th>
                                          <th>Acciones</th>
                                        </tr>

                                    <?php
                                require_once('../php/conf_tab.php');

                                  $DB=new ConfigDB();
                                  $DB->Mysql();
                                  $codigo=$_SESSION["CODIGO_ES"];
                                  $contador=0;

                                $Consulta=$DB->CONSULTA("SELECT * from proyectos_semestre where Codigo_es='$codigo' and  Semestre='Cuarto Semestre'");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>



                                        <tr>
                                          <td><?php echo $rs["TemaTesis"]; ?></td>
                                          <td><?php echo $rs["DirectorTesis"];?></td>
                                          <td><?php echo $rs["Co_director"]; ?></td>
                                          <td><?php echo $rs["Lector_1"]; ?></td>
                                          <td><?php echo $rs["Lector_2"]; ?></td>
                                          <td><?php echo $rs["Avance"]; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            <?php  ?>
                              <div class="forms">
                                <form id="Editar_proyectos" action="../Php/Actividades/CuartoSemestre/Editar_proyectos4.php" method="post" enctype="multipart/form-data" style="display: none;">
                                <input type="hidden" name="Id_temp" id="Id_temp4" value="0">
                                <input type="hidden" name="semestre" value="Cuarto Semestre">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tema de la tesis</label>
                                      <textarea name="TemaTesis" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Nombre del Director de la Tesis</label>
                                      <textarea name="DirectorTesis" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Co-Director de tesis</label>
                                      <textarea name="Co-director" class="form-control" rows="1"></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Lector 1</label>
                                      <textarea name="Lector_1" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Lector 2</label>
                                      <textarea name="Lector_2" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Avances</label>
                                    <input type="number" name="Avances" class="form-control">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tesis</label>
                                      <input type="file" name="Tesis" class="form-control">
                                    </div>
                                  </div>
                                  <div class="row" style="margin: 10px;">
                                    <input type="submit" value="Enviar">
                                    <input type="button" value="Cancelar" onclick="cancelar_Actvidades();">
                                  </div>
                                </div>
                                </form>
                                <form id="Eliminar_proyecto" action="../php/Actividades/CuartoSemestre/Eliminar_proyectos4.php" method="post">
                                  <input type="hidden" name="Id_tesis" value="0" id="Id_tesis">
                                  <input type="hidden" name="Semestre" value="Cuarto Semestre">
                                </form>
                              </div>

                              <?php } ?>
                            </div>
                    </div>

                    <div class="Semestre" >
                        <a href="#"  id="Producc4" onclick="Desplegar('Produccion4')" ><p>Producción académica</p></a>
                          <div class="desplegar" id="Produccion4" style="display: none;">
                            <div class="contenido" id="contenidoPrincipalProduccion4" style="display:block;">
                              <?php
                                require_once('../php/conf_tab.php');

                                $DB= new ConfigDB();
                                $DB->Mysql();
                                $codigo=$_SESSION["Cuarto_informe"];
                                $bandera=FALSE;

                                 $Consulta=$DB->CONSULTA("SELECT * FROM produccionAlumnos  where  IdActividades = '$codigo'");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                    $NumeroPublicacion=$rs['NO_Publicacion'];
                                    $bandera=TRUE;
                                 }
                                 if ($bandera==FALSE) {
                                  ?>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(4)" style="margin: 10px;">
                                  <?php
                                   }else{
                                  ?>
                                          <table>
                                            <tbody>
                                              <tr>
                                                <th>No.</th>
                                                <th>Titulo</th>
                                                <th>Tipo de Produccion</th>
                                                <th>Documento probatorio</th>
                                                <th>Acciones</th>
                                              </tr>
                                          <?php
                                      require_once('../php/conf_tab.php');

                                        $DB=new ConfigDB();
                                        $DB->Mysql();
                                        $codigo=$_SESSION["CODIGO_ES"];
                                        $Id_Act =$_SESSION["Cuarto_informe"];
                                        $contador=0;

                                      $Consulta=$DB->CONSULTA("SELECT * from produccionAlumnos where IdActividades='$Id_Act'");
                                       while ($rs= $DB->Obtener_filas($Consulta)) {
                                       $contador++; ?>

                                              <tr>
                                                <td><?php echo $contador; ?> </td>
                                                <td><?php echo $rs["Titulo"]; ?></td>
                                                <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                                <td><?php if (!$rs["Probatorio"]){echo "No";}else{echo "Si";}; ?></td>

                                                <td>
                                                  <a href="#" onclick="Editar_Produccion4(<?php
                                                    switch ($rs["TipoDeProduccion"]) {
                                                      case 'Artículo de difusión y divulgación':
                                                        echo "401, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo Arbitrado':
                                                        echo "402, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo en revista indexada':
                                                        echo "403, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Capítulo del libro':
                                                        echo "404, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Consultoría':
                                                        echo "405, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Informe técnico':
                                                        echo "406, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Libro':
                                                        echo "407, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Manuales de operación':
                                                        echo "408, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material de apoyo':
                                                        echo "409, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material didáctico':
                                                        echo "410, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Memorias':
                                                        echo "411, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Productividad innovadora':
                                                        echo "412, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Producción artística':
                                                        echo "413, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Prototipo':
                                                        echo "414, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Otro':
                                                        echo "415, {$rs['NO_Publicacion']}";
                                                        break;
                                                      }

                                                      ?>)">Editar</a><br>
                                                  <a href="#" onclick="Eliminar_Produccion(<?php

                                                    switch ($rs["TipoDeProduccion"]) {
                                                      case 'Artículo de difusión y divulgación':
                                                        echo "401, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo Arbitrado':
                                                        echo "402, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Artículo en revista indexada':
                                                        echo "403, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Capítulo del libro':
                                                        echo "404, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Consultoría':
                                                        echo "405, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Informe técnico':
                                                        echo "406, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Libro':
                                                        echo "407, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Manuales de operación':
                                                        echo "408, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material de apoyo':
                                                        echo "409, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Material didáctico':
                                                        echo "410, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Memorias':
                                                        echo "411, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Productividad innovadora':
                                                        echo "412, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Producción artística':
                                                        echo "413, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Prototipo':
                                                        echo "414, {$rs['NO_Publicacion']}";
                                                        break;
                                                      case 'Otro':
                                                        echo "415, {$rs['NO_Publicacion']}";
                                                        break;
                                                      }

                                                   ?>)">Eliminar</a>
                                                </td>

                                              </tr>

                                      <?php } ?>
                                      </tbody>
                                    </table>
                                    <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(4)" style="margin: 10px;">
                                <?php } ?>
                              </div>
                          <script>

                              function cambiar4(){
                                var valor= $("#Vizualisador4").val();
                                cambio4(valor);
                              }

                            </script>
                          <div class="Forms_Produccion" style="display:none;" id="Forms_Produccion4">
                              <select name="SelSeccion" id=Vizualisador4 style="margin-top:10px;" onchange="cambiar4()" class="form-control">
                                <option value="401" selected="selected">Artículo de difusión y divulgación</option>
                                <option value="402">Artículo Arbitrado</option>
                                <option value="403">Artículo en revista indexada</option>
                                <option value="404">Capítulo del libro</option>
                                <option value="405">Consultoría</option>
                                <option value="406">Informe técnico</option>
                                <option value="407">Libro</option>
                                <option value="408">Manuales de operación</option>
                                <option value="409">Material de apoyo</option>
                                <option value="410">Material didáctico</option>
                                <option value="411">Memorias</option>
                                <option value="412">Productividad innovadora</option>
                                <option value="413">Producción artística</option>
                                <option value="414">Prototipo</option>
                                <option value="415">Otra</option>
                              </select>

                              <div id="401" style="display:inline;">
                                <?php
                                  echo ArticuloDifucion4();
                                 ?>
                              </div>
                              <div id="402" style="display:none;">
                                <?php   echo articuloArbitrado4(); ?>
                              </div>
                              <div id="403" style="display:none;">
                                <?php echo RevistaIndexada4(); ?>
                              </div>
                              <div id="404" style="display:none;">
                                <?php  echo CapituloDeLibro4();?>
                              </div>
                              <div id="405" style="display:none;">
                                <?php echo consultoria4(); ?>
                              </div>
                              <div id="406" style="display:none;">
                                <?php echo InformeTecnico4();  ?>
                              </div>
                              <div id="407" style="display:none;">
                                <?php echo Libro4();?>
                              </div>
                              <div id="408" style="display:none;">
                                <?php echo ManualesDeOperacion4(); ?>
                              </div>
                              <div id="409" style="display:none;">
                                <?php echo MaterialDeApoyo4();  ?>
                              </div>
                              <div id="410" style="display:none;">
                                <?php echo MaterialDidactico4();?>
                              </div>
                              <div id="411" style="display:none;">
                                <?php echo Memorias4(); ?>
                              </div>
                              <div id="412" style="display:none;">
                                <?php echo ProductividadInnovadora4(); ?>
                              </div>
                              <div id="413" style="display:none;">
                                <?php echo ProduccionArtistica4(); ?>
                              </div>
                              <div id="414" style="display:none;">
                                <?php  echo Prototipo4();  ?>
                              </div>
                              <div id="415" style="display:none;">
                                <?php echo Otra4(); ?>
                              </div>
                            </div>

                          </div>
                    </div>

                    <div class="Semestre" >
                      <a href="#"  id="Extra4" onclick="Desplegar('Extracurriculares4')" ><p>Actividades Extracurriculares</p></a>
                        <div class="desplegar" id="Extracurriculares4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalExtracurriculares4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Tipo de Actividad</th>
                                              <th>Institucion Organizadora</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Tipo_Actividad"]; ?></td>
                                              <td><?php echo $rs["Institucion_Organizadora"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Extracurriculares4(<?php echo $rs['idActividades_Extracurriculares'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idActividades_Extracurriculares'];?>, 1)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaExtracurricular(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="form_Extracurriculares4" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="form_Extra4" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tipo Activiadad</label>
                                      <select name="Activiadad_Extra" class="form-control" required>
                                        <option>Seminario</option>
                                        <option>Taller</option>
                                        <option>Curso</option>
                                        <option>Conferencia</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Nombre del profesor encargado</label>
                                      <input type="text" name="Profesor_Act" class="form-control" maxlength="255" required>
                                    </div>
                                    <?php echo formPais(); ?>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Ciudad</label>
                                      <input type="text" name="Ciudad" class="form-control" maxlength="255" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Ambito</label>
                                      <select name="Ambito" class="form-control" required>
                                        <option>Nacional</option>
                                        <option>Internacional</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Continente</label>
                                      <select name="Continente" class="form-control" required>
                                        <option>Asia</option>
                                        <option>Africa</option>
                                        <option>America</option>
                                        <option>Europa</option>
                                        <option>Ociania</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Fecha de inicio</label>
                                      <input type="date" name="Fecha_Inicio" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Fecha de termino</label>
                                      <input type="date" name="Fecha_Final" class="form-control" max="<?php echo date('Y-m-d');?>" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Institucion Organizadora</label>
                                      <input type="text" name="Institucion_Organizadora" class="form-control" maxlength="255" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Consatancia</label>
                                      <input type="file" name="Constancia" class="form-control" required>
                                    </div>
                                  </div>
                                  <div style="margin: 10px;">
                                    <input type="submit" name="Submit_Extracurriculares4" value="Guardar">
                                    <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Investi4" onclick="Desplegar('ApoyoInvestigacion4')" ><p>Gestión de apoyo externo para la investigación</p></a>
                        <div class="desplegar" id="ApoyoInvestigacion4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalapoyo4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Descripccion</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Descripccion"]; ?></td>
                                              <td><?php if (isset($rs["Probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Gestion4(<?php echo $rs['idgestionapoyoinv'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idgestionapoyoinv'];?>, 2)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevoApoyo(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div class="" id="Forms_apoyo4" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="Form_apoyo4" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                <input type="hidden" name="id_Apoyo" id="id_Apoyo4" >
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6 " style="align-content: center;">
                                      <label>Descripcción</label>
                                      <textarea name="Descripccion" id="Descripccion_Apoyo" rows="10" required class="form-control" style="margin: auto; display: block;"></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6" >
                                        <label>Probatorio</label>
                                        <input type="File" id="File_Apoyo" name="Probatorio" required class="form-control">
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <input type="submit" name="Submit_Apoyo4" id="Submit_Apoyo4" value="Guardar">
                                      <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades();" class="Botones">
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Pon4" onclick="Desplegar('Ponentes4')" ><p>Asistencia a eventos academicos como ponente</p></a>
                        <div class="desplegar" id="Ponentes4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalCongresos4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$codigo';");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Evento' onclick="NuevoCongreso(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Nombre del congreso</th>
                                              <th>Titulo del congreso</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$Id_Act';");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["NombreCongreso"]; ?></td>
                                              <td><?php echo $rs["Titulo_del_Trabajo"]; ?></td>
                                              <td><?php echo $rs["Fecha_inicio"]; ?><br><?php echo $rs["Fecha_Termino"]; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Congreso4(<?php echo $rs['id_Congresos_Ponente'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['id_Congresos_Ponente'];?>, 3)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevoCongreso(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="forms_congresos4" style="display: none;">
                            <form enctype="multipart/form-data" method="post" id="Form_Cong4" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                              <div class="form-group">
                              <input type="hidden" name="Id_congresos3" id="Id_congresos4">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Nombre del congreso</label>
                                    <input type="text" name="Nombre" maxlength="255" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Titulo del Trabajo</label>
                                    <input type="text" name="Titulo" maxlength="255" class="form-control" required >
                                  </div>
                                  <div class="col-md-4">
                                    <label>Tipo de participacion de congresos</label>
                                    <select name="Tipo_Congreso" class="form-control" required>
                                      <option>Conferencia Magistral</option>
                                      <option>Moderador</option>
                                      <option>Orfanizador del Evento</option>
                                      <option>Participante en mesa redonda</option>
                                      <option>Ponencia</option>
                                      <option>Poster</option>
                                      <option>Presentaci de articulo en extenso</option>
                                      <option>Asistencia</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="Fecha_Inicio_Congreso" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha termino</label>
                                    <input type="date" name="Fecha_Final_Congreso" class="form-control" required>
                                  </div>
                                  <?php formPais(); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Constancia</label>
                                    <input type="file" name="constancia_Congreso" class="form-control" required>
                                  </div>
                                </div>
                                <div style="margin: 10px;">
                                  <input type="submit" name="Submit_Congreso1" id="Submit_Congreso4" value="Guardar">
                                  <input type="button" name="cancelar" onclick="cancelar_Actvidades()" value="Cancelar">
                                </div>
                              </div>
                            </form>
                          </div>
                          </div>

                    </div>
                    <div class="Semestre" >
                       <a href="#"  id="Asesoria4" onclick="Desplegar('AsesoriaEsp4')" ><p>Asesoría especializada</p></a>
                        <div class="desplegar" id="AsesoriaEsp4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalEspecializada4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Fecha</th>
                                              <th>Calendario escolar</th>
                                              <th>Documento probatorio</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Fecha"]; ?></td>
                                              <td><?php echo $rs["Calendario_Escolar"]; ?></td>
                                              <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Especialidad4(<?php echo $rs['idAsesoria_Especializada'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idAsesoria_Especializada'];?>, 4)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaEspecialiZada(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="Form_Especializada4" style="display: none;">
                              <form enctype="multipart/form-data" method="post" id="id_Especializada4" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha del Reporte</label>
                                      <input type="date" name="Fech_Reporte" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Actividades realizadas</label>
                                      <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Tareas realizadas</label>
                                      <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Observaciones</label>
                                      <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha de la Siguiente asesorìa</label>
                                      <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Probatorio</label>
                                      <input type="file" name="Probatorio" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-3"></div>
                                      <div class="col-md-6" style="margin: 10px;">
                                        <input type="submit" name="Submit_Especializada4" value="Gardar">
                                        <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Tutorias4" onclick="Desplegar('NecesidadesTuto4')" ><p>Necesidades tutoriales</p></a>
                        <div class="desplegar" id="NecesidadesTuto4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalTutorias4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $Id_Act =$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Fecha</th>
                                              <th>Calendario Escolar</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $codigo=$_SESSION["CODIGO_ES"];
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Fecha"]; ?></td>
                                              <td><?php echo $rs["Calendario_Escolar"]?> </td>

                                              <td>
                                                <a href="#" onclick="Editar_Asesoria4(<?php echo $rs['idReporte_Asesorias'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['idReporte_Asesorias'];?>, 5)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="Form_Tutoriar4" style="display: none;">
                              <form method="post" enctype="multipart/form-data" id="Id_Reporte_tutoria4"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha del Reporte</label>
                                      <input type="date" name="Fech_Reporte" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Actividades realizadas</label>
                                      <textarea name="Actividades" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Tareas realizadas</label>
                                      <textarea name="Tareas" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Observaciones</label>
                                      <textarea name="Observaciones" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Fecha de la Siguiente asesorìa</label>
                                      <input type="DATE" name="Fecha_Siguiente" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                      <label>Probatorio</label>
                                      <input type="file" name="Probatorio" class="form-control" required>
                                    </div>
                                    <div class="col-md-3"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-3"></div>
                                      <div class="col-md-6" style="margin: 10px;">
                                        <input type="submit" name="Submit_Asesorias4" value="Gardar">
                                        <input type="button" name="Cancelar" value="Cancelar" onclick="cancelar_Actvidades()">
                                      </div>
                                      <div class="col-md-3"></div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Movi4" onclick="Desplegar('MovilidadAca4')" ><p>Movilidad académica</p></a>
                        <div class="desplegar" id="MovilidadAca4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalMovilidad4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['RegistroMovilidadEs'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Tipo de Movilidad</th>
                                              <th>Institucion</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["Tipo_Movilidad"]; ?></td>
                                              <td><?php echo $rs["Institucion"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"]; ?><br><?php echo $rs["Facha_Termino"]; ?></td>
                                              <td>
                                                <a href="#" onclick="Editar_Movilidad4(<?php echo $rs['RegistroMovilidadEs'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['RegistroMovilidadEs'];?>, 6)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(4)" style="margin: 10px;">
                              <?php } ?>
                            </div>
                            <div id="form_Movilidad4" style="display: none;">
                              <form method="post" id="Id_Movilidad4" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Tipo de Movilidad</label>
                                      <select name="Tipo_Movilidad" class="form-control" required>
                                        <option>Sector Educativo</option>
                                        <option>Organizaciones Promotoras</option>
                                        <option>Sector Empresarial</option>
                                        <option>Sector Gubernamental</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Ambito</label>
                                      <select name="Ambito" id="ambito_Mov" required class="form-control">
                                        <option>Nacional</option>
                                        <option>Internacional</option>
                                      </select>
                                    </div>
                                    <?php formPais(); ?>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Institucion</label>
                                      <input type="text" name="Institucion" id="Institucion_movilidad" class="form-control" maxlength="255" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Objetivo</label>
                                      <textarea name="Objetivo" id="Objetivo_Movilidad" class="form-control" rows="1" required></textarea>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Producto</label>
                                      <input type="text" name="Producto" class="form-control" maxlength="255" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Fecha de Inicio</label>
                                      <input type="date" name="Fecha_Inicio" id="Fecha_Inicio_Movilidad" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Fecha de Termino</label>
                                      <input type="date" name="Fecha_Final" id="Fecha_Final_Movilidad"  class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Institucion de apoyo</label>
                                      <textarea name="Institucion_apoyo" id="Inst_Apoy_Movil" class="form-control" rows="1"></textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Apoyo Economico</label>
                                      <input type="number" name="ApoyoEconomico"  id="ApoyoEconomico_Movilidad" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label>Plan de trabajo</label>
                                      <input type="file" name="Planes_Trabajo_Movilidad" id="Planes_Trabajo_Movilidad" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Constancia</label>
                                      <input type="File" name="Constancia" id="Constancia_Movildad" class="form-control" required>
                                    </div>
                                  </div>
                                  <div style="margin: 10px;">
                                    <input type="submit" name="Submit_Movilidad4" id="Submit_Movilidad4" value="Guardar">
                                    <input type="button" name="Cancelar" onclick="cancelar_Actvidades()" value="Cancelar" >
                                  </div>

                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <div class="Semestre" >
                      <a href="#"  id="Vincu4" onclick="Desplegar('VinculacionAcade4')" ><p>Vinculación académica</p></a>
                        <div class="desplegar" id="VinculacionAcade4" style="display: none;">
                          <div class="contenido" id="contenidoPrincipalVinculacion4" style="display:block;">
                            <?php
                              require_once('../php/conf_tab.php');

                              $DB= new ConfigDB();
                              $DB->Mysql();
                              $codigo=$_SESSION["Cuarto_informe"];
                              $bandera=FALSE;

                               $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$codigo'");
                               while ($rs= $DB->Obtener_filas($Consulta)) {
                                  $NumeroPublicacion=$rs['No_vinculacion'];
                                  $bandera=TRUE;
                               }
                               if ($bandera==FALSE) {
                                ?>
                                <input type='button' value='Agrega Vinculación' onclick="NuevaVinculacion(4)" style="margin: 10px;">
                                <?php
                                 }else{
                                ?>
                                        <table>
                                          <tbody>
                                            <tr>
                                              <th>No.</th>
                                              <th>Producto Obtenido</th>
                                              <th>Ambito</th>
                                              <th>Periodo</th>
                                              <th>Acciones</th>
                                            </tr>
                                        <?php
                                    require_once('../php/conf_tab.php');

                                      $DB=new ConfigDB();
                                      $DB->Mysql();
                                      $Id_Act =$_SESSION["Cuarto_informe"];
                                      $contador=0;

                                    $Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$Id_Act'");
                                     while ($rs= $DB->Obtener_filas($Consulta)) {
                                     $contador++; ?>

                                            <tr>
                                              <td><?php echo $contador; ?> </td>
                                              <td><?php echo $rs["ProductoObtenido"]; ?></td>
                                              <td><?php echo $rs["Ambito"]; ?></td>
                                              <td><?php echo $rs["Fecha_Inicio"];?><br><?php echo $rs["Fecha_Final"]; ?></td>

                                              <td>
                                                <a href="#" onclick="Editar_Vinculacion4(<?php echo $rs['No_vinculacion'];?>)">Editar</a><br>
                                                <a href="#" onclick="Eliminar_varios(<?php echo $rs['No_vinculacion'];?>, 7)">Eliminar</a>
                                              </td>

                                            </tr>

                                    <?php } ?>
                                    </tbody>
                                  </table>
                                  <input type='button' value='Agrega Produccion' onclick="NuevaVinculacion(4)" style="margin: 10px;">
                              <?php } ?>
                          </div>
                          <div class="" id="Forms_Vinculacion4" style="display: none;">
                            <form method="post" id="Id_Vinculacion4" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>  >
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Ambito</label>
                                    <select name="Ambito" id="ambito1" required class="form-control">
                                      <option>Nacional</option>
                                      <option>Internacional</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Producto Obtenido</label>
                                    <select name="ProductoObtenido" id="ProductoObtenido1" class="form-control" >
                                      <option>Ponencia</option>
                                      <option>Capitulo de libro</option>
                                      <option>Libro publicado</option>
                                      <option>Asistencias a eventos</option>
                                      <option>Articulos</option>
                                      <option>Otro</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Sector</label>
                                    <select name="Sector" id="Sector1" class="form-control" required>
                                      <option>Sector Educativo</option>
                                      <option>Organizaciones Promotoras</option>
                                      <option>Sector Empresarial</option>
                                      <option>Sector Gubernamental</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Institucion</label>
                                    <textarea name="Institucion" id="Institucion1" class="form-control" rows="1" required></textarea>
                                  </div>
                                  <?php formPais(); ?>
                                  <div class="col-md-4">
                                    <label>Objetivo</label>
                                    <textarea name="Objetivo" id="Objetivo1" class="form-control" rows="1" required></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Fecha de inicio</label>
                                    <input type="date" name="Fecha_Inicio" id="Fecha_Inicio1"  class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Fecha de termino</label>
                                    <input type="date" name="Fecha_Final" id="Fecha_Final1" class="form-control" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Tipo de vinculacion</label>
                                    <select name="TipoVinc" id="TipoVinc" class="form-control">
                                      <option>Proyectos</option>
                                      <option>Asesoria</option>
                                      <option>Intercambio academico</option>
                                      <option>Asistencia tecnica</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Mecanismo</label>
                                    <select name="Mecanismo" id="Mecanismo1" required class="form-control
                                    ">
                                      <option>Convenio</option>
                                      <option>Contrato</option>
                                      <option>Gestion directa</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Resultado</label>
                                    <textarea name="Resultado" id="Resultado1" rows="1" class="form-control"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Beneficio</label>
                                    <textarea name="Beneficio" id="Beneficio1" rows="1" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Probatorio</label>
                                    <input type="file" name="Probatorio" class="form-control" required>
                                  </div>
                                </div>
                                <input type="submit" value="Guardar" name="submitVinculacion4" id="Submit_Vinculacion4">
                                <input type="button" value="Cancelar" name="cancelar" onclick="cancelar_Actvidades();" class='Botones' >
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>


                    <form action="../pdf/Informe_de_Actividades4.php" id="Form_Generacion1" method="post" enctype="multipart/form-data" target="_blank">
                      <input type="submit" value="Gener informe de Actividades" style="float: left; margin: 10px;" id="Boton">
                    </form>

                     <input type="button" style="display: block; margin: 10px;" value="Subir infrome de actividades firmado" onclick="ocultarTabla(4)">
                  </div>


                <form action="../Php/Actividades/PriemerSemestre/AgregarFirmado4.php" style="display: none; margin: 5px;" id="Archivo4" enctype="multipart/form-data" method="POST">
                  <label><h3>Subir informe Firmado</h3></label>
                  <input type="file" name="Probatorio" class="form-control">
                  <br>
                  <input type="Submit" value="Subir archivo" class="Botones">
                  <input type="button" value="cancelar" onclick="cancelar_Actvidades()" class="Botones">
                </form>

                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
