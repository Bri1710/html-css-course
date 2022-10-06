<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PrinterErrorClass
{
    public function checkIfThereIsAnyWrongLetterOnTheStringGiven(string $stringGiven): string
    {
        $lengthOfTheString = strlen($stringGiven);
        $result = 0;

        if ((preg_match("/^[a-zA-Z]+$/", $stringGiven) == 0) || $lengthOfTheString < 1) {
            return "";
        } else {
            foreach (range('n', 'z') as $forbiddenLetter) {
                $result += substr_count($stringGiven, $forbiddenLetter);
            }
            return ($result. "/" . $lengthOfTheString);

        }
    }
}



// var_dump($count . "/" . $lengthOfTheString);
//return $count . "/" . $lengthOfTheString;
//for ($error = 0; $error <= $lengthOfTheString; $error++){

$printerErrorClass = new PrinterErrorClass();
print_r($printerErrorClass->checkIfThereIsAnyWrongLetterOnTheStringGiven("aaabbbbhaijjjm")); //0/14
echo "<br>";
print_r($printerErrorClass->checkIfThereIsAnyWrongLetterOnTheStringGiven("aaabbbbhaijjjm48"));
echo "<br>";
print_r($printerErrorClass->checkIfThereIsAnyWrongLetterOnTheStringGiven("aaaxbbbbyyhwawiwjjjwwm")); //8/22
echo "<br>";
print_r($printerErrorClass->checkIfThereIsAnyWrongLetterOnTheStringGiven(""));
echo "<br>";
