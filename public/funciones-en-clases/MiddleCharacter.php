<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class MiddleCharacter
{

    public function getTheMiddleCharacter(string $text): string
    {
        $lengthOfTheString = strlen($text);
        if ($lengthOfTheString > 0 && $lengthOfTheString < 1000) {
            if ($lengthOfTheString === 1 || $lengthOfTheString === 2){
                return $text;
            }
            if ($lengthOfTheString % 2 === 0) {
                return substr($text, $lengthOfTheString / 2 - 1, -($lengthOfTheString / 2 - 1));
            }
            else {
                return substr($text, floor($lengthOfTheString / 2), -floor($lengthOfTheString / 2));
            }
        }
        return "";
    }
}
//  function getMiddle($text) {
//  $len = strlen($text);
//  if ($len % 2 === 0) {
//  return substr($text, $len / 2 - 1, 2);
//  }
//  return substr($text, $len / 2, 1);
//}
$middle = new MiddleCharacter();
echo $middle->getTheMiddleCharacter("test");
echo "<br>";
echo $middle->getTheMiddleCharacter("testing");
echo "<br>";
echo $middle->getTheMiddleCharacter("middle");
echo "<br>";
echo $middle->getTheMiddleCharacter("A");
echo "<br>";

