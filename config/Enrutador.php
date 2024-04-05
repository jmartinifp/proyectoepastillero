<?php

class Enrutador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    

    public function getRuta()
    {

        $conf = Configuracion::getInstance();

        $ruta= $conf->getRutaServidor();
   
       
        echo $ruta;
        return $ruta;
      
    }
}