<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Reversed
{
    public function reversedWords(string $stringGiven): string
    {
        $words = explode(" ", $stringGiven);
        krsort($words);
        return implode(" ", $words);
    }
}

$reversedClassObject = new Reversed();
$reversedClassObject->reversedWords("this like speak doesn't yoda");
