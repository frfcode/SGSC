<?php
require_once '../vendor/autoload.php';
include '../conexion.php';
date_default_timezone_set('America/Santo_Domingo');
session_start();
$id = $_SESSION['id'];
$code = $_GET['solicitud'];
$count = 1;
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
                                WHERE estatus_generado = 'SI' AND solicitud.id_solicitud = $code")){
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
								break;
                                }
                            }
                            
						  
                            $plantilla .= '</div>
                            </main>
                          </body>
                        ';
					$mpdf = new \Mpdf\Mpdf();
					$css = file_get_contents('../css/pdf.css');
					$export = substr($usuario, 0, 2);
					$mpdf->SetTitle(strtoupper($export).'_'.$code.'_S5_'.$date);
					$mpdf->writeHTML($css, 1);
					$mpdf->WriteHTML($plantilla);
					$mpdf->Output(strtoupper($export).'_'.$code.'_S5_'.$date.'.pdf','I');
?>