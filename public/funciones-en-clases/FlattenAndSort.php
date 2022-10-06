<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class FlattenAndSort
{
    public function getTheValues(array $arrayOfNumbers): array
    {
        $values = [];

        foreach ($arrayOfNumbers as $numbers) {
            if (count($numbers)) {
                $values = array_merge($values, $numbers);
            }
        }

        return $values;
    }

    public function sortValuesInAscendentOrder(array $arrayOfNumbers): array
    {
        $values = $this->getTheValues($arrayOfNumbers);
        sort($values);
        return $values;
    }

}
$version = new FlattenAndSort();
var_dump($version->sortValuesInAscendentOrder([[], [], [], [2, 1, 45], [], [1]]));

