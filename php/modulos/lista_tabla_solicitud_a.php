<?php 
session_start();
include 'conexion.php';
$i = 1; $id = $_SESSION['id'];
if($QueryA = mysqli_query($link,"SELECT * FROM registro WHERE id_usuario = '$id' AND estatus_generado = 'NO' AND tipo_solicitud = 'SA'")){
    if(mysqli_num_rows($QueryA)){
        echo '
        <table class="table text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Telefono</th>
                <th>Nombre</th>
                <th>Compañia Telefonica</th>
                <th>Nacionalidad</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
        </thead>
        <tbody>
        ';
        while ($row = mysqli_fetch_array($QueryA)) {
            $uno = substr($row["telefono"],0,3);
            $dos = substr($row["telefono"],3,3);
            $tres = substr($row["telefono"],6,9);
            $telefono = '('.$uno.')-'.$dos.'-'.$tres; 
            echo '
            <tr id="'.$row["id_contador"].'">
            <td id="count_'.$i.'">'.$i.'</td>
            <td data-target="telefono">'.$telefono.'</td>
            <td data-target="nombre">'.$row["nombre"].'</td>
            <td data-target="empresa">'.$row["empresa"].'</td>
            <td data-target="nacionalidad">'.$row["pais"].'</td>
            <td><input  type="submit" id="borrar-registro-a" value="X" class="btn btn-secondary btn-sm rounded-circle"/><span id="value">'.$row["id_contador"].'</span></td>
            <td><a href="#" data-role="updateSA" data-id="'.$row["id_contador"].'" class="btn btn-secondary btn-sm rounded-circle">M</button></td>
            </tr>';
            $i++;   
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
                        <th>#</th>
                        <th>Telefono</th>
                        <th>Nombre</th>
                        <th>Compañia Telefonica</th>
                        <th>Nacionalidad</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                </table>
                ';
    } 
               
}else{
      echo '<h4 class="text-center">ERROR DE BASE DE DATOS</h4>';         
    }
    
?>