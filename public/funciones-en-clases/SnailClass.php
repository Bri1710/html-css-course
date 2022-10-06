<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SnailClass
{
    public function elementsTravelingClockwisse (array $arrayGiven)
    {
        $lengthOfTheArray = 0;
        $lengthOfTheArray += count($arrayGiven); //devuelve int (3)

        if (!$arrayGiven == []){

            echo "--> muestra primer array " . "<br>";
            echo "(array 1 2 3)";
            var_dump($arrayGiven[0]);

            echo "--> muestra últimos números array (excepto del primer array)" . "<br>";
            echo "(mixed/null 6 9)";
            echo "va a repetirse posteriormente";
            for ($number = 1; $number <= $lengthOfTheArray - 1; $number++) {
                $lastNumbers = [(array_pop($arrayGiven[$number]))];
                var_dump($lastNumbers);
            }

            echo "--> muestra array revertido último array" . "<br>";
            echo "(array 8 7)";
            echo "va a repetirse posteriormente";
            $arrayReverse = (array_reverse($arrayGiven[$lengthOfTheArray - 1]));
            var_dump($arrayReverse);


            echo "--> muestra primeros números array (excepto del primer array y del último)" . "<br>";
            echo "(mixed/null 4)";
            echo "puede repetirse posteriormente";
            for ($number = $lengthOfTheArray-2; $number >= 1; $number--) {
                $firstNumbers = [(array_shift($arrayGiven[$number]))];
                var_dump($firstNumbers);

            }
            echo "(array 5)";
            var_dump($arrayGiven[1]);

        }
        else {
            echo "--> muestra array vacío " . "<br>";
            var_dump([$arrayGiven]);
        }
    }


}


$snailClass = new SnailClass();
print_r ($snailClass->elementsTravelingClockwisse([[1, 2, 3, 1], [4, 5, 6, 4], [7, 8, 9, 7], [7, 8, 9, 7]]));
echo "<br>";
// [1, 2, 3, 1, 4, 7, 7, 9, 8, 7, 7, 4, 5, 6, 9, 8]
echo "<br>";
//print_r($snailClass->elementsTravelingClockwisse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]));
echo "<br>";
//print_r($snailClass->elementsTravelingClockwisse([]));
echo "<br>";
//echo "<br>";
echo "<br>";

