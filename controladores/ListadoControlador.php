<?php

class ListadoControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }


    //Acciones que se pueden realizar en la sección de Listado

    public function listar()
    {
      //  echo "estoy en el controlador de listado y voy alistar";
    
        //Obtener los datos del modelo
        require_once ("./modelos/ListadoModelo.php");
        $modelo= new ListadoModelo();
        $data= $modelo->getListadoPastillas("1234");


      
        //Pasar los datos a la vista
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("listado", $data);

    
    }



}