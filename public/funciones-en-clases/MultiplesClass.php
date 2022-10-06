<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//Múltiplos 3 y 5
//Por debajo del número 23 (valor variable dada)
//Array de números
//Devolver suma de los números múltiplos
//Si hay números negativos, devolver 0


class MultiplesClass
{

    function getTheMultiplesOfANumber(int $numberGiven): int
    {
        $arrayOfNumbers = [];
        for ($number = 1; $number < $numberGiven; $number++) {
            foreach ([3,5] as $multiple) {
                if ($number % $multiple == 0) {
                    $arrayOfNumbers[$number] = $number;
                }
            }
        }

        return array_sum($arrayOfNumbers);
    }
}


$multiplesClassObject = new MultiplesClass();
echo $multiplesClassObject->getTheMultiplesOfANumber(34);

// 3, 5, 6, 9 = 23
// 3, 5, 6, 9, 10, 12, 15, 18, 20, 21
// 10
// Suma 119


/*
function getTheMultiplesOfANumber($numberGiven = 23): int
{

    $arrayOfNumbers = [];
    $newArrayOfNumbers = [];
    for ($number = 1; $number < 10; $number++) {

        if ($number % 3 == 0 || $number % 5 == 0) {
            $arrayOfNumbers[$number] = $number;
            $numberGiven = array_sum($arrayOfNumbers);
        }

        for ($x = 1; $x <= $numberGiven; $x++) {
            if ($x % 3 == 0 || $x % 5 == 0) {
                $newArrayOfNumbers[$x] = $x;
            }
        }
    }
    return (count($newArrayOfNumbers));
}
*/
