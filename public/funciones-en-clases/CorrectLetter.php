<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class MakeNegative
{
    public function changeThePositiveNumberToNegativeNumber($number)
    {
        if ($number > 0) {
            $number = $number * -1;
        }

        return $number;
    }
}
//     return -abs($number);
$negative = new MakeNegative();
echo $negative->changeThePositiveNumberToNegativeNumber(7);
