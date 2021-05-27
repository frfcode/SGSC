<?php 

include 'conexion.php';
session_start();
$id = $_SESSION['id'];
$vali = '';
$i = 0;
			if($Query = mysqli_query($link,"SELECT *
            FROM registro
            INNER JOIN solicitud
            ON registro.id_solicitud = solicitud.id_solicitud
            RIGHT JOIN grupos
            ON solicitud.id_grupo = grupos.id_grupo WHERE solicitud.id_usuario = '$id' AND registro.estatus_generado = 'SI' AND tipo_solicitud = 'SA'")){
                if(mysqli_num_rows($Query)>0){
                    echo'
                    <table class="table text-center">
                            <thead>
                                <tr>
                                    <th># Solicitud</th>
                                    <th>Tipo Solicitud</th>
                                    <th>Estatus Solicitud</th>
                                    <th>Aprobacion</th> 
                                    <th>Estado General</th>
                                    <th>Revisar</th>                                  
                                </tr>
                            </thead>
                            <tbody>
                    ';
                    while ($row = mysqli_fetch_array($Query)) {
                        
                            if($vali != $row["id_solicitud"]){
                                echo '<tr>
                            <td>'.$row["id_solicitud"].'</td>
                            <td>'.$row["tipo_solicitud"].'</td>
                            <td>'.$row["estado_general"].'</td>
                            ';
                            if($row["id_solicitud"] ){
                                $count = 1;
                            }
                            if($row["aprobacion_2"] != ''){
                                $count = $count + 1;   
                            }
                            if($row["aprobacion_3"] != ''){
                                $count = $count + 1;   
                            }
                            if($row["aprobacion_4"] != ''){
                                $count = $count + 1;   
                            }
                            if($row["aprobacion_5"] != ''){
                                $count = $count + 1;   
                            }
                            echo '<td>'.$count.' / 5</td>
                            <td>'.$row["estatus_solicitud"].'</td>';
                            if($row["aprobacion_5"] != ''){
                            echo '<td><a href="modulos/exports/reviewExportSA.php?solicitud='.$row["id_solicitud"].'" target="_blank" class="btn-block" style="text-decoration: none;">Completado - Revisar</a></td>';
                            }else{
                             echo '<td><a href="#" class="btn-block text-danger" style="text-decoration: none;">No Completado</a></td>';
                            } 
                            echo '</tr>';
                            $vali = $row["id_solicitud"];
                            }else{
                                $vali = $row["id_solicitud"];
                            }
                    }  
                }else{
                    echo '<table class="table-job text-center">
                    <thead>
                        <tr>
                        <th># Solicitud</th>
                        <th>Tipo Solicitud</th>
                        <th>Estatus Solicitud</th>
                        <th>Aprobacion</th> 
                        <th>Estado General</th>
                        <th>Revisar</th>    
                        </tr>
                    </thead>
                    </table>';
                }               
            }else{
                echo '<h3>Error de Base de Datos</h3>';
            } 
            ?>