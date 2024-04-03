<?php

use PHPUnit\Framework\TestCase;
require_once("./lib/GestorBD.php");


class GestorBDTest extends TestCase
{

    public function testValidar()
    {
        $g= new GestorBD();
        $g->conectar();

        $this->assertEquals($g->validar("1234"),true);
        $this->assertEquals($g->validar("433434"),false);
        $this->assertEquals($g->validar("3333 or 1=1"),false);


    }


}


?>