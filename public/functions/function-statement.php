<?php

function countHowManyLettersHaveMyName(string $name, int $numberLetters = 6)
{
        return "The name has " . strlen($name) . " letters";
}

echo countHowManyLettersHaveMyName("Brixit");
echo "<br>";
echo countHowManyLettersHaveMyName("Richard");
echo "<br>";
echo countHowManyLettersHaveMyName("Pedro");
echo "<br>";

function choseARandomNumberAndWinOrLoose(int $number, string $stringForRandomNumber = " is your chosen number")
{
    if ((rand(1, 20) == 2) || (rand(1, 20) == 17)) {
        return $number . $stringForRandomNumber . ". You win!.";
    }

    return $number . $stringForRandomNumber . ". You lose";
}

echo choseARandomNumberAndWinOrLoose(18);
echo "<br>";


function checkIfIHaveAllINeedToProgramming(array $allTheDevices = []): string
{
    if (in_array("laptop", $allTheDevices)) {
        return "You already have all that you need. ";
    }

    return "You just need a laptop";
}


print_r(checkIfIHaveAllINeedToProgramming(["keyboard", "mouse", "laptop"]));
echo "<br>";


function everytimeThatTheWordAppearsinAStringGiveACoin(string $string, string $word = "por")
{
    if ($coins = substr_count($string, $word)){ // strpos encuentra posición numérica y substr
       return "Has ganado " . $coins . "€";
    }

    return "Try again with a different string";
}

echo everytimeThatTheWordAppearsinAStringGiveACoin ("Gracias por todo lo que haces por mí");
echo "<br>";
echo everytimeThatTheWordAppearsinAStringGiveACoin ("Gracias amor");
echo "<br>";


function checkTheTypeOfTheVariable($variable): string
{
    if (is_string($variable)){
       return 'The value  "' . $variable . '" is a string';
    }
    if (is_int($variable)){
        return 'The value  ' . $variable . ' is an int';
    }
    if (is_float($variable)){
        return 'The value  ' . $variable . ' is a float';
    }
}

echo checkTheTypeOfTheVariable(50);
echo "<br>";
echo checkTheTypeOfTheVariable("hola");
echo "<br>";

function chooseANumberBetween1to5 (int $myNumber): string
{
    date_default_timezone_set("Europe/Madrid");
    $smallerNumber = 1;
    $biggerNumber = 5;

    if ($myNumber == ($biggerNumber - 3)){
        return "Today is " . date ("l");
    }
    if ($myNumber == 1){
        return "The working week start";
    }
    if ($myNumber < 4 && $myNumber > 2){
        return "It's the middle of the week ";
    }
    if ($myNumber == 5 || $myNumber == ($biggerNumber - $smallerNumber)){
        return "It's the end of the week";
    }

}

echo chooseANumberBetween1to5 (1);
echo "<br>";
echo chooseANumberBetween1to5 (2);
echo "<br>";
echo chooseANumberBetween1to5 (3);
echo "<br>";
echo chooseANumberBetween1to5 (4);
echo "<br>";
echo chooseANumberBetween1to5 (5);
echo "<br>";





