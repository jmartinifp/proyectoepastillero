<?php
use PHPUnit\Framework\TestCase;
require_once("./modelos/ListadoModelo.php");

class ListadoModeloTest extends TestCase
{

    public function testGetListadoPastillas()
     {
        $modelo= new ListadoModelo();

       


        //$this->assertEquals($modelo->getListadoPastillas("1234"), array());
        $this->assertNotEmpty($modelo->getListadoPastillas("1234"));


     }
}