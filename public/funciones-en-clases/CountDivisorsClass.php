<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class CountDivisorsClass
{
    function countTheNumberOfDivisorsOfANumber(int $numberGiven): string
    {
       $totalOfNumbers = [];
       for ($number = 1; $number <= $numberGiven; $number++) {
           if ($numberGiven % $number == 0) {
               $totalOfNumbers[$number] = $number;
           }

       }
       return count($totalOfNumbers);
    }
}

$countDivisorsClassObject = new CountDivisorsClass();
echo $countDivisorsClassObject->countTheNumberOfDivisorsOfANumber(5);
