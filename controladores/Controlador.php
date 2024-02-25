<?php

class Controlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function main()
    {

        
      //  print_r($_GET);
        $controlador="";
        $accion="";
        if (isset($_GET["controlador"]) and !empty($_GET["controlador"]))
        {
            $controlador=$_GET["controlador"];
        }
        else 
        {
            $controlador="inicio";
        }

        if (isset($_GET["accion"]) and !empty($_GET["accion"]))
        {
            $accion=$_GET["accion"];
        }
        else 
        {
            $accion="";
        }

       
        if (file_exists("./controladores/".ucfirst($controlador)."Controlador.php"))
        {
            require_once("./controladores/".ucfirst($controlador)."Controlador.php");
            $nombreClase=ucfirst($controlador)."Controlador";
            $contro= new $nombreClase();
            if ($accion!="")
            {
                if (method_exists($contro,$accion))
                {
                    $contro->$accion();
                }
                else{
                    $data["errorvalidacion"]="Imposible realizar la acción";
                    require_once("./vistas/Vista.php");
                    $vista= new Vista();
                    $vista->render("inicio",$data);
        
                }
               
            }
            else
            {
                require_once("./controladores/InicioControlador.php");
                $contro= new InicioControlador();
                $contro->irAInicio();
            }

            
        }
        else
        {
            require_once("./controladores/InicioControlador.php");
            $contro= new InicioControlador();
            $contro->irAInicio();
        }


    }
}


?>
