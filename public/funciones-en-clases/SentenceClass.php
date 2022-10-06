<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');



// comprobar que no haya numeros
// pasar de array a string con espacios entre cada palabra

class SentenceClass
{

    /**
     * @param array $array
     * @return array
     */
    private function isAnArrayOfStrings(array $array): bool
    {
        foreach ($array as $data) {
            if(is_numeric($data)){
               return false;
            }
        }

        return true;
    }

    /**
     * @param array $array
     * @return array
     */
    private function removeAllNonStringsFromArray(array $array): array
    {
        foreach ($array as $key => $data) {
            if (!is_string($data)) {
                unset($array[$key]);
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @return string
     */
    public function convertAnArrayToASentence(array $array) : string
    {
        $array = $this->removeAllNonStringsFromArray($array);
        return implode(' ', $array);

        /*if($this->isAnArrayOfStrings($array)) {
            return implode(" ", $array);
        }
        return "";*/
    }

}


$sentenceClassVariableObject = new SentenceClass();
$sentence1 = $sentenceClassVariableObject->convertAnArrayToASentence(["hello", 2, "hola", "adiós"]);
echo $sentence1 . "<br>";
$sentence2 = $sentenceClassVariableObject->convertAnArrayToASentence([1, "bye", "hola", "adiós"]);
echo $sentence2 . "<br>";
$sentence3 = $sentenceClassVariableObject->convertAnArrayToASentence(["four", "bye", "hola", "adiós"]);
echo $sentence3 . "<br>";

