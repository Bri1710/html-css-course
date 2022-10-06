<?php

$string = "Richard, Bri, Luz, Hector";

$explodedNames = explode(", ", $string); // divide un string en varios string

echo "<pre>";

print_r($explodedNames); //print_r muestra lo que hay en el array

$implodedNames = implode(", ", $explodedNames); // (pegamento) une elementos de un array en un string

echo $implodedNames . PHP_EOL;

$arrayDos = [
    "Rich",
    "Brixit",
    "Cripps"
];

print_r($arrayDos);

$implodedDosAsString = implode(" | ", $arrayDos); 

echo $implodedDosAsString;
