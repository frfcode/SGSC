<?php 
session_start();
include 'conexion.php';
$i = 1; $id = $_SESSION['id'];
if($QueryB = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO' AND tipo_solicitud = 'SB' AND nombre != '' AND tipo_opcion = 3 ")){
    if(mysqli_num_rows($QueryB)){
        echo '
        <table class="table text-center" id="table-nombre">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        ';
        while ($row = mysqli_fetch_array($QueryB)) {
            echo '
            <tr id="'.$row["id_contador"].'">
                <td id="count_'.$i.'">'.$i.'</td>
                <td data-target="nombre">'.$row["nombre"].'</td>
            </tr>';
            $i++;   
        }
        echo '
        </tbody>
        </table>
        ';
    }else{
        echo '
        <h3 class="text-center mt-2">NO HAY DATOS</h3>
                ';
    } 
               
}else{
      echo '<h4 class="text-center">ERROR DE BASE DE DATOS</h4>';         
    }
?>