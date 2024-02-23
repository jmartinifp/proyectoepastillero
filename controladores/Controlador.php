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

        echo $controlador;
        echo "<br />";
        echo $accion;
        if (file_exists("./controladores/".ucfirst($controlador)."Controlador.php"))
        {
            require_once("./controladores/".ucfirst($controlador)."Controlador.php");
            $nombreClase=ucfirst($controlador)."Controlador";
            echo "<br />".$nombreClase;
            $contro= new $nombreClase();
            if ($accion!="")
            {
                $contro->$accion();
            }
            else
            {
                echo "404 error";
            }

            
        }
        else
        {
            require_once("./controladores/InicioControlador.php");
            $contro= new InicioControlador();
        }


    }
}


?>
