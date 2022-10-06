<?php

/*$arrayOfPeople = [
    "person_1" => [
        "name" => "Richard",
        "age" => 29,
        "favourite_movies" => [
            "Saving Private Ryan",
            "Toy Story 2"
        ]
    ]
];

$arrayOfMovies = [
    "Comedy" => [
        "movie 1",
        "movie 2"
    ],
    "Romance" => [
        "movie 1",
        "movie 2"
    ]
];

foreach ($arrayOfMovies as $genre => $movies) {
    echo "<p>Movies of the genre $genre include: </p>";
    echo "<ol>";
    foreach ($movies as $movie) {
        echo "<li>" . $movie . "</li>";
    }
    echo "</ol>";
}

foreach ($arrayOfPeople as $key => $person) {

    

  foreach ($person["favourite_movies"] as $movie){

  }
}
*/

$namePerson = "BRI";
$title = "LIST OF THE MOST SUCCESFUL YOUTUBERS THAT $namePerson FOLLOWS:";
echo $title;
echo "<br>";
echo "<br>";

$youtubers = [
    "Ratolina" => [
        "name" => "Ratolina",
        "real name" => "Marta",
        "followers" => 1.3,
        "topic" => "esthetic"
    ],
    "Lizy P" => [
        "name" => "Lizy P",
        "real name" => "Damaris",
        "followers" => 5.03,
        "topic" => "esthetic"
    ],
    "Brad Mondo" => [
        "name" => "Brad Mondo",
        "real name" => "Brad",
        "followers" => 7.29,
        "topic" => "esthetic"
    ],
    "Dalas Review" => [
        "name" => "Dalas Review",
        "real name" => "Daniel",
        "followers" => 10.1,
        "topic" => "reviews"
    ],
    "Luisito Comunica" => [
        "name" => "Luisito Comunica",
        "real name" => "Luis",
        "followers" => 37.9,
        "topic" => "travel"
    ],
    "UDEY" => [
        "name" => "UDEY",
        "real name" => "Romualdo",
        "followers" => 2.19,
        "topic" => "health"
    ]
];

$text = "List of youtubers that are going to be analized: ";
echo $text;
echo "<br>";
echo "<br>";


foreach ($youtubers as $account => $information) {
    echo "<ul>";
    echo "<li><b>" . getName($information) . "</b></li>";
    echo getRealName($information);
    // list item where you get real name from the information if it exists in the array
    // list item with follower count in millions (m) or thousands (k)
    echo "</ul>";
}

echo "* is Un dentista en Youtube";

function getName(array $information): string
{
    if (isset($information["name"])) {
        if (strpos($information["name"], "UDEY") !== false) {
            return $information["name"] . "*";
        }

        return $information["name"];
    }

    return "There was no name in the information";
}

function getRealName(array $information): string
{
    if (isset($information["real name"])) {
        return $information["real name"];
    }

    return "Unkown real name";
}

$title2 = "INFORMATION ABOUT THEIR ACHIEVEMENT:";
echo "<br>";
echo "<br>";

foreach ($youtubers as $numbers) {
    if (is_numeric($information)){
        echo "hola";
    }
}

foreach ($youtubers as $account => $information) {
    echo "<ul>";
    echo "<li><b>" . getName($information) . "</b></li>";
    echo getRealName($information);
    // list item where you get real name from the information if it exists in the array
    // list item with follower count in millions (m) or thousands (k)
    echo "</ul>";
}






/***************************************************************************************************************/

/* MATHS (sum, count, round) */

$tittleTwo = "INFORMATION ABOUT THEIR ACHIEVEMENT:";
$sum = array_sum($youtubersMillionsF); // suma todos los floats
$count = count($youtubersMillionsF); // cantidad de floats (6)
$averageFollowers = $sum / $count; // división
$roundedAverage = round($averageFollowers, 1); // media de millones. En este caso con un decimal 

echo "<br>";
echo $tittleTwo;
echo "<br>";
echo "<br>";
echo "The average of followers are " . $roundedAverage . "M";
echo "<br>";

/***************************************************************************************************************/

/* ARRAY (shift, pop, slice, implode, replace, strpos, str_word_count, date) - CONCATENATION */

$arrayYoutubers = ["Ratolina", "UDEY", "LizyP", "BradMondo", "DalasReview", "LuisitoComunica"];
$worstYoutuber = array_shift($arrayYoutubers); // extrae el primer elemento del String
$bestYoutuber = array_pop($arrayYoutubers); // extrae el último elemento del string

