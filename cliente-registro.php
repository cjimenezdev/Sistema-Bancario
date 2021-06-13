<?php
include './config/conex.php';
$c = new conectar();
$con = $c->conexion();

$sql = mysqli_query($con, "SELECT id_tipocuenta, nombre FROM tipo_cuenta;");
?>

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
                        <a class="list-group-item list-group-item-action bg-dark active"><span
                                class="icon-user"></span>Clientes
                            <i class="icon-open firt fea-btn bot"></i></a>
                        <ul class="cli-show">

                            <li class="active2"><a href="./cliente-registro.php"><i class="icon-user-plus"></i>
                                    Administrar</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action bg-dark "><span class="icon-spin3"></span>
                            Movimientos
                            <i class="icon-open first feat-btn bot"></i></a>
                        <ul class="feat-show">
                            <li><a href="./move-buscar.php"><i class="icon-search"></i> Buscar</a></li>
                            <li><a href="./transferencia.php"><i class="icon-credit-card"></i> Deposito/Retiro/Otros</a>
                            </li>
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
                <h1 class="p-4 mt-4 mb-4 h3">Administrar Clientes</h1>
            </div>
            <main class="pb-5 sidebar-layout">
                <div class="container-fluid">
                    <section class="shadow-5 p-4 m-3" id="Data">
                        <div class="row justify-content-center " v-if="!estado">
                        
                            <div class="col-sm-3 col-md3- col-lg-3 col-xs-3">
                                <div class="form-outline mb-2 mt-1">
                                    <input type="text" id="ced" class="form-control" v-model="cliente.cedula"
                                        placeholder="Cédula">
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-2 mt-1">
                                    <input type="text" id="nom" class="form-control" v-model="cliente.nombres"
                                        placeholder="Nombres" />
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-2 mt-1">
                                    <input type="text" id="ap" class="form-control" v-model="cliente.apellidos"
                                        placeholder="Apellidos" />
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-2 mt-1">
                                    <input type="number" id="cu" class="form-control " v-model="cliente.numero_cuenta"
                                        placeholder="N° de Cuenta" />
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ">
                                <div class="form-floating mb-4 mt-3">
                                    <select class="form-select" id="tc" v-model="cliente.nombre">
                                        <?php while ($datos = mysqli_fetch_array($sql)) {
                                        ?>
                                        <option value="<?php echo $datos['id_tipocuenta'] ?>">
                                            <?php echo $datos['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="floatingInput" class="select-label">Tipo de Cuenta:</label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-4 mt-3">
                                    <input type="number" step="0.01" id="sa" class="form-control"
                                        v-model="cliente.saldo" placeholder="Saldo" />
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 mx-auto col-auto">
                                <input v-if="cliente.cedula!='' && cliente.nombres!='' && cliente.apellidos!='' "
                                    value="Registrar" class="btn btn-primary mb-4 mt-3 text-center d-flex" type="button"
                                    @click="guardarCli"></input>

                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 mx-auto col-auto">

                                <button class="btn btn-danger mb-4 mt-3" @click='estado=!estado'>Cancelar</butto~n>
                            </div>
                        </div>
                        <div class="table-responsive mt-3" v-if="estado">

                            <button class="btn btn-success" @click='estado=!estado'>Nuevo Cliente</button>

                            <table class="table">
                                <thead class="table-warning">
                                    <th scope="col">id</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">N° de Cuenta</th>
                                    <th scope="col">Tipo de Cuenta</th>
                                    <th scope="col">Saldo</th>
                                    <th scope="col">Acción</th>
                                </thead>

                                <tbody>
                                    <tr v-for="(item, index) of Clientes">
                                        <td>{{index+1}}</td>
                                        <td>{{item.nombres }}</td>
                                        <td>{{item.apellidos }}</td>
                                        <td>{{item.cedula }}</td>
                                        <td>{{item.numero_cuenta }}</td>
                                        <td>{{item.nombre }}</td>
                                        <td>{{item.saldo }}</td>
                                        <td>
                                            <button @click="actualizarcli(item)" class="icon-pencil"
                                                style="border: none; background-color: transparent;"></button>
                                            <button @click="eliminarCliente(index, item)" class="icon-trash dele"
                                                style="border: none; background-color: transparent;"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </main>
            <!-- End #main -->
            <!--Footer-->
            <footer class=" bg-light text-lg-left sidebar-layout pt-5 ">
                <!-- Copyright -->
                <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
                    © 2021 Copyright:
                    <span class="text-dark ">Maria Herrera</span>
                </div>
                <!-- Copyright -->
            </footer>
            <!--Footer-->
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->

    <!--Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!--Axios-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!--JQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!--Control js-->
    <script type="text/javascript" src="js/controls.js"></script>
    <script type="text/javascript" src="js/func.js"></script>

</body>

</html>