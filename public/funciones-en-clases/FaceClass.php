<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


class FaceClass
{
    const MOUTH_CONSTANT = [
        ")" => ")",
        "D" => "D",
        "O" => "O"
    ];

    const NOSE_CONSTANT = [
        "-" => "-",
        "~" => "~"
    ];

    const EYE_CONSTANT = [
        ":" => ":",
        ";" => ";"
    ];

    public function countSmileys(array $faces): int
    {
        $smiley = 0;

        foreach ($faces as $face) {
            //Ahora $face es una string
            if ($this->checkingStringLength($face)) {
                if ($this->isEye($this->getASpecificLetterFromAWord($face, 0)) &&
                    //La primera función getASpecificLetterFromAWord tiene dos parámetros. El primero es una string,
                    //es la $word de la función y el segundo un int, es el $letterNumberOfWord de la función
                    //La segunda función isEye tiene un parámetro que es la string $character
                    $this->isNose($this->getASpecificLetterFromAWord($face, 1)) &&
                    $this->isMouth($this->getASpecificLetterFromAWord($face, 2))) {
                    $smiley += 1; //si son correctas las anteriores condicionales, suma 1 a $smiley
                }
            }
        }

        return $smiley;
    }

    public function getASpecificLetterFromAWord(string $word, int $letterNumberOfWord): string
    {
        return substr($word, $letterNumberOfWord, 1);
    }

    public function checkingStringLength(string $string, int $length = 3): bool
    {
       if (strlen($string) == $length) {
           return true;
       }

       return false;
    }


    public function isEye(string $character): bool
    {
        if (array_key_exists($character, self::EYE_CONSTANT)){
            //Si el primer parámetro que es la key del array (:), se encuentra en el segundo parámetro,
            //que es el array (EYE_CONSTANT), devuelve true
            return true;
        }

        return false;
    }

    public function isNose(string $character): bool
    {
        if (array_key_exists($character, self::NOSE_CONSTANT)) {
            return true;
        }

        return false;
    }

    public function isMouth(string $character): bool
    {
        if(array_key_exists($character, self::MOUTH_CONSTANT)) {
            return true;
        }

        return false;
    }
}

$kataClassVariableObject = new FaceClass();
var_dump($kataClassVariableObject->countSmileys([":-D", ";-)", "*G", "-O"])); //faces
