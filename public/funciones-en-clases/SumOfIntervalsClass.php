<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SumOfIntervalsClass
{

    public function sumOfTheIntervalsLength(array $intervalsGiven)
    {
        if($this->checkIfAreValidTheIntervalsGiven($intervalsGiven)) {
            $intervals = ($this->checkIfAreValidTheIntervalsGiven($intervalsGiven));
            $countIntervals = count($intervals);
            $sortTheNumbers = (asort($intervals));




        }

    }


        private function checkIfAreValidTheIntervalsGiven(array $intervalsGiven): array
        {
        foreach ($intervalsGiven as $value) {
            $countValue = (count($value));
            if (($countValue == 2) && $value[0] < $value[1]) {
                return $intervalsGiven;
            }
            else {
                return [];
            }
        }
        return [];
        }
}
//      $singleArray = [];
//            foreach ($intervals as $childArray)
//            {
//                foreach ($childArray as $value)
//                {
//                    $singleArray[] = $value;
//                }
//
//            }
//            //$unique = array_unique($singleArray);
//            var_dump($singleArray);
//for ($count = 0; $count < $countIntervals; $count++) {
    //var_dump($intervals[$count][0]);
    //var_dump($intervals[$count][1]);

// si el primer número del array es igual que otro primer número, eliminar uno de ellos
// si el primer número es igual que otro segundo número, eliminar segundo.
// si el segundo número es igual o más pequeño que otro segundo, eliminar

$sumOfIntervals = new SumOfIntervalsClass();
//$sumOfIntervals->sumOfTheIntervalsLength([[1,5], [10, 20], [1, 6], [16, 19], [5, 11]]);
// eliminar [1-5], [1,6], [16-19] y [5,11]
// empieza por el número 1 y termina en el 20
// [1-20] resultado 19

echo "<br>";
$sumOfIntervals->sumOfTheIntervalsLength([[1,4], [7, 10], [3,5]]);
// eliminar [1,4] y [3,5]
// empieza por el número 1 y termina en el 5
// empieza por el número 7 y termina en el 10
// [1,5] y [7,10]  resultado 7

echo "<br>";
//$sumOfIntervals->sumOfTheIntervalsLength([[1,3], [3,7], [6,10], [14,17]]);
// [1,3], [3,7], [6,10], [14,17]
// el número más bajo = 1
// el número 3 se repite en el primer y segundo valor
// el 10 es mayor que 7, entonces [1,7] y [14,17]


