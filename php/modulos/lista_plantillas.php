<?php 
session_start();
$id = $_SESSION['id'];
include 'conexion.php';
			if($QueryTiempo = mysqli_query($link,"SELECT * from plantilla")){
                if(mysqli_num_rows($QueryTiempo)>0){
                    while ($row = mysqli_fetch_array($QueryTiempo)) {
                        echo '<option value="'.$row["id_plantilla"].'">'.str_replace('.docx','',$row["nombre_plantilla"]).'</option>';   
                    }  
                }else{
                    echo '<option value="-1">No hay plantillas</option>';
                }               
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            } 
?>