<?php 
include 'conexion.php';
			if($Query = mysqli_query($link,"SELECT * 
            FROM asignacion
            INNER JOIN usuarios
            ON usuarios.id_usuario = asignacion.id_usuario
            INNER JOIN grupos
            ON grupos.id_grupo = asignacion.id_grupo")){
            if(mysqli_num_rows($Query)>0){
                while ($row = mysqli_fetch_array($Query)) {
                    echo '<option value="'.$row["id_asignacion"].'"> Usuario: '.$row["usuario"].' - Grupo: '.$row["grupo"].'</option>';   
                }
            }else{
                echo '<option value="">No hay asignaciones existentes</option>';
            } 
            }else{
                echo '<option value="">Error de Base de Datos</option>';
            }  
            ?>