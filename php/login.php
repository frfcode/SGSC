<?php
include 'modulos/conexion.php'; 
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$passwordCode = md5($password);
$fields = strlen($user)*strlen($password);

if($fields == true){
    $admin = 'admin';
    if($serach = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$user'")){
        if(mysqli_num_rows($serach)>0){
            while($fila = mysqli_fetch_array($serach)) {
                $hash = $fila["clave"];
                $_SESSION['User'] = $fila["usuario"];
                if ($passwordCode == $hash) {
                        $_SESSION['perfil'] = $fila["rol"];
                        $_SESSION['id'] = $fila["id_usuario"];
                        if($fila["rol"] == 'default'){
                        echo "<script>location.href = 'default2.php'</script>";
                        }
                        if($fila["rol"] == 'admin'){
                        echo "<script>location.href = 'template.php'</script>";
                        }
                    } 
                else {
                    echo " <script>alert('Contraseña erronea'); location.href = '../index.html'</script>";
                }
            }
        }else{
            echo " <script>alert('Usuario no existe'); location.href = '../index.html'</script>";
        }
    }else{
        echo "<script>alert('Error BD Usuarios'); location.href = '../index.html'</script>";
    }
}else{
    echo "<script>alert('Complete los campos'); location.href = '../index.html'</script>";
}
?>