<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class MergeStringClass
{

    public function checkToSeeIfTheWordCanBeMadeWithPartOneAndTwo(string $word, string $part1, string $part2): bool
    {
        //comprobar si la parte 1 y la parte 2 forman la palabra dada
        //las dos partes tienen que contener entre las dos exactamente las mismas letras que la palabra dada
        //y las letras tienen que tener la misma posición numérica que la palabra dada

        //comprobar si la parte 1 y la parte 2 tienen las mismas letras que la palabra dada
        //pasar string a array (palabra) y poner en orden alfabético
        //pasar string a array (parte 1 y parte 2) y poner en orden alfabético
        //comprobar posición numérica array

        $lengthOfTheWord = strlen($word);
        $lengthOfPart1 = strlen($part1);
        $lengthOfPart2 = strlen($part2);
        $lenghtParts = $lengthOfPart1 + $lengthOfPart2;

        if ($lengthOfTheWord == $lenghtParts) {
            $splitWord = str_split($word, 1);
            $splitPart1 = str_split($part1, 1);
            $splitPart2 = str_split($part2, 1);
            $mergeParts = array_merge($splitPart1, $splitPart2);

            foreach ($splitPart1 as $valuePart1) {
                $searchInArrayPart1 = array_search($valuePart1, $splitWord); //Int 0126
                var_dump($searchInArrayPart1);
                $splitNumbersPart1 = str_split($searchInArrayPart1, 1); //Array 0126
                var_dump($splitNumbersPart1);


                if ($searchInArrayPart1 == sort($splitNumbersPart1, SORT_NUMERIC)){ // orden ascendente 0126


                    foreach ($splitPart2 as $valuePart2) {
                        $searchInArrayPart2 = array_search($valuePart2, $splitWord); //Int 4537
                        $splitNumbersPart2 = str_split($searchInArrayPart2, 1); //Array 4537
                        if ($searchInArrayPart2 == sort($splitNumbersPart2, SORT_NUMERIC)) { //orden ascendente 3537
                            if (sort($mergeParts) == sort($splitWord)){
                                return true;
                            }
                        }
                    }
                }


            }
        }
        return false;
    }

}


$mergeStringClass = new MergeStringClass();
//print_r($mergeStringClass->checkToSeeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "cdw", "oears"));
echo "<br>";
//print_r($mergeStringClass->checkToSeeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "code", "wars"));
echo "<br>";
print_r($mergeStringClass->checkToSeeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "codr", "waes"));
echo "<br>";
//print_r($mergeStringClass->checkToSeeIfTheWordCanBeMadeWithPartOneAndTwo("codewars", "co", "wa"));
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
