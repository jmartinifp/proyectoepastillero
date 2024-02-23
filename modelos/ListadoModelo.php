<?php

class ListadoModelo
{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getListadoPastillas($codigo)
    {
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if ($gbd->conectar())
        {
            //Me he conectado bien
            echo "<br />conexion correcta";
            $data= $gbd->getPastillas($codigo);
         
            
        }
        else
        {
            echo "error grave de conexion";
        }

        return $data;


    }


}