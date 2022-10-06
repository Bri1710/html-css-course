<?php

require_once('classes/Persona.php');

$persona1 = new Persona("BrIXit", "Requejo", 29);
$persona1->setNombre("BrIXit");


$persona2 = new Persona ("RiCHard", "Cripps", 29);
$persona2->setNombre("RiCHard");


echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();

