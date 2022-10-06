<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class MergeStringCopyClass
{

    public function seeIfTheWordCanBeMadeWithPartOneAndTwo(string $word, string $part1, string $part2)
    {

        $lengthOfTheWord = strlen($word);
        $lengthOfPart1 = strlen($part1);
        $lengthOfPart2 = strlen($part2);
        $lenghtParts = $lengthOfPart1 + $lengthOfPart2;


        $splitWord = str_split($word, 1);
        $splitPart1 = str_split($part1, 1);
        $splitPart2 = str_split($part2, 1);
        $mergeParts = array_merge($splitPart1, $splitPart2);
        sort($splitWord);
        sort($mergeParts);
        sort($splitPart1);
        sort($splitPart2);


        if ($splitWord == $mergeParts) {
            $searchInArray1 = 0;

            $pregSplitWord = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
            $pregSplitPart1 = preg_split('//', $part1, -1, PREG_SPLIT_NO_EMPTY);
            $pregSplitPart2 = preg_split('//', $part2, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($pregSplitPart1 as $value1){
                $searchInArray1 = array_search($value1, $pregSplitWord);
                var_dump($searchInArray1);
            }
        }
    }
}





$mergeStringCopyClass = new MergeStringCopyClass();
//print_r($mergeStringCopyClass->seeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "cdw", "oears"));
echo "<br>";
//print_r($mergeStringCopyClass->seeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "code", "wars"));
echo "<br>";
print_r($mergeStringCopyClass->seeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "codr", "waes"));
echo "<br>";
//print_r($mergeStringCopyClass->seeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "cr", "waes"));
echo "<br>";

//acdeorsw

//c o d e w a r s
//c   d   w
//  o   e   a r s

//Correcto : 0,2,4
//Correcto: 1,3,5,6,7


//c o d e w a r s
//c o d       r
//        w a E s

//Correcto: 0,1,2,6
//Incorrecto: 4,5,3,7
