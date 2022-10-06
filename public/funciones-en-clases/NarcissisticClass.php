<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class NarcissisticClass
{
    /**
     * @param int $numberGiven
     * @return bool
     */
    public function theNumberIsNarcissistic(int $numberGiven): bool
    {

        if (isset($numberGiven) > 0) {

            $lengthOfTheNumberGiven = strlen($numberGiven); // largo del número dado (3)
            $digitsThatFormTheNumberGiven = str_split($numberGiven); // cifras que forman el número dado
            $array = [];


            foreach ($digitsThatFormTheNumberGiven as $digit) {
                $multiplyTheDigitByItSelf = pow($digit, $lengthOfTheNumberGiven); // multiplicar la cifra por si misma
                $array[] = $multiplyTheDigitByItSelf;
            }

            if (array_sum($array) == $numberGiven) {
                return true;
            }
            return false;
        }

        return false;

    }

}

$narcissistic = new NarcissisticClass();
$narcissistic1 = $narcissistic->theNumberIsNarcissistic(153);
// 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153 true
echo($narcissistic1);
echo "<br>";
$narcissistic2 = $narcissistic->theNumberIsNarcissistic(1652);
// 1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938 false
echo($narcissistic2);
echo "<br>";
$narcissistic2 = $narcissistic->theNumberIsNarcissistic(13455678463);
// "is not a valid number to check because has more than 10 digits"
echo($narcissistic2);
echo "<br>";
$narcissistic2 = $narcissistic->theNumberIsNarcissistic(0);
// "is not a valid number because the number has to be bigger than 0"
echo($narcissistic2);
echo "<br>";

