
function nuevoInforme1(){
	 this.window.location='../php/actividades/PriemerSemestre/nuevo_informe1.php';

}
function nuevoInforme2(){
	 this.window.location='../php/actividades/SegundoSemestre/nuevo_informe2.php';

}
function nuevoInforme3(){
	 this.window.location='../php/actividades/TercerSemestre/nuevo_informe3.php';

}
function nuevoInforme4(){
	 this.window.location='../php/actividades/CuartoSemestre/nuevo_informe4.php';

}
function Nuevo_Proyecto(num){
	switch(num){
		case 1:
			this.window.location='../php/actividades/PriemerSemestre/Proyecto1.php';
		break;
		case 2:
			this.window.location='../php/actividades/SegundoSemestre/Proyecto2.php';
		break;
		case 3:
			this.window.location='../php/actividades/TercerSemestre/Proyecto3.php';
		break;
		case 4:
			this.window.location='../php/actividades/CuartoSemestre/Proyecto4.php';
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
  this.window.location='Principal.php';
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
 	case "Materias2":
 		document.getElementById('Materia2').addEventListener("click", function(){
 				Replegar('Materias2');
 			});
 		document.getElementById('Materias2').style.display=("block");
 		document.getElementById('Materia2').removeEventListener("click", function(){
 				Desplegar('Materias2');
 			});
 	break;
 	case "Materias3":
 		document.getElementById('Materia3').addEventListener("click", function(){
 				Replegar('Materias3');
 			});
 		document.getElementById('Materias3').style.display=("block");
 		document.getElementById('Materia3').removeEventListener("click", function(){
 				Desplegar('Materias3');
 			});
 	break;
 	case "Materias4":
 		document.getElementById('Materia4').addEventListener("click", function(){
 				Replegar('Materias4');
 			});
 		document.getElementById('Materias4').style.display=("block");
 		document.getElementById('Materia4').removeEventListener("click", function(){
 				Desplegar('Materias4');
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
 	case "Proyecto2":
 	 		document.getElementById('Proyectos2').addEventListener("click", function(){
 				Replegar('Proyecto2');
 			});
 		document.getElementById('Proyecto2').style.display=("block");
 		document.getElementById('Proyectos2').removeEventListener("click", function(){
 				Desplegar('Proyecto2');
 			});
 	break;
 	case "Proyecto3":
 	 		document.getElementById('Proyectos3').addEventListener("click", function(){
 				Replegar('Proyecto3');
 			});
 		document.getElementById('Proyecto3').style.display=("block");
 		document.getElementById('Proyectos3').removeEventListener("click", function(){
 				Desplegar('Proyecto3');
 			});
 	break;
 	case "Proyecto4":
 	 		document.getElementById('Proyectos4').addEventListener("click", function(){
 				Replegar('Proyecto4');
 			});
 		document.getElementById('Proyecto4').style.display=("block");
 		document.getElementById('Proyectos4').removeEventListener("click", function(){
 				Desplegar('Proyecto4');
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
	case "Produccion2":
	document.getElementById('Producc2').addEventListener("click", function(){
		Replegar('Produccion2');
	});
document.getElementById('Produccion2').style.display=("block");
document.getElementById('Producc2').removeEventListener("click", function(){
		Desplegar('Produccion2');
	});
	break;
	case "Produccion3":
	document.getElementById('Producc3').addEventListener("click", function(){
		Replegar('Produccion3');
	});
document.getElementById('Produccion3').style.display=("block");
document.getElementById('Producc3').removeEventListener("click", function(){
		Desplegar('Produccion3');
	});
	break;
	case "Produccion4":
	document.getElementById('Producc4').addEventListener("click", function(){
		Replegar('Produccion4');
	});
document.getElementById('Produccion4').style.display=("block");
document.getElementById('Producc4').removeEventListener("click", function(){
		Desplegar('Produccion4');
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
	case "Extracurriculares2":
	document.getElementById('Extra2').addEventListener("click", function(){
		Replegar('Extracurriculares2');
	});
	document.getElementById('Extracurriculares2').style.display=("block");
	document.getElementById('Extra2').removeEventListener("click", function(){
			Desplegar('Extracurriculares2');
		});
	break;
	case "Extracurriculares3":
	document.getElementById('Extra3').addEventListener("click", function(){
		Replegar('Extracurriculares3');
	});
	document.getElementById('Extracurriculares3').style.display=("block");
	document.getElementById('Extra3').removeEventListener("click", function(){
			Desplegar('Extracurriculares3');
		});
	break;
	case "Extracurriculares4":
	document.getElementById('Extra4').addEventListener("click", function(){
		Replegar('Extracurriculares4');
	});
	document.getElementById('Extracurriculares4').style.display=("block");
	document.getElementById('Extra4').removeEventListener("click", function(){
			Desplegar('Extracurriculares4');
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
	case "ApoyoInvestigacion2":
	document.getElementById('Investi2').addEventListener("click", function(){
		Replegar('ApoyoInvestigacion2');
	});
	document.getElementById('ApoyoInvestigacion2').style.display=("block");
	document.getElementById('Investi2').removeEventListener("click", function(){
			Desplegar('ApoyoInvestigacion2');
		});
	break;
	case "ApoyoInvestigacion3":
	document.getElementById('Investi3').addEventListener("click", function(){
		Replegar('ApoyoInvestigacion3');
	});
	document.getElementById('ApoyoInvestigacion3').style.display=("block");
	document.getElementById('Investi3').removeEventListener("click", function(){
			Desplegar('ApoyoInvestigacion3');
		});
	break;
	case "ApoyoInvestigacion4":
	document.getElementById('Investi4').addEventListener("click", function(){
		Replegar('ApoyoInvestigacion4');
	});
	document.getElementById('ApoyoInvestigacion4').style.display=("block");
	document.getElementById('Investi4').removeEventListener("click", function(){
			Desplegar('ApoyoInvestigacion4');
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
	case "Ponentes2":
		document.getElementById('Pon2').addEventListener("click", function(){
		Replegar('Ponentes2');
	});
document.getElementById('Ponentes2').style.display=("block");
document.getElementById('Pon2').removeEventListener("click", function(){
		Desplegar('Ponentes2');
	});
	break;
	case "Ponentes3":
		document.getElementById('Pon3').addEventListener("click", function(){
		Replegar('Ponentes3');
	});
document.getElementById('Ponentes3').style.display=("block");
document.getElementById('Pon3').removeEventListener("click", function(){
		Desplegar('Ponentes3');
	});
	break;
	case "Ponentes4":
		document.getElementById('Pon4').addEventListener("click", function(){
		Replegar('Ponentes4');
	});
document.getElementById('Ponentes4').style.display=("block");
document.getElementById('Pon4').removeEventListener("click", function(){
		Desplegar('Ponentes4');
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
	case "AsesoriaEsp2":
	document.getElementById('Asesoria2').addEventListener("click", function(){
		Replegar('AsesoriaEsp2');
	});
document.getElementById('AsesoriaEsp2').style.display=("block");
document.getElementById('Asesoria2').removeEventListener("click", function(){
		Desplegar('AsesoriaEsp2');
	});
	break;
	case "AsesoriaEsp3":
	document.getElementById('Asesoria3').addEventListener("click", function(){
		Replegar('AsesoriaEsp3');
	});
document.getElementById('AsesoriaEsp3').style.display=("block");
document.getElementById('Asesoria3').removeEventListener("click", function(){
		Desplegar('AsesoriaEsp3');
	});
	break;
	case "AsesoriaEsp4":
	document.getElementById('Asesoria4').addEventListener("click", function(){
		Replegar('AsesoriaEsp4');
	});
document.getElementById('AsesoriaEsp4').style.display=("block");
document.getElementById('Asesoria4').removeEventListener("click", function(){
		Desplegar('AsesoriaEsp4');
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
	case "NecesidadesTuto2":
	document.getElementById('Tutorias2').addEventListener("click", function(){
		Replegar('NecesidadesTuto2');
	});
document.getElementById('NecesidadesTuto2').style.display=("block");
document.getElementById('Tutorias2').removeEventListener("click", function(){
		Desplegar('NecesidadesTuto2');
	});
	break;
	case "NecesidadesTuto3":
	document.getElementById('Tutorias3').addEventListener("click", function(){
		Replegar('NecesidadesTuto3');
	});
document.getElementById('NecesidadesTuto3').style.display=("block");
document.getElementById('Tutorias3').removeEventListener("click", function(){
		Desplegar('NecesidadesTuto3');
	});
	break;
	case "NecesidadesTuto4":
	document.getElementById('Tutorias4').addEventListener("click", function(){
		Replegar('NecesidadesTuto4');
	});
document.getElementById('NecesidadesTuto4').style.display=("block");
document.getElementById('Tutorias4').removeEventListener("click", function(){
		Desplegar('NecesidadesTuto4');
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
	case "MovilidadAca2":
	document.getElementById('Movi2').addEventListener("click", function(){
		Replegar('MovilidadAca2');
	});
document.getElementById('MovilidadAca2').style.display=("block");
document.getElementById('Movi2').removeEventListener("click", function(){
		Desplegar('MovilidadAca2');
	});
	break;
	case "MovilidadAca3":
	document.getElementById('Movi3').addEventListener("click", function(){
		Replegar('MovilidadAca3');
	});
document.getElementById('MovilidadAca3').style.display=("block");
document.getElementById('Movi3').removeEventListener("click", function(){
		Desplegar('MovilidadAca3');
	});
	break;
	case "MovilidadAca4":
	document.getElementById('Movi4').addEventListener("click", function(){
		Replegar('MovilidadAca4');
	});
document.getElementById('MovilidadAca4').style.display=("block");
document.getElementById('Movi4').removeEventListener("click", function(){
		Desplegar('MovilidadAca4');
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
	case "VinculacionAcade2":
	document.getElementById('Vincu2').addEventListener("click", function(){
		Replegar('VinculacionAcade2');
	});
document.getElementById('VinculacionAcade2').style.display=("block");
document.getElementById('Vincu2').removeEventListener("click", function(){
		Desplegar('VinculacionAcade2');
	});
	break;
	case "VinculacionAcade3":
	document.getElementById('Vincu3').addEventListener("click", function(){
		Replegar('VinculacionAcade3');
	});
document.getElementById('VinculacionAcade3').style.display=("block");
document.getElementById('Vincu3').removeEventListener("click", function(){
		Desplegar('VinculacionAcade3');
	});
	break;
	case "VinculacionAcade4":
	document.getElementById('Vincu4').addEventListener("click", function(){
		Replegar('VinculacionAcade4');
	});
document.getElementById('VinculacionAcade4').style.display=("block");
document.getElementById('Vincu4').removeEventListener("click", function(){
		Desplegar('VinculacionAcade4');
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
	 	case "Materias2":
			document.getElementById('Materia2').addEventListener("click", function(){
					Desplegar('Materias2');
				});
	 		document.getElementById('Materias2').style.display=("none");
	 		document.getElementById('Materia2').removeEventListener("click", function(){
	 				Replegar('Materias2');
	 			});
	 	break;
	 	case "Materias3":
			document.getElementById('Materia3').addEventListener("click", function(){
					Desplegar('Materias3');
				});
	 		document.getElementById('Materias3').style.display=("none");
	 		document.getElementById('Materia3').removeEventListener("click", function(){
	 				Replegar('Materias3');
	 			});
	 	break;
	 	case "Materias4":
			document.getElementById('Materia4').addEventListener("click", function(){
					Desplegar('Materias4');
				});
	 		document.getElementById('Materias4').style.display=("none");
	 		document.getElementById('Materia4').removeEventListener("click", function(){
	 				Replegar('Materias4');
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
	 	case "Proyecto2":
	 		document.getElementById('Proyectos2').addEventListener("click", function(){
					Desplegar('Proyecto2');
				});
	 		document.getElementById('Proyecto2').style.display=("none");
	 		document.getElementById('Proyectos2').removeEventListener("click", function(){
	 				Replegar('Proyecto2');
	 			});
	 	break;
	 	case "Proyecto3":
	 		document.getElementById('Proyectos3').addEventListener("click", function(){
					Desplegar('Proyecto3');
				});
	 		document.getElementById('Proyecto3').style.display=("none");
	 		document.getElementById('Proyectos3').removeEventListener("click", function(){
	 				Replegar('Proyecto3');
	 			});
	 	break;
	 	case "Proyecto4":
	 		document.getElementById('Proyectos4').addEventListener("click", function(){
					Desplegar('Proyecto4');
				});
	 		document.getElementById('Proyecto4').style.display=("none");
	 		document.getElementById('Proyectos4').removeEventListener("click", function(){
	 				Replegar('Proyecto4');
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
	 	case "Produccion2":
	 		document.getElementById('Producc2').addEventListener("click", function(){
					Desplegar('Produccion2');
				});
	 		document.getElementById('Produccion2').style.display=("none");
	 		document.getElementById('Producc2').removeEventListener("click", function(){
	 				Replegar('Produccion2');
	 			});
	 	break;
	 	case "Produccion3":
	 		document.getElementById('Producc3').addEventListener("click", function(){
					Desplegar('Produccion3');
				});
	 		document.getElementById('Produccion3').style.display=("none");
	 		document.getElementById('Producc3').removeEventListener("click", function(){
	 				Replegar('Produccion3');
	 			});
	 	break;
	 	case "Produccion4":
	 		document.getElementById('Producc4').addEventListener("click", function(){
					Desplegar('Produccion4');
				});
	 		document.getElementById('Produccion4').style.display=("none");
	 		document.getElementById('Producc4').removeEventListener("click", function(){
	 				Replegar('Produccion4');
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
		case "Extracurriculares2":
			document.getElementById('Extra2').addEventListener("click", function(){
				Desplegar('Extracurriculares2');
				});
			document.getElementById('Extracurriculares2').style.display=("none");
			document.getElementById('Extra2').removeEventListener("click", function(){
					Replegar('Extracurriculares2');
				});
		break;
		case "Extracurriculares3":
			document.getElementById('Extra3').addEventListener("click", function(){
				Desplegar('Extracurriculares3');
				});
			document.getElementById('Extracurriculares3').style.display=("none");
			document.getElementById('Extra3').removeEventListener("click", function(){
					Replegar('Extracurriculares3');
				});
		break;
		case "Extracurriculares4":
			document.getElementById('Extra4').addEventListener("click", function(){
				Desplegar('Extracurriculares4');
				});
			document.getElementById('Extracurriculares4').style.display=("none");
			document.getElementById('Extra4').removeEventListener("click", function(){
					Replegar('Extracurriculares4');
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
		case "ApoyoInvestigacion2":
			document.getElementById('Investi2').addEventListener("click", function(){
				Desplegar('ApoyoInvestigacion2');
				});
			document.getElementById('ApoyoInvestigacion2').style.display=("none");
			document.getElementById('Investi2').removeEventListener("click", function(){
					Replegar('ApoyoInvestigacion2');
				});
		break;
		case "ApoyoInvestigacion3":
			document.getElementById('Investi3').addEventListener("click", function(){
				Desplegar('ApoyoInvestigacion3');
				});
			document.getElementById('ApoyoInvestigacion3').style.display=("none");
			document.getElementById('Investi3').removeEventListener("click", function(){
					Replegar('ApoyoInvestigacion3');
				});
		break;
		case "ApoyoInvestigacion4":
			document.getElementById('Investi4').addEventListener("click", function(){
				Desplegar('ApoyoInvestigacion4');
				});
			document.getElementById('ApoyoInvestigacion4').style.display=("none");
			document.getElementById('Investi4').removeEventListener("click", function(){
					Replegar('ApoyoInvestigacion4');
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
		case "Ponentes2":
			document.getElementById('Pon2').addEventListener("click", function(){
				Desplegar('Ponentes2');
				});
			document.getElementById('Ponentes2').style.display=("none");
			document.getElementById('Pon2').removeEventListener("click", function(){
					Replegar('Ponentes2');
				});
		break;
		case "Ponentes3":
			document.getElementById('Pon3').addEventListener("click", function(){
				Desplegar('Ponentes3');
				});
			document.getElementById('Ponentes3').style.display=("none");
			document.getElementById('Pon3').removeEventListener("click", function(){
					Replegar('Ponentes3');
				});
		break;
		case "Ponentes4":
			document.getElementById('Pon4').addEventListener("click", function(){
				Desplegar('Ponentes4');
				});
			document.getElementById('Ponentes4').style.display=("none");
			document.getElementById('Pon4').removeEventListener("click", function(){
					Replegar('Ponentes4');
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
		case "AsesoriaEsp2":
			document.getElementById('Asesoria2').addEventListener("click", function(){
				Desplegar('AsesoriaEsp2');
				});
			document.getElementById('AsesoriaEsp2').style.display=("none");
			document.getElementById('Asesoria2').removeEventListener("click", function(){
					Replegar('AsesoriaEsp2');
				});
		break;
		case "AsesoriaEsp3":
			document.getElementById('Asesoria3').addEventListener("click", function(){
				Desplegar('AsesoriaEsp3');
				});
			document.getElementById('AsesoriaEsp3').style.display=("none");
			document.getElementById('Asesoria3').removeEventListener("click", function(){
					Replegar('AsesoriaEsp3');
				});
		break;
		case "AsesoriaEsp4":
			document.getElementById('Asesoria4').addEventListener("click", function(){
				Desplegar('AsesoriaEsp4');
				});
			document.getElementById('AsesoriaEsp4').style.display=("none");
			document.getElementById('Asesoria4').removeEventListener("click", function(){
					Replegar('AsesoriaEsp4');
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
		case "NecesidadesTuto2":
			document.getElementById('Tutorias2').addEventListener("click", function(){
				Desplegar('NecesidadesTuto2');
				});
			document.getElementById('NecesidadesTuto2').style.display=("none");
			document.getElementById('Tutorias2').removeEventListener("click", function(){
					Replegar('NecesidadesTuto2');
				});
		break;
		case "NecesidadesTuto3":
			document.getElementById('Tutorias3').addEventListener("click", function(){
				Desplegar('NecesidadesTuto3');
				});
			document.getElementById('NecesidadesTuto3').style.display=("none");
			document.getElementById('Tutorias3').removeEventListener("click", function(){
					Replegar('NecesidadesTuto3');
				});
		break;
		case "NecesidadesTuto4":
			document.getElementById('Tutorias4').addEventListener("click", function(){
				Desplegar('NecesidadesTuto4');
				});
			document.getElementById('NecesidadesTuto4').style.display=("none");
			document.getElementById('Tutorias4').removeEventListener("click", function(){
					Replegar('NecesidadesTuto4');
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
		case "MovilidadAca2":
			document.getElementById('Movi2').addEventListener("click", function(){
				Desplegar('MovilidadAca2');
				});
			document.getElementById('MovilidadAca2').style.display=("none");
			document.getElementById('Movi2').removeEventListener("click", function(){
					Replegar('MovilidadAca2');
				});
		break;
		case "MovilidadAca3":
			document.getElementById('Movi3').addEventListener("click", function(){
				Desplegar('MovilidadAca3');
				});
			document.getElementById('MovilidadAca3').style.display=("none");
			document.getElementById('Movi3').removeEventListener("click", function(){
					Replegar('MovilidadAca3');
				});
		break;
		case "MovilidadAca4":
			document.getElementById('Movi4').addEventListener("click", function(){
				Desplegar('MovilidadAca4');
				});
			document.getElementById('MovilidadAca4').style.display=("none");
			document.getElementById('Movi4').removeEventListener("click", function(){
					Replegar('MovilidadAca4');
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
		case "VinculacionAcade2":
			document.getElementById('Vincu2').addEventListener("click", function(){
				Desplegar('VinculacionAcade2');
				});
			document.getElementById('VinculacionAcade2').style.display=("none");
			document.getElementById('Vincu2').removeEventListener("click", function(){
					Replegar('VinculacionAcade2');
				});
		break;
		case "VinculacionAcade3":
			document.getElementById('Vincu3').addEventListener("click", function(){
				Desplegar('VinculacionAcade3');
				});
			document.getElementById('VinculacionAcade3').style.display=("none");
			document.getElementById('Vincu3').removeEventListener("click", function(){
					Replegar('VinculacionAcade3');
				});
		break;
		case "VinculacionAcade4":
			document.getElementById('Vincu4').addEventListener("click", function(){
				Desplegar('VinculacionAcade4');
				});
			document.getElementById('VinculacionAcade4').style.display=("none");
			document.getElementById('Vincu4').removeEventListener("click", function(){
					Replegar('VinculacionAcade4');
				});
		break;
	 }
}

function Materias_Semestres(num){
	switch (num){
		case 1:
			window.location='../php/actividades/PriemerSemestre/Materias1.php';
		break;
		case 2:
			window.location='../php/actividades/SegundoSemestre/Materias2.php';
		break;
		case 3:
			window.location='../php/actividades/TercerSemestre/Materias3.php';
		break;
		case 4:
			window.location='../php/actividades/CuartoSemestre/Materias4.php';
		break;
		default:
			alert('Error de inserción');
			window.location.reload();

	}
}



function nueva_materia(num){
	switch (num){
		case 1:
			document.getElementById('formatos_primero').style.display=('block');
			document.getElementById('tabla_Materias1').style.display=('none');
		break;
		case 2:
			document.getElementById('formatos_Segundo').style.display=('block');
			document.getElementById('tabla_Materias2').style.display=('none');
		break;
		case 3:
			document.getElementById('formatos_Tercero').style.display=('block');
			document.getElementById('tabla_Materias3').style.display=('none');
		break;
		case 4:
			document.getElementById('formatos_Cuarto').style.display=('block');
			document.getElementById('tabla_Materias4').style.display=('none');
		break;

	}
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
	document.getElementById('Id1').value=Id_value;
	document.getElementById('formatos_primero').action='../php/Actividades/PriemerSemestre/Editar1.php';
}
function Editar_Materias2(Id_value){
	document.getElementById('formatos_Segundo').style.display=('block');
	document.getElementById('tabla_Materias2').style.display=('none');
	document.getElementById('Id2').value=Id_value;
	document.getElementById('formatos_Segundo').action='../php/Actividades/SegundoSemestre/Editar2.php';
}
function Editar_Materias3(Id_value){
	document.getElementById('formatos_Tercero').style.display=('block');
	document.getElementById('tabla_Materias3').style.display=('none');
	document.getElementById('Id3').value=Id_value;
	document.getElementById('formatos_Tercero').action='../php/Actividades/TercerSemestre/Editar3.php';
}
function Editar_Materias4(Id_value){
	document.getElementById('formatos_Cuarto').style.display=('block');
	document.getElementById('tabla_Materias4').style.display=('none');
	document.getElementById('Id4').value=Id_value;
	document.getElementById('formatos_Cuarto').action='../php/Actividades/CuartoSemestre/Editar4.php';
}
function Eliminar_proyectos(Id_value){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("Id_tesis").value=Id_value;
			document.getElementById("Eliminar_proyecto").submit();
		}else {
			return false;
		}
}
function Eliminar_proyectos2(Id_value){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("Id_tesis2").value=Id_value;
			document.getElementById("Eliminar_proyecto2").submit();
		}else {
			return false;
		}
}
function Eliminar_proyectos3(Id_value){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("Id_tesis3").value=Id_value;
			document.getElementById("Eliminar_proyecto3").submit();
		}else {
			return false;
		}
}
function Eliminar_proyectos4(Id_value){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("Id_tesis4").value=Id_value;
			document.getElementById("Eliminar_proyecto4").submit();
		}else {
			return false;
		}
}

function Editar_proyectos(Id_value){
	document.getElementById('Editar_proyectos').style.display=('block');
	document.getElementById('tab_Pro').style.display=('none');
	document.getElementById('Id_temp').value=Id_value;
}
function Editar_proyectos2(Id_value){
	document.getElementById('Editar_proyectos2').style.display=('block');
	document.getElementById('tab_Pro2').style.display=('none');
	document.getElementById('Id_temp2').value=Id_value;
}
function Editar_proyecto3(Id_value){
	document.getElementById('Editar_proyectos3').style.display=('block');
	document.getElementById('tab_Pro3').style.display=('none');
	document.getElementById('Id_temp3').value=Id_value;
}
function Editar_proyectos4(Id_value){
	document.getElementById('Editar_proyectos4').style.display=('block');
	document.getElementById('tab_Pro4').style.display=('none');
	document.getElementById('Id_temp4').value=Id_value;
}

function cambio1(Tipo){
	for (var i =1 ; i<16 ; i++) {
		document.getElementById(i).style.display=('none');
	}
	document.getElementById(Tipo).style.display=('inline');


}
function cambio2(Tipo){
	for (var i =201 ; i<216 ; i++) {
		document.getElementById(i).style.display=('none');
	}
	document.getElementById(Tipo).style.display=('inline');


}
function cambio3(Tipo){
	for (var i =301 ; i<316 ; i++) {
		document.getElementById(i).style.display=('none');
	}
	document.getElementById(Tipo).style.display=('inline');


}
function cambio4(Tipo){
	for (var i =401 ; i<416 ; i++) {
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
		case 201:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo de difusión y divulgación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 202:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo Arbitrado';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 203:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo en revista indexada';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 204:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Capítulo del libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 205:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Consultoría';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 206:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Informe técnico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 207:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 208:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Manuales de operación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 209:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material de apoyo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 210:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material didáctico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 211:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Memorias';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 212:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Productividad innovadora';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 213:
			if (confirm('¿Desea Eliminar esta Produccion?' )){
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Producción artística';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 214:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Prototipo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 215:
			if (confirm('¿Desea Eliminar esta Produccion?' )) { 	
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Otra';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 301:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo de difusión y divulgación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 302:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo Arbitrado';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 303:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo en revista indexada';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 304:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Capítulo del libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 305:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Consultoría';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 306:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Informe técnico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 307:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 308:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Manuales de operación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 309:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material de apoyo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 310:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material didáctico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 311:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Memorias';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 312:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Productividad innovadora';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 313:
			if (confirm('¿Desea Eliminar esta Produccion?' )){
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Producción artística';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 314:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Prototipo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 315:
			if (confirm('¿Desea Eliminar esta Produccion?' )) { 	
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Otra';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 401:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo de difusión y divulgación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 402:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo Arbitrado';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 403:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Artículo en revista indexada';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 404:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Capítulo del libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 405:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Consultoría';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 406:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Informe técnico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 407:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Libro';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 408:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Manuales de operación';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 409:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material de apoyo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 410:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Material didáctico';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 411:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Memorias';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 412:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Productividad innovadora';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 413:
			if (confirm('¿Desea Eliminar esta Produccion?' )){
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Producción artística';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 414:
			if (confirm('¿Desea Eliminar esta Produccion?' )) {
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Prototipo';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;
		case 415:
			if (confirm('¿Desea Eliminar esta Produccion?' )) { 	
		 		document.getElementById('Id_Pro').value=Id_value;
		 		document.getElementById('Tipo_Eliminar').value='Otra';
		 		document.getElementById('Eliminar_produccion').submit();
			}
		break;

	}
}

function Eliminar_varios(Id_value, num){
	if (confirm('¿Desea borrar este informe de proyecto?')) {
			document.getElementById("id_Eliminar_1").value=Id_value;
			document.getElementById("Tipo_Eliminar1").value=num;
			document.getElementById("form_Eliminar_varios").submit();
		}else {
			return false;
		}
}


function Editar_Produccion(Tipo, Id_value){
	document.getElementById('1').style.display=('none');
	document.getElementById('contenidoPrincipalProduccion').style.display=('none');
	document.getElementById('Vizualisador').style.display=('none');
	document.getElementById('Forms_Produccion').style.display=('block');
	document.getElementById(Tipo).style.display=('block');
	document.getElementById("Alter".concat(Tipo)).action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id'+Tipo+'='+Id_value;
}
function Editar_Produccion2(Tipo, Id_value){
	document.getElementById('201').style.display=('none');
	document.getElementById('contenidoPrincipalProduccion2').style.display=('none');
	document.getElementById('Vizualisador2').style.display=('none');
	document.getElementById('Forms_Produccion2').style.display=('block');
	document.getElementById(Tipo).style.display=('block');
	document.getElementById("Alter2".concat(Tipo)).action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id'+Tipo+'='+Id_value;
}
function Editar_Produccion3(Tipo, Id_value){
	document.getElementById('301').style.display=('none');
	document.getElementById('contenidoPrincipalProduccion3').style.display=('none');
	document.getElementById('Vizualisador3').style.display=('none');
	document.getElementById('Forms_Produccion3').style.display=('block');
	document.getElementById(Tipo).style.display=('block');
	document.getElementById("Alter3".concat(Tipo)).action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id'+Tipo+'='+Id_value;
}
function Editar_Produccion4(Tipo, Id_value){
	document.getElementById('401').style.display=('none');
	document.getElementById('contenidoPrincipalProduccion4').style.display=('none');
	document.getElementById('Vizualisador4').style.display=('none');
	document.getElementById('Forms_Produccion4').style.display=('block');
	document.getElementById(Tipo).style.display=('block');
	document.getElementById("Alter4".concat(Tipo)).action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id'+Tipo+'='+Id_value;
}

function Editar_Vinculacion(Id_value){
	document.getElementById('contenidoPrincipalVinculacion1').style.display=('none');
	document.getElementById('Forms_Vinculacion1').style.display=('block');
	document.getElementById('Id_Vinculacion1').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_vin1='+Id_value;
}
function Editar_Vinculacion2(Id_value){
	document.getElementById('contenidoPrincipalVinculacion2').style.display=('none');
	document.getElementById('Forms_Vinculacion2').style.display=('block');
	document.getElementById('Id_Vinculacion2').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_vin2='+Id_value;
}
function Editar_Vinculacion3(Id_value){
	document.getElementById('contenidoPrincipalVinculacion3').style.display=('none');
	document.getElementById('Forms_Vinculacion3').style.display=('block');
	document.getElementById('Id_Vinculacion3').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_vin3='+Id_value;
}
function Editar_Vinculacion4(Id_value){
	document.getElementById('contenidoPrincipalVinculacion4').style.display=('none');
	document.getElementById('Forms_Vinculacion4').style.display=('block');
	document.getElementById('Id_Vinculacion4').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_vin4='+Id_value;
}

function Editar_Movilidad(Id_value){
	document.getElementById('contenidoPrincipalMovilidad1').style.display=('none');
	document.getElementById('form_Movilidad1').style.display=('block');
	document.getElementById('Id_Movilidad1').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Mov1='+Id_value;
}
function Editar_Movilidad2(Id_value){
	document.getElementById('contenidoPrincipalMovilidad2').style.display=('none');
	document.getElementById('form_Movilidad2').style.display=('block');
	document.getElementById('Id_Movilidad2').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Mov2='+Id_value;
}
function Editar_Movilidad3(Id_value){
	document.getElementById('contenidoPrincipalMovilidad3').style.display=('none');
	document.getElementById('form_Movilidad3').style.display=('block');
	document.getElementById('Id_Movilidad3').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Mov3='+Id_value;
}
function Editar_Movilidad4(Id_value){
	document.getElementById('contenidoPrincipalMovilidad4').style.display=('none');
	document.getElementById('form_Movilidad4').style.display=('block');
	document.getElementById('Id_Movilidad4').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Mov4='+Id_value;
}

function Editar_Asesoria(Id_value){
	document.getElementById('contenidoPrincipalTutorias1').style.display=('none');
	document.getElementById('Form_Tutoriar1').style.display=('block');
	document.getElementById('Id_Reporte_tutoria1').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Tut1='+Id_value;
}
function Editar_Asesoria2(Id_value){
	document.getElementById('contenidoPrincipalTutorias2').style.display=('none');
	document.getElementById('Form_Tutoriar2').style.display=('block');
	document.getElementById('Id_Reporte_tutoria2').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Tut2='+Id_value;
}
function Editar_Asesoria3(Id_value){
	document.getElementById('contenidoPrincipalTutorias3').style.display=('none');
	document.getElementById('Form_Tutoriar3').style.display=('block');
	document.getElementById('Id_Reporte_tutoria3').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Tut3='+Id_value;
}
function Editar_Asesoria4(Id_value){
	document.getElementById('contenidoPrincipalTutorias4').style.display=('none');
	document.getElementById('Form_Tutoriar4').style.display=('block');
	document.getElementById('Id_Reporte_tutoria4').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Tut4='+Id_value;
}

function Editar_Especialidad(Id_value){
	document.getElementById('contenidoPrincipalEspecializada1').style.display=('none');
	document.getElementById('Form_Especializada1').style.display=('block');
	document.getElementById('id_Especializada1').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Especial1='+Id_value;
}
function Editar_Especialidad2(Id_value){
	document.getElementById('contenidoPrincipalEspecializada2').style.display=('none');
	document.getElementById('Form_Especializada2').style.display=('block');
	document.getElementById('id_Especializada2').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Especial2='+Id_value;
}
function Editar_Especialidad3(Id_value){
	document.getElementById('contenidoPrincipalEspecializada3').style.display=('none');
	document.getElementById('Form_Especializada3').style.display=('block');
	document.getElementById('id_Especializada3').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Especial3='+Id_value;
}
function Editar_Especialidad4(Id_value){
	document.getElementById('contenidoPrincipalEspecializada4').style.display=('none');
	document.getElementById('Form_Especializada4').style.display=('block');
	document.getElementById('id_Especializada4').action= '/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Especial4='+Id_value;
}

function Editar_Congreso(Id_value){
	document.getElementById('contenidoPrincipalCongresos1').style.display=('none');
	document.getElementById('forms_congresos1').style.display=('block');
	document.getElementById('Form_Cong1').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_cong1='+Id_value;
}
function Editar_Congreso2(Id_value){
	document.getElementById('contenidoPrincipalCongresos2').style.display=('none');
	document.getElementById('forms_congresos2').style.display=('block');
	document.getElementById('Form_Cong2').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_cong2='+Id_value;
}
function Editar_Congreso3(Id_value){
	document.getElementById('contenidoPrincipalCongresos3').style.display=('none');
	document.getElementById('forms_congresos3').style.display=('block');
	document.getElementById('Form_Cong3').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_cong3='+Id_value;
}
function Editar_Congreso4(Id_value){
	document.getElementById('contenidoPrincipalCongresos4').style.display=('none');
	document.getElementById('forms_congresos4').style.display=('block');
	document.getElementById('Form_Cong4').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_cong4='+Id_value;
}

function Editar_Gestion(Id_value){
	document.getElementById('contenidoPrincipalapoyo1').style.display=('none');
	document.getElementById('Forms_apoyo1').style.display=('block');
	document.getElementById('Form_apoyo1').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_apoyo1='+Id_value;
}
function Editar_Gestion2(Id_value){
	document.getElementById('contenidoPrincipalapoyo2').style.display=('none');
	document.getElementById('Forms_apoyo2').style.display=('block');
	document.getElementById('Form_apoyo2').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_apoyo2='+Id_value;
}
function Editar_Gestion3(Id_value){
	document.getElementById('contenidoPrincipalapoyo3').style.display=('none');
	document.getElementById('Forms_apoyo3').style.display=('block');
	document.getElementById('Form_apoyo3').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_apoyo3='+Id_value;
}
function Editar_Gestion4(Id_value){
	document.getElementById('contenidoPrincipalapoyo4').style.display=('none');
	document.getElementById('Forms_apoyo4').style.display=('block');
	document.getElementById('Form_apoyo4').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_apoyo4='+Id_value;
}

function Editar_Extracurriculares(Id_value){
	document.getElementById('contenidoPrincipalExtracurriculares1').style.display=('none');
	document.getElementById('form_Extracurriculares1').style.display=('block');
	document.getElementById('form_Extra1').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Extra='+Id_value;
}
function Editar_Extracurriculares2(Id_value){
	document.getElementById('contenidoPrincipalExtracurriculares2').style.display=('none');
	document.getElementById('form_Extracurriculares2').style.display=('block');
	document.getElementById('form_Extra2').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Extra2='+Id_value;
}
function Editar_Extracurriculares3(Id_value){
	document.getElementById('contenidoPrincipalExtracurriculares3').style.display=('none');
	document.getElementById('form_Extracurriculares3').style.display=('block');
	document.getElementById('form_Extra3').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Extra3='+Id_value;
}
function Editar_Extracurriculares4(Id_value){
	document.getElementById('contenidoPrincipalExtracurriculares4').style.display=('none');
	document.getElementById('form_Extracurriculares4').style.display=('block');
	document.getElementById('form_Extra4').action='/MGPES/Mgpes/paginaweb/Estudiante/actividades.php.?id_Extra4='+Id_value;
}

function NuevaMovilidad(num){
	switch (num){
		case 1:
			document.getElementById('form_Movilidad1').style.display=('block');
			document.getElementById('contenidoPrincipalMovilidad1').style.display=('none');
			break;
		case 2:
			document.getElementById('form_Movilidad2').style.display=('block');
			document.getElementById('contenidoPrincipalMovilidad2').style.display=('none');
			break;
		case 3:
			document.getElementById('form_Movilidad3').style.display=('block');
			document.getElementById('contenidoPrincipalMovilidad3').style.display=('none');
			break;
		case 4:
			document.getElementById('form_Movilidad4').style.display=('block');
			document.getElementById('contenidoPrincipalMovilidad4').style.display=('none');
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
			document.getElementById('Forms_Produccion2').style.display=('block');
			document.getElementById('contenidoPrincipalProduccion2').style.display=('none');
			break;
		case 3:
			document.getElementById('Forms_Produccion3').style.display=('block');
			document.getElementById('contenidoPrincipalProduccion3').style.display=('none');
			break;
		case 4:
			document.getElementById('Forms_Produccion4').style.display=('block');
			document.getElementById('contenidoPrincipalProduccion4').style.display=('none');
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
			document.getElementById('Forms_Vinculacion2').style.display=('block');
			document.getElementById('contenidoPrincipalVinculacion2').style.display=('none');
			break;
		case 3:
			document.getElementById('Forms_Vinculacion3').style.display=('block');
			document.getElementById('contenidoPrincipalVinculacion3').style.display=('none');
			break;
		case 4:
			document.getElementById('Forms_Vinculacion4').style.display=('block');
			document.getElementById('contenidoPrincipalVinculacion4').style.display=('none');
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function NuevoApoyo(num){
	switch (num){
		case 1:
			document.getElementById('Forms_apoyo1').style.display=('block');
			document.getElementById('contenidoPrincipalapoyo1').style.display=('none');
			break;
		case 2:
			document.getElementById('Forms_apoyo2').style.display=('block');
			document.getElementById('contenidoPrincipalapoyo2').style.display=('none');
			break;
		case 3:
			document.getElementById('Forms_apoyo3').style.display=('block');
			document.getElementById('contenidoPrincipalapoyo3').style.display=('none');
			break;
		case 4:
			document.getElementById('Forms_apoyo4').style.display=('block');
			document.getElementById('contenidoPrincipalapoyo4').style.display=('none');
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
			document.getElementById('forms_congresos2').style.display=('block');
			document.getElementById('contenidoPrincipalCongresos2').style.display=('none');
			break;
		case 3:
			document.getElementById('forms_congresos3').style.display=('block');
			document.getElementById('contenidoPrincipalCongresos3').style.display=('none');
			break;
		case 4:
			document.getElementById('forms_congresos4').style.display=('block');
			document.getElementById('contenidoPrincipalCongresos4').style.display=('none');
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
			document.getElementById('Form_Tutoriar2').style.display=('block');
			document.getElementById('contenidoPrincipalTutorias2').style.display=('none');
			break;
		case 3:
			document.getElementById('Form_Tutoriar3').style.display=('block');
			document.getElementById('contenidoPrincipalTutorias3').style.display=('none');
			break;
		case 4:
			document.getElementById('Form_Tutoriar4').style.display=('block');
			document.getElementById('contenidoPrincipalTutorias4').style.display=('none');
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
			document.getElementById('Form_Especializada2').style.display=('block');
			document.getElementById('contenidoPrincipalEspecializada2').style.display=('none');
			break;
		case 3:
			document.getElementById('Form_Especializada3').style.display=('block');
			document.getElementById('contenidoPrincipalEspecializada3').style.display=('none');
			break;
		case 4:
			document.getElementById('Form_Especializada4').style.display=('block');
			document.getElementById('contenidoPrincipalEspecializada4').style.display=('none');
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
			document.getElementById('form_Extracurriculares2').style.display=('block');
			document.getElementById('contenidoPrincipalExtracurriculares2').style.display=('none');
			break;
		case 3:
			document.getElementById('form_Extracurriculares3').style.display=('block');
			document.getElementById('contenidoPrincipalExtracurriculares3').style.display=('none');
			break;
		case 4:
			document.getElementById('form_Extracurriculares4').style.display=('block');
			document.getElementById('contenidoPrincipalExtracurriculares4').style.display=('none');
			break;
		default:
			alert('Error de inserción');
			window.location.reload();
	}
}

function ocultarTabla(num){
	switch (num){
		case 1:
		document.getElementById('Archivo1').style.display=('block');
		document.getElementById('tabs1').style.display=('none');
		break;
		case 2:
		break;
		case 3:
		break;
		case 4:
		break;
	}
}
