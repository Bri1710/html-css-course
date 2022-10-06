<?php 

/*
BASIC OPERATORS
*/

echo "<br>"; // Line break
echo "<br>"; 
echo "Mi novio es " . $firstName . " " . $surName; // Concatenation
echo "<br>";
echo "Mi novio es {$firstName} {$surName}"; // Variables inside of a string. _ONLY_ with ", not '
echo "<br>";
echo "Tiene " . $_sum . " años";
echo "<br>";

/*
Let's try different ways to say the same thing
(the first ones are more clear)
*/

echo "<br>";
echo "My boyfriend is $firstName $surName";
echo "<br>";
echo "He has $_sum years old";
echo "<br>";

echo "<br>";
echo $firstSentence = "Le encantan los animales. ";
echo $secondSentence = "Quiere tener un perro ";
echo $thirdSentence .= "y problablemente sea un Cavalier"; // Concatenation
echo "<br>";