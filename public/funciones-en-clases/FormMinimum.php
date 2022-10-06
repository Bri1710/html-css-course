<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class FormMinimum
{
    public function minimumWithUniqueNumbers (array $numbersGiven)
    {
        $unique = array_unique($numbersGiven);
        sort($unique);
        return implode("", $unique);
    }

}

echo "<br>";
//echo $minimum->minimumWithUniqueNumbers([1, 3, 1]);

