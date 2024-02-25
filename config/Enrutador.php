<?php

class Enrutador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    public function getRuta()
    {

        $partes= explode("/", $_SERVER["SCRIPT_NAME"]);
        $ruta= "/".$partes[1]."/".$partes[2]."/";
        return $ruta;
      
    }
}