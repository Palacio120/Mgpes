
function mostrar() {
    document.getElementById("menu").style.width = "300px";
    document.getElementById("menu").style.border="solid 1px #000";
    document.getElementById("head").style.marginLeft = "270px";
    document.getElementById("abrir_menu").style.display = "none";
    //document.getElementById("header").style.marginLeft ="305px";
    document.getElementById("bienvenido").style.marginLeft="305px";
}

function ocultar() {
    document.getElementById("menu").style.width = "0";
    document.getElementById("menu").style.border="hidden";
    document.getElementById("head").style.marginLeft = "5px";
    document.getElementById("abrir_menu").style.display = "inline";
    //document.getElementById("header").style.marginLeft ="0px";
    document.getElementById("bienvenido").style.marginLeft ="0px";
}


function desplegar(){
  document.getElementById("opccion").addEventListener("click", replegar);
  document.getElementById("opcciones").style.width="200px";
  document.getElementById("opcciones").style.height="auto";
  document.getElementById("opcciones").style.marginTop="80px";
  document.getElementById("D-letras1").style.color="black";
  document.getElementById("D-letras3").style.color="black";
  document.getElementById("opccion").removeEventListener("click", desplegar);
}

function replegar(){
  document.getElementById("opccion").addEventListener("click", desplegar);
  document.getElementById("opcciones").style.width="0px";
  document.getElementById("opcciones").style.height="0px";
  document.getElementById("opcciones").style.marginTop="0px";
  document.getElementById("D-letras1").style.color="white";
  document.getElementById("D-letras3").style.color="white";
  document.getElementById("opccion").removeEventListener("click", replegar);
}

function mostrar_Perfil() {
    document.getElementById("menu").style.width = "300px";
    document.getElementById("menu").style.border="solid 1px #000";
    document.getElementById("head").style.marginLeft = "300px";
    document.getElementById("abrir_menu").style.display = "none";
    document.getElementById("centro").style.marginLeft="305px";
    document.getElementById("Ventana").style.Left="20%";
}



function ocultar2() {
    document.getElementById("menu").style.width = "0";
    document.getElementById("menu").style.border="hidden";
    document.getElementById("head").style.marginLeft = "5px";
    document.getElementById("abrir_menu").style.display = "inline";
    document.getElementById("centro").style.marginLeft="0px";
}

function Buscar_perfil(){
    document.forms["form_perfil"].submit();
}

function Nuevo_Reporte(){
    document.getElementById("FormReporte").action="../php/Nuevo_Reporte.php";
    document.getElementById("Tabla").style.display="none";
    document.getElementById("Nuevo").style.display="inline";
    document.getElementById("Reporte").style.display="none";
    document.getElementById("NPlan").style.display="none";
    document.getElementById("SPlan").style.display="none";
}

function  imprimir(){
  document.getElementById("acciones").style.display="none";
  window.print();
  document.getElementById("acciones").style.display="inline";
}

function Cancelar1(){
  this.window.location='Planes_trabajo.php';
}

function Editar_reporte(datos){

  d=datos.split('||');

  $('#Id').val(d[0]);
  $('#Semestre').val(d[1]);
  $('#Materias').val(d[2]);
  $('#Proyecto').val(d[3]);
  $('#Produccion').val(d[4]);
  $('#extracurriculares').val(d[5]);
  $('#investigacion').val(d[6]);
  $('#Ponencias').val(d[7]);
  $('#Asesoria').val(d[8]);
  $('#Tutorias').val(d[9]);
  $('#Movilidad').val(d[10]);
  $('#Vinculacion').val(d[11]);


  document.getElementById("Semestres").style.display="none";
  document.getElementById("Titulo").className="Titulo2";
  document.getElementById("NPlan").style.display="none";
  document.getElementById("Nuevo").style.display="inline";
  document.getElementById("FormReporte").action="../php/Editar.php";
  document.getElementById("Submit").value="Guardar";

}

function cambio(Tipo){
  document.getElementById("Form_de_seleccion").action=(Tipo);
  if (Tipo=='../pdf/visualizar_plan_firmado.php') {
    document.getElementById("Form_de_seleccion").target=('');
    document.getElementById("Enviar").value=("Descargar");
  }else{
    document.getElementById("Form_de_seleccion").target=('_blank');
    document.getElementById("Enviar").value=("Visualizar");
  }


}



function Eliminar_Reporte(Id_value){
    if (confirm('¿Desea borrar este reporte?')) {
      document.getElementById("Id").value=Id_value;
      document.getElementById("FormReporte").action="../php/Eliminar.php";
      document.getElementById("FormReporte").submit();
    }else {
      return false;
    }
}


function Descargar_Reporte(Id_value){
  if(confirm('Desea descargar el reporte')){
    document.getElementById("Id").value=Id_value;
    document.getElementById("FormReporte").action="../php/Descargar.php";
    document.getElementById("FormReporte").submit();
  }else {
    return false;
  }
}

function Select(){
  document.getElementById('Selected').style.display="none";
  document.getElementById('UnSelected').style.display="block";
  document.getElementById('S').addEventListener("click", Select);
  document.getElementById('U').removeEventListener("click", Select);
  document.getElementById('Selected').id="UnSelected1";
  document.getElementById('UnSelected').id="Selected";
  document.getElementById('UnSelected1').id="UnSelected";
  document.getElementById('S').id="T";
  document.getElementById('U').id="S";
  document.getElementById('T').id="U";

}

function Nuevo_plan(){
  document.getElementById("FormReporte").action="../php/Nuevo_plan.php";
  document.getElementById("Semestres").style.display="none";
  document.getElementById("Nuevo").style.display="inline";
  document.getElementById("NPlan").style.display="none";
  document.getElementById("Titulo").className="Titulo2";
}

function Subir_plan(Id_value){
  document.getElementById("Semestres").style.display="none";
  document.getElementById("FormReporte").style.display="none";
  document.getElementById("Nuevo").style.display="inline";
  document.getElementById("Firmado").style.display="inline";
  document.getElementById("NPlan").style.display="none";
  document.getElementById("Id_Firma").value=Id_value;
}

function mostrarVentana(Id_value){
    var ventana = document.getElementById("miVentana");
    ventana.style.marginTop = ("100px");
    ventana.style.left = ((document.body.clientWidth-350) / 2) +  "px";
    ventana.style.display = ("block");
    document.getElementById("Id_Seleccionado").value=Id_value;
}

function ocultarVentana(){
    var ventana = document.getElementById("miVentana");
    ventana.style.display = "none";
}

function NuevoAsp(){
  document.getElementById("principal").style.display="none";
  document.getElementById("FormatosAsp").style.display="block";
}

function  CancelarNuevoAsp(){
  location.reload();
}

function enable(num){
  document.getElementById(num).disabled=false;
}

function disable(num){
  document.getElementById(num).disabled=true;
}

function Cambiar(entrada,salida){
  document.getElementById(entrada).style.display=('none');
  document.getElementById(salida).style.display=('block');
}

function AgregarDesempeño(num){
  switch (num) {
    case 1:
    document.getElementById('SemestreForm').value=('Priemer Semestre');
    document.getElementById('FormatoSemestre').submit();
    break;
    case 2:
    document.getElementById('SemestreForm').value=('Segundo Semestre');
    document.getElementById('FormatoSemestre').submit();
    break;
    case 3:
    document.getElementById('SemestreForm').value=('Tercer Semestre');
    document.getElementById('FormatoSemestre').submit();
    break;
    case 4:
    document.getElementById('SemestreForm').value=('Cuarto Semestre');
    document.getElementById('FormatoSemestre').submit();
    break;

  }
}
