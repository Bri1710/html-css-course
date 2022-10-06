<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PersistenciaClass
{
    /*
    Parámetro positivo $numberGiven
    Devolver su persistencia multiplicativa
    (número de veces que debes multiplicar los dígitos en num hasta llegar a un solo dígito)

    39 --> 3
    3*9 = 27
    2*7 = 14
    1*4 = 4
    y 4 tiene un solo dígito

    999 --> 4
    9*9*9 = 729
    7*2*9 = 126
    1*2*6 = 12
    1*2 = 2
    y 2 tiene un solo dígito


    */

    //protected int $count = 0;

    public function persistenceOfANumber(int $numberGiven, int $count = 0)
    {
        //$this->count++;
        $count++;

        $number = str_split($numberGiven);
        $length = strlen($numberGiven);
        $array = array_pad($number, $length, 0);
        $product = array_product($array);

        if (strlen($product) !== 1) {
            $count = $this->persistenceOfANumber($product, $count);
        }

        if ($count == 1) {
            $count = 0;
        }

        return $count;
        //return $this->count;
    }

}

$persistenciaClassObject = new PersistenciaClass();
echo $persistenciaClassObject->persistenceOfANumber(99);
