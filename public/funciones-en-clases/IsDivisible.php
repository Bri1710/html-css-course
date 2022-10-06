<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class IsDivisible
{

    public function theNumberIsDivisibleByTwoNumbers (int $numberToCheck, int $firstNumber, int $secondNumber): bool
    {
        if ($numberToCheck % $firstNumber === 0 && $numberToCheck % $secondNumber === 0) {
            return true;
        }

            return false;
    }

}
//  return ($n > 0 && (($n % $x) === 0) && ($n % $y) === 0) ? true : false;
$isDivisible = new IsDivisible();
$isDivisible->theNumberIsDivisibleByTwoNumbers (12, 3, 4);
$isDivisible->theNumberIsDivisibleByTwoNumbers (3, 3, 4);
$isDivisible->theNumberIsDivisibleByTwoNumbers (8, 3, 4);
$isDivisible->theNumberIsDivisibleByTwoNumbers (48, 3, 4);
