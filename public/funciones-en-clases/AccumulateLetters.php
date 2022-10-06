<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class AccumulateLetters
{
    public function repeatTheLettersManyTimes(string $stringOfLetters): string
    {
        $strings = [];

        if (preg_match("/[a-zA-Z]/", $stringOfLetters)) {
            $split = str_split($stringOfLetters);
            foreach ($split as $offset => $letter) {
                $strings[] = str_repeat($letter, $offset+1);
            }

            return (implode("-",$strings));
        }
        return "";
    }

}

//Failed asserting that null matches expected
//'Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu'.

$accumulate = new AccumulateLetters();
echo $accumulate->repeatTheLettersManyTimes("abcd");
