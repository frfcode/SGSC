<?php 
session_start();
$id = $_SESSION['id'];
include 'conexion.php';
			if($QueryVigencia = mysqli_query($link,"SELECT * from vigencia WHERE id_vigencia != 0")){
                if(mysqli_num_rows($QueryVigencia)>0){
                    while ($row = mysqli_fetch_array($QueryVigencia)) {
                        echo '<option value="'.$row["texto_vigencia"].'">'.$row["texto_vigencia"].'</option>';   
                    }  
                }else{
                    echo '<option value="-1">No hay Vigencia</option>';
                }               
            }else{
                echo '<option value="-1">Error de Base de Datos</option>';
            } 
?>