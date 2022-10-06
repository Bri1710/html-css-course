<?php

$mainIngredient = ["boiling water", "frozen water", 226];

$myFavouriteTea = [
    "black tea" => 2.5,
    "milk" => 20,
    "sugar" => 18
];

echo "First of all i need " . $mainIngredient[2] . " grams of " . $mainIngredient[0] . " to make a tea";
echo "<br>";
echo "<br>";

foreach ($myFavouriteTea as $ingredients => $grams) {
    $sum = ($mainIngredient[2] += $grams);
    echo " I need " . $grams . " grams more of " . $ingredients . ". ";
    echo "There are " . $sum . " grams until now.";
    echo "<br>";
}

echo "<br>";

if (key_exists("sugar", $myFavouriteTea)) {
    echo "I have changed my mind and i would like to add a little bit more of sugar. " . ($myFavouriteTea["sugar"] * 2)  . " grams it's perfect to me.";
}

echo "<br>";
echo "<br>";

for ($englishTea = 19; $englishTea <= 22; $englishTea++) {
    if ($englishTea == 20) {
        echo $englishTea . " grams are the best amount of milk for make an english tea.";
        echo "<br>";
    }
    if ($englishTea < 20) {
        echo $englishTea . " grams of milk are pretty good for make an english tea.";
        echo "<br>";
    }
    if ($englishTea > 20 && $englishTea <= 22) {
        echo $englishTea . " grams are too much milk";
        echo "<br>";
    }
}
echo "<br>";

$myFavouriteToppings = [
    "cinamon stick",
    "orange peel"
];

// $myFavouriteToppings[rand(0, count($myFavouriteToppings) - 1)];

$topping = $myFavouriteToppings [array_rand($myFavouriteToppings)];
echo "We chose " . $topping . " for you.";

echo "<br>";
echo "<br>";


/**********************************************************************/

// function to check if a number is between two other numbers to be used within foreach loop (inside)
// All information needed for the function, to be grabbed from the array inside the foreach 


$agesArray = [
    "first check" => [
        15, 25, 35
    ],
    "second check" => [
        78, 45, 15
    ]

];

foreach ($agesArray as $check => $ages){
    if (numberIsBetweenTwoNumbers($ages[0], $ages[1], $ages[2])){
        echo "The number " . $ages[1] . " is between";
        echo "<br>";
    } else {
        echo "The number " . $ages[1] . " is not between";
    }
}


function numberIsBetweenTwoNumbers (int $number1, int $number2, int $number3): bool
{
    if ($number1 < $number2 && $number2 < $number3){
        return true;

    } 
    
    return false;
}

$helloWorldVariable = helloWorld();

// "" == false == 0
// "" !== false !== 0

function helloWorld()
{
    return "Hello World";
}

//} if (array_reverse($agesArray)){
//   echo "The number " . $ages[1] . " is between as well";