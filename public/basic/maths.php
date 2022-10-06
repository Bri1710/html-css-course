<?php

$number1 = 20; // Int
$number2 = 8.99; // Double or Float

echo "<br>";
echo $number1 + $number2 + 0.01; // Addition
echo "<br>";
echo $number1 . " + " . $number2 . " + 0.01" . " = " . $_sum;
echo "<br>";
echo $number1 . " + " . ($number2 + 0.01) . " = " . $_sum;
echo "<br>";
echo ($_sum) - $number1; // Subtraction
echo "<br>";
echo ($_sum) / $number1; // Division
echo "<br>";
echo ($_sum) * $number1; // Multiplication
echo "<br>";

/* -----------------------------------------------------*/

echo "<br>";
$firstN = 26;
$secondN = 6;
$result = $firstN % $secondN; // Modulus / (Cociente 4.3) Resto 2
echo $result;
echo "<br>";

/* -----------------------------------------------------*/

echo "<br>";
$base = 2;
$exponent = 3;
$resultado = pow ($base, $exponent); // Exponents / 2x2x2 = 8
echo $resultado;
echo "<br>";

/* -----------------------------------------------------*/

echo "<br>";
$lenght = 10;
$width = 5;
$areaRectangle = $lenght * $width; // Area of a rectangle
echo $areaRectangle;

echo "<br>";
$base = 12;
$height = 3;
$areaTriangle = $base * $height / 2; // Area of a triangle
echo $areaTriangle;

echo "<br>";
$radius = 5;
$pi = 3.14;
$areaCircle = $pi * $radius * $radius; // Area of a circle
$areaCircle = $pi * pow($radius, 2); // Another way, using pow
$areaCircle = pi() * pow($radius, 2); // Más decimales
echo $areaCircle;

echo "<br>";
$a = 10;
$b = 8;
$heighTrapezium = 4;
$areaTrapezium = ($a + $B) * $heighTrapezium / 2;
echo $areaTrapezium;
echo "<br>";


/* -----------------------------------------------------*/

echo "<br>";
$radius = 5;
$pi = 3.14;
$areaCircle = $pi * $radius * $radius;
echo $areaCircle;
echo "<br>";

$areaCircle = pi() * pow ($radius, 2);
echo $areaCircle;
echo "<br>";

$areaCircle = round ($areaCircle, 2, PHP_ROUND_HALF_UP);
echo $areaCircle;
echo "<br>";
echo "The area of a circle with radius of $radius is $areaCircle to d.p.";
echo "<br>";