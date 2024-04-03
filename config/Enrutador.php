<?php

class Enrutador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    public function getRuta()
    {

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
        return $ruta;
      
    }
}