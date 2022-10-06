<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class HighestScoring
{

    //convertir letra a número
    //convertir en array y sumar numeros

    public function convertLettersToNumbers(string $stringGiven): string
    {
        $letterToNumber = [
            "a" => 1,
            "b" => 2,
            "c" => 3,
            "d" => 4,
            "e" => 5,
            "f" => 6,
            "g" => 7,
            "h" => 8,
            "i" => 9,
            "j" => 10,
            "k" => 11,
            "l" => 12,
            "m" => 13,
            "n" => 14,
            "o" => 15,
            "p" => 16,
            "q" => 17,
            "r" => 18,
            "s" => 19,
            "t" => 20,
            "u" => 21,
            "v" => 22,
            "w" => 23,
            "x" => 24,
            "y" => 25,
            "z" => 26,
            " " => " "
        ];

        $numbers = [];
        $lengthOfTheWord = $this->lengthOfTheWord($stringGiven);
        $split = str_split($stringGiven);

        foreach ($split as $letter) {
            $numbers[] = $letterToNumber[$letter];

        }
            return implode("",$numbers);

    }

    public function lengthOfTheWord (string $stringGiven): array
    {

        $lengthOfTheWords = [];

            $stringExplode = explode(" ", $stringGiven); // dividir palabras después de cada espacio (0 a 3)
            $countWords = count($stringExplode); // 4 palabras

            for ($countLetters = 0; $countLetters < $countWords; $countLetters++) {
                $length = strlen($stringExplode[$countLetters]); // 4, 2, 2, 7 largo de cada palabra 0, 1, 2, 3
                $lengthOfTheWords[] = $length;
            }
            return $lengthOfTheWords;

    }
}




$highest= new HighestScoring();
print_r($highest->convertLettersToNumbers('take me to semynak'));
echo "<br>";
print_r($highest->convertLettersToNumbers('aa b'));

