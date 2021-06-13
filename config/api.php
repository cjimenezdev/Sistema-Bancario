<?php

require_once './conex.php';

$c=new conectar();
$con=$c->conexion();

//verificar conexión
$id='';
$method = $_SERVER['REQUEST_METHOD'];

if(isset($_SERVER['PATH_INFO'])){
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
}

switch($method){
    case 'GET':
    $sql="CALL `obtenercli`();";
    $result = mysqli_query($con, $sql);
    break;

    case 'POST':

    $id=$_POST['id_cliente'];
    if(isset($_POST['op'])){
        $sql="Call eliminarcli (".$id.");";
    }else{
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $cedula=$_POST['cedula'];
        $cuenta=$_POST['numero_cuenta'];
        $tcuenta=$_POST['id_tipocuenta'];
        $saldo=$_POST['saldo'];
        
      if($id==0){
        $sql="INSERT INTO cliente values(
        null,
        '".$nombre."',
        '".$apellido."', 
        '".$cedula."',
        '".$cuenta."',
        '".$tcuenta."',
        '".$saldo."'
        )";
        }else{
            $sql = "UPDATE cliente SET
            nombres=    '".$nombre."',
            apellidos=  '".$apellido."',
            cedula=    '".$cedula."',
            numero_cuenta = '".$cuenta."',
            id_tipocuenta = '".$tcuenta."',
            saldo=    '".$saldo."' WHERE (id_cliente=".$id.");";

        }
    }
    $result=$con->query($sql);
    break;
    
}

if($method == 'GET'){
    if(!$id) echo '[';
        for ($i=0 ; $i<mysqli_num_rows($result); $i++){
            echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
        }
        if(!$id) echo']';
}else if ($method == 'POST'){
    echo json_encode($result);
}else{

}
$con->close();
?>