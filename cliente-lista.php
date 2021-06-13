<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ico -->
    <link rel="shorcut icon" type="image/xicon" href="./assets/img/logo.png">

    <!--Titulo-->
    <title>Sistema-Bancario</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!--Sidebar Css -->
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <!--Sidebar-->
    <link rel="stylesheet" href="./assets/css/fontello.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading d-flex mx-5 align-self-lg-start">
                <img src="./assets/img/logo.png" alt="" height="100" width="100">
            </div>
            <div>
                <ul class="px-0">
                    <li>
                        <a href="./home.php" class="list-group-item list-group-item-action bg-dark"><span
                                class="icon-th-large"></span> Dashboard</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action bg-dark active"><span
                                class="icon-user"></span>Clientes
                            <i class="icon-open firt fea-btn bot"></i></a>
                        <ul class="cli-show">
                            <li class="active2"><a href="./cliente-lista.php"><i class="icon-th-list"></i> Listar</a>
                            </li>
                            <li><a href="./cliente-registro.php"><i class="icon-user-plus"></i> Registrar</a></li>
                            <li><a href="./cliente-actualizar.php"><i class="icon-cog"></i> Actualizar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action bg-dark "><span class="icon-spin3"></span>
                            Movimientos
                            <i class="icon-open first feat-btn bot"></i></a>
                        <ul class="feat-show">
                            <li><a href="./move-buscar.php"><i class="icon-search"></i> Buscar</a></li>
                            <li><a href="./transferencia.php"><i class="icon-credit-card"></i> Deposito/Retiro/Otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action bg-dark "><span
                                class="icon-pdf"></span>Reportes
                            <i class="icon-open fit feats-btn bot"></i></a>
                        <ul class="feap-show">
                            <li><a href="./generar-reporte.php"><i class="icon-doc-text-inv"></i> Generar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./index.html" class="list-group-item list-group-item-action bg-dark"><span
                                class="icon-logout"></span> Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Sidebar-contenido-->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                <div class="flex-column">
                    <button class="btn btn-primary mx-4 icon-left-big" id="menu-toggle"></button>
                </div>
                <div class="logos col-auto align-content-end justify-content-end">
                    <img class="img-fluid mx-4" src="./assets/img/logo.png" alt="" height="40" width="40">
                </div>
            </nav>
            <div id="intro" class="text-center sidebar-layout">
                <h1 class="p-4 mt-4 mb-4 h3">Clientes</h1>
            </div>
            <main class="pb-5 sidebar-layout">
                <div class="container-fluid">
                    <!--Section: Content-->
                    <section class="shadow-5 p-4 m-3" id="Data">
                        <div class="row justify-content-center">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-warning">
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Cédula</th>
                                            <th scope="col">N° Cuenta</th>
                                            <th scope="col">Saldo</th>
                                            <th scope="col">Tipo de Cuenta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="row of Clientes">
                                            <td scope="row">{{ row.id_cliente }}</td>
                                            <td>{{ row.nombres }}</td>
                                            <td>{{ row.apellidos }}</td>
                                            <td>{{ row.cedula }}</td>
                                            <td>{{ row.numero_cuenta }}</td>
                                            <td>{{ row.saldo }}</td>
                                            <td>{{ row.nombre }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!--Section: Content-->
                </div>
            </main>
            <!-- End #main -->
            <!--Footer-->
            <footer class="bg-light text-lg-left sidebar-layout pt-5">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2021 Copyright:
                    <span class="text-dark">Maria Herrera</span>
                </div>
                <!-- Copyright -->
            </footer>
            <!--Footer-->

        </div>
        <!-- /contenido de la página-->
    </div>
    <!-- /#wrapper -->
    <!--Axios-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!--Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!--Bootstrap 5-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

    <!--JQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!--Control js-->

     <script type="text/javascript" src="js/control.js"></script>
</body>

</html>