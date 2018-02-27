<?php
session_start();
include "Php/conexion.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='Estudiante/principalEmp.php'</script>";
}elseif (isset($_SESSION['usuario'])) {
  echo "<script>window.location='Estudiante/principal.php'</script>";
}
 ?>
<!Doctype html>
<html lang="es">
<head>

  <meta charset="utf-8" http-equiv="content-type"/>
  <title>login</title>
  <link href="Styles/Default.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script type="text/javascript" src="Scripts/main.Js"></script>
</head>
<body>
    <div class="page">
      <div class="header">
        <div class="title">
          <h1><a href="http://mgpes.cucea.udg.mx/">Maestría en Gestion y Politícas de la Educación Superior</a></h1>
        </div>
      </div>
    <div class="main" id="principal" style="display: block;">
      <div class="center">
        <div id="centrar">
          <input id="tab-1" type="radio" name="tab-group" checked="checked">
          <label for="tab-1">Estudiantes</label>
          <input id="tab-2" type="radio" name="tab-group">
          <label for="tab-2">Empleados</label>
         <div id="Contenido">
           <div class="section" id="contenido-1">
             <form action="php/logEst.php" method="post" class="login">
               <p>Login para estudiantes</p>
               <div><label>Username</label><input title="Se requiere el nombre del usuario" name="usuario" type="text" required></div>
               <div><label>Password</label><input title="Se requiere la contraseña"name="password" type="password" required></div>
               <div><input name="login" type="submit" value="login" ></div>
             </form>
           </div>
          <div class="section" id="contenido-2">
            <form class="login" action="php/logEmp.php" method="post">
                <p>login para empleados de la maestria.</p>
                <div ><label> Username</label><input type="text" name="user" required></div>
                <div><label>Password</label><input type="password" name="password" required></div>
                <div><input name="login" type="submit" value="login"></div>
            </form>
          </div>
         </div>
        </div>
      </div>
      <div class="footer">
              <button type="button" name="button" class="btn btn-ligth" style="float:right; margin-right:10px;" onclick="NuevoAsp()"> Nuevo aspirante</button>
      </div>
    </div>
    <div class="FormatoAspirante" id="FormatosAsp" style="display:none" >
      <div id="centrar" style="padding-top:5%">
          <form action="Php/NuevoAsp.php" method="post">
            <label><h2>Registro de aspirantes</h2></label>
            <fieldset>
              <label><h3>Datos Personales</h3></label>
              <div class="row">
                <div class="col-md-3">
                  <label>Nombre</label>
                  <input type="text" name="Nombre" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Edad</label>
                  <input type="number" name="Edad" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Codigo de SIIAU</label>
                  <input type="text" name="Siiau" class="form-control" maxlength="9" required>
                </div>
                <div class="col-md-3">
                  <label>CURP</label><a href="https://consultas.curp.gob.mx/CurpSP/inicio2_2.jsp" target="_blank">*</a>
                  <input type="text" name="Curp" class="form-control" maxlength="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Lugar de nacimiento</label>
                  <input type="Text" name="LNacimiento" class="form-control"required >
                </div>
                <div class="col-md-3">
                  <label>Estado civil</label>
                  <select name="Civil" class="form-control" required>
                    <option value="">Soltero</option>
                    <option value="">Casado</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label>Calendario Escolar</label>
                  <select name="Calendario" class="form-control" required>
                    <option value="">2018A</option>
                    <option value="">2018B</option>
                    <option value="">2019A</option>
                    <option value="">2019B</option>
                    <option value="">2020A</option>
                    <option value="">2020B</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label>Genero</label>
                  <select class="form-control" name="Genero" required>
                    <option>Masculino</option>
                    <option>Femenino</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Modilidad</label>
                  <input type="text" name="Modalodad" class="form-control" required>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <label><h3>Contacto</h3></label>
              <div class="row">
                <div class="col-md-3">
                  <label>Telefono de casa</label>
                  <input type="text" name="TelCasa" class="form-control">
                </div>
                <div class="col-md-3">
                  <label>Telefono Celular</label>
                  <input type="text" name="Celular" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Correo Personal</label>
                  <input type="text" name="correo" class="form-control">
                </div>
              </div>
            </fieldset>
            <fieldset>
              <label><h3>Vivienda</h3></label>
              <div class="row">
                <div class="col-md-3">
                  <label>Calle</label>
                  <input type="text" name="calle" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Numero</label>
                  <input type="number" name="NumCalle" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Codigo postal</label>
                  <input type="number" name="CoPostal" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Estado</label>
                  <input type="text" name="Estado" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Colonia</label>
                  <input type="text" name="Colonia" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Numero Interior</label>
                  <input type="number" name="NumInt" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Municipio</label>
                  <input type="text" name="Municipio" class="form-control" required>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <label><h3>Datos academicos</h3></label>
              <div class="row">
                <div class="col-md-3">
                  <label>Licenciatura</label>
                  <input type="text" name="Licenciatura" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Univerisdad</label>
                  <input type="text" name="Univerisdad" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Promedio</label>
                  <input type="text" name="ProemedioLic" class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label>Generación</label>
                  <input type="text" name="Generacion" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Idiomas</label>
                  <input type="text" name="Idioma" class="form-control" required>
                </div>
              </div>

            </fieldset>
            <fieldset>
              <label><h3>Datos de tesis</h3></label>
              <div class="row">
                <div class="col-md-6">
                  <label>Tema de tesis</label>
                  <textarea name="TemaTesis" class="form-control" rows="1" required></textarea>
                </div>
                <div class="col-md-3">
                  <label>LGCA</label>
                  <select class="form-control" name="LGCA" required>
                    <option value="CYMLES">Calidad y mejoramiento en la educación superior</option>
                    <option value="GYPLES">Gestión y planeación de la educación superior</option>
                    <option value="NPDES">Nuevos paradigmas de educación superior</option>
                    <option value="PPCIES">Políticas públicas y cambio institucional en la educación superior</option>
                  </select>
                </div>
              </div>
            </fieldset>
            <input type="submit" name="SubmitAsp" value="Enviar" class="btn btn-ligth">
            <button type="button" name="button" onclick="CancelarNuevoAsp()" class="btn btn-ligth">Cancelar</button>

          </form>
      </div>
  </div>
  </div>
</body>
</html>
