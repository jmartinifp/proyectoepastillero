<?php

class InicioModelo
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    
    public function validar($codigo)
    {
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if ($gbd->conectar())
        {
            //Me he conectado bien
            
            $data= $gbd->validar($codigo);
            return $data;
            
        }
        else
        {
            $data["errno"]=true;
        }

        return $data;
    }



}