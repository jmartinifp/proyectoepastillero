<?php

class Vista
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function render($vista,$data)
    {
        echo "hola caracola";
        if (file_exists("./vistas/".$vista.".php"))
        {
            include_once "./vistas/".$vista.".php";
        }
    }
}