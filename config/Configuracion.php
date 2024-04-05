<?php

class Configuracion
{
    private static $instance = null;
 
    private $rutaServidor;
    private $servidorBD;
    private $usuarioBD;
    private $passwordBD;
    private $nombreBD;


    public function __construct(Type $var = null) {
        
        //Definir la ruta y BD en funcion del entorno en el que me encuentre.
        if (file_exists("local.txt"))
        {
          //Entorno local
          $this->rutaServidor="http://localhost/workspacevc/proyectoepastillero/";
          $this->getServidorBD="localhost";
          $this->usuarioBD="root";
          $this->passwordBD="";
          $this->nombreBD="epastillero";
        }
        else if (file_exists("pruebas.txt"))
        {
          //Entorno local
          $this->rutaServidor="entornodepruebas.free.nf/";
          $this->getServidorBD="sql209.infinityfree.com";
          $this->usuarioBD="if0_36313191";
          $this->passwordBD="bYNEws1Sey9o3Z";
          $this->nombreBD="if0_36313191_entornopruebas";
        }
        else if (file_exists("produccion.txt"))
        {
          //Entorno local
          $this->rutaServidor="servidordeproduccion.free.nf/";
          $this->getServidorBD="sql312.infinityfree.com";
          $this->usuarioBD="if0_36297199";
          $this->passwordBD="mGpXVNWEwId5";
          $this->nombreBD="if0_36297199_epastillero";
        }
        


    }
    
    public function getRutaServidor()
    {
      return $this->rutaServidor;
    }
    public function setRutaServidor($r)
    {
      $this->rutaServidor=$r;
    }

    public function getServidorBD()
    {
      return $this->servidorBD;
    }
    public function getUsuarioBD()
    {
      return $this->usuarioBD;
    }
    public function getPasswordBD()
    {
      return $this->passwordBD;
    }
    public function getNombreBD()
    {
      return $this->nombreBD;
    }




 
    public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Configuracion();
    }
 
    return self::$instance;
  }

  

}


?>