<?php 

include 'conexion.php';
session_start();
$id = $_SESSION['id'];
$vali = '';
$i = 1;
$date = date("d-m-Y");
$sql = "SELECT *
FROM registro
INNER JOIN solicitud
ON registro.id_solicitud = solicitud.id_solicitud
LEFT JOIN grupos
ON solicitud.id_grupo = grupos.id_grupo
LEFT JOIN usuarios
ON solicitud.id_usuario = usuarios.id_usuario WHERE registro.estatus_generado = 'SI' AND registro.estado_general = 'ACTIVO' AND solicitud.aprobacion_5 = '' AND  solicitud.aprobacion_1 = 'APROBADO' AND solicitud.aprobacion_2 = 'APROBADO' AND solicitud.aprobacion_3 = 'APROBADO' AND solicitud.aprobacion_4 = 'APROBADO' AND tipo_solicitud = 'SA'";
			if($Query = mysqli_query($link, $sql)){
                if(mysqli_num_rows($Query)>0){
                    echo'
                <form method="post" action="../php/modulos/test.php" target"_blank">
                <table class="table text-center">
                        <thead>
                            <tr>
                                <th># Solicitud 4</th>
                                <th># Solicitud 5</th>
                                <th>Fecha</th>
                                <th>Tipo Solicitud</th>
                                <th>Seleccionar</th>
                            </tr>
                        </thead>
                        <tbody>
                '; //s2- 1250	s3- 3047 s4- 523
                    while ($row = mysqli_fetch_array($Query)) {
                        if($vali != $row["id_solicitud"]){
                            echo '<tr>
                            <td>'.$row["num_solicitud_3"].'</td>
                            <td>'.$row["num_solicitud_4"].'</td>
                            <td><input readonly type="text"  class="text-center" id="fechasolicitud5" placeholder="'.$date.'"  value="'.$date.'" style="width: 120%;"></td>
                            <td><input readonly type="text"  class="text-center" id="tiposolicitud5" placeholder="'.$row["tipo_solicitud"].'"  value="'.$row["tipo_solicitud"].'" style="width:80%;"></td>
                            ';
                            echo '
                            <td><input type="checkbox" id="aprobacionsolicitud5" value="'.$row["id_solicitud"].'"></td>
                            </tr>';
                        $i++;  
                            $vali = $row["id_solicitud"];
                        }else{
                            $vali = $row["id_solicitud"];
                        } 
                    }   
                    echo ' 
                    </form></tbody>
                    </table>
                    <button type="submit" style="width: 100%;">COMPLETAR</button>';
                }else{
                    echo '
                    <h3> NO HAY SOLICITUDES POR APORBAR</h3>
                    ';
                }               
            }else{
                echo '<h3>Error de Base de Datos</h3>';
            }
            ?>