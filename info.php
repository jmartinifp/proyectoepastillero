<?php


$ruta= "Sin Ruta";
if (file_exists("local.txt"))
{
    $ruta= "http://localhost/workspacevc/proyectoepastillero/";
}
else if (file_exists("preproduccion.txt"))
{
    $ruta= "http://epastillero.free.nf/";
}




echo $ruta;

phpinfo();
?>