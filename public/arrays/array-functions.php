<?php

$countries = ["Inglaterra", "España", "Croacia"];

$lastCountry = array_pop($countries); //saca del array el último país

$firstCountry = array_shift($countries); //saca del array el primer país

array_push($countries, "Francia", "Croacia"); //se añaden al final de la lista

array_unshift($countries, "Inglaterra", "Italia"); // se incluyen al principio de la lista

/*********************************************************************************************************/

$letters = ["a", "b", "c", "d", "e", "f", "g", "h"]; // la "a" es el número 0

$result = array_slice($letters, 5); // extrae la parte del inicio de un array

$result = array_slice($letters, 0, 5); //muestra desde el inicio a la quinta
print_r($result);

$result = array_slice($letters, -5, 2); // empieza -5 desde atrás
print_r($result);

/*********************************************************************************************************/

$citiesArray = [
    "London",
    "Paris",
    "Amsterdam",
    "New York",
    "Berlin",
    "Brisbane"
];


array_push($citiesArray, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome"); //añadir al final
sort($citiesArray); //orden alfabético

echo "<ol>"; //lista numerada

foreach($citiesArray as $city){
    echo "<li>$city</li>"; //listado en orden alfabético
}

echo "</ol>";

/****************************************************************************************/

$suits = ["Spaced", "Clubs", "Diamonds", "hearts"];

$values = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];

$findSuits = $suits[array_rand($suits)];

$findValues = $values[array_rand($values)];

$card = $findValues . " of " . $findSuits;

echo $card;

/****************************************************************************************/

$arrayNumbers = [29, 30, 31, 32, 33, 34, 35];

echo "<pre>";
print_r("I have " . ($arrayNumbers[0]) . " years old");
echo "<br>";

print_r("I am not going to live for " . (array_sum($arrayNumbers)) . " years");
echo "<br>";

$cousinAge = array_pop($arrayNumbers);
print_r("One of my cousins have " . $cousinAge . " years old");
echo "<br>";

/************************************************************************************* */

$anotherArray = ["Richard", "Bri", "Luz", "Hector"];

print_r($anotherArray[2] . " and " . ($anotherArray[3]) . " are my parents");
echo "<br>";

$man = array_slice($anotherArray, -1);
print_r(implode($man) . " is my dad");
echo "<br>";

/************************************************************************************* */

$information = ["Olabeaga", "Mayo", 2021];
$oldInformation = ["Casco Viejo", "Enero", 2021];
print_r(array_replace($information, $oldInformation));

print_r("We live in " . $information[0] . " from " . $information[1]);

if (is_int($information[2])) {
    echo " of " . $information[2];
}

echo "<br>";

/************************************************************************************* */

