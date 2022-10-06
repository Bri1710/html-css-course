<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class TwoToOneClass
{

    public function mergeTheStringsToCreateANewStringAndDeleteTheRepeatLettersOfTheNewString(string $stringOneGiven, string $stringTwoGiven): string
    {

        $mergeStrings = $stringOneGiven . $stringTwoGiven;
        $uniqueValue = [];

        if (preg_match("/^([a-z]+$)/", $mergeStrings)) {
            $splitTheString = str_split($mergeStrings);
            foreach ($splitTheString as $valueLetter) {
                $uniqueValue[$valueLetter] = $valueLetter;
            }
            asort($uniqueValue);
            return implode("", $uniqueValue);

        }
        return "";
    }
}
/*
 * function longest($stringOneGiven, $stringTwoGiven) {
    $chars = array_unique(str_split($stringOneGiven . $stringTwoGiven));
    sort($chars);
    return implode('', $chars);
}
 */
$twoToOne = new TwoToOneClass();
$twoToOne->mergeTheStringsToCreateANewStringAndDeleteTheRepeatLettersOfTheNewString("aretheyhere", "yestheyarehere");
// "aehrsty"
