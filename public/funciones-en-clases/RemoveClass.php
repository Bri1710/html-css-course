<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


class RemoveClass
{

    public function removeWordsOfAnArray(array $arrayOfWords): string
    {
        // Eliminar del array ($arrayOfWords) cada segunda palabra, es decir los impares
        // Devolver el nuevo array sin esas palabras ($newArrayOfWords)
        // write your code here
        $words = "";
       foreach($arrayOfWords as $key => $value) {
            if ($key % 2 !== 0){
                unset($arrayOfWords[$key]);
            }
            $words = implode(" ", $arrayOfWords);
       }

       return $words;

       }
}

$removeClassVariableObject = new RemoveClass();
echo $removeClassVariableObject->removeWordsOfAnArray(["hello", "my", "cutie", "pie"]);

