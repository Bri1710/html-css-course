<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Multiply
{
    protected $coches = array();

    public function add($coche, $potencia)
    {
        $this->coches[$coche] = $potencia;
    }
    public function mostrarCoches()
    {
        $callback = function ($potencia, $coche) {
            echo $coche . " -> " . $potencia . "\n";
        };
        array_walk($this->coches, $callback);
    }
}
$coche = new Multiply;
$coche->add('Audi', '200');
$coche->add('BMW', '220');
$coche->add('Mercedes', 250);
$coche->mostrarCoches(); // Devuelve: Audi -> 200 BMW -> 220 Mercedes -> 250

/*
    public function multiplyValues(array $numbers, int $multiply): array
    {
        $resultOfTheMultiplication = [];
        foreach ($numbers as $number){
            $resultOfTheMultiplication[] = $number*$multiply;
        }
        return $resultOfTheMultiplication;

    }


$multiplyClassObject = new Multiply();
$multiplyClassObject->multiplyValues([1, 2, 3])(2); // [2, 4, 6]

*/
