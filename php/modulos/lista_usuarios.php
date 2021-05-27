<?php 
include 'conexion.php';
if($Query = mysqli_query($link,"SELECT * from usuarios")){
if(mysqli_num_rows($Query)>0){
while ($row = mysqli_fetch_array($Query)) {
    echo '<option value="'.$row["id_usuario"].'">'.$row["usuario"].'</option>';
}
}else{
echo '<option value="-1">No hay usuarios existentes</option>';
}
}else{
echo '<option value="-1">Error de Base de Datos</option>';
}
?>