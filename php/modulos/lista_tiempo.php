<?php 
session_start();
$id = $_SESSION['id'];
include 'conexion.php';
			if($QueryTiempo = mysqli_query($link,"SELECT * from tiempo")){
                if(mysqli_num_rows($QueryTiempo)>0){
                    while ($row = mysqli_fetch_array($QueryTiempo)) {
                        echo '<option value="'.$row["texto_tiempo"].'">'.$row["texto_tiempo"].' dias</option>';   
                    }  
                }else{
                    echo '<option value="-1">No hay Tiempos</option>';
                }               
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            } 
?>