<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SnailFunctionsClass
{

    public function clockwisseNumbers(array $arrayGiven)
    {

        if (!$arrayGiven == []) {
            var_dump($arrayGiven[0]);

            $this->getTheLastNumbers($arrayGiven);
            $this->reverseArray($arrayGiven);
            $this->getTheFirstNumbers($arrayGiven);

        }


        else {
            var_dump([$arrayGiven]);
        }
    }

    public function getTheLastNumbers (array $arrayGiven){

        $lengthOfTheArray = 0;
        $lengthOfTheArray += count($arrayGiven);


        for ($number = 1; $number <= $lengthOfTheArray -1; $number++) {
            $lastNumbers = [(array_pop($arrayGiven[$number]))];
            var_dump($lastNumbers);
        }

    }

    public function reverseArray (array $arrayGiven){

        $lengthOfTheArray = 1;
        $lengthOfTheArray += count($arrayGiven);

        $arrayReverse = (array_reverse($arrayGiven));
        unset($arrayReverse[0]);
        var_dump($arrayReverse);


    }

    public function getTheFirstNumbers (array $arrayGiven){

        $lengthOfTheArray = 0;
        $lengthOfTheArray += count($arrayGiven);


        for ($number = $lengthOfTheArray -2; $number >= 1; $number--) {
            $firstNumbers = [(array_shift($arrayGiven[$number]))];
            var_dump($firstNumbers);
        }


    }


}


$snailFunctionsClass = new SnailFunctionsClass();
print_r ($snailFunctionsClass->clockwisseNumbers([[1, 2, 3, 1], [4, 5, 6, 4], [7, 8, 9, 7], [7, 8, 9, 7]]));
echo "<br>";
// [1, 2, 3, 1, 4, 7, 7, 9, 8, 7, 7, 4, 5, 6, 9, 8]
echo "<br>";
//print_r($snailClass->elementsTravelingClockwisse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]));
echo "<br>";
//print_r($snailClass->elementsTravelingClockwisse([]));
echo "<br>";
//echo "<br>";
echo "<br>";