sort($youtubersMillionsF); // ordena de menor a mayor los millones ===> Ver en ARRAY STRING & FLOAT 
// 1.3, 2.19, 5.03, 7.29, 10.1, 37.9
$lowestFollowers = array_slice($youtubersMillionsF, 0, 2); // Empieza desde la primera cantidad(0), dos valores
$lowestFollowers = implode("M" . " and ", $lowestFollowers); // Pegamento. Forma un string 
$highestFollowers = array_slice($youtubersMillionsF, -1, 1); // Empieza desde el final(-1), un valor
$highestFollowers = implode("M" . " and ", $highestFollowers);

$youtubersString = "Ratolina, DalasReview, LuisitoComunica, LizyP, UDEY, BradMondo"; // String. Nombres youtubers
$secretRatolina = "Ratolina";
$secretLuisitoComunica = "LuisitoComunica";
$replaceLosserWinner = ["Ratolina", "LuisitoComunica"];
foreach ($replaceLosserWinner as $secret) {
    $secretRatolina = str_replace($secret, "********", $secretRatolina); // busca en el string y reemplaza
    $secretLuisitoComunica = str_replace($secret, "***************", $secretLuisitoComunica);
}

echo "The worst ones have " . $lowestFollowers . "M";
echo "<br>";
echo "The best one has " . $highestFollowers . "M";
echo "<br>";
echo "<br>";
echo "The LOSER is: {$secretRatolina}";
echo "<br>";
echo "The LOSER is: {$worstYoutuber}";
echo "<br>";
echo "<br>";
echo "The WINNER is: {$secretLuisitoComunica}";
echo "<br>";
echo "The WINNER is: {$bestYoutuber}";
echo "<br>";
echo "<br>";

$tittleThree = "DIFERENCES BETWEEN RATOLINA'S AND LUISITOCOMUNICA'S YOUTUBE CHANNELS:";
$informationTwo = "Ratolina doesn't use her real name and her artistic name doesn't have a meaning.";
$informationThree = 'LuisitoComunica use his real name adding "comunica" in the end of the word, that explains what he do.';
$informationFour = "The description of " . $worstYoutuber . "'s" . " youtuber profile is:";
$descriptionRatolina = ' "Vídeos de maquillaje, de lo que merece la pena y de lo que no, de trastos geniales, de la vida beauty.
Cada jueves y cada domingo un nuevo vídeo para relajarte, reírte y aprender (o alimentar tu ansia viva)".';
$informationFive = "The description of " . $bestYoutuber . "'s" .  " youtuber profile is:";
$descriptionLuisito = ' "El canal más chido de youtube".';
$sentenceWordsLuisito = str_word_count($descriptionLuisito); // cuenta las palabras que hay en la frase
$sentenceWordsRatolina = str_word_count($descriptionRatolina);
$year = date("Y"); //año actual
$sinceYearR = date("2009");
$sinceYearL = date("2012");
$yearsRatolina = $year - $sinceYearR; // resta
$yearsRatolinaYoutube = "Ratolina has been in youtube for {$yearsRatolina} years.";
$followersYearR = "She has earnt " . 1.3000000 / $yearsRatolina . "M followers a year until this year (" . $year . ")."; // división y enlace
$yearsLuisito = $year - $sinceYearL;
$yearsLuisitoYoutube = "LuisitoComunica has been in youtube for {$yearsLuisito} years.";
$followersYearL = "He has earnt " . 37.000000 / $yearsLuisito . "M followers a year until this year (" . $year . ").";


echo $yearsRatolinaYoutube;
echo "<br>";
echo $followersYearR;
echo "<br>";
echo "<br>";
echo $yearsLuisitoYoutube;
echo "<br>";
echo $followersYearL;
echo "<br>";

echo "<br>";
echo "<br>";
echo $tittleThree;
echo "<br>";
echo "<br>";
echo $informationTwo;
echo "<br>";
echo $informationFour . $descriptionRatolina;
echo "<br>";
$findLetterR = strpos($youtubersString, "R"); //busca la R y si no es falso que está, muestra el string
if ($findLetterR !== false) {
    echo "Her sort it's long and extremelly narrative. Has {$sentenceWordsRatolina} words.";
}
echo "<br>";
echo "<br>";
echo $informationThree;
echo "<br>";
echo $informationFive . $descriptionLuisito;
echo "<br>";
$findLetterL = strpos($youtubersString, "L"); // busca la L y si es cierto que está, muestra el string
if ($findLetterL == true) {
    echo "His sort it's simple and memorable. Has just {$sentenceWordsLuisito} words.";
}
echo "<br>";
echo "<br>";


echo $arrayYoutubers;
