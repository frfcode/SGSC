<?php 
include 'conexion.php';
			if($Query = mysqli_query($link,"SELECT * from grupos WHERE grupos.id_grupo != 0")){
                if(mysqli_num_rows($Query)>0){
                    echo '<option value="null">Seleccione</option>';
                    while ($row = mysqli_fetch_array($Query)) {
                        echo '<option value="'.$row["id_grupo"].'">'.$row["grupo"].'</option>';   
                    }  
                }else{
                    echo '<option value="-1">No hay grupos existentes</option>';
                }               
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            } 
?>