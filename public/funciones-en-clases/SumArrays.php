<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SumArrays
{
    public function doTheSumOfTheArrayOfNumbers(array $numbersGiven): float
    {
        if ($numbersGiven == []) {
            return 0;
        }
        else {
            return array_sum($numbersGiven);
        }
    }
}
//   return ($numbersGiven) ? array_sum($numbersGiven): 0;
$sum= new SumArrays();
$sum->doTheSumOfTheArrayOfNumbers([1, 5.2, 4, 0, -1]);
