<?php

$associativeArray = [
    "first tool" => "monitor",
    "second tool" => "mouse",
    "third tool" => "screen",
    "fourth tool" => "laptop",
    "fifth tool" => "tablet"
];
print_r("The necessary tool for work is a " . $associativeArray["fourth tool"]);
echo "<br>";
print_r("I use the "  . $associativeArray["fifth tool"] . " in my free time");
echo "<br>";

/************************************************************************************* */

$arrayAssociativeMultidimensional = [
    1 => ["monitor", "laptop", "computer", "cooler"],
    2 => ["keyboard", "mouse"],
    "fruit" => [
        "green" => "apple"
    ]
];

print_r("Richard has given to me his " . ($arrayAssociativeMultidimensional[1][1]));
echo "<br>";

/************************************************************************************* */

$moreAssociatives = [
    "1" => ["see" => ["monitor", "computer"]],
    "2" => ["run" => ["mouse", "keyboard"]],
    "3" => ["listen" => "headphones"]
];

print_r("I still use the same " . $moreAssociatives["1"]["see"][1]);
echo "<br>";
print_r("I have Richards old " . $moreAssociatives["3"]["listen"]);
echo "<br>";
print_r("I love the colors of my new " . $moreAssociatives["2"]["run"][0]);
echo "<br>";


/************************************************************************************* */

$multiArray = [
    "to be healthy" => [
        "eat" => 5
    ],
    "to be active" => [
        "exercise" => [
            "cycle" => 2,
            "pilates" => 1
        ]
    ],
    "to be productive" => [
        "work" => [
            "program" => 35,
            "design" => 4
        ]
    ],
    "to be relaxed" => [
        "enjoy" => 20,
        "sleep" => 40
    ]
];

$multiArray["hours"];

echo "<br>";
print_r("I'm spending " . ($multiArray["to be productive"]["work"]["program"]) . " hours doing programming");
echo "<br>";
$resultsWork = ($multiArray["to be productive"]["work"]["program"]) + ($multiArray["to be productive"]["work"]["design"]);
print_r("I'm having " . $resultsWork . " productive hours per week");
echo "<br>";
$resultsFree = ($multiArray["to be relaxed"]["enjoy"]) + ($multiArray["to be relaxed"]["sleep"]);
print_r("I'm having " . $resultsFree . " relaxed hours to do what i want");
echo "<br>";

/************************************************************************************* */

$thingsInTheRoom = [
    "furniture" => [
        "bed",
        "desk"
    ],
    "decoration" => "pictures",
    "tools" => [
        "electronic" => [
            "computer",
            "radiator",
            "lamp"
        ],
        "others" => [
            "blanquet",
            "chair"
        ]
    ]
];

print_r("The " . ($thingsInTheRoom["decoration"]) . " were already on the flat");
echo "<br>";
print_r("The " . ($thingsInTheRoom["tools"]["electronic"][0]) . " that i am currently using is a Mac");
echo "<br>";
print_r("I can't wai to have my new " . ($thingsInTheRoom["tools"]["others"][1]));
echo "<br>";
echo "<br>";

/************************************************************************************* */


$seriesThatIRecommend = [
    "comedy" => '"Dead to me"',
    "drama" => [
        '"The queens gambit"',
        '"Maid"',
        '"Unbelivable"'
    ],
    "comedy-drama" => [
        '"Orange is the new black"',
        '"Atypical"'
    ],
    "criminal-drama" => '"Stay close"',
    "terror" => [
        '"The squid game"',
        '"Múltiple"'
    ],
    "thriller" => [
        '"Breaking bad"',
        '"Black mirror"',
        '"El inocente"',
        '"The sinner"'
    ]
];

print_r ("My favourite serie so far is " . $seriesThatIRecommend["thriller"][0]);
echo "<br>";
print_r ($seriesThatIRecommend["comedy"] . " surprise my in a good way");
echo "<br>";
print_r ("Actually i'm watching " . $seriesThatIRecommend["thriller"][1]);

/******************************************************************************************/

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


/*******************************************************************************************/

$associativeArray = [
    "nombre" => "Bri",
    "edad" => 29,
    "comida preferida" => ["chocolate","queso"] // array
];

$words = ["house", "table", "dog"];

echo $words [0];

echo "<br>";

foreach ($associativeArray as $question=>$answer){
    if (is_array($answer)) {
        echo "Su " . $question . " es ";
        foreach ($answer as $specificAnswer) {
            echo $specificAnswer . " y ";
        }
        echo "<br>";
    } else {
        echo "Su " . $question . " es " . $answer . "<br>";
    }

}
