
function nuevoInforme1(){
	 this.window.location='../php/actividades/nuevo_informe1.php';

}
function Nuevo_Proyecto(num){
	switch(num){
		case 1:
			this.window.location='../php/actividades/Proyecto1.php';
		break;
		case 2:
		break;
		case 3:
		break;
		case 4:
		break;
		default:
		break;
	}
}

function desplegar_primero(){
  document.getElementById("Primero").addEventListener("click", replegar_primero);
  document.getElementById("Primero").addEventListener("click", replegar_primero);
  document.getElementById("primer").style.display=("block");
  document.getElementById("Primero").removeEventListener("click", desplegar_primero);
  document.getElementById("Primero").removeEventListener("click", desplegar_primero);
}



function replegar_primero(){
	document.getElementById("Primero").addEventListener("click", desplegar_primero);
	document.getElementById("primer").style.display=("none");
	document.getElementById("Primero").removeEventListener("click", replegar_primero);
}

function formatos_primero(Tipo){
	switch (Tipo){
		case "Materias":
			document.getElementById("Materias1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que cursó durante el semestre y adjuntar el kardex");
		break;
		case "Proyecto":
			document.getElementById("Proyecto1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba los avances realzados durante el semestre y adjuntar el documento Probatorio");
		break;
		case  "Produccion":
			document.getElementById("Produccion1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Extracurriculares":
		document.getElementById("Extracurriculares1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Apoyo":
		document.getElementById("Apoyo1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Asistencia":
			document.getElementById("Asistencia1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case  "Asesoria":
			document.getElementById("Asesoria1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Tutorias":
			document.getElementById("Tutorias1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Movilidad":
			document.getElementById("Movilidad1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		case "Vinculacion":
			document.getElementById("Vinculacion1").style.display=("block");
			document.getElementById("Informe").style.display=("none");
			document.getElementById("TablaContenido").style.display=("none");
			document.getElementById("Boton").style.display=("none");
			document.getElementById("instruccion").innerHTML =("Escriba las materias que curso durante el semestre y adjuntar el kardex");
		break;
		default:
		break;
	}
}

function desplegar_Segundo(){
  document.getElementById("Segundo").addEventListener("click", replegar_Segundo);
  document.getElementById("Segund").style.display=("block");
  document.getElementById("Segundo").removeEventListener("click", desplegar_Segundo);
}

function replegar_Segundo(){
	document.getElementById("Segundo").addEventListener("click", desplegar_Segundo);
	document.getElementById("Segund").style.display=("none");
	document.getElementById("Segundo").removeEventListener("click", replegar_Segundo);
}

function desplegar_Tercero(){
  document.getElementById("Tercero").addEventListener("click", replegar_Tercero);
  document.getElementById("Tercer").style.display=("block");
  document.getElementById("Tercero").removeEventListener("click", desplegar_Tercero);
}

function replegar_Tercero(){
	document.getElementById("Tercero").addEventListener("click", desplegar_Tercero);
	document.getElementById("Tercer").style.display=("none");
	document.getElementById("Tercero").removeEventListener("click", replegar_Tercero);
}


function desplegar_Cuarto(){
  document.getElementById("Cuarto").addEventListener("click", replegar_Cuarto);
  document.getElementById("Cuar").style.display=("block");
  document.getElementById("Cuarto").removeEventListener("click", desplegar_Cuarto);
}

function replegar_Cuarto(){
	document.getElementById("Cuarto").addEventListener("click", desplegar_Cuarto);
	document.getElementById("Cuar").style.display=("none");
	document.getElementById("Cuarto").removeEventListener("click", replegar_Cuarto);
}

function cancelar_Actvidades(){
  this.window.location='actividades.php';
}

function Informe(){
	this.window.location='../pdf/InformeDeActividades.php';
}

function Desplegar(menu){
 switch (menu){
 	case "Materias1":
 		document.getElementById('Materia1').addEventListener("click", function(){
 				Replegar('Materias1');
 			});
 		document.getElementById('Materias1').style.display=("block");
 		document.getElementById('Materia1').removeEventListener("click", function(){
 				Desplegar('Materias1');
 			});
 	break;
 	case "Proyecto1":
 	 		document.getElementById('Proyectos1').addEventListener("click", function(){
 				Replegar('Proyecto1');
 			});
 		document.getElementById('Proyecto1').style.display=("block");
 		document.getElementById('Proyectos1').removeEventListener("click", function(){
 				Desplegar('Proyecto1');
 			});
 	break;
	case "Produccion1":
	document.getElementById('Producc1').addEventListener("click", function(){
		Replegar('Produccion1');
	});
document.getElementById('Produccion1').style.display=("block");
document.getElementById('Producc1').removeEventListener("click", function(){
		Desplegar('Produccion1');
	});
	break;
	case "Extracurriculares1":
	document.getElementById('Extra1').addEventListener("click", function(){
		Replegar('Extracurriculares1');
	});
document.getElementById('Extracurriculares1').style.display=("block");
document.getElementById('Extra1').removeEventListener("click", function(){
		Desplegar('Extracurriculares1');
	});
break;
	case "ApoyoInvestigacion1":
	document.getElementById('Investi1').addEventListener("click", function(){
		Replegar('ApoyoInvestigacion1');
	});
document.getElementById('ApoyoInvestigacion1').style.display=("block");
document.getElementById('Investi1').removeEventListener("click", function(){
		Desplegar('ApoyoInvestigacion1');
	});
break;
	case "Ponentes1":
		document.getElementById('Pon1').addEventListener("click", function(){
		Replegar('Ponentes1');
	});
document.getElementById('Ponentes1').style.display=("block");
document.getElementById('Pon1').removeEventListener("click", function(){
		Desplegar('Ponentes1');
	});
	break;
	case "AsesoriaEsp1":
	document.getElementById('Asesoria1').addEventListener("click", function(){
		Replegar('AsesoriaEsp1');
	});
document.getElementById('AsesoriaEsp1').style.display=("block");
document.getElementById('Asesoria1').removeEventListener("click", function(){
		Desplegar('AsesoriaEsp1');
	});
	break;
	case "NecesidadesTuto1":
	document.getElementById('Tutorias1').addEventListener("click", function(){
		Replegar('NecesidadesTuto1');
	});
document.getElementById('NecesidadesTuto1').style.display=("block");
document.getElementById('Tutorias1').removeEventListener("click", function(){
		Desplegar('NecesidadesTuto1');
	});
	break;
	case "MovilidadAca1":
	document.getElementById('Movi1').addEventListener("click", function(){
		Replegar('MovilidadAca1');
	});
document.getElementById('MovilidadAca1').style.display=("block");
document.getElementById('Movi1').removeEventListener("click", function(){
		Desplegar('MovilidadAca1');
	});
	break;
	case "VinculacionAcade1":
	document.getElementById('Vincu1').addEventListener("click", function(){
		Replegar('VinculacionAcade1');
	});
document.getElementById('VinculacionAcade1').style.display=("block");
document.getElementById('Vincu1').removeEventListener("click", function(){
		Desplegar('VinculacionAcade1');
	});
	break;


 }

}

function Replegar(menu){

	switch (menu){
		case "Materias1":
			document.getElementById('Materia1').addEventListener("click", function(){
					Desplegar('Materias1');
				});
	 		document.getElementById('Materias1').style.display=("none");
	 		document.getElementById('Materia1').removeEventListener("click", function(){
	 				Replegar('Materias1');
	 			});
	 	break;
	 	case "Proyecto1":
	 		document.getElementById('Proyectos1').addEventListener("click", function(){
					Desplegar('Proyecto1');
				});
	 		document.getElementById('Proyecto1').style.display=("none");
	 		document.getElementById('Proyectos1').removeEventListener("click", function(){
	 				Replegar('Proyecto1');
	 			});
	 	break;
		case "Produccion1":
	 		document.getElementById('Producc1').addEventListener("click", function(){
					Desplegar('Produccion1');
				});
	 		document.getElementById('Produccion1').style.display=("none");
	 		document.getElementById('Producc1').removeEventListener("click", function(){
	 				Replegar('Produccion1');
	 			});
	 	break;
	 	case "Extracurriculares1":
			document.getElementById('Extra1').addEventListener("click", function(){
				Desplegar('Extracurriculares1');
				});
			document.getElementById('Extracurriculares1').style.display=("none");
			document.getElementById('Extra1').removeEventListener("click", function(){
					Replegar('Extracurriculares1');
				});
		break;
		case "ApoyoInvestigacion1":
			document.getElementById('Investi1').addEventListener("click", function(){
				Desplegar('ApoyoInvestigacion1');
				});
			document.getElementById('ApoyoInvestigacion1').style.display=("none");
			document.getElementById('Investi1').removeEventListener("click", function(){
					Replegar('ApoyoInvestigacion1');
				});
		break;
		case "Ponentes1":
			document.getElementById('Pon1').addEventListener("click", function(){
				Desplegar('Ponentes1');
				});
			document.getElementById('Ponentes1').style.display=("none");
			document.getElementById('Pon1').removeEventListener("click", function(){
					Replegar('Ponentes1');
				});
		break;
		case "AsesoriaEsp1":
			document.getElementById('Asesoria1').addEventListener("click", function(){
				Desplegar('AsesoriaEsp1');
				});
			document.getElementById('AsesoriaEsp1').style.display=("none");
			document.getElementById('Asesoria1').removeEventListener("click", function(){
					Replegar('AsesoriaEsp1');
				});
		break;
		case "NecesidadesTuto1":
			document.getElementById('Tutorias1').addEventListener("click", function(){
				Desplegar('NecesidadesTuto1');
				});
			document.getElementById('NecesidadesTuto1').style.display=("none");
			document.getElementById('Tutorias1').removeEventListener("click", function(){
					Replegar('NecesidadesTuto1');
				});
		break;
		case "MovilidadAca1":
			document.getElementById('Movi1').addEventListener("click", function(){
				Desplegar('MovilidadAca1');
				});
			document.getElementById('MovilidadAca1').style.display=("none");
			document.getElementById('Movi1').removeEventListener("click", function(){
					Replegar('MovilidadAca1');
				});
		break;
		case "VinculacionAcade1":
			document.getElementById('Vincu1').addEventListener("click", function(){
				Desplegar('VinculacionAcade1');
				});
			document.getElementById('VinculacionAcade1').style.display=("none");
			document.getElementById('Vincu1').removeEventListener("click", function(){
					Replegar('VinculacionAcade1');
				});
		break;
	 }
}

function Materias_Semestres(num){
	switch (num){
		case 1:
			window.location='../php/actividades/Materias1.php';
		break;
		case 2:
			window.location='../php/actividades/Materias2.php';
		break;
		case 3:
			window.location='../php/actividades/Materias3.php';
		break;
		case 4:
			window.location='../php/actividades/Materias4.php';
		break;
		default:
			alert('Error de inserción');
			window.location.reload();

	}
}



function nueva_materia1(){
	document.getElementById('formatos_primero').style.display=('block');
	document.getElementById('tabla_Materias1').style.display=('none');
}

function Eliminar_Materia(Id_value){
	if (confirm('¿Desea borrar esta materia?')) {
      document.getElementById("Id").value=Id_value;
      document.getElementById("Eliminar").submit();
    }else {
      return false;
    }
}

function Kardex(num){
	switch (num){
		case 1:
		document.getElementById("tabla_Materias1").style.display=('none');
		document.getElementById("kardex1").style.display=('block');
		document.getElementById("Semestre1").value='Primer Semestre';

		break;
		case 2:
		document.getElementById("tabla_Materias2").style.display=('none');
		document.getElementById("kardex2").style.display=('block');
		document.getElementById("Semestre2").value='Segundo Semestre';

		break;
		case 3:
		document.getElementById("tabla_Materias3").style.display=('none');
		document.getElementById("kardex3").style.display=('block');
		document.getElementById("Semestre3").value='Tercer Semestre';

		break;
		case 4:
		document.getElementById("tabla_Materias4").style.display=('none');
		document.getElementById("kardex4").style.display=('block');
		document.getElementById("Semestre4").value='Cuarto Semestre';

		break;
	}
}

function Editar_Materias1(Id_value){
	document.getElementById('formatos_primero').style.display=('block');
	document.getElementById('tabla_Materias1').style.display=('none');
	document.getElementById('Id2').value=Id_value;
	document.getElementById('formatos_primero').action='../php/Actividades/Editar.php';
}
function Eliminar_proyectos(Id_value){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("Id_tesis").value=Id_value;
			document.getElementById("Eliminar_proyecto").submit();
		}else {
			return false;
		}
}

function Editar_proyectos(Id_value){
	document.getElementById('Editar_proyectos').style.display=('block');
	document.getElementById('tab_Pro').style.display=('none');
	document.getElementById('Id_temp').value=Id_value;
}

function cambio2(Tipo){
	for (var i =1 ; i<16 ; i++) {
		document.getElementById(i).style.display=('none');
	}
	document.getElementById(Tipo).style.display=('inline');


}

function Eliminar_Produccion(Tipo, Id_value){
	switch(Tipo){
		case 1:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo de difusión y divulgación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 2:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo Arbitrado';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 3:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo en revista indexada';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 4:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Capítulo del libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 5:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Consultoría';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 6:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Informe técnico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 7:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 8:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Manuales de operación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 9:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material de apoyo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 10:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material didáctico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 11:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Memorias';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 12:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Productividad innovadora';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 13:
			if (confirm('¿Desea Eliminar esta Produccion?' )){
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Producción artística';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 14:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Prototipo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 15:
			if (confirm('¿Desea Eliminar esta Produccion?' )) { 	
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Otra';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;

	}
}

function Editar_Produccion(Tipo, Id_value){
	document.getElementById('1').style.display=('none');
	document.getElementById('contenidoPrincipalProduccion').style.display=('none');
	document.getElementById('Vizualisador').style.display=('none');
	document.getElementById('Forms_Produccion').style.display=('block');
	document.getElementById(Tipo).style.display=('block');
	document.getElementById("Alter".concat(Tipo)).value=Id_value;
}

function Editar_Vinculacion(Id_value){
	document.getElementById('contenidoPrincipalVinculacion1').style.display=('none');
	document.getElementById('Forms_Vinculacion1').style.display=('block');
	document.getElementById('Id_Vinculacion1').value=Id_value;
}

function Editar_Movilidad(Id_value){
	document.getElementById('contenidoPrincipalMovilidad1').style.display=('none');
	document.getElementById('form_Movilidad1').style.display=('block');
	document.getElementById('Id_Movilidad1').value=Id_value;
}

function NuevaMovilidad(num){
	switch (num){
		case 1:
			document.getElementById('form_Movilidad').style.display=('block');
			document.getElementById('contenidoPrincipalMovilidad').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevaProduccion(num){
	switch (num){
		case 1:
			document.getElementById('Forms_Produccion').style.display=('block');
			document.getElementById('contenidoPrincipalProduccion').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}
function NuevaVinculacion(num){
		switch (num){
		case 1:
			document.getElementById('Forms_Vinculacion1').style.display=('block');
			document.getElementById('contenidoPrincipalVinculacion1').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevoApoyo(num){
	switch (num){
		case 1:
			document.getElementById('Forms_apoyo').style.display=('block');
			document.getElementById('contenidoPrincipalapoyo').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}


function NuevoCongreso(num){
	switch (num){
		case 1:
			document.getElementById('forms_congresos1').style.display=('block');
			document.getElementById('contenidoPrincipalCongresos1').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevaTutoria(num){
	switch (num){
		case 1:
			document.getElementById('Form_Tutoriar1').style.display=('block');
			document.getElementById('contenidoPrincipalTutorias1').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevaEspecialiZada(num){
	switch (num){
		case 1:
			document.getElementById('Form_Especializada1').style.display=('block');
			document.getElementById('contenidoPrincipalEspecializada1').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevaExtracurricular(num){
	switch (num){
		case 1:
			document.getElementById('form_Extracurriculares1').style.display=('block');
			document.getElementById('contenidoPrincipalExtracurriculares1').style.display=('none');
			break;
		case 2:
			window.location='../php/actividades/Produccion2.php';
			break;
		case 3:
			window.location='../php/actividades/Produccion3.php';
			break;
		case 4:
			window.location='../php/actividades/Produccion4.php';
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}