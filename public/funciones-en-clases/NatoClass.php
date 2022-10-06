<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class NatoClass {

    public function convertToNatoAlphabet(string $stringToCovertToNATOWords)
    {
        $natoWords = [];

        $alphabetToNatoMap = [
            "a" => "Alfa",
            "b" => "Bravo",
            "c" => "Charlie",
            "d" => "Delta",
            "e" => "Echo",
            "f" => "Foxtrot",
            "g" => "Golf",
            "h" => "Hotel",
            "i" => "India",
            "j" => "Juliett",
            "k" => "Kilo",
            "l" => "Lima",
            "m" => "Mike",
            "n" => "November",
            "o" => "Oscar",
            "p" => "Papa",
            "q" => "Quebec",
            "r" => "Romeo",
            "s" => "Sierra",
            "t" => "Tango",
            "u" => "Uniform",
            "v" => "Victor",
            "w" => "Whiskey",
            "x" => "Xray",
            "y" => "Yankee",
            "z" => "Zulu",
            // " " => " ",
            "," => ",",
            "." => ".",
            "!" => "!",
            "?" => "?"
        ];

        //$stringToCovertToNATOWords = strtolower($stringToCovertToNATOWords);
        //return trim(strtr($stringToCovertToNATOWords, $alphabetToNatoMap ));


        $lettersToTurnToNATOWords = str_split($stringToCovertToNATOWords);
        foreach ($lettersToTurnToNATOWords as $letterToTurnToNATOWord) {
            if (isset($alphabetToNatoMap[strtolower($letterToTurnToNATOWord)])) {
                $natoWords[] = $alphabetToNatoMap[strtolower($letterToTurnToNATOWord)];
            }
        }


        return implode(' ', $natoWords);
    }



}


$natoClassObject = new NatoClass();
var_dump ($natoClassObject->convertToNatoAlphabet("Can you read?"));
