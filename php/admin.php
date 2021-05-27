<?php include('modulos/conexion.php'); session_start(); $date = date("d-m-Y");
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
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Demo</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../css/menu.css">
</head>
<body class="bg-default">
  <section class="container-fluid">
    <div class="row">
      <div class="col-3 col-md-3 menu-right">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center text-black">Menu</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div id="jquery-accordion-menu" class="jquery-accordion-menu">
              <!--<div class="jquery-accordion-menu-header">Nuevo</div> -->
              <ul>
                <li><a href="#"><i class="fa fa-cog"></i><img src="../img/nuevo.png" alt="">Nuevo </a>
                  <ul class="submenu">
                    <li><a href="#"><i class="fa fa-cog"></i>Solicitud 1 </a>
                      <ul class="submenu">
                        <li><a href="#" id="solicitud-A">Solicitud 1 - A</a></li>
                        <li><a href="#" id="solicitud-B">Solicitud 1- B</a></li>
                      </ul>
                    </li>
                    <li><a href="#" id="panel-tiempo"><i class="fa fa-cog"></i>Nota (Tiempo) </a>
                    <li><a href="#" id="panel-dirigido"><i class="fa fa-cog"></i>A quien va dirigido</a>
                    <!-- <li><a href="#" id="panel-vigencia"><i class="fa fa-cog"></i>Vigencia</a> -->
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-cog"></i><img src="../img/usuario.png" alt="">Usuarios</a>
                  <ul class="submenu">
                    <li><a href="#" id="usuariocrear">Crear</a></li>
                    <li><a href="#" id="usuarioeliminar">Eliminar</a></li>
                    <li><a href="#" id="usuariolista">Historial Cuentas Creadas</a></li>
                    <li><a href="#" id="grupo">Grupo</a></li>
                  </ul>
                </li>
                <li><a href="#"><img src="../img/busqueda.png" alt="">Consulta</a>
                  <ul class="submenu">
                    <!--<li><a href="#">Solictud</a></li>-->
                    <li><a href="#" id="buscarregistro">Registros</a></li>
                    <li><a href="#" id="estadosolicitud"><i class="fa fa-file-image-o"></i>Estatus de Solicitud</a></li>
                    <!--<li><a href="#">Solicitudes Completadas </a></li>-->
                    <!--<li><a href="#">Solicitudes Pendientes </a></li>-->
                  </ul>
                </li>
                <!-- <li><a href="#"><i class="fa fa-glass"></i>Solicitudes </a></li> -->
                <li><a href="#" id="plantillacrear"><i class="fa fa-cog"></i><img src="../img/validacion.png" alt="">Plantillas </a></li>
                <li><a href="#" id="aprobar"><i class="fa fa-cog"></i><img src="../img/validacion.png" alt="">Aprobar Solicitud </a></li>
                <li><a href="../php/logout.php"><i class="fa fa-newspaper-o"></i><img src="../img/cerrar.png" alt="">Cerrar Session </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-12 tittle-user">
            <p class="text-right">Usuario: <?php echo $_SESSION['User'] ?> Fecha: <?php echo $date; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- INCLUDE PANALES VISTA -->
            <?php require 'vista/panel_registro_solicitud_1_a.php'?>
            <?php require 'vista/panel_registro_solicitud_1_b.php'?>
            <?php require 'vista/panel_tiempo.php'?>
            <?php require 'vista/panel_dirigido.php'?>
            <?php //require 'vista/panel_vigencia.php'?>
            <?php require 'vista/panel_usuarios.php'?>
            <?php require 'vista/panel_grupos.php'?>
            <?php require 'vista/panel_buscador.php'?>
            <?php require 'vista/panel_plantilla.php'?>
            <?php require 'vista/panel_estado_solicitud.php'?>
            <?php require 'vista/panel_aprobaciones.php'?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/jquery-3.5.0.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/menu_admin.js"></script>
  <script src="../js/ajax_form_admin.js"></script>
  <script src="../js/ajax_solicitud_a.js"></script>
  <script src="../js/ajax_getInformacionAdmin.js"></script>
  <script src="../js/ajax_solicitud_b.js"></script>
  <script src="../js/phoneformat.js"></script>
  <script>
    if (window.matchMedia("(min-width: 300px)").matches && window.matchMedia("(max-width: 480px)").matches){ 
  console.log('Match in 300px')
  //SHOW AND HIDE MENU IN MOBILE
}else
if (window.matchMedia("(min-width: 481px)").matches && window.matchMedia("(max-width: 768px)").matches){
  console.log('Match in 768px')
}else
if (window.matchMedia("(min-width: 769px)").matches && window.matchMedia("(max-width: 1024px)").matches){
  console.log('Match in 1024px')
}else
if (window.matchMedia("(min-width: 1025px)").matches && window.matchMedia("(max-width: 1200px)").matches){
  console.log('Match in 1200x')
}else
if (window.matchMedia("(min-width: 1201px)").matches && window.matchMedia("(max-width: 1919px)").matches){
  console.log('Match most 1201px')
}
  </script>
</body>
</html>