<?php

class GestorSesiones
{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function crearSesion($clave, $valor)
    {
        $_SESSION[$clave]=$valor;
    }

    public function existeSesion($clave)
    {
        if (isset($_SESSION[$clave]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function obtenerValorDeSesion($clave)
    {
        return $_SESSION[$clave];
    }

}