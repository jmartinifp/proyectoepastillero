<?php

class InicioControlador
{
    public function __construct(Type $var = null) {
    
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("inicio",array());


    }
}