<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Shortest
{
    public function shortestWord(string $stringGiven): int
    {
        $countWords = str_word_count($stringGiven)-1;
        $explodeTheString = explode(" ", $stringGiven);
        $result = [];

        for ($count = 0; $count <= $countWords; $count++) {
           $result[] = strlen($explodeTheString[$count]);
        }
        return (min($result));
    }

}

$shortestClassObject = new Shortest();
$shortestClassObject->shortestWord("Let's travel abroad shall we");
