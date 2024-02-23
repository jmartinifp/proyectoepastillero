<?php
require_once("GestorCorreo.php");

$enviarCorreo = new GestorCorreo('username');
$enviarCorreo->sendMessage('Problema', 'No funciona algo', '6755642231');

?>