<?php

/*
INTERNAL FUNCTIONS
*/

$associativeArray = [
    1 => "Richard",
    2 => "Bri",
    3 => "Steph",
    4 => "Bruce",
    5 => "Penis"
];

echo "<br>";

$richards = 0;
$others = 0;

for ($myFirstLoop = 1; $myFirstLoop <= 10; $myFirstLoop++){
    $randomNumber = rand (1, 5);
    echo "The random number is currently {$randomNumber}";
    echo "<br>";
    echo "The current name for this number is: " . $associativeArray[$randomNumber];
    echo "<br>";
}

echo "Richard appeared from behind a tree this amount of times: " . $richards;
echo "<br>";
echo "Others appears this amount of times: " . $others;
echo "<br>";

/* -----------------------------------------------------*/

echo "<br>";
for ($myFirstLoop = 1; $myFirstLoop <= 5; $myFirstLoop++) {
    $randomNumber = rand (1, 5);

    if ($randomNumber % 2 == 0) {
        echo "The random number " . $randomNumber . " is even"; // par
        echo "<br>";
    } else if ($randomNumber % 1 == 0) {
        echo "The random number {$randomNumber} is odd"; // impar
        echo "<br>";
    }
} 
