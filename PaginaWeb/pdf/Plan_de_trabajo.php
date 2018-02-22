<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }
  ob_start();
 ?>


 <page>
 	<page_header>
 		<style>
      *{
        font-style: normal;

      }
 			h1, h3{
 				color: gray;
 				font-style: italic;
        font-weight: normal;
 			}
 			.head{
				display: inline-block;
        position: fixed;
        width: 100%;
 			}

      td, th{
 				border: solid 1px;
        border-left: none;
        border-top: none;
        border-collapse:collapse;
 			}
      table{
        background-color: #fff;
      }
			.datos_generales{
				margin-top: 10px;
        border: 1px solid;
        text-align: center;
			}
			.actividades{
        border: 1px solid;
        text-align: center;
			}
      .actividades th, .actividades td{
        text-align: left;
        width: 100%;
      }

      .contenedor{
         display: inline;
         width: 100%;
         z-index: 20;
         text-align: center;
         margin-left: -52px;
      }
      .Firmas{
        width:100%;
        margin-top: 50px;
      }
      #firma{
        display: inline;
        position: relative;
        height: auto;
        width: 25%;
        text-align: center;
      }
      #img{
        width: 50px;
        height: 70px;
        float: left;

      }
 		</style>
 	</page_header>

		<?php
			include('../php/conf_tab.php');
			$DB=new ConfigDB;
			$conn=$DB->Mysql();
			$id=$_POST["Id_Seleccionado"];
			$nombre=$_SESSION["nombre"];


			$consulta=$DB->CONSULTA("SELECT * from Plan_de_trabajo where id='$id'");

			while ($rs=$DB->obtener_filas($consulta)) {
		 ?>

		<div class="head">
	      <img src="../image/logo_udg-gris.png"  id="img">
	      <div class="contenedor">
	        <h1 style="font-size:20px;">MAESTRÍA EN GESTIÓN Y POLÍTICAS DE LA EDUCACIÓN SUPERIOR</h1>
	        <h3 style="font-size: 14px;">PLAN DE TRABAJO</h3>
	      </div>
		</div>
		<div class='semestre'  style="text-align: right; margin-right:10px;">
			<p>Semestre: <?php echo $rs['Semestre']; ?></p>
			<p>Calendario escolar: <?php $fecha=date('M'); if ($fecha<06) {
			  echo date('Y')."B";
			}else {
			  			  echo date('Y')."A";
			} ?> </p>
		</div>
		<div class="datos_generales" style="background-color: #DFDBDA;">
			<label style="text-align: center; border:solid, 1px;" >Datos Generales</label>
			<table style="width: 100%; " cellspacing="0">
				<tr>
					<th style="width: 20%; border-top: 1px solid;">Nombre de (la) estudiante</th>
					<td style="width: 30%; border-top: 1px solid;"><?php echo $nombre; ?></td>
					<th style="width: 20%; border-top: 1px solid;">Codigo</th>
					<td style="width: 30%; border-top: 1px solid;"><?php echo $_SESSION["CodigoSIIAU"]; ?></td>
				</tr>
				<tr>
					<th>Título de la tesis</th>
					<td colspan="3"><?php echo	$_SESSION["Tema_Tesis"];?></td>
				</tr>
				<tr>
					<th >Nombre del(la) director(a) de tesis</th>
					<td colspan="3"> <?php 	echo $_SESSION["Director"]; ?></td>
				</tr>
			</table>
		</div>
		<div class="Actividades" style="background-color: #DFDBDA; margin-top:-2px;" >
			<label style="width:100%;border-top: 1px solid;";>Actividades a realizar</label>
			<table style="width: 100%; border-top: 1px solid;" cellspacing="0">
				<tr>
					<th style="width:50%;">1.	 Materias curriculares</th>
					<td style="width: 50%;"><p><?php echo $rs['Materias'];  ?></p></td>
				</tr>
				<tr>
					<th style=" width:50%;">2.	Proyecto de tesis</th>
					<td style="width: 50%;"> <?php echo $rs['Proyecto_tesis']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">3.	Producción académica</th>
					<td style="width: 50%;"><?php echo $rs['Produccion']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">4.	Actividades extracurriculares</th>
					<td style="width: 50%;"><?php echo $rs['extracurriculares']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">5.	Gestión de apoyo externo para la investigación</th>
					<td style="width: 50%;"><?php echo $rs['Gestión_de_apoyo']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">6.	Asistencia a eventos académicos como ponente</th>
					<td style="width: 50%;"><?php echo $rs['Asistencia_eventos']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">7.	Asesoría especializada</th>
					<td style="width: 50%;"><?php echo $rs['Asesoria_esp']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">8.	Necesidades tutoriales</th>
					<td style="width: 50%;"><?php echo $rs['Necesidades_tut']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;">9.	Movilidad académica</th>
					<td style="width: 50%;"><?php echo $rs['Movilidad']; ?></td>
				</tr>
				<tr>
					<th style=" width:50%;border-bottom:none;">10.	Vinculación académica</th>
					<td style="width: 50%; border-bottom:none;"><?php echo $rs['Vinculacion']; ?></td>
				</tr>
			</table>
			<?php } ?>
		</div>
		<div class="fecha" style="display: inline;">
			<p style="text-align: center;" >Atentamente</p>
			<p style="text-align: center;">Zapopan, Jalisco a <?php echo date('d'); ?> de <?php setlocale(LC_TIME, "es_MX.UTF-8"); echo date('M'); ?> de <?php echo date('Y'); ?></p>
		      <div class="Firmas">
		  			<div id="firma" style=" margin-left:220px">
		  				<p>__________________________________</p>
		  				<p>Nombre y firma del (la) estudiante</p>
		  			</div>
		  			<div id="firma" style="margin-left:100px;">
		  				<p>__________________________________</p>
		  				<p>Nombre y firma del (la) director(a) de tesis</p>
		  			</div>
		      </div>
		</div>
 </page>
 
<?php
	$content= ob_get_clean();
	require_once('vendor/autoload.php');

	use Spipu\Html2Pdf\Html2Pdf;

	$pdf = new Html2Pdf('L', 'carta', 'fr', 'UTF-8');
  $css='<style>'.file_get_contents('../Styles/REPORTES.css').'</style>';
	$pdf->writeHTML($css.$content, false);
  $pdf->output('Plan_de_trabajo.pdf');

  $pdf->output('Plan_de_trabajo.pdf' /*'D'*/);
	$pdf->$pdf->includesJS('print(TRUE)')

 ?>
