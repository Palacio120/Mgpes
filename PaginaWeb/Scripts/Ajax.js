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
