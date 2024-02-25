<?php

class CrearModelo{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function insertar($codigo, $nombre, $duracion,$frecuencia, $tipodepastilla)
    {


        
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();

        if ($gbd->conectar())
        {
            //Me he conectado bien
            return $gbd->insertarPastilla($codigo, $nombre, $duracion, $frecuencia,$tipodepastilla);


            
         
            
        }
        else
        {
           $data["errno"]=true;
        }

        

    }


}

?>