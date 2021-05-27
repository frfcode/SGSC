<?php 

include 'conexion.php';
session_start();
$id = $_SESSION['id'];
$vali = '';
$i = 1;
			if($Query = mysqli_query($link,"SELECT *
            FROM registro
            INNER JOIN solicitud
            ON registro.id_solicitud = solicitud.id_solicitud
            LEFT JOIN grupos
            ON solicitud.id_grupo = grupos.id_grupo
            LEFT JOIN usuarios
            ON solicitud.id_usuario = usuarios.id_usuario WHERE registro.estatus_generado = 'SI' AND registro.estado_general = 'ACTIVO' AND solicitud.aprobacion_1 = '' ")){
                echo'
                <form method="post" action="../php/modulos/test.php" target"_blank">
                <table class="table-job text-center">
                        <thead>
                            <tr>
                                <th># Solicitud</th>
                                <th>Tipo Solicitud</th>
                                <th>Grupo</th>
                                <th>Solcitud 1</th>
                            </tr>
                        </thead>
                        <tbody>
                ';
                if(mysqli_num_rows($Query)>0){
                    while ($row = mysqli_fetch_array($Query)) {
                        if($vali != $row["id_solicitud"]){
                            echo '<tr>
                            <td>'.$row["id_solicitud"].'</td>
                            <td><input readonly type="text"  class="text-center" name="tiposolicitud'.$row["id_solicitud"].'" placeholder="'.$row["tipo_solicitud"].'"  value="'.$row["tipo_solicitud"].'" style="width:80%;"></td>
                            <td>'.$row["grupo"].'</td>
                            ';
                            echo '
                            <td><button type="submit" name="apsolicitud1" value="'.$row["id_solicitud"].'">COMPLETAR</button></td>
                            </tr>';
                        $i++;  
                            $vali = $row["id_solicitud"];
                        }else{
                            $vali = $row["id_solicitud"];
                        } 
                    }   
                    echo ' 
                    </form></tbody>
                    </table>';
                }else{
                    echo '
                    <h3> NO HAY SOLICITUDES POR APORBAR</h3>
                    ';
                }               
            }else{
                echo '<h3>Error de Base de Datos</h3>';
            }
            ?>