<?php
include 'conexion.php';
            $i = 1;
    if($Query = mysqli_query($link,"SELECT usuarios.usuario, grupos.grupo, asignacion.fecha_asignacion 
            FROM asignacion
            INNER JOIN usuarios
            ON usuarios.id_usuario = asignacion.id_usuario
            INNER JOIN grupos
            ON grupos.id_grupo = asignacion.id_grupo WHERE grupos.id_grupo != 0 ")){
            if(mysqli_num_rows($Query)>0){
                echo '
                <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Grupo Asignado</th>
                    <th scope="col">Fecha de Asignacion</th>
                </tr>
                </thead>
                <tbody>
                ';
                while ($row = mysqli_fetch_array($Query)) {
                    echo '
                    <tr>
                    <th>'.$i++.'</th>
                    <td>'.$row["usuario"].'</td>
                    <td>'.$row["grupo"].'</td>
                    <td>'.$row["fecha_asignacion"].'</td>
                    </tr>';   
                }
                echo '
                </tbody>
                </table>
                ';
            }else{
                echo '
                <table class="table text-center table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Grupo Asignado</th>
                    <th scope="col">Fecha de Asignacion</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>--</th>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    </tr>
                </tbody>
                </table>
                ';
                }
        }else{
            echo '<h3>Error de Base de Datos</h3>';
        }  
?>