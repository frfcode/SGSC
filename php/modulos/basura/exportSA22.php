<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'conexion.php';
date_default_timezone_set('America/Santo_Domingo');
session_start();
$id = $_SESSION['id'];
$usuario = $_SESSION['User'];
$code = $_GET['id'];
$date = date("d-m-Y");
$datebd = date("Y-m-d");
/*
$grupo = $_GET['grupo'];
$dirigido = $_GET['dirigido'];
$solicitud = 'NUEVO';
$prioridad = $_GET['prioridad'];
$detalle = $_GET['detalle'];
$vigencia = $_GET['vigencia'];
$tiempo = $_GET['tiempo'];
$nota = $_GET['nota'];*/
$hora = date("h:i:s A"); 
$count = 1;


// El resultados sera 3 dias
/*
echo $dirigido.' a----- ';
echo $vigencia.' b----- ';
echo $tiempo.' c----- ';
echo $grupo.' d----- ';
*/
$campos = strlen($code);
//$campos = strlen($grupo) * strlen($dirigido) * strlen($solicitud) * strlen($prioridad)  * strlen($detalle)  * strlen($tiempo);
if($campos == true){
	/*if($dirigido == -1 || $vigencia == -1 || $tiempo == -1){
		echo "<script languaje='javascript'>alert('Error en los campos Tiempo, Vigencia o Dirigido'); location.href = '../admin.php';</script>";
	}*/
	if($busqueda = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = $id AND estatus_generado = 'SI' AND id_solicitud = $code")){
		//if(mysqli_num_rows($busqueda)>0){
			//if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', id_prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = '$id' AND estatus_generado = 'NO'")){
				//if($resultInsert = mysqli_query($link,"INSERT INTO solicitud VALUES ('$code', '$datebd','$id','$grupo','','$dirigido','$tiempo','$detalle','','','','','','','','','','','$nota')")){ 
					$plantilla = '
					<body>
						<header class="clearfix">
						  <h1>Solicitud 1 - A</h1>
						  <div id="project">
						  <div><span class="tittle">NUMERO:</span><span>'.$code.'</span></div>
						  <div><span class="tittle">A LA:</span> <span>'.$dirigido.'</span></div>
						  <div><span class="tittle">DE LA:</span> <span>'.$usuario.'</span></div>
                         '; 
                         /*
							if($resultgrupo =  mysqli_query($link,"SELECT * FROM grupos WHERE id_grupo = '$grupo'")){
								while($rowGrupo = mysqli_fetch_array($resultgrupo)){
									$plantilla .= '<div><span class="tittle">GRUPO: </span>  <span>'.$rowGrupo['grupo'].'</span></div>';
								}
							}*/
						  $plantilla .= '<div><span class="tittle">FECHA: </span> <span>'.$date.'</span></div>
						  <div><span class="tittle">HORA: </span> <span>'.$hora.'</span></div>
						  <div><span class="tittle">PRIORIDAD: </span> <span>'.$prioridad.'</span></div>';
						  /*
						  if($BusquedaSolicitud = mysqli_query($link,"SELECT *
							FROM registro
							INNER JOIN solicitud
							ON registro.id_solicitud = solicitud.id_solicitud
							WHERE estatus_generado = 'SI' AND registro.id_usuario = $id AND registro.id_solicitud = $code")){
								if(mysqli_num_rows($BusquedaSolicitud)>0){
									while($row = mysqli_fetch_array($BusquedaSolicitud)){
									$plantilla .='
									<div><span class="tittle">Estatus Solicitd: </span><span>'.$row['estatus_solicitud'].'</span></div>
									<div><span class="tittle">Codigo de Aprobacion: </span><span> ---- </span></div>';
									break;
									}
								}
							}*/
					$plantilla .='</div>
						  
						</header>
						<main>
						  <table>
							<thead>
							  <tr>
								<th class="service">#</th>
								<th class="desc">Telefono</th>
								<th>Nombre</th>
								<th>Compañia Telefonica</th>
								<th>Nacionalidad</th>
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
												<tr>
													<td>'.$count.'</td>
													<td>'.$telefono.'</td>
													<td>'.$row['nombre'].'</td>
													<td>'.$row['empresa'].'</td>
													<td>'.$row['pais'].'</td>
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
							<div class="tittle">Detalles Especificos:</div>
							<div class="notice">'.$detalle.'</div>
						  </div>
						  <div id="notices">
							  <div class="tittle">Comentarios:</div>
							  <div class="notice">'.$nota.'</div>
						  </div>
						  <div id="notices">
						  <div class="tittle">Tiempo:</div>
						  <div class="notice">'.$tiempo.'</div>
						  </div>';
						  /*
						  if($BusquedaAprobacion = mysqli_query($link,"SELECT *
						  FROM registro
						  INNER JOIN solicitud
						  ON registro.id_solicitud = solicitud.id_solicitud
						  WHERE estatus_generado = 'SI' AND registro.id_usuario = $id AND registro.id_solicitud = $code")){
							  	if(mysqli_num_rows($BusquedaAprobacion)>0){
									$plantilla .= '<div id="notices">';
									while($row = mysqli_fetch_array($BusquedaAprobacion)){
										if($row['fecha_usuario1'] == '0000-00-00' &&  $row['aprobacion1'] == ''){
											$plantilla .= '<div class="tittle">Aprobacion 1: ---- </div>';	
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 1: '.$row['aprobacion1'].' - '.$row['fecha_usuario1'].'</div>';
										}
										if($row['aprobacion2'] == '' && $row['fecha_usuario2'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 2: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 2: '.$row['aprobacion2'].' - '.$row['fecha_usuario2'].'</div>';
										}
										if($row['aprobacion3'] == '' && $row['fecha_usuario3'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 3: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 3: '.$row['aprobacion3'].' - '.$row['fecha_usuario3'].'</div>';
										}
									break;
									}
								}
							}</div>
							*/
						  $plantilla .= '</div>
						</main>
					  </body>
					';
					$mpdf = new \Mpdf\Mpdf();
					$css = file_get_contents('css/pdf.css');
					$export = substr($usuario, 0, 2);
					$mpdf->SetTitle(strtoupper($export).'_'.$code.'_'.$date);
					$mpdf->writeHTML($css, 1);
					$mpdf->WriteHTML($plantilla);
					$mpdf->Output(strtoupper($export).'_'.$code.'_'.$date.'.pdf','I');
				//}
			//}
		//}else{
		//	echo $code." ----";
		//	echo $id." ----";
		//}
	}else{
		echo "<script languaje='javascript'>alert('Error base de datos'); location.href = '../admin.php';</script>";
	}
}else{
	echo "<script languaje='javascript'>alert('Complete los campos'); location.href = '../admin.php';</script>";
}
?>