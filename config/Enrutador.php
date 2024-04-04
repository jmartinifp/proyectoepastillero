<?php

class Enrutador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    

    public function getRuta()
    {


       
        $ruta= "http://localhost/workspacevc/proyectoepastillero/"; 
     
       
        echo $ruta;
        return $ruta;
      
    }
}