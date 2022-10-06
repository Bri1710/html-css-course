<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class LastLetter
{
    public function isLetterSameAsLastLetterOfWord(string $word, string $letter): bool
    {
        if(substr($word, -1) == $letter) {
            return true;
        }
        return false;

    }

}
//  str_ends_with ($word, $letter)
$lastLetter = new LastLetter();
echo $lastLetter->isLetterSameAsLastLetterOfWord("batata", "a");
echo $lastLetter->isLetterSameAsLastLetterOfWord("hello", "e");
