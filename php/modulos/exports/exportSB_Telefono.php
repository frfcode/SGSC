<?php
require_once '../vendor/autoload.php';
include '../conexion.php';
date_default_timezone_set('America/Santo_Domingo');
session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['User'];
$code = $_GET['code'];
$date = date("d-m-Y");
$datebd = date("Y-m-d");
$dirigido = $_GET['dirigido'];
$solicitud = 'NUEVO';
$prioridad = $_GET['prioridad'];
$detalle = $_GET['detalle'];
$tiempo = $_GET['tiempo'];
$nota = $_GET['nota'];
$hora = date("h:i:s A"); 
$count = 1;
$op = $_GET['opcion'];

// El resultados sera 3 dias
/*
echo $dirigido.' a----- ';
echo $vigencia.' b----- ';
echo $tiempo.' c----- ';
echo $grupo.' d----- ';
*/
$campos = strlen($dirigido) * strlen($solicitud) * strlen($prioridad)  * strlen($detalle)  * strlen($tiempo);
if($campos == true){
	if($dirigido == -1 || $tiempo == -1){
		echo "<script languaje='javascript'>alert('Error en los campos Tiempo, Vigencia o Dirigido'); location.href = '../admin.php';</script>";
	}
	$sql = "SELECT * FROM registro 
	INNER JOIN solicitud 
	ON registro.id_solicitud = solicitud.id_solicitud  
	WHERE registro.id_usuario = $id AND registro.estatus_generado = 'SI' AND solicitud.id_solicitud = $code AND tipo_opcion = $op";
	if($busqueda = mysqli_query($link,$sql)){
		$row = mysqli_fetch_array($busqueda); 
			$plantilla = '
			<body>

				  <h1 style="text-align:center;">Solicitud 1 - B</h1>
				  <div id="project">
				  <div><span class="tittle"><b>NUMERO:</b>  </span> <span>'.$code.'</span></div>
				  <div><span class="tittle"><b>A LA:</b>  </span> <span>'.$dirigido.'</span></div>
				  <div><span class="tittle"><b>DE LA:</b>  </span> <span>'.$usuario.'</span></div>
				 '; 
				  $plantilla .= '<div><span class="tittle"><b>FECHA:</b>  </span> <span>'.$row['fecha'].'</span></div>
				  <div><span class="tittle"><b>HORA: </b> </span> <span>'.$row['hora_creacion'].'</span></div>
				  <div><span class="tittle"><b>PRIORIDAD:</b>  </span> <span>'.$prioridad.'</span></div>
				  <div><span class="tittle"><b>OPCION:</b>  </span> <span>'.$op.'</span></div>';

			$plantilla .='</div>
				<main>
				  <table style="width:100%">
					<thead>
					  <tr>
						<th class="service">#</th>
						<th class="desc">Telefono</th>
					  </tr>
					</thead>
					<tbody>';
					if($Registros = mysqli_query($link,"SELECT *
					FROM registro
					INNER JOIN solicitud
					ON registro.id_solicitud = solicitud.id_solicitud
					WHERE estatus_generado = 'SI' AND registro.id_usuario = $id AND registro.id_solicitud = $code")){
						if(mysqli_num_rows($Registros)>0){
							while($row = mysqli_fetch_array($Registros)){
									$uno = substr($row["telefono"],0,3);
									$dos = substr($row["telefono"],3,3);
									$tres = substr($row["telefono"],6,9);
									$telefono = '('.$uno.')-'.$dos.'-'.$tres; 
									$plantilla .= '
										<tr style="text-align:center;">
											<td>'.$count.'</td>
											<td>'.$telefono.'</td>
							 			</tr>
									';
									$count++;
							}
						}else {
							echo "<script languaje='javascript'>alert('NO HAY REGISTROS'); location.href = '../admin.php';</script>";
						}
					}
			$plantilla .='</tbody>
			  </table>
			  <div id="notices">
				<div class="tittle"><b>Detalles Especificos:</b></div>
				<div class="notice">'.$detalle.'</div>
			  </div>
			  <div id="notices">
				  <div class="tittle"><b>Comentarios:</b></div>
				  <div class="notice">'.$nota.'</div>
			  </div>
			  <div id="notices">
			  <div class="tittle"><b>Tiempo:</b></div>
			  <div class="notice">'.$tiempo.'</div>
			  </div>';
			
			
			  $plantilla .= '</div>
			</main>
		</body>
			';
	}else{
		echo "<script languaje='javascript'>alert('Error base de datos'); location.href = '../admin.php';</script>";
	}
}else{
	echo "<script languaje='javascript'>alert('Complete los campos'); location.href = '../admin.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tiny.cloud/1/wke2zqjp4bdfs0w9f396go9fkuwuar0ol57qy47dnnrvvnkz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ 
      selector:'textarea',
      height: 600,
      plugins: 'print preview powerpaste casechange importcss searchreplace autolink save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap mentions quickbars linkchecker emoticons advtable',
      menubar: 'file edit view insert format tools table tc help',
       });</script>
</head>
<style>
</style>
<body>
 
  <textarea id="targetTextArea">
    <?php
           echo $plantilla;             
    ?>
</textarea>
</body>
</html>