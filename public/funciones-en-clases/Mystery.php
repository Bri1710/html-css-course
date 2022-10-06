<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Mystery
{
    public function mysteryMaths(int $numberOne, int $numberTwo): int
    {
       return $numberOne + $numberTwo;

    }
}
$mysteryClassObject = new Mystery();
$mysteryClassObject->mysteryMaths(4, 27);
