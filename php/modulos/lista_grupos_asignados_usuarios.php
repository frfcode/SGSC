<?php 

include 'conexion.php';
			if($Query = mysqli_query($link,"SELECT * 
            FROM asignacion
            INNER JOIN usuarios
            ON usuarios.id_usuario = asignacion.id_usuario
            INNER JOIN grupos
            ON grupos.id_grupo = asignacion.id_grupo WHERE grupos.id_grupo != 0 ")){
                 echo '<option value="null">Seleccione</option>';
                if(mysqli_num_rows($Query)>0){
                     while ($row = mysqli_fetch_array($Query)) {
                        echo '<option value="'.$row["id_grupo"].'">'.$row["grupo"].'</option>';   
                    }
                }else{
                    echo '<option value="-1">No hay usuarios existentes</option>';
                }  
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            }  
?>