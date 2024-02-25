<?php

class ListadoControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }


    //Acciones que se pueden realizar en la sección de Listado

    public function eliminar()
    {
        //Recoger el id de la pastilla a eliminar que se envia mediante post
     
        require_once("./lib/GestorSesiones.php");
        $ses= new GestorSesiones();
        if ($ses->existeSesion("CLAVE"))
        {
            
            $id= $_POST["id"];
            require_once ("./modelos/ListadoModelo.php");
            $modelo= new ListadoModelo();
            $data= $modelo-> eliminarPastilla($id);
            if (isset($data["errno"]))
            {
                //ir a la vista del error 500
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("error500", $data);
            }
            else
            {
                require_once("./config/Enrutador.php");
                $route=new Enrutador();
                header("Location: ".$route->getRuta()."listado/listar");  
             
       
            }
        }


    }

    public function listar()
    {
      //  echo "estoy en el controlador de listado y voy alistar";
    
        //Obtener los datos del modelo
        require_once("./lib/GestorSesiones.php");
        $ses= new GestorSesiones();
        if ($ses->existeSesion("CLAVE"))
        {

            require_once ("./modelos/ListadoModelo.php");
            $modelo= new ListadoModelo();
            $data= $modelo->getListadoPastillas($ses->obtenerValorDeSesion("CLAVE"));

            if (isset($data["errno"]))
            {
                //ir a la vista del error 500
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("error500", $data);
            }
            else
            {
                 //Pasar los datos a la vista
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("listado", $data);
            }

        
           
               
        }
        else
        {
            $data["errorvalidacion"]="No tiene permisos para listar pastillas.";
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("inicio",$data);
        }

    
    }



}