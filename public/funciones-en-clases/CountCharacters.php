<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class CountCharacters
{
    public function orderedCountOfCharacters(string $stringGiven)
    {
        $splitString = str_split($stringGiven);
        $countLetters = array_count_values($splitString);
        $result = [];
        foreach ($countLetters as $letter => $count) {
            $result[] = [$letter, $count];
        }
        var_dump($result);


    }
}
$countCharactersClassObject = new CountCharacters();
$countCharactersClassObject->orderedCountOfCharacters("abracadabra");

