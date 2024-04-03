<?php

class CrearControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function mostrar()
    {
        require_once("./lib/GestorSesiones.php");
        $ses= new GestorSesiones();
        if ($ses->existeSesion("CLAVE"))
        {
        //Mostrar el formulario
        //Renderizar la vista
        require_once("./vistas/Vista.php");
        $vista= new Vista();
        $vista->render("crear",array());
        }
        else
        {

            $data["errorvalidacion"]="Se ha producido un error con la base de datos.";
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("inicio",$data);
            
        }
        
    }

    public function anadir()
    {

        require_once("./lib/GestorSesiones.php");
        $ses= new GestorSesiones();
        if ($ses->existeSesion("CLAVE"))
        {
             //Recoger los datos tipo POST
            
             require_once("./lib/Seguridad.php");
        
             $seg= new Seguridad();
            //Acceder al modelo CrearModelo
            require_once ("./modelos/CrearModelo.php");

            $modelo= new CrearModelo();
            $codigo= $ses->obtenerValorDeSesion("CLAVE");
            $nombre=$_POST["nombre"];
            $duracion=$_POST["duracion"];
            $frecuencia=$_POST["frecuencia"];
            $tipodepastilla=$_POST["tipodepastilla"];
            $data=$modelo->insertar($codigo,$nombre, $duracion, $frecuencia, $tipodepastilla);
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
                    require_once("./config/Enrutador.php");
                    $route=new Enrutador();
                    header("Location: ".$route->getRuta()."listado/listar");
                   
                }
            }
                
            else
            {

                $data["errorinsercion"]="Se ha producido un error con la base de datos.";
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("crear",$data);
                
            }
            


            //Renderizar la vista
        }
        else
        {
            $data["errorvalidacion"]="No tiene permisos para crear una nueva pastilla.";
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("inicio",$data);
        }
          
       
    }
}