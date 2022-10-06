<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Lexicographical
{
    public function lexicographicalOrder(array $firstArray, array $secondArray)
    {
        //dos arrays con strings
        //tengo que ver si las palabras del primer array están dentro de las del segundo array
        // si es así, devolver array con palabras

        $firstArrayImplode = implode(" ", $firstArray);
        $splitFirstArray = explode(" ", $firstArrayImplode);

        $secondArrayImplode = implode(" ", $secondArray);
        $splitSecondArray = explode(" ", $secondArrayImplode);
        $similarities = [];

        $count = 0;
        foreach ($splitFirstArray as $letter) {
            $similarities[] = strstr($splitSecondArray[$count], $letter);

            $count++;
            var_dump($similarities);

        }











    }
}
$lexicoClassObject = new Lexicographical();
echo $lexicoClassObject->lexicographicalOrder(["live", "strong", "arp"],["lively", "alive", "harp", "sharp", "armstrong"]);
