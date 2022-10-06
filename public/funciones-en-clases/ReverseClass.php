<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ReverseClass
{
    /**
     * @param string $stringToCheck
     * @return string
     */
    public function reverseTheWordsOfTheStringThatHaveMoreThanFiveLetters(string $stringToCheck): string
    {
        $arrayOfWordsToCheck = explode(" ", $stringToCheck);
        $arrayOfWordsToReturn = [];

        foreach ($arrayOfWordsToCheck as $word) {
            $lengthOfTheWord = strlen($word);

            if ($lengthOfTheWord < 5) {
                $arrayOfWordsToReturn[] = $word;
            }
            else {

                $reverseWords = strrev($word);
                $arrayOfWordsToReturn[] = $reverseWords;
            }
        }

        return implode(" ", $arrayOfWordsToReturn);
    }
}

$reverse = new ReverseClass();
echo $reverse->reverseTheWordsOfTheStringThatHaveMoreThanFiveLetters ("Hola tixirB Requejo ocnaviV Sanchez");
echo "<br>";
echo $reverse->reverseTheWordsOfTheStringThatHaveMoreThanFiveLetters ("Hola qué tal?");
echo "<br>";

