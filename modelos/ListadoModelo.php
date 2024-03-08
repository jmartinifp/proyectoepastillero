<?php

class ListadoModelo
{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function eliminarPastilla($id)
    {

       
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if ($gbd->conectar())
        {
            //Eliminar pastilla
            
            $data= $gbd->eliminarPastilla($id);
         
            
        }
        else
        {
            $data["errno"]=true;
        }

        return $data;

    }
    public function getListadoPastillas($codigo)
    {
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if ($gbd->conectar())
        {
            //Me he conectado bien
            
            $data= $gbd->getPastillas($codigo);
         
            
        }
        else
        {
            $data["errno"]=true;
        }

        return $data;


    }


}