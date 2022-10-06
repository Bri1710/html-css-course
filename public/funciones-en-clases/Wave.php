<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Wave
{
    public function mexicanWave(string $stringGiven)
    {
        $string = str_split(strtolower($stringGiven));
        $replace = [];

        foreach ($string as $offset => $letter) {
            // Change $offset of $string to be uppercase
            // $offset = 0
            // $string = hello
            // get offset 0 and strtoupper the letter -> h -> H
            // add to replace
            // repeat for next offset

            $replace[] = str_replace($letter, strtoupper($offset), $stringGiven);
        }

        var_dump(
            implode(", ", $replace)
        );
    }
}
$waveClassObject = new Wave();
$waveClassObject->mexicanWave("hEllo");

/*
class Wave
{
    public function mexicanWave(string $stringGiven): string
    {
        $replace = [];

        for ($count = 0; $count <= strlen($stringGiven)-1; $count++) {
            $replace[] = str_replace($stringGiven[$count], strtoupper($stringGiven[$count]), $stringGiven);
        }
        return (implode (", ", $replace));

    }
}
$waveClassObject = new Wave();
echo $waveClassObject->mexicanWave("hello");
*/
