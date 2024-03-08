<?php 

class Seguridad
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function limpiar($cad)
    {
        
        $limpia1= filter_var($cad, FILTER_SANITIZE_EMAIL);
        $limpia2= strip_tags($limpia1);
        $limpia3= htmlspecialchars($limpia2);
        return $limpia3;
    }

}