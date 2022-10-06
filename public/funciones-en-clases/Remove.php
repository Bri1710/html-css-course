<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Remove
{
    public function removeExclamationMarks(string $stringGiven): string
    {
        $replace = ["¡", "!"];
        return ucfirst(str_replace($replace, "", $stringGiven));
    }
}

$RemoveClassObject = new Remove();
print_r($RemoveClassObject->removeExclamationMarks("¡hola mundo!"));


