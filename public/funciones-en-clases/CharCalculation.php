<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class CharCalculation
{

    private function changeLettersToAsciiNumbers(string $letters): string
    {
        $ascii = [];

        foreach (str_split($letters) as $character) {
            $ascii[] = ord($character);
        }

        return implode("", $ascii);
    }

    public function substractTheCharacters(string $letters): int
    {
        $resultNumbers = 0;
        $changeNumberSevenToNumberOne = 0;

        foreach (str_split($this->changeLettersToAsciiNumbers($letters)) as $number){
            $resultNumbers += $number;
            $changeNumberSevenToNumberOne += str_replace(7, 1, $number);
        }

        return ($resultNumbers - $changeNumberSevenToNumberOne );
    }

}

$calculation = new CharCalculation();
var_dump($calculation->substractNumbers("ABC"));
