<?php

require '../configu/configuracion.php';
require '../configu/database.php';
require '../usuario/clientes_funciones.php';


$id= isset($_GET['id']) ? $_GET['id'] : '';
$id= isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
    header("Location index.php");
  
    exit;
}

$db = new Database();
$con = $db->conectar();

echo validarToken($id, $token, $con);
?>