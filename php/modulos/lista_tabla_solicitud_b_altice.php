<?php 
session_start();
include 'conexion.php';
$i = 1; $id = $_SESSION['id'];
if($QueryB = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO' AND tipo_solicitud = 'SB' AND empresa = 'ALTICE'")){
    if(mysqli_num_rows($QueryB)){
        echo '
        <table class="table text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Compañia Telefonica</th>
                <th>Paises</th>
                <th>Meses</th>
            </tr>
        </thead>
        <tbody>
        ';
        while ($row = mysqli_fetch_array($QueryB)) {
            echo '
            <tr id="'.$row["id_contador"].'">
            <td id="count_'.$i.'">'.$i.'</td>';
            //if($row["empresa"] != ''){
               /* echo '
            <tr id="'.$row["id_contador"].'">
            <td id="count_'.$i.'">'.$i.'</td>';*/
                echo ' <td data-target="empresa">'.$row["empresa"].'</td>';
            //}
            //if($row["pais"] != ''){
                /*echo '
            <tr id="'.$row["id_contador"].'">
            <td id="count_'.$i.'">'.$i.'</td>';*/
                echo '<td data-target="pais">'.$row["pais"].'</td>';
            //}
            //if($row["meses"] != ''){
                /*echo '
            <tr id="'.$row["id_contador"].'">
            <td id="count_'.$i.'">'.$i.'</td>';*/
                echo ' <td data-target="meses">'.$row["meses"].'</td>';
            //}   
            echo '</tr>';
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