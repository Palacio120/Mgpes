<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }

  include('../php/Actividades/Produccion1.php');
    
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
          <li><a href="#">Beca CONACYT</a></li>
          <li><a href="#">Desempeño academico</a></li>-->
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
          <div class="Titulo">
            <h3>Informe de actividades</h3>

            <div class="Semestre">
              <a href="#" id="Primero" onclick="desplegar_primero()"><p>Primer Semetre</p></a>
              <a href="#" id="Primero" onclick="desplegar_primero()"><p style="float: right; margin-right: 10px;" >+</p></a>
              <div class="desplegar" style="display: none;" id="primer">
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
                        <div class="col-sm-1" style="margin-right: 10px;" >
                          <input type="button" value="Gurdar Kardex" onclick="Kardex(1);">
                        </div>
                        <div class="col-sm-1">
                          <input type="button" value="Nueva Materia" onclick="nueva_materia1()">
                        </div>
                      </div>
                      
                      

                      </div>

                    <div>
                      <form action="../php/Actividades/Eliminar.php"  method="post" enctype="multipart/form-data" id="Eliminar">
                        <input type="hidden" id="Id" value="0" name="Materia_Id">
                      </form>

                      <form action="../php/Actividades/nuevamateria1.php"  method="post" enctype="multipart/form-data" class="form"  id="formatos_primero" style="display: none;">
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
                        <form action="../php/Actividades/kardex.php" id="kardex1" method="post" enctype="multipart/form-data" style="display: none;">

                          <input type="File" id="Kardex_inp" class="form-control" name="Kardex_inp">
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
                            <form id="Editar_proyectos" action="../Php/Actividades/Editar_proyectos.php" method="post" enctype="multipart/form-data" style="display: none;">
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
                            <form id="Eliminar_proyecto" action="../php/Actividades/Eliminar_proyectos.php" method="post">
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
                            cambio2(valor);
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

                                $Consulta=$DB->CONSULTA("");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>

                                        <tr>
                                          <td><?php echo $contador; ?> </td>
                                          <td><?php echo $rs["Titulo"]; ?></td>
                                          <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                          <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                      </div>
                </div>
                <div class="Semestre" >
                  <a href="#"  id="Investi1" onclick="Desplegar('ApoyoInvestigacion1')" ><p>Gestión de apoyo externo para la investigación</p></a>
                    <div class="desplegar" id="ApoyoInvestigacion1" style="display: none;">
                      <div class="contenido" id="contenidoPrincipalapoyo" style="display:block;">
                        <?php
                          require_once('../php/conf_tab.php');

                          $DB= new ConfigDB();
                          $DB->Mysql();
                          $codigo=$_SESSION["Primer_informe"];
                          $bandera=FALSE;

                           $Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                           while ($rs= $DB->Obtener_filas($Consulta)) {
                              $NumeroPublicacion=$rs['NO_Publicacion'];
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
                                          <th>Titulo</th>
                                          <th>Tipo de Produccion</th>
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
                                          <td><?php echo $rs["Titulo"]; ?></td>
                                          <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                          <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                        <div class="" id="Forms_apoyo" style="display: none;">
                          <form enctype="multipart/form-data"  id="form-apoyo" action=<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                            <div class="form-group">
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
                                  <input type="submit" name="Submit" id="Submit_Apoyo" value="Guardar">
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
                      <div class="contenido" id="contenidoPrincipalProduccion" style="display:block;">
                        <?php
                          require_once('../php/conf_tab.php');

                          $DB= new ConfigDB();
                          $DB->Mysql();
                          $codigo=$_SESSION["Primer_informe"];
                          $bandera=FALSE;

                           $Consulta=$DB->CONSULTA("SELECT * FROM congresos_como_ponente  where  id_Actividades = '$codigo'");
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

                                $Consulta=$DB->CONSULTA("SELECT * FROM congresos_como_ponente  where  id_Actividades = '$Id_Act");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>

                                        <tr>
                                          <td><?php echo $contador; ?> </td>
                                          <td><?php echo $rs["Titulo"]; ?></td>
                                          <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                          <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                      </div>
                      <div id="forms_congresos1" style="display: none;">
                        <form action="">
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
                <div class="Semestre" >
                  <a href="#"  id="Asesoria1" onclick="Desplegar('AsesoriaEsp1')" ><p>Asesoría especializada</p></a>
                    <div class="desplegar" id="AsesoriaEsp1" style="display: none;">
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

                                $Consulta=$DB->CONSULTA("");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>

                                        <tr>
                                          <td><?php echo $contador; ?> </td>
                                          <td><?php echo $rs["Titulo"]; ?></td>
                                          <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                          <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                      </div>
                </div>
                <div class="Semestre" >
                  <a href="#"  id="Tutorias1" onclick="Desplegar('NecesidadesTuto1')" ><p>Necesidades tutoriales</p></a>
                    <div class="desplegar" id="NecesidadesTuto1" style="display: none;">
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
                            <input type='button' value='Agrega Produccion' onclick="NuevaTutoria(1)" style="margin: 10px;">
                            <?php
                             }else{
                            ?>
                                    <table>
                                      <tbody>
                                        <tr>
                                          <th>No. de reporte</th>
                                          <th>Fecha</th>
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

                                $Consulta=$DB->CONSULTA("");
                                 while ($rs= $DB->Obtener_filas($Consulta)) {
                                 $contador++; ?>

                                        <tr>
                                          <td><?php echo $contador; ?> </td>
                                          <td><?php echo $rs["Titulo"]; ?></td>
                                          <td><?php echo $rs["TipoDeProduccion"]; ?></td>
                                          <td><?php if (isset($rs["probatorio"])){echo "Si";}else{echo "No";}; ?></td>

                                          <td>
                                            <a href="#" onclick="Editar_proyectos(<?php echo $rs['Id_tesis'];?>)">Editar</a><br>
                                            <a href="#" onclick="Eliminar_proyectos(<?php echo $rs['Id_tesis'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaProduccion(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                      </div>
                </div>
                <div class="Semestre" >
                  <a href="#"  id="Movi1" onclick="Desplegar('MovilidadAca1')" ><p>Movilidad académica</p></a>
                    <div class="desplegar" id="MovilidadAca1" style="display: none;">
                      <div class="contenido" id="contenidoPrincipalMovilidad" style="display:block;">
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
                                            <a href="#" onclick="Eliminar_Movilidad(<?php echo $rs['RegistroMovilidadEs'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaMovilidad(1)" style="margin: 10px;">
                          <?php } ?>
                        </div>
                        <div id="form_Movilidad" style="display: none;">
                          <form method="post" id="FormVinculacion" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
                            <div class="form-group">
                              <input type="hidden" name="id_Movilidad1" id="Id_Movilidad1">
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
                                  <input type="text" name="Institucion" id="Institucion_movilidad" class="form-control maxlength="255" required>
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
                                <input type="submit" name="Submit_Movilidad" id="Submit_Movilidad" value="Guardar">
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
                                          <th>Documento probatorio</th>
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
                                            <a href="#" onclick="Eliminar_Vinculacion(<?php echo $rs['No_vinculacion'];?>)">Eliminar</a>
                                          </td>

                                        </tr>

                                <?php } ?>
                                </tbody>
                              </table>
                              <input type='button' value='Agrega Produccion' onclick="NuevaVinculacion(1)" style="margin: 10px;">
                          <?php } ?>
                      </div>
                      <div class="" id="Forms_Vinculacion1" style="display: none;">
                        <form method="post" id="FormVinculacion1" enctype='multipart/form-data' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>  >
                          <div class="form-group">
                            <input type="hidden" name="Id_Vinculacion1" id="Id_Vinculacion1">
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
                            <input type="submit" value="Guardar" name="submitVinculacion" id="Submit_Vinculacion">
                            <input type="button" value="Cancelar" name="cancelar" onclick="cancelar_Actvidades();" class='Botones' >
                          </div>
                        </form>
                      </div>
                    </div>
                </div>


                
                <input type="button" value="gener Informe de Actividades" onclick="" style="display: block; margin-top: 10px;" id="Boton">

                    
                </div>
                <?php } ?>
              </div>
              

            <div class="Semestre">
              <p>Segundo Semetre</p>
              <a href="#" id="Segundo" onclick="desplegar_Segundo()"><p style="float: right; margin-right: 10px;" >+</p></a>
              <div class="desplegar" style="display: none" id="Segund">
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
                  <input type='button' value='nuevo Informe' onclick="" style="margin: 10px;">
                  <?php
                   }else{
                  ?>
                <div class="contenido">
                  <p style="display: block;">Informe de actividades del primer semestre seleccione el tipo de reporte que desee agregar</p>
                    <select name="tipo_informe" id="Informe">
                      <option></option>
                      <option value="Materias">Materias curriculares</option>
                      <option value="Proyecto">Proyecto de tesis</option>
                      <option value="Produccion">Producción académica</option>
                      <option value="Extracurriculares">Actividades Extracurriculares</option>
                      <option value="Apoyo">Gestión de apoyo externo para la investigación</option>
                      <option value="Asistencia">Asistencia a eventos académicos como ponente</option>
                      <option value="Asesoria">Asesoría especializada</option>
                      <option value="Tutorias">Necesidades tutoriales</option>
                      <option value="Movilidad">Movilidad académica</option>
                      <option value="Vinculacion">Vinculación académica</option>
                    </select>
                    <div class="">
                      <form action="../php/Actividades/Materias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Proyecto.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Produccion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Extracurriculares.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Apoyo.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asistencia.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asesoria.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Tutorias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Movilidad.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Vinculacion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                    </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="Semestre">
              <p>Tercer Semetre</p>
              <a href="#" id="Tercero" onclick="desplegar_Tercero()"><p style="float: right; margin-right: 10px;">+</p></a>
              <div class="desplegar" style="display: none" id="Tercer">
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
                  <input type='button' value='nuevo Informe' onclick="" style="margin: 10px;">
                  <?php
                   }else{
                  ?>
                <div class="contenido">
                    <p style="display: block;">Informe de actividades del primer semestre seleccione el tipo de reporte que desee agregar</p>
                    <select name="tipo_informe" id="Informe">
                      <option></option>
                      <option value="Materias">Materias curriculares</option>
                      <option value="Proyecto">Proyecto de tesis</option>
                      <option value="Produccion">Producción académica</option>
                      <option value="Extracurriculares">Actividades Extracurriculares</option>
                      <option value="Apoyo">Gestión de apoyo externo para la investigación</option>
                      <option value="Asistencia">Asistencia a eventos académicos como ponente</option>
                      <option value="Asesoria">Asesoría especializada</option>
                      <option value="Tutorias">Necesidades tutoriales</option>
                      <option value="Movilidad">Movilidad académica</option>
                      <option value="Vinculacion">Vinculación académica</option>
                    </select>
                    <div class="">
                      <form action="../php/Actividades/Materias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Proyecto.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Produccion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Extracurriculares.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Apoyo.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asistencia.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asesoria.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Tutorias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Movilidad.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Vinculacion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                    </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="Semestre">
              <p>Cuarto Semetre</p>
              <a href="#" id="Cuarto" onclick="desplegar_Cuarto()"><p style="float: right; margin-right: 10px;">+</p></a>
              <div class="desplegar" style="display: none" id="Cuar">
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
                  <input type='button' value='nuevo Informe' onclick="" style="margin: 10px;">
                  <?php
                   }else{
                  ?>
                <div class="contenido">
                  <p style="display: block;">Informe de actividades del primer semestre seleccione el tipo de reporte que desee agregar</p>
                    <select name="tipo_informe" id="Informe">
                      <option></option>
                      <option value="Materias">Materias curriculares</option>
                      <option value="Proyecto">Proyecto de tesis</option>
                      <option value="Produccion">Producción académica</option>
                      <option value="Extracurriculares">Actividades Extracurriculares</option>
                      <option value="Apoyo">Gestión de apoyo externo para la investigación</option>
                      <option value="Asistencia">Asistencia a eventos académicos como ponente</option>
                      <option value="Asesoria">Asesoría especializada</option>
                      <option value="Tutorias">Necesidades tutoriales</option>
                      <option value="Movilidad">Movilidad académica</option>
                      <option value="Vinculacion">Vinculación académica</option>
                    </select>
                    <div class="">
                      <form action="../php/Actividades/Materias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Proyecto.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Produccion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Extracurriculares.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Apoyo.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asistencia.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Asesoria.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Tutorias.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Movilidad.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                      <form action="../php/Actividades/Vinculacion.php" style="display: none;" method="post" enctype="multipart/form-data">

                        <input type="buttom" value="Guardar">
                      </form>
                    </div>
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
