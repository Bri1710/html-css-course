<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DescendClass
{
    function descendingOrderOfANumber(int $numberGiven) : int
    {
        $array = array_map('intval', str_split($numberGiven));
        arsort($array);
        return implode("", $array);

    }
}



$descendClassObject = new DescendClass();
echo $descendClassObject->descendingOrderOfANumber(59873);
