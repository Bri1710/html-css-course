<?php
/* STRING (variables, if-else, explode, true-false) */

$namePerson = "BRI";
$BRI = true;
$head = "LIST OF THE MOST SUCCESFUL YOUTUBERS THAT $namePerson FOLLOWS:";
$youtubers = "Ratolina, DalasReview, LuisitoComunica, LizyP, UDEY*, BradMondo"; // String. Nombres youtubers
$explodedYoutubers = explode(", ", $youtubers); // divide el string en varios strings después de la coma

echo "<br>";
if ($BRI !== false && $BRI == "BRI"){ // la variable Bri es diferente a FALSE y la variable Bri es igual que el string "Bri"
    echo $head;
} else {
    echo $namePerson . " don´t have any list";
} 

$means = ' *UDEY it\'s "Un dentista en Youtube"';

echo "<br>";
echo "<pre>";
print_r($explodedYoutubers); 
echo "<br>";
print_r($means);

/***************************************************************************************************************/

/* ARRAY STRING & FLOAT (sort, foreach) */

$youtubersMillionsF = [1.3, 10.1, 37.9, 5.03, 2.19, 7.29]; // Array. Millones seguidores de cada youtuber
$namesYoutubers = ["Ratolina is Marta", "UDEY is Romualdo", "LizyP is Dámaris", "BradMondo is Brad", "DalasReview is Dalas", "LuisitoComunica is Luis"];
sort($namesYoutubers); // ordena los nombres por orden alfabético
$tittleOne = "REAL NAMES OF THESE YOUTUBERS: {$names}";
$informationOne = "(Some of this people uses the same artistic names as their real ones)";

echo "<pre>";
print_r($youtubersMillionsF);
echo "<br>";
echo $tittleOne . "<br>";
echo $informationOne;
echo "<ul>"; // listado con puntos
foreach ($namesYoutubers as $names){ 
    echo "<li>$names</li>"; // elementos listado que crean un bloque
}
echo"</ul>";

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

$arrayYoutubers = ["Ratolina", "UDEY", "LizyP", "BradMondo", "DalasReview","LuisitoComunica"];
$worstYoutuber = array_shift($arrayYoutubers); // extrae el primer elemento del String
$bestYoutuber = array_pop($arrayYoutubers); // extrae el último elemento del string

sort($youtubersMillionsF); // ordena de menor a mayor los millones ===> Ver en ARRAY STRING & FLOAT 
// 1.3, 2.19, 5.03, 7.29, 10.1, 37.9
$lowestFollowers = array_slice($youtubersMillionsF, 0, 2); // Empieza desde la primera cantidad(0), dos valores
$lowestFollowers = implode("M" . " and " , $lowestFollowers); // Pegamento. Forma un string 
$highestFollowers = array_slice($youtubersMillionsF, -1, 1); // Empieza desde el final(-1), un valor
$highestFollowers = implode("M" . " and " , $highestFollowers);

$youtubersString = "Ratolina, DalasReview, LuisitoComunica, LizyP, UDEY, BradMondo"; // String. Nombres youtubers
$secretRatolina = "Ratolina";
$secretLuisitoComunica = "LuisitoComunica";
$replaceLosserWinner = ["Ratolina", "LuisitoComunica"];
foreach ($replaceLosserWinner as $secret){
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
$informationFive = "The description of " . $bestYoutuber . "'s".  " youtuber profile is:";
$descriptionLuisito = ' "El canal más chido de youtube".';
$sentenceWordsLuisito = str_word_count($descriptionLuisito); // cuenta las palabras que hay en la frase
$sentenceWordsRatolina = str_word_count($descriptionRatolina);
$year = date("Y"); //año actual
$sinceYearR = date("2009");
$sinceYearL = date("2012");
$yearsRatolina = $year - $sinceYearR; // resta
$yearsRatolinaYoutube = "Ratolina has been in youtube for {$yearsRatolina} years.";
$followersYearR = "She has earnt " . 1.3000000 / $yearsRatolina . "M followers a year until this year (" . $year . ").";// división y enlace
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
if ($findLetterR !== false){
    echo "Her sort it's long and extremelly narrative. Has {$sentenceWordsRatolina} words.";
} 
echo "<br>";
echo "<br>";
echo $informationThree;
echo "<br>";
echo $informationFive . $descriptionLuisito;
echo "<br>";
$findLetterL = strpos($youtubersString, "L"); // busca la L y si es cierto que está, muestra el string
if ($findLetterL == true){
    echo "His sort it's simple and memorable. Has just {$sentenceWordsLuisito} words.";
} 
echo "<br>";
echo "<br>";


echo $arrayYoutubers;

