<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestion De Peticiones</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/gestion_solicitudes/vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/gestion_solicitudes/vistas/dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/gestion_solicitudes/vistas/index3.html" class="brand-link">
                <img src="http://localhost/gestion_solicitudes/vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Gestion De Solicitudes</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Aqui el nombre del usuario</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Registrar
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="vistas/index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carrera</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Docente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estudiante</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Secretaria</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- SEGUNDO ITEM -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Ver Solicitudes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="vistas/index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitudes Pendientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitudes Aprobadas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitudes Rechazadas</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- SEGUNDO ITEM -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Gestionar Solicitudes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="vistas/index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Aprobar Solicitudes Pendientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rechazar Solicitudes Pendientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vistas/index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cambiar Estado de Solicitudes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- SEGUNDO ITEM -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Notas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="vistas/index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ubicar Notas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- SEGUNDO ITEM -->
                        <li class="nav-item">
                        <li class="nav-item">
                            <a href="vistas/index.html" class="nav-link">
                                <i class="fas fa-power-off nav-icon"></i>
                                <p>Cerrar Sesion</p>
                            </a>
                        </li>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pagina de Inicio</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Descripción del Sistema de Gestión de Solicitudes basado en la arquitectura MVC y el paradigma de programación orientada a objetos:</h3>
                    </div>
                    <div class="card-body">
                        El Sistema de Gestión de Solicitudes es una aplicación web diseñada bajo la arquitectura Modelo-Vista-Controlador (MVC) y el paradigma de Programación Orientada a Objetos (POO). Su propósito es agilizar la gestión de solicitudes en una institución educativa, involucrando a tres roles: solicitante, docente y secretaría.
                    </div>

                    <!-- aquiedite-->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Enfoque del Sistema:</h3>
                        </div>
                        <div class="card-body">
                            <p>El enfoque del sistema es proporcionar una plataforma centralizada para que los estudiantes, docentes y personal de secretaría puedan presentar, gestionar y dar seguimiento a las solicitudes. La arquitectura MVC se emplea para separar claramente la lógica de negocio, la presentación y la interacción con la base de datos. La programación orientada a objetos se utiliza para modelar las diferentes entidades y acciones dentro del sistema, facilitando la escalabilidad y el mantenimiento a largo plazo.</p>

                            <!-- ... (continúa con el resto del contenido) ... -->
                        </div>
                    </div>

                     <!-- aquiedite-->
                     <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Base del Sistema:</h3>
                        </div>
                        <div class="card-body">
                            <p>El sistema utiliza el lenguaje de programación PHP para la lógica del lado del servidor, una base de datos MySQL para almacenar la información relevante y XAMPP como entorno de desarrollo. La plantilla AdminLTE y Bootstrap se utilizan para el diseño de la interfaz. El sistema emplea CSS para la presentación visual y JavaScript para la interactividad en el lado del cliente. AJAX se utiliza para realizar solicitudes asincrónicas y mejorar la experiencia del usuario.</p>

                            <!-- ... (continúa con el resto del contenido) ... -->
                        </div>
                    </div>
                </div>

        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="http://localhost/gestion_solicitudes/vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/gestion_solicitudes/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/gestion_solicitudes/vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/gestion_solicitudes/vistas/dist/js/demo.js"></script>
</body>

</html>