<?php 
include 'modulos/session_user.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Sistema SGCS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
    </head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Menu SGSC</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-0 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <!--  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>-->
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Usuario: <?php echo $_SESSION['User'] ?>  Date: <?php echo $date; ?><i class="fas fa-user fa-fw"></i></a>
                        <!--<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>-->
                    </li>
                </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="mb-3"></div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Nuevo
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Solicitud 1
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#" id="solicitud-A">Solicitud 1-A</a>
                                        <a class="nav-link" href="#" id="solicitud-B">Solicitud 1-B</a>

                                    </nav>
                                </div>
                                <a class="nav-link" href="#" id="panel-tiempo">Nota (Tiempo)</a>
                                <a class="nav-link" href="#" id="panel-dirigido">A quien va Dirigido</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseSection" aria-expanded="false" aria-controls="collapseSection">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSection" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#" id="usuariocrear">Crear</a>
                                <a class="nav-link" href="#" id="usuarioeliminar">Eliminar</a>
                                <a class="nav-link" href="#" id="usuariolista">Historial Cuentas Creadas</a>
                                <a class="nav-link" href="#" id="grupo">Grupo</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-search"></i></i></div>
                            Consulta
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#" id="buscarregistro">Registros</a>
                                <a class="nav-link" href="#" id="estadosolicitud">Estatus De Solicitud</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="#" id="plantillacrear">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></i></div>
                            Plantillas
                        </a>
                        <a class="nav-link" href="#" id="aprobar">
                            <div class="sb-nav-link-icon"><i class="fas fa-vote-yea"></i></div>
                                Aprobar Solicitud
                        </a>
                        <a class="nav-link" href="../php/logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                            Cerrar Session
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                     <p class="text-right">Developer By:<br/> Francisco Garcia<br/> &amp; <br/> Leonardo Ruiz</p>
                    
                </div>
            </nav>
        </div>
        <h1></h1>
        <div class="panel-content-width">
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
        <script src="../js/jquery-3.5.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/menu_admin.js"></script>
  <script src="../js/ajax_form_admin.js"></script>
  <script src="../js/ajax_solicitud_a.js"></script>
  <script src="../js/ajax_getInformacionAdmin.js"></script>
  <script src="../js/ajax_solicitud_b.js"></script>
  <script src="../js/phoneformat.js"></script>
</body>

</html>
