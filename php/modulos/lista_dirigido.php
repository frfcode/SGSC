<?php 
session_start();
$id = $_SESSION['id'];
include 'conexion.php';
			if($QueryDirigido = mysqli_query($link,"SELECT * from dirigido ")){
                if(mysqli_num_rows($QueryDirigido)>0){
                    while ($row = mysqli_fetch_array($QueryDirigido)) {
                        echo '<option value="'.$row["texto_dirigido"].'">'.$row["texto_dirigido"].'</option>';   
                    }  
                }else{
                    echo '<option value="-1">No hay Dirigido</option>';
                }               
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            } 
?>