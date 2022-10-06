<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class WordsToMarks
{
    //funcion convierte letra a numero
    // funcion sumar numeros palabra
    // funcion sumar numeros palabras
    /**
     * @param string $wordGiven
     * @return int
     */
    public function changeLetterToNumberAndSum (string $wordGiven): int
    {
        $letterToNumber = [
            "a" => 1,
            "b" => 2,
            "c" => 3,
            "d" => 4,
            "e" => 5,
            "f" => 6,
            "g" => 7,
            "h" => 8,
            "i" => 9,
            "j" => 10,
            "k" => 11,
            "l" => 12,
            "m" => 13,
            "n" => 14,
            "o" => 15,
            "p" => 16,
            "q" => 17,
            "r" => 18,
            "s" => 19,
            "t" => 20,
            "u" => 21,
            "v" => 22,
            "w" => 23,
            "x" => 24,
            "y" => 25,
            "z" => 26
        ];


        $lengthOfTheWord = strlen($wordGiven);
        $splitTheWord = str_split($wordGiven);

        $characters = str_split($wordGiven);
        $valuesForSum = [];

        foreach ($characters as $character) {
            if (isset($letterToNumber[strtolower($character)])) {
                $valuesForSum[] = $letterToNumber[strtolower($character)];
            }
        }

        return array_sum($valuesForSum);

        if (preg_match('/^[a-z]+$/', $wordGiven)) {
            for ($letterToCheck = 0; $letterToCheck < $lengthOfTheWord; $letterToCheck++) {
                foreach ($letterToNumber as $letter => $number) {
                    if ($letter == $splitTheWord[$letterToCheck]) {
                        $valuesForSum[] = $number;
                    }
                }
            }
            return array_sum($valuesForSum);
        }
        return 0;
    }
}

$marks = new WordsToMarks();
echo $marks->changeLetterToNumberAndSum("love you");
echo "<br>";
echo $marks->changeLetterToNumberAndSum("friends");
echo "<br>";
echo $marks->changeLetterToNumberAndSum("Richard");
echo "<br>";
echo $marks->changeLetterToNumberAndSum("1hola");
