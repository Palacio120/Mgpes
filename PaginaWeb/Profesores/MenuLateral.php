<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="menu" class="menu_lateral" style="width: 0px; border: hidden;">
  <a href="#" class="boton-cerrar" onclick="ocultar2()">×</a>

  <a href="\Mgpes\PaginaWeb\Profesores\Aspirantes.php">Aspirantes</a>
  <div class="dropdown">
    <button type="button" name="button" class="dropbtn" ><a href="\Mgpes\PaginaWeb\Profesores\Estudiantes\Estudiantes.php" style="padding-left:0px;">Estudiantes <i class="fa fa-caret-down" style="float:right"></i></a></button>
    <div class="dropdown-container">
      <a href="\Mgpes\PaginaWeb\Profesores\Estudiantes\Reportes.php">Reportes de Estudiantes</a>
      <div class="dropdown" id="submenu">
        <button type="button" name="button" class="dropbtn"><a href="\Mgpes\PaginaWeb\Profesores\Estudiantes\BECACONACYT\BecasCONACYT.php" style="padding-left:0px;">BecasCONACYT<i class="fa fa-caret-down" style="float:right"></i></a></button>
        <div class="dropdown-container">
          <a href="\Mgpes\PaginaWeb\Profesores\Estudiantes\BECACONACYT\Conclucion.php">Conclución de beca</a>
        </div>
      </div>
    </div>
  </div>

  <a class="logout" href="\Mgpes\PaginaWeb\Php\logout.php" style="text-align: right;">Logout</a>

</div>
