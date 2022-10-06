<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class RemoveExclamationClass
{
    public function removeWordsFromTheSentenceWhichContainsOneExclamationMark(string $stringToCheck): string
    {

        $exclamationToFind = "!";
        $explodeString = explode(" ", $stringToCheck);

        foreach ($explodeString as $key => $value) {
            if (substr_count($value, $exclamationToFind) === 1) {
                unset($explodeString[$key]);
            }
        }

        return implode(" ", $explodeString);
    }

}

$removeExclamation = new RemoveExclamationClass();
echo $removeExclamation->removeWordsFromTheSentenceWhichContainsOneExclamationMark("Hi !Hi!! ¡Hi! Hi! This!Has!Two This!HasOne");
// "Hi !Hi ¡Hi!"
