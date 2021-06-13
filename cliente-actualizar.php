<?php 
include './config/conex.php';
$c=new conectar();
$con=$c->conexion();

$sql=mysqli_query($con,"SELECT id_tipocuenta, nombre FROM tipo_cuenta;");
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
                            <li><a href="./cliente-lista.php"><i class="icon-th-list"></i> Listar</a></li>
                            <li><a href="./cliente-registro.php"><i class="icon-user-plus"></i> Registrar</a></li>
                            <li class="active2"><a href="./cliente-actualizar.php"><i class="icon-cog"></i>
                                    Actualizar</a></li>
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
                    <img class="img-fluid mx-4" <img src="./assets/img/logo.png" alt="" height="40" width="40">
                </div>
            </nav>

            <div id="intro" class="text-center sidebar-layout">
                <h1 class=" p-4 mt-4 mb-4 h3">Actualizar Clientes</h1>
            </div>
            <main class="mb-5 sidebar-layout">
                <div class="container-fluid" id="Data">
                    <section class="shadow-5 p-4 m-3" >
                        <div class="row justify-content-center" >
                            <div class="col-sm-3 col-md3- col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                <input type="text" class="form-control" id="cedula" name="cedula"  v-model="cliente.cedula"  placeholder="Cédula">
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    <input type="text" id="nomb" name="nomb" class="form-control" v-model="cliente.nombres" placeholder="Nombres"/>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    
                                    <input type="tel" id="apell" name="apell" class="form-control" v-model="cliente.apellidos" placeholder="Apellidos"/>
                                    
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    <input type="number" id="cuent" name="cuent" class="form-control " disabled v-model="cliente.numero_cuenta" placeholder="N° de Cuenta"/>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ">
                                <div class="form-outline mb-3 mt-4">
                                <input type="text" id="tcuent" name="tcuent" class="form-control " v-model="cliente.nombre" placeholder="Tipo de Cuenta"/>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-outline mb-3 mt-4">
                                    <input type="number" step="0.01" id="sald" name="sald" class="form-control" v-model="cliente.saldo" placeholder="Saldo"/>
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 mx-auto col-auto">
                                <input type="button" value="Actualizar" @click="guardarAct" class="btn btn-primary mb-3 mt-4 text-center"></input>
                            </div>
                            <div class="table-responsive mt-3">
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
                                                <button @click="actualizarcli(item)" class="icon-pencil" style="border: none; background-color: transparent;"></button>
                                                <button @click="eliminarCliente(index, item)" class="icon-trash dele" style="border: none; background-color: transparent;"></button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <!--Section: Content-->
                        </div>
                    </section>
                </div>
            </main>

            <!-- End #main -->
            <!--Footer-->
            <footer class="bg-light text-lg-left sidebar-layout mt-5">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2021 Copyright:
                    <span class="text-dark">Maria Herrera</span>
                </div>
                <!-- Copyright -->
            </footer>
            <!--Footer-->
        </div>
        <!-- /#page-content-wrapper -->
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

    <script type="text/javascript" src="js/controls.js"></script>
    <script type="text/javascript" src="js/func.js">
        
    </script>

    
</body>

</html>