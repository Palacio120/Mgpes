<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= 'index.Php'</script>";
  }
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <title>MGPES</title>
    <link href="../Styles/Default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Styles/menus.css" type="text/css">
    <link rel="stylesheet" href="../Styles/Perfiles.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="../Scripts/main.Js"></script>
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
          <li><a href="Actividades.php">Informe de actividades</a></li>
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>

      <div class="header">
        <div id="head" class="main">
            <a id="abrir_menu" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar_Perfil()" style="display: inline;"> <img src="../image/boton_menu.png" alt="Bmenu" style="width:50px; heigth= 50px;"></a>
        </div>
        <div id="header" style="margin-left=0;">
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
              <li><a href="#"  id="D-letras1" style="color: white">Perfil</a></li>
              <li><a href="../php/logout.php"  id="D-letras3" style="color: white">logout</a></li>
            </ul>
          </div>
        </div>
        <div class="centro" id="centro" style="margin-left: 0px;">
            <div class="conjunto">
              <label>Datos personales</label>
              <div class="Foto_Perfil" style="max-width:300px">
                  <label>Fotografia</label>
                  <?php echo '<img style="width:130px" src="data:image/jpeg;base64,'.base64_encode($_SESSION["Fotografia"]).'" >' ;?>
              </div>
              <div class="Elemento_Perfil">
                  <label>Nombre</label>
                  <p><?php echo $_SESSION["nombre"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                <label >Codigo del Estudiante</label>
                <p><?php echo $_SESSION["CODIGO_ES"] ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Codigo de Aspirante</label>
                  <p><?php echo $_SESSION["Codigo_ASP"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Codigo de SIIAU </label>
                  <p> <?php echo $_SESSION["CodigoSIIAU"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                <label>Estado del Estudiante</label>
                <p><?php echo $_SESSION["EstadoDelEstudiante"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Modalidad</label>
                  <p> <?php echo $_SESSION["modalidad"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Orientacion</label>
                  <p><?php echo $_SESSION["Orientacion"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Nombre del programa</label>
                  <p> <?php echo $_SESSION["NombrePrograma"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Calenadario escolar</label>
                  <p> <?php echo $_SESSION["calenadario_escolar"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Edad</label>
                  <p> <?php echo $_SESSION["Edad"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Genero</label>
                  <p> <?php echo $_SESSION["Genero"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>CURP</label>
                  <p> <?php echo $_SESSION["CURP"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>RFC</label>
                  <p> <?php echo $_SESSION["RFC"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Lugar de nacimiento</label>
                  <p><?php echo $_SESSION["Lugar_nacimiento"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                <label>Vive con</label>
                <p><?php echo $_SESSION["ViveCon"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                <label>Estado civil</label>
                <p><?php echo $_SESSION["EstadoCivil"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                <label>Dependientes</label>
                <p><?php echo $_SESSION["Dependientes"]; ?></p>
              </div>

            </div>
            <div class="conjunto">
              <label>Vivienda</label>
              <div class="Elemento_Perfil">
                  <label>Calle</label>
                  <p> <?php echo $_SESSION["Calle_Es"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Numero de casa</label>
                  <p> <?php echo $_SESSION["Numero_Calle"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Numero interior</label>
                  <p> <?php echo $_SESSION["Numero_interior"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Colonia</label>
                  <p> <?php echo $_SESSION["Colonia_Es"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Codigo postal</label>
                  <p> <?php echo $_SESSION["CP_Es"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Municipio</label>
                  <p> <?php echo $_SESSION["Municipio_Es"]; ?></p>
              </div>
              <div class="Elemento_Perfil">
                  <label>Estado</label>
                  <p> <?php echo $_SESSION["Esatado_Es"]; ?></p>
              </div>

          </div>
          <div class="conjunto">
            <label> Contacto</label>
            <div class="Elemento_Perfil">
                <label>Telefono de casa </label>
                <p> <?php echo $_SESSION["Telefono_casa_Es"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
                <label>Telefono personal</label>
                <p> <?php echo $_SESSION["Telefono_personal"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Correo Personal</label>
              <p><?php echo $_SESSION["Correo_Personal"]; ?></p>
            </div>
          </div>
          <div class="conjunto">
            <label>Datos Academicos</label>
            <div class="Elemento_Perfil">
              <label>Licenciatura</label>
              <p><?php echo $_SESSION["Licenciatura"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Universidad</label>
              <p><?php echo $_SESSION["Universidad"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Promedio</label>
              <p><?php echo $_SESSION["Promedio"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Generacion</label>
              <p><?php echo $_SESSION["Generacion"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Idiomas</label>
              <p><?php echo $_SESSION["Idiomas"]; ?></p>
            </div>
          </div>

          <div class="conjunto">
            <label>Tesis</label>
            <div class="Elemento_Perfil">
              <label>Tema de la tesis</label>
              <p><?php echo $_SESSION["TemaTesis"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Proyecto</label>
              <p><?php echo $_SESSION["Proyecto"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>LGAC</label>
              <p><?php echo $_SESSION["LíneasAplicaciónDelConocimiento"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Orientacion</label>
              <p><?php echo $_SESSION["Orientacion"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Director de Tesis</label>
              <p><?php echo $_SESSION["Director"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Co_Director de tesis</label>
              <p><?php echo $_SESSION["Co_Director"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>GRADO</label>
              <p><?php echo $_SESSION["GRADO"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Semestre actual</label>
              <p><?php echo $_SESSION["Semestre"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Primer lector</label>
              <p><?php echo $_SESSION["lector_1"]; ?></p>
            </div>
            <div class="Elemento_Perfil">
              <label>Segundo lector </label>
              <p><?php echo $_SESSION["lector_2"]; ?></p>
            </div>
          </div>
        </div>

      </div>

      <div class="footer">

      </div>
    </div>
  </body>
</html>
