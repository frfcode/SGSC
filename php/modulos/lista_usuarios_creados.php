<?php 

include 'conexion.php';
$i = 1;
if($Query = mysqli_query($link,"SELECT * from usuarios")){
    if(mysqli_num_rows($Query)>0){
    echo '
    <table class="table text-center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nivel</th>
        <th scope="col">Fecha Creacion</th>
    </tr>
    </thead>
    <tbody>
    ';
    while ($row = mysqli_fetch_array($Query)) {
        echo '
        <tr>
        <th>'.$i++.'</th>
        <td>'.$row["usuario"].'</td>
        <td>'.$row["rol"].'</td>
        <td>'.$row["fecha_creacion"].'</td>
        </tr>';   
    }
    echo '
    </tbody>
    </table>
    ';}else{
        echo '
    <table class="table text-center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nivel</th>
        <th scope="col">Fecha Creacion</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>--------</th>
        <td>--------</td>
        <td>--------</td>
        <td>--------</td>
        </tr>
        </tbody>
    </table>';
    }
}else{
    echo '<h3>Error de Base de Datos</h3>';
}  
?>