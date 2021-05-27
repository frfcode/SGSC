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
$empresa = $_GET['empresa'];
$nota = $_GET['nota'];
$hora = date("h:i:s A"); 
$count = 1;
$vali = '';
$valiPais = array();
$valiEmpresa = array();
$valiMeses = array();
$campos = strlen($dirigido) * strlen($solicitud) * strlen($prioridad)  * strlen($detalle);
if($campos == true){
	if($dirigido == -1 ){
		echo "<script languaje='javascript'>alert('Error en los campos Tiempo, Vigencia o Dirigido'); location.href = '../admin.php';</script>";
	}
	if($busqueda = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = $id AND estatus_generado = 'SI' AND id_solicitud = $code")){ 
					$plantilla = '
					
						
						  <h1 style="text-align: center;">Solicitud 1 - B</h1>
						  <div id="project">
						  <div><span class="tittle"><b>NUMERO:</b> </span> <span>'.$code.'</span></div>
						  <div><span class="tittle"><b>A LA: </b></span> <span>'.$dirigido.'</span></div>
						  <div><span class="tittle"><b>DE LA:</b> </span> <span>'.$usuario.'</span></div>
						 '; 
						  $plantilla .= '<div><span class="tittle"><b>FECHA:</b> </span> <span>'.$date.'</span></div>
						  <div><span class="tittle"><b>HORA: </b></span> <span>'.$hora.'</span></div>
						  <div><span class="tittle"><b>PRIORIDAD: </b></span> <span>'.$prioridad.'</span></div>';
						 
						  $plantilla .= '
<p>En los meses ';

$sql = "SELECT *
FROM registro
WHERE estatus_generado = 'SI' AND id_usuario = $id AND id_solicitud = $code AND tipo_solicitud = 'SB' AND empresa = '$empresa'";
$BusquedaMeses = mysqli_query($link,$sql);
$BusquedaPais = mysqli_query($link,$sql);
$BusquedaEmpresa = mysqli_query($link,$sql);
if(mysqli_num_rows($BusquedaMeses)>0){
    while($row = mysqli_fetch_array($BusquedaMeses)){
		array_push($valiMeses, $row['meses']);
	}
	$resultMeses = array_unique($valiMeses);
	for ($i=0; $i < count($resultMeses) ; $i++) {
		if($i == count($resultMeses) - 1){
			$plantilla .= '<b>'.$resultMeses[$i].'</b> ';
		}else{
			$plantilla .= '<b>'.$resultMeses[$i].'</b>, ';
		}
	}
    $plantilla .= ' los paises ';
    while($row = mysqli_fetch_array($BusquedaPais)){
		array_push($valiPais, $row['pais']);
	}
	$resultPais = array_unique($valiPais);
	for ($i=0; $i < count($resultPais) ; $i++) {
		if($i == count($resultPais) - 1){
			$plantilla .= '<b>'.$resultPais[$i+1].'</b> ';
		}else{
			$plantilla .= '<b>'.$resultPais[$i].'</b>, ';
		}
	}
    $plantilla .= ' pertenecientes a la compañía telefónica ';
    while($row = mysqli_fetch_array($BusquedaEmpresa)){
		array_push($valiEmpresa, $row['empresa']);
	}
	$resultEmpresa = array_unique($valiEmpresa);
	for ($i=0; $i < count($resultEmpresa) ; $i++) {
		if($i == count($resultEmpresa) - 1){
			$plantilla .= '<b>'. $resultEmpresa[$i].'</b>. ';
		}else{
			$plantilla .= '<b>'.$resultEmpresa[$i].'</b>, ';
		}
	}
}
/*
$plantilla .= '</p>'; 
					$plantilla .='</div>						
						<main>
						  <table style="width:100%">
							<thead>
							  <tr>
								<th class="service">#</th>
								<th>Compañia Telefonica</th>
								<th>Paises</th>
								<th>Meses</th>
							  </tr>
							</thead>
							<tbody>';
							if($Registros = mysqli_query($link,"SELECT *
							FROM registro
							WHERE estatus_generado = 'SI' AND id_usuario = $id AND id_solicitud = $code AND tipo_solicitud = 'SB' AND empresa = '$empresa' ")){
								if(mysqli_num_rows($Registros)>0){
									while($row = mysqli_fetch_array($Registros)){ 
                                       
											$plantilla .= '
												<tr style="text-align:center;">
													<td>'.$count.'</td>
													<td>'.$row['empresa'].'</td>
													<td>'.$row['pais'].'</td>
													<td>'.$row['meses'].'</td>
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
						  </div>';
						  
						  $plantilla .= '</div>
						</main>';*/
	}else{
		echo "<script languaje='javascript'>alert('Error base de datos'); location.href = '../admin.php';</script>";
	}
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