function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function DesplegarVentana(){
  document.getElementById("Ventana").style.display=('block');
}

function ocultarVentana(){
  document.getElementById("Ventana").style.display=('none');
}

function Consulta(numero){
    DesplegarVentana();
          var parametros = {
                  "id" : numero
          };
          $.ajax({
                  data:  parametros,
                  url:   '../php/Empleados/ConsultaAspirante.php',
                  type:  'post',
                  beforeSend: function () {
                          $("#Ventana").html("Procesando, espere por favor...");
                  },
                  success:  function (response) {
                          $("#Ventana").html(response);
                  }
          });
  }

function agregarEstudiante(num){
	if(confirm('¿Desea mover al aspirante a los estudiates permitidos?')){
			var parametros={
							"id": num
			}
			$.ajax({
							data: parametros,
							url:  '../php/Empleados/NuevoEst.php',
							type: 'post',
							beforeSend: function(){
								$("#Ventana").html("Procesando, espere por favor...");
							},
							success: function(response){
								$("#Ventana").html(response);
							}
			});
		}else {

		}
}

function EliminarAspirante(num){
	if(confirm('¿Desea ELIMINAR al aspirante?')){
			var parametros={
							"id": num
			}
			$.ajax({
							data: parametros,
							url:  '../php/Empleados/Eliminar.php',
							type: 'post',
							beforeSend: function(){
								$("#Ventana").html("Procesando, espere por favor...");
							},
							success: function(response){
								$("#Ventana").html(response);
							}
			});
		}else {

		}
}
