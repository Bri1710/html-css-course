<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Isograms
{
    //no tiene que tener letras repetidas
    //no diferencia entre mayúsculas y minúsculas
    //puede ser una frase vacía

    //necesito saber si alguna letra se repite

    public function isIsogram(string $stringGiven): bool
    {

        $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $string = strtolower($stringGiven);


        if ($string === "") {
            return true;
        } else {
            $split = str_split($string);
                $count = substr_count($string, $letter);
                if ($count >= 2) {
                    return false;
                }
                else {
                    return true;
                }
            }
        }
        return false;
    }
}

$isogramClassObject = new Isograms();
print_r($isogramClassObject->isIsogram("Dermatoglyphics")); //true
echo "<br>";
print_r($isogramClassObject->isIsogram("")); //true
echo "<br>";
print_r($isogramClassObject->isIsogram("isogram")); //true
echo "<br>";
print_r($isogramClassObject->isIsogram("aba")); //false
echo "<br>";
print_r($isogramClassObject->isIsogram("moose")); //false
