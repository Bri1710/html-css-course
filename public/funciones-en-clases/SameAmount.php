<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SameAmount
{
    public function sameAmountOfExesAndOhs (string $values)
    {

        $lower = strtolower($values);


    }

}
$same = new SameAmount();
echo $same->sameAmountOfExesAndOhs("xxxoo");
echo "<br>";
echo $same->sameAmountOfExesAndOhs("xo0");
echo "<br>";
echo $same->sameAmountOfExesAndOhs("xxOo");

