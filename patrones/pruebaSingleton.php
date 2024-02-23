<?php

require_once("Singleton.php");
$object1 = Singleton::getInstance();
$object1->setNumero(10);
echo $object1->getNumero()."-";

$object2 = Singleton::getInstance();
$object1->setNumero(20);
echo $object2->getNumero()."-";

$object3 = Singleton::getInstance();

echo $object3->getNumero()."-";
?>