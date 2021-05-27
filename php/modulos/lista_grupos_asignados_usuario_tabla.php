<?php
include 'conexion.php';
session_start();
$id = $_SESSION['id'];
            $i = 1;
            if($Query = mysqli_query($link,"SELECT * 
            FROM asignacion
            INNER JOIN usuarios
            ON usuarios.id_usuario = asignacion.id_usuario
            INNER JOIN grupos
            ON grupos.id_grupo = asignacion.id_grupo WHERE grupos.id_grupo != 0 AND usuarios.id_usuario = $id")){
                if(mysqli_num_rows($Query)){
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
                            <th>--</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            </tr>';   
                        }
                        echo '
                        </tbody>
                        </table>
                        ';
                }
            }  
?>