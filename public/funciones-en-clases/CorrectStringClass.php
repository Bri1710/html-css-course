<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class CorrectStringClass
{

    public function changeSomeCharactersToOthers(string $stringGiven): string
    {
        return (str_replace(array("5", "0", "1"), array("S", "O", "I"), $stringGiven));

    }

}
$correct = new CorrectStringClass();
$correct->changeSomeCharactersToOthers("PARIS");
echo "<br>";
//$correct->changeSomeCharactersToOthers("LONDON");
