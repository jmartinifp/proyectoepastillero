<?php

class InicioControlador
{
    public function __construct(Type $var = null) {
    
       

    }
    public function irAInicio()
    {
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("inicio",array());

    }
    public function validar()
    {

       // echo "Validar lo que recibo del formulario";
       //
       if (isset($_POST["codigo"]) and !empty($_POST["codigo"]))
       {
        require_once("./modelos/InicioModelo.php");
        $modelo= new InicioModelo();
        $data= $modelo->validar($_POST["codigo"]);
        if ($data)
        {
           

            if (isset($data["errno"]))
            {
                //ir a la vista del error 500
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("error500", $data);
            }
            else
            {
                require_once("./lib/GestorSesiones.php");
                $ses= new GestorSesiones();
                $ses->crearSesion("CLAVE",$_POST["codigo"]);
                /*if ($ses->existeSesion("CLAVE"))
                {
                    //echo "----".$ses->obtenerValorDeSesion("CLAVE");
                
                    //echo "La sesion existe";
                }*/
                require_once("./config/Enrutador.php");
                $route=new Enrutador();
                header("Location: ".$route->getRuta()."listado/listar");
            }
           
            //Creo la sesion
            //voy a listado
        }  
        else{
            $data["errorvalidacion"]="El usuario introducido no existe. Pruebe otro.";
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("inicio",$data);

        }
    
    }
       else
       {
        $data["errorvalidacion"]="El usuario introducido no existe. Pruebe otro.";
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("inicio",$data);
       }

    }

}