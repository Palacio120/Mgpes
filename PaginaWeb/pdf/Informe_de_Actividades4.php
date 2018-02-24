<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    echo "<script> window.location= '../index.Php'</script>";
  }
  ob_start();
  error_reporting(E_ALL & ~E_NOTICE);
  ini_set('display_errors', 0);
  ini_set('log_errors', 1);
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
			
			$id_actividades=$_SESSION["Cuarto_informe"];
			$nombre=$_SESSION["nombre"];

			?>
		<div class="head">
	      <img src="../image/logo_udg-gris2.png"  id="img">
	      <div class="contenedor">
	        <h1 style="font-size:20px;">MAESTRÍA EN GESTIÓN Y POLÍTICAS DE LA EDUCACIÓN SUPERIOR</h1>
	        <h3 style="font-size: 14px;">INFORME DE ACTIVIDADES</h3>
	      </div>
		</div>
		<div class='semestre'  style="text-align: right; margin-right:10px;">
			<p>Semestre: Cuarto Semestre</p>
			<p>*Calendario escolar: <?php $fecha=date('M'); if ($fecha<06) {
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
					<td colspan="3"><?php echo	$_SESSION["TemaTesis"];?></td>
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
					<td style="width: 50%; text-align: center;">
						<?php   
							include_once('../php/conf_tab.php');
							$DB=new ConfigDB;
							$conn=$DB->Mysql();


							$SQL=$DB->CONSULTA("SELECT * FROM `mgps`.`materias_cursadas` where Id_Materias=(SELECT Id_Materias From materias_semestres where Id_actividades = '$id_actividades' );");
							 
							 while ($rs= $DB->Obtener_filas($SQL)) {
			                    echo $rs["Nombre_Curso"]."<br>";
			               
			                 }
					 	?>
					 </td>
				</tr>
				<tr>
					<th style=" width:50%;">2.	Proyecto de tesis</th>
					<td style="width: 50%; text-align: center;"> 
						<?php 
							echo $_SESSION["TemaTesis"];
						?>
							
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">3.	Producción académica</th>
					<td style="width: 50%; text-align: center;">
						<?php
							include_once('../php/conf_tab.php');
							$DB=new ConfigDB;
							$conn=$DB->Mysql();
							$Id_Act =$_SESSION["Cuarto_informe"];


							$SQL=$DB->CONSULTA("SELECT * FROM `mgps`.`produccionAlumnos` where IdActividades='$Id_Act'");
							 
							 while ($rs= $DB->Obtener_filas($SQL)) {
			                    echo $rs["Titulo"].", ".$rs["TipoDeProduccion"].". "."<br>";
			                 }
						?>		
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">4.	Actividades extracurriculares</th>
					<td style="width: 50%; text-align: center;">
						<?php
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
		                    $DB->Mysql();
		                    $Id_Act =$_SESSION["Cuarto_informe"];

		                     $Consulta=$DB->CONSULTA("SELECT * FROM actividades_extracurriculares  where  Id_Act = '$Id_Act'");
		                     while ($rs= $DB->Obtener_filas($Consulta)) {
		                        echo $rs["Tipo_Actividad"].", ".$rs["Nombre_DelProfesor"].", ".$rs["Institucion_Organizadora"].", ".$rs["Pais"].", ".$rs["Ciudad"].", ".$rs["Ambito"].", ".$rs["Continente"].", ".$rs["Fecha_Inicio"].", ".$rs["Fecha_Termino"].". "."<br>" ;
		                     }
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">5.	Gestión de apoyo externo para la investigación</th>
					<td style="width: 50%; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$codigo=$_SESSION["Cuarto_informe"];
                         	

                          	$Consulta=$DB->CONSULTA("SELECT * FROM gestionapoyoinv  where  Id_Actividades = '$codigo'");
                          	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["Descripccion"]."<br>";
                          	}
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">6.	Asistencia a eventos académicos como ponente</th>
					<td style="width: 50%; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$codigo=$_SESSION["Cuarto_informe"];

                          	$Consulta=$DB->CONSULTA("SELECT * FROM `mgps`.`congresos_como_ponente` WHERE id_Actividades='$codigo';");
                          	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["NombreCongreso"].", ".$rs["Titulo_del_Trabajo"].", ".$rs["TipoDeParticipaciion"].", ".$rs["Pais"].", ".$rs["Fecha_inicio"].", ".$rs["Fecha_Termino"]."."."<br>";
                          	} 
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">7.	Asesoría especializada</th>
					<td style="width: 50%; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$Id_Act =$_SESSION["Cuarto_informe"];                         	

                          	$Consulta=$DB->CONSULTA("SELECT * FROM asesoria_especializada  where  Id_Act = '$Id_Act'");
                          	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["Fecha"].", ".$rs["Titulo_de_Tesis"].", ".$rs["Activiadades_realiadas"].", ". $rs["SiguienteAsesoria"]."."."<br>";
                          	} 
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">8.	Necesidades tutoriales</th>
					<td style="width: 50%; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$Id_Act =$_SESSION["Cuarto_informe"];                         	

                          	$Consulta=$DB->CONSULTA("SELECT * FROM reporte_asesorias  where  Id_act = '$Id_Act'");
                          	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["Fecha"].", ".$rs["Titulo_de_Tesis"].", ".$rs["Activiadades_realiadas"].", ". $rs["SiguienteAsesoria"]."."."<br>";
                          	}
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;">9.	Movilidad académica</th>
					<td style="width: 50%; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$codigo=$_SESSION["Cuarto_informe"];                         	

                          	$Consulta=$DB->CONSULTA("SELECT * FROM movilidadestudiantes  where  Id_act = '$codigo'");
                           	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["Tipo_Movilidad"].", ".$rs["Ambito"].", ".$rs["Pais"].", ". $rs["Institucion"].", ".$rs["Objetivo"].", ".$rs["Fecha_Inicio"].", ".$rs["Facha_Termino"].", ".$rs["Institucion_Apoyo"]."."."<br>";
                            }
						?>
					</td>
				</tr>
				<tr>
					<th style=" width:50%;border-bottom:none;">10.	Vinculación académica</th>
					<td style="width: 50%; border-bottom:none; text-align: center;">
						<?php 
							include_once('../php/conf_tab.php');
							$DB= new ConfigDB();
                         	$DB->Mysql();
                         	$codigo=$_SESSION["Cuarto_informe"];

                          	$Consulta=$DB->CONSULTA("SELECT * FROM vinculaciones  where  Id_Actividades = '$codigo'");
                          	while ($rs= $DB->Obtener_filas($Consulta)) {
                             	echo $rs["Institucion"].", ".$rs["Ambito"].", ".$rs["ProductoObtenido"].", ". $rs["Sector"].", ".$rs["Mecanismo"].", ".$rs["TipoVinculacion"].", ".$rs["Fecha_Inicio"].", ".$rs["Fecha_Final"]."."."<br>";;
                          	}
						?>
					</td>
				</tr>
			</table>
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
		<?php 

			include_once('../php/conf_tab.php');
			$DB=new ConfigDB;
			$conn=$DB->Mysql();


			$SQL=$DB->CONSULTA("SELECT Id_Materias From materias_semestres where Id_actividades = '$id_actividades';");
			 
			 while ($rs= $DB->Obtener_filas($SQL)) {
                $id=$rs['Id_Materias'];
                $NOMBRE=$rs['NombreArchivo'];
                $enlace=$rs['kardex'];           		
             }
           	 header("Content-type: application/pdf ");
           	 readfile($NOMBRE);
		 ?>

		
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
