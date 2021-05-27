<?php
require_once '../vendor/autoload.php';
include '../conexion.php';
date_default_timezone_set('America/Santo_Domingo');
session_start();
$id = $_SESSION['id'];
$code = $_GET['code'];
$count = 1;
use \PhpOffice\PhpWord\TemplateProcessor;

$busqueda = mysqli_query($link,"SELECT * FROM configuracion");
$plantilla = mysqli_fetch_array($busqueda);
$idPlantilla = $plantilla['plantilla_solicitud1'];
$busquedaarchivo = mysqli_query($link,"SELECT * FROM plantilla WHERE id_plantilla = $idPlantilla");
$archivo = mysqli_fetch_array($busquedaarchivo);

$plantillaGenerador = new TemplateProcessor('../plantillas/'.$archivo['nombre_plantilla']);


if($Busqueda = mysqli_query($link,"SELECT *
FROM registro
INNER JOIN solicitud
ON registro.id_solicitud = solicitud.id_solicitud
RIGHT JOIN grupos
ON grupos.id_grupo = solicitud.id_grupo
RIGHT JOIN dirigido
ON  dirigido.id_dirigido = solicitud.id_dirigido
RIGHT JOIN usuarios
ON  usuarios.id_usuario = solicitud.id_usuario
WHERE estatus_generado = 'SI' AND solicitud.num_solicitud_2 = $code")){
if(mysqli_num_rows($Busqueda)>0){
while($row = mysqli_fetch_array($Busqueda)){	
	$plantillaGenerador->setValue('num_solicitud',$row['id_solicitud']);
	$plantillaGenerador->setValue('dirigido',$row['texto_dirigido']);
	$plantillaGenerador->setValue('usuario',$row['usuario']);
	$plantillaGenerador->setValue('grupo',$row['grupo']);
	$plantillaGenerador->setValue('prioridad',$row['prioridad']);
	$plantillaGenerador->setValue('fecha',$row['fecha']);
	$plantillaGenerador->setValue('hora',$row['hora_creacion']);
	//PLANTILLA	
	$telefono = array();
	array_push($telefono,$row['telefono']);
	$nombre = array();
	array_push($nombre,$row['nombre']);
	$empresa = array();
	array_push($empresa, $row['empresa']);
	$paises = array();
	array_push($paises, $row['pais']);
	}
	$telefono_separado = implode(",",$telefono);
	$nombre_separado = implode(",",$nombre);
	$paises_separado = implode(",",$paises);
	$empresa_separado = implode(",", $empresa);
	//for ($i=0; $i < count($telefono); $i++) { 
		$plantillaGenerador->setValue('tabla_telefono', $telefono_separado);	
		$plantillaGenerador->setValue('tabla_nombre',$nombre_separado);	
		$plantillaGenerador->setValue('tabla_empresa',$empresa_separado);	
		$plantillaGenerador->setValue('tabla_nacionalidad',$paises_separado);
	//}						
}
$plantillaGenerador->saveAs('../word/helloWorld.docx');
header('Content-Disposition: attachment; filename=helloWorld.docx; charset=iso-8859-1');
echo file_get_contents('../word/helloWorld.docx');
}
/*

<?php
require_once __DIR__.'/vendor/autoload.php';
//require_once __DIR__.'/vendor/phpoffice/phpword/bootstrap.php';

// Creating the new document...
//$phpWord = new \PhpOffice\PhpWord\PhpWord();
use \PhpOffice\PhpWord\TemplateProcessor;

$plantilla = new TemplateProcessor('word/plantilla.docx');

$nombre = 'Demo';
$direccion = 'XXX';
$fecha = date('Y-m-d');

$plantilla->setValue('dirigido',$nombre);
$plantilla->setValue('grupo',$direccion);
$plantilla->setValue('prioridad',$direccion);
$plantilla->setValue('tiempo',$fecha);
$plantilla->setValue('detalles',$fecha);
$plantilla->setValue('observaciones',$fecha);
$plantilla->setValue('tabla',$fecha);

$plantilla->saveAs('exports/helloWorld.docx');

header('Content-Disposition: attachment; filename=helloWorld.docx; charset=iso-8859-1');
echo file_get_contents('exports/helloWorld.docx');
// Saving the document as OOXML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('exports/helloWorld.docx');

?>*/


/*
echo $dirigido.' a----- ';
echo $vigencia.' b----- ';
echo $tiempo.' c----- ';
echo $grupo.' d----- ';
*/
//$campos = strlen($grupo) * strlen($dirigido) * strlen($solicitud) * strlen($prioridad)  * strlen($detalle)  * strlen($tiempo);
//if($campos == true){
	//if($dirigido == -1 || $vigencia == -1 || $tiempo == -1){
	//	echo "<script languaje='javascript'>alert('Error en los campos Tiempo, Vigencia o Dirigido'); location.href = '../admin.php';</script>";
	//}
	//if($busqueda = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = $id AND estatus_generado = 'SI' AND id_solicitud = $code")){
		//if(mysqli_num_rows($busqueda)>0){
			//if($result = mysqli_query($link,"UPDATE registro SET estatus_generado='SI', id_solicitud ='$code', id_prioridad = '$prioridad', estatus_solicitud = '$solicitud', estado_general = 'ACTIVO' WHERE id_usuario = '$id' AND estatus_generado = 'NO'")){
				//if($resultInsert = mysqli_query($link,"INSERT INTO solicitud VALUES ('$code', '$datebd','$id','$grupo','','$dirigido','$tiempo','$detalle','','','','','','','','','','','$nota')")){ 
					//echo "<script languaje='javascript'>alert('Registro Generado');</script>";
     /*               
                    if($BusquedaHeader = mysqli_query($link,"SELECT *
                    FROM registro
                    INNER JOIN solicitud
                    ON registro.id_solicitud = solicitud.id_solicitud
                    RIGHT JOIN grupos
                    ON grupos.id_grupo = solicitud.id_grupo
                    RIGHT JOIN dirigido
                    ON  dirigido.id_dirigido = solicitud.id_dirigido
                    RIGHT JOIN usuarios
                    ON  usuarios.id_usuario = solicitud.id_usuario
                    WHERE estatus_generado = 'SI' AND solicitud.id_solicitud = $code")){
								if(mysqli_num_rows($BusquedaHeader)>0){
									while($row = mysqli_fetch_array($BusquedaHeader)){
										$usuario = $row['usuario'];
										$date = $row['fecha'];
                                        $solicitudID = $row['id_solicitud'];
                                        $plantilla = '
                                        <body>
                                        <h1>Solicitud 1 - A</h1>
                                            <header class="clearfix">
                                              <div id="project">
                                              <div><span class="tittle">NUMERO:</span> <span>'.$solicitudID.'</span></div>
                                              <div><span class="tittle">A LA: </span> <span>'.$row['texto_dirigido'].'</span></div>
                                              <div><span class="tittle">DE LA: </span> <span>'.$row['usuario'].'</span></div>
                                              <div><span class="tittle">GRUPO: </span>  <span>'.$row['grupo'].'</span></div>
                                              <div><span class="tittle">FECHA: </span> <span>'.$row['fecha'].'</span></div>
						                      <div><span class="tittle">HORA: </span> <span>'.$row['hora_creacion'].' '.$row['formato_tiempo'].'</span></div>
                                             <div><span class="tittle">PRIORIDAD: </span> <span>'.$row['prioridad'].'</span></div>
                                             '; 
                                    }
                                }
                            }
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
                                WHERE registro.estatus_generado = 'SI' AND solicitud.id_solicitud = $code AND registro.tipo_solicitud = 'SA' AND registro.telefono != ''")){
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
                                    }
                                }
                                $plantilla .='</tbody>
                          </table>';
                          
                          if($BusquedaFooter = mysqli_query($link,"SELECT *
                          FROM registro
                          INNER JOIN solicitud
                          ON registro.id_solicitud = solicitud.id_solicitud
                          RIGHT JOIN tiempo
                          ON tiempo.id_tiempo = solicitud.id_tiempo
                          RIGHT JOIN dirigido
                          ON  dirigido.id_dirigido = solicitud.id_dirigido
                          RIGHT JOIN usuarios
                          ON  usuarios.id_usuario = solicitud.id_usuario
                          WHERE estatus_generado = 'SI' AND solicitud.id_solicitud = $code")){
                                 while($row = mysqli_fetch_array($BusquedaFooter)){
                                    $plantilla .='<div id="notices">
                                        <div class="tittle">Detalles Especificos:</div>
                                        <div class="notice">'.$row['detalle'].'</div>
                                    </div>
                                    <div id="notices">
                                        <div class="tittle">Comentarios:</div>
                                        <div class="notice">'.$row['nota'].'</div>
                                    </div>
                                    <div id="notices">
                                    <div class="tittle">Tiempo:</div>
                                    <div class="notice">'.$row['texto_tiempo'].'</div>
									</div>
                                    <div id="notices">';
                                    /*
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
                            }*/
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
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion1'].' - '.$row['fecha_usuario1'].'</div>';
										}
										if($row['aprobacion2'] == '' && $row['fecha_usuario2'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 2: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion2'].' - '.$row['fecha_usuario2'].'</div>';
										}
										if($row['aprobacion3'] == '' && $row['fecha_usuario3'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 3: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion3'].' - '.$row['fecha_usuario3'].'</div>';
										}
									}
								}
							}
						  
                            $plantilla .= '</div>
                            </main>
                          </body>
                        ';*/
                    /*$plantilla = '
					<body>
						<header class="clearfix">
						  <h1>Solicitud 1 - A</h1>
						  <div id="project">
						  <div><span class="tittle">NUMERO: </span> <span>'.$code.'</span></div>
						  <div><span class="tittle">A LA: </span> <span>'.$dirigido.'</span></div>
						  <div><span class="tittle">DE LA: </span> <span>'.$usuario.'</span></div>
						 '; 
							if($resultgrupo =  mysqli_query($link,"SELECT * FROM grupos WHERE id_grupo = '$grupo'")){
								while($rowGrupo = mysqli_fetch_array($resultgrupo)){
									$plantilla .= '<div><span class="tittle">GRUPO: </span>  <span>'.$rowGrupo['grupo'].'</span></div>';
								}
							}
						  $plantilla .= '<div><span class="tittle">FECHA: </span> <span>'.$date.'</span></div>
						  <div><span class="tittle">HORA: </span> <span>'.$hora.'</span></div>
						  <div><span class="tittle">PRIORIDAD: </span> <span>'.$prioridad.'</span></div>';*/
						  /*if($BusquedaSolicitud = mysqli_query($link,"SELECT *
							FROM registro
							INNER JOIN solicitud
							ON registro.id_solicitud = solicitud.id_solicitud
							WHERE estatus_generado = 'SI' AND registro.id_usuario = $id AND registro.id_solicitud = $code")){
								if(mysqli_num_rows($BusquedaSolicitud)>0){
									while($row = mysqli_fetch_array($BusquedaSolicitud)){
									$plantilla .='
									<div><span class="tittle">Estatus Solicitd: </span><span>'.$row['estatus_solicitud'].'</span></div>
									<div><span class="tittle">Codigo de Aprobacion: </span><span> ---- </span></div>';
									}
								}
							}*/
					/*$plantilla .='</div>
						  
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
                            <tbody>';*/
                            /*
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
													<td>'.$row['nacionalidad'].'</td>
									 			</tr>
											';
											$count++;
									}
								}else {
									echo "<script languaje='javascript'>alert('NO HAY REGISTROS'); location.href = '../admin.php';</script>";
								}
                            }*/
                            /*
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
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion1'].' - '.$row['fecha_usuario1'].'</div>';
										}
										if($row['aprobacion2'] == '' && $row['fecha_usuario2'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 2: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion2'].' - '.$row['fecha_usuario2'].'</div>';
										}
										if($row['aprobacion3'] == '' && $row['fecha_usuario3'] == '0000-00-00'){
											$plantilla .= '<div class="tittle">Aprobacion 3: ---- </div>';
										}else{
											$plantilla .= '<div class="tittle">Aprobacion 1:'.$row['aprobacion3'].' - '.$row['fecha_usuario3'].'</div>';
										}
									}
								}
							}
						  
						  $plantilla .= '</div>
						</main>
					  </body>
					';*/
					//$mpdf = new \Mpdf\Mpdf();
					//$css = file_get_contents('../css/pdf.css');
					//$export = substr($usuario, 0, 2);
					//$mpdf->SetTitle(strtoupper($export).'_'.$code.'_S5_'.$date);
					//$mpdf->writeHTML($css, 1);
					//$mpdf->WriteHTML($plantilla);
					//$mpdf->Output(strtoupper($export).'_'.$code.'_S5_'.$date.'.pdf','I');
				//}
			//}
		//}else{
		//	echo $code." ----";
		//	echo $id." ----";
		//}
	//}else{
	//	echo "<script languaje='javascript'>alert('Error base de datos'); location.href = '../admin.php';</script>";
	//}
//}else{
	//echo "<script languaje='javascript'>alert('Complete los campos'); location.href = '../admin.php';</script>";
//}
?>