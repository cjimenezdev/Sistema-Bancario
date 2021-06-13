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

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

    <!--Sidebar v1.0.0 -->
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
                        <a class="list-group-item list-group-item-action bg-dark "><span
                                class="icon-user"></span>Clientes
                            <i class="icon-open firt fea-btn bot"></i></a>
                        <ul class="cli-show">
                            <li><a href="./cliente-lista.php"><i class="icon-th-list"></i> Listar</a></li>
                            <li><a href="./cliente-registro.php"><i class="icon-user-plus"></i> Registrar</a></li>
                            <li><a href="./cliente-actualizar.php"><i class="icon-cog"></i> Actualizar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action bg-dark active"><span
                                class="icon-spin3"></span>
                            Movimientos
                            <i class="icon-open first feat-btn bot"></i></a>
                        <ul class="feat-show">
                            <li><a href="./move-buscar.html"><i class="icon-search"></i> Buscar</a></li>
                            <li class="active2"><a href="./transferencia.php"><i class="icon-credit-card"></i>
                                    Deposito/Retiro/Otros</a></li>
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
                        <a href="./index.php" class="list-group-item list-group-item-action bg-dark"><span
                                class="icon-logout"></span> Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                <div class="flex-column">
                    <button class="btn btn-primary mx-4 icon-left-big" id="menu-toggle"></button>
                </div>
                <div class="logos col-auto align-content-end justify-content-end">
                    <img class="img-fluid mx-4" src="./assets/img/logo.png" alt="" height="40" width="40">
                </div>
            </nav>

            <div id="intro" class="text-center sidebar-layout ">
                <h1 class="p-4 mt-4 mb-4 h3">Registrar Operaciones</h1>
            </div>
            <nav class="navbar navbar-light shadow-0 mx-3">
                <div class="container ">
                    <form class="d-flex mx-4">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <input type="button" class="btn btn-success" type="submit" value="Buscar">
                    </form>
                </div>
            </nav>
            <main class="pb-5 sidebar-layout">
                <div class="container-fluid">
                    <section class="shadow-5 p-4 m-3">
                        <div class="row justify-content-center ">

                            <div class="col-sm-3 col-md3- col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    <input type="number" id="typeNumber" class="form-control" disabled />
                                    <label class="form-label" for="typeNumber">Cédula</label>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    <input type="number" id="typeNumber" class="form-control" disabled />
                                    <label class="form-label" for="typeNumber">N° de Cuenta</label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-4 mt-3">
                                    <input type="tel" id="typePhone" class="form-control" disabled />
                                    <label class="form-label" for="typePhone">Cuenta</label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-4 mt-3">
                                    <input type="number" step="0.01" id="saldo" class="form-control" disabled />
                                    <label class="form-label" for="saldo">Saldo</label>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-4 mt-3">
                                    <input type="number" step="0.01" id="valor" class="form-control" />
                                    <label class="form-label" for="valor">Valor</label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ">
                                <div class="form-floating mb-4 mt-3">
                                    <select class="form-select " id="estado">
                                        <option id="ahorro" value="ahorro">Depósito</option>
                                        <option id="corriente" value="corriente">Retiro</option>
                                        <option id="corriente" value="corriente">Transferencia</option>
                                    </select>
                                    <label for="floatingInput" class="select-label">Tipo de Operacíon:</label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 mx-auto col-auto">
                                <input class="btn btn-primary mb-4 mt-3 text-center" value="Registrar"></input>
                            </div>

                        </div>
                    </section>
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
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!--JQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Axios-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!--Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


    <!--Sidebar js-->
    <script type="text/javascript" src="js/func.js"></script>

    <!--Sidebar js-->
    <script type="text/javascript" src="js/controls.js"></script>

</body>

</html>