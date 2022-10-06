<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class VowelsCount
{
    //contar las vocales
    // devolver número (ej: 6)
    // devolver letra posición del abecedario (ej: f)
    // repetir letra tantas veces como el número posición (ej: ffffff

    const VOWELS = [
            "a",
            "e",
            "i",
            "o",
            "u"
        ];



    public function countTheVowelsOfTheString(string $stringToCount): int
    {
        $result = 0;

        foreach (self::VOWELS as $stringOfVowels) {
            $result += substr_count($stringToCount, $stringOfVowels);
        }

        return $result;
    }

    public function getTheLetter(string $stringToCount)
    {
        $alphabet = [
            "a",
            "b",
            "c",
            "d",
            "e",
            "f",
            "g",
            "h",
            "i",
            "j",
            "k",
            "l",
            "m",
            "n",
            "ñ",
            "o",
            "p",
            "q",
            "r",
            "s",
            "t",
            "u",
            "v",
            "w",
            "x",
            "y",
            "z"
        ];

        $letter = $this->countTheVowelsOfTheString($stringToCount);
        return str_repeat($alphabet[$letter+1], $letter);

    }

}


$vowelsCountObject = new VowelsCount();
echo $vowelsCountObject->getTheLetter("hello hola kaixg g hgf hif yrdfu tdr uffiyfrreto");

