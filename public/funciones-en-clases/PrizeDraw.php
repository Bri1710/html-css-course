<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PrizeDraw
{

    public function getTheNumbersFromTheLettersOfTheNames(string $names)
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

        $allTheNames = ($this->getTheNames($names));
        $countNames = count($allTheNames);
        $lettersOfTheNames = [];

        for ($name = 0; $name < $countNames; $name++) {
            $splitNameToLetters = str_split($allTheNames[$name]);
            $lettersOfTheNames = $splitNameToLetters;
            var_dump($lettersOfTheNames);

        }
        for ($letter = 1; $letter < $countNames; $letter++) {
            $result = $letterToNumber[$lettersOfTheNames[$letter]];
            var_dump($result);


        }
    }
    /*
     *
        for ($name = 0; $name < $countNames; $name++) {
            $split = str_split($allTheNames[$name]);
            var_dump($theKeyIsTheLetterAndTheValueIsTheNumber[$split[0]]);

     */


    private function getTheNames(string $names): array
    {
        $allTheNames = [];

        foreach (explode(",", $names) as $name) {
            if (ctype_alpha($name)) {
                $allTheNames[] = strtolower($name);
            }
        }
        return $allTheNames;
    }
}

    /*
    private function checkIfTheValuesGivenAreValid(string $names, int $range)
    {
        $explodeNames = explode(",", $names);

        if ($names == "") {
            return "no participants";
        }
        if ($range > count($explodeNames)) {
            return "not enough participants";
        }

    }
    */
//RETURN STRING
//if ($names == "") {
//return "no participants";

//RETURN INT
//if ($range > count($explodeNames)) {
//return "not enough participants";

$result = new PrizeDraw();
$result->getTheNumbersFromTheLettersOfTheNames("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4);
//$result->getTheWinner("Elijah,Chloe,Elizabeth,Matthew,Natalie,Jayden", [1, 3, 5, 5, 3, 6], 2);
