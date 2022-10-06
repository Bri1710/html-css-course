<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class AnagramClass
{
    public function getAnAnagram(string $wordGiven, array $wordsToCompareWithTheWordGiven)
    {
        $anagramWords = [];
        $mainWordToCheck = $this->sortStringToBeAlphabeticalOrder($wordGiven);

        foreach ($wordsToCompareWithTheWordGiven as $wordToCompareWithTheWordGiven) {
            $currentWordWeAreChecking = $this->sortStringToBeAlphabeticalOrder($wordToCompareWithTheWordGiven);

            if ($mainWordToCheck === $currentWordWeAreChecking) {
                $anagramWords[] = $wordToCompareWithTheWordGiven;
            }
        }

        return $anagramWords;
    }

    /**
     * @param string $string
     * @return string
     */
    private function sortStringToBeAlphabeticalOrder(string $string): string
    {
        $splitWord = str_split($string); // divir palabras
        asort($splitWord);
        return implode('', $splitWord);
    }
}


$anagram = new AnagramClass();
$anagrams = $anagram->getAnAnagram('racer', ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']);

var_dump($anagrams);
// Devolver ['carer', 'arcre', 'carre']
