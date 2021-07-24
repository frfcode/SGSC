<?php 
include 'conexion.php';
 session_start(); 
 $date = date("d-m-Y");
if(isset($_SESSION['perfil']) == false || $_SESSION['perfil'] != 'admin'){echo " <script>alert('Acceso Denegado'); location.href = '../index.html'</script>";}
$query = mysqli_query($link,"SELECT * FROM solicitud WHERE aprobacion_5 = 'APROBADO' ");
while($row = mysqli_fetch_array($query)){
  $date1 = new DateTime($row['fecha']);
  $date2 = new DateTime($row['vigencia']);
  $diff = $date1->diff($date2);
  $dias = $diff->days;
  if($dias == 0 || $dias < 0 ){
    $solicitudID = $row['id_solicitud'];
    mysqli_query($link,"UPDATE registro SET estatus_solicitud = 'RENOVAR' WHERE id_solicitud = '$solicitudID'");
  }
}
?>