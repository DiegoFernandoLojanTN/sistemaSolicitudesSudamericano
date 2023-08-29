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
                            <h1>Pagina de Secretarias</h1>
                        </div>




                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <!-- edita -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registrar Secretarias</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escriba su Nombre">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apellido</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escriba su Apellido">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escriba su Correo">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Escriba su Contraseña">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escriba su Direccion">
                                        </div>

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Seleccione la Carrera que estara a Cargo</label>
                                            <select class="form-control">
                                                <option>Computacion</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Secretarias Registradas</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Correos</th>
                                                        <th>Direccion</th>
                                                        <th>Carrera</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Win 95+</td>
                                                        <td>Trident</td>
                                                        <td>Win 95+</td>
                                                        <td>Win 95+</td>

                                                        <td>
                                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trident</td>
                                                        <td>Win 95+</td>
                                                        <td>Trident</td>
                                                        <td>Win 95+</td>
                                                        <td>Win 95+</td>

                                                        <td>
                                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>

                                                    <!-- Agrega más filas como sea necesario -->

                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>

                            </div>


                            <!-- /.card -->

                    </section>

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