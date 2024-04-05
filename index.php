<?php
session_start();
require_once("./controladores/Controlador.php");
require_once("./config/Configuracion.php");
$controlador= new Controlador();
$controlador->main();

?>