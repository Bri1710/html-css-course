<?php

function showMyName (string $namePerson){
    if ($namePerson == $_POST["name"]){
        echo "The menu is going to be made for " . $namePerson;
        echo "<br>";
        echo "<br>";
    }
}
        //echo "You didn't writte your name, so your choice is not been saved for another future order.";



$myFistPlate = [
    "Seafood",
    "Spicy cuscús",
    "Pesto farfalle",
    "Duck breast"
];

$mySecondPlate = [
    "Roast chicken",
    "Salmon poke",
    "Spinach cheese raviolis",
    "Snuff with potatoes"
];

$myDrink = [
    "Apple juice",
    "Cherry Coca-Cola",
    "Nestea",
    "Watter"
];

$myDessert = [
    "Pear cake",
    "Nutella crepes",
    "Brownie",
    "coconut and pinneaple ice cream"
];

if(isset($_POST["submit"])){

} if ($namePerson = $_POST["name"]){
    echo showMyName($namePerson);

} if(isset($_POST["first"])){
    $first = $_POST["first"];
        echo "First plate: ";
        echo "<br>";
        echo "<br>";


} if(isset($_POST["second"])){
    $second = $_POST["second"];
        echo "Second plate: ";
        echo "<br>";
        echo "<br>";


} if(isset($_POST["drink"])){
    $drink = $_POST["drink"];
        echo "Drink: ";
        echo "<br>";
        echo "<br>";


} if(isset($_POST["dessert"])){
    $dessert = $_POST["dessert"];
        echo "Dessert: ";
        echo "<br>";
        echo "<br>";


} else {
        echo "CHOOSE YOUR FULL MENU, PLEASE";
    }


/*
$someFood = [
    "seafood",
    "salmon poke"
];

echo "<pre>";
print_r($someFood);
echo "<br>";
echo "<br>";

echo "The " . $someFood[0] . " is not available"; // muestra salmon poke
echo "<br>";
echo "</pre>";


$morefood = [
    "roast chicken" => 12,
    "pesto pasta" => 19
];

$meal = ["roast chicken", "pesto pasta"];
$numbers = [12, 19];

echo "<pre>";
print_r($morefood);
echo "<br>";
echo "<br>";

foreach ($morefood as $name => $price) {
    addPercentToTheSum($price);
    echo "The " . $name . " is available";
    echo "<br>";
}

$meals = implode(" and ", $meal);
$sum = array_sum($numbers); // suma de los numbers (12+19)
echo "You have chosen " . $meals . ". The cost is " . $sum . "€";
// $morefood["pesto pasta"] + $morefood["roast chicken"];
// $total = 0;
// $total += $price;

echo "<br>";

function addPercentToTheSum(int $sum){
    $tenPercent = $sum * 10/ 100;
    $finalPrice = $tenPercent + $sum;
    return $finalPrice;
}
$joke = "roast";
echo "<br>";
echo "We would appreciate it if you could add 10% to the price, which results in a final price of " . $finalPrice . "€";
echo "<br>";
echo "If you don't add " . addPercentToTheSum($sum) . "€, we will make a " . $joke .  " with your legs.";
echo "<br>";
echo "<br>";


