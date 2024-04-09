<?php

require_once '../interfaz_usuario/configu/database.php';
require_once 'clientes_funciones.php';

$datos =[];

if(isset($_POST['action'])){
    $action = $_POST['action'];

    $db = new Database();
    $con = $db->conectar();


    if($action == 'usuarioExiste'){
       
        $datos['ok'] = usuarioExistente($_POST['usuario'], $con);

    }elseif($action = 'emailExiste'){
       $datos['ok'] = emailExistente($_POST['email'], $con); 
    }
}
echo json_encode($datos);