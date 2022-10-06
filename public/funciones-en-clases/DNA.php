<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DNA
{
    public function DNAStrand(string $dnaString): string
    {
        $letters = [
            "A" => "T",
            "T" => "A",
            "C" => "G",
            "G" => "C"
        ];

        $dnaCharacters = str_split($dnaString);
        $result = [];

        foreach ($dnaCharacters as $dnaCharacter) {
            $result[] = $letters[strtoupper($dnaCharacter)];
        }

        return implode("", $result);

    }

}

$DNAClassObject = new DNA();
$DNAClassObject->DNAStrand("ATTGC");
