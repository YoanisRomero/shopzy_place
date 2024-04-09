<?php


define("SITE_URL", "http://localhost:3000/interfaz_usuario");

define("CLIENT_ID", "AWKn-1kVs--u5NJpKDCfN8CpBf2PDsClD-q_o-3tN5S_H1Ym8-XuqPp-7VjnlVALCB61xBkTxa66vSK-");
define("CURRENCY", "USD");
define("KEY_TOKEN", "APR.WQC-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos_carrito'])){
    $num_cart = count($_SESSION['carrito']['productos_carrito']);
}

define("MAIL_HOST", "shopzyplace@gmail.com");
define("MAIL_USER", "shopzyplace@gmail.com");
define("MAIL_PASS", "shopzyplace123");
define("MAIL_PORT", "587");

?>