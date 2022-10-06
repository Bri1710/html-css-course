<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SumOfPartsClass
{
    public function getTheSum (array $numbersGiven): array
    {

        $countNumbers = count($numbersGiven);
        $arrayOfNumbers = [];


        for ($start = 0; $start <= $countNumbers; $start++) {
            $result = 0;
            foreach ($numbersGiven as $value) {
                $result += $value;
                var_dump($result);
                unset($numbersGiven[$start]);
            }
            $arrayOfNumbers[] = $result;

        }

        return $arrayOfNumbers;

    }

}
$sumClass = new SumOfPartsClass();
print_r ($sumClass->getTheSum([0, 1, 3, 6, 10]));
// [0, 1, 3, 6, 10]
// [1, 3, 6, 10]
// [3, 6, 10]
// [6, 10]
// [10]
// []
// [20, 20, 19, 16, 10, 0]
echo "<br>";
