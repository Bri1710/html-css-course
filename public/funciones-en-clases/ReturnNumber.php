<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ReturnNumber
{
    public function returnASevenOrAFour(int $numberGiven): int
    {
        $numbers = [1 => 0, 2 => 0, 3 => 0, 4 => 7, 5 => 0, 6 => 0, 7 => 4, 8 => 0, 9 => 0];
        return $numbers[$numberGiven];
    }
}
$countCharactersClassObject = new ReturnNumber();
$countCharactersClassObject->returnASevenOrAFour(14);
