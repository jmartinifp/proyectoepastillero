<?php

use PHPUnit\Framework\TestCase;
require_once("./lib/GestorBD.php");

class GestorBDTest extends TestCase
{

     public function testConectar()
     {
        
        $gbd= new GestorBD();

        $this->assertEquals($gbd->conectar(), true);


     }

     public function testGetPastillas()
     {
        
        $gbd= new GestorBD();
        $gbd->conectar();


        $this->assertEquals($gbd->getPastillas("87676"), array());


     }

     /*public function testEliminarPastilla()
     {
        
        $gbd= new GestorBD();
        $gbd->conectar();


       // $this->assertEquals($gbd->eliminarPastilla("87676"), false);


     }*/



}