<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Grow
{
    public function multiplyTheNumbers(array $numbers): int
    {
        $result = 1;

        foreach ($numbers as $number) {
            $result = $number * $result;
        }

        return $result;
    }
}



$multiplyClassObject = new Grow();
echo $multiplyClassObject->multiplyTheNumbers([3, 2, 4, 6]);
