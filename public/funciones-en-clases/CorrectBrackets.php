<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class CorrectBrackets
{
    const BRACKETS = ["()", "[]", "{}"];


    public function areCorrectBrackets(string $bracketsGiven): string
    {

        foreach (self::BRACKETS as $bracket) {
            if (str_contains($bracketsGiven, $bracket)) {
                return $this->areCorrectBrackets(str_replace($bracket, "", $bracketsGiven));
            }
        }

        if (strlen($bracketsGiven)) {
            return false;
        }

        return true;
    }



}


$correct = new CorrectBrackets();
var_dump($correct->areCorrectBrackets("[][]njd"));


