<?php

/*
STRINGS
*/

$sentence = "This is a sentence";
$sentenceLenght = strlen($sentence); // 18 caracteres en las frase (contando espaciado)
echo $sentenceLenght;
echo "<br>";
$sentenceTwo = "This is a short sentence";
$words = str_word_count($sentenceTwo); // 5 palabras en la frase
echo $words;
echo "<br>";

echo "<br>";
$string = "Bri | Richard | ni fu ni fa";
$replacedString = str_replace ("|", ", ", $string); // Reemplaza 
echo $string;
echo "<br>";
echo $replacedString;
echo "<br>";

echo "<br>";
$stringDos = "nifunifa";
$shuffledString = str_shuffle($stringDos); // shuffle mezcla un array (orden aleatorio)
echo $shuffledString;
echo "<br>";
echo "<br>";


/* -----------------------------------------------------*/


echo "<br>";
echo "<br>";
$stringDesorden = "Ensure that you become familiar with php functions as they are extremely useful."; //Frase originaria
$shuffledDesorden = str_shuffle($stringDesorden);
echo $shuffledDesorden;
echo "<br>";

echo "<br>";
$stringTask= "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy."; //Frase que se ordena
$decode = str_rot13($stringTask);
echo $decode;
echo "<br>";

echo "<br>";
$stringTrece = "Ensure that you become familiar with php functions as they are extremely useful."; //Frase originaria
$decodeString = str_rot13($stringTrece);
echo $decodeString;
echo "<br>";

/* -----------------------------------------------------*/

echo "<br>";
$encodeText = str_rot13 (base64_encode("esto es una prueba de encriptado"));
$decodeText= urldecode (base64_decode(str_rot13($encodeText)));
echo $encodeText;
echo "<br>";

echo "<br>";
echo $decodeText;
echo "<br>";

/* -----------------------------------------------------*/

/*
Escaping strings
*/

echo "<br>";
$name = "Brixit";

echo "Esto es una \"prueba\""; //Incluir palabra entre paréntesis
echo "<br>";

echo 'This is Brixit\'s computer';
echo "<br>";

echo 'This is ' . $name . '\'s computer';
echo "<br>";

echo 'She said: "how\'s your day?"';
echo "<br>";