<?php

function addTwoNumbers(){
    $a = 5;
    $b = 10;
    $sum = $a + $b;
    echo $sum;
}

addTwoNumbers();
echo "<br>";

function multiply($number1, $number2){
    $product = $number1 * $number2;
    echo $product;
}

multiply(5, 12);
echo "<br>";
multiply(4, 3);
echo "<br>";
echo "<br>";






/**
 * Small comment that describes what the function is doing
 * 
 * @param string $string
 * @return string
 */
function makeAnyStringUppercase(string $string = "My String Default") : string
{ 
    $result = strtoupper($string); // convierte string a mayúsculas
    return $result;
}


$uppercaseName = makeAnyStringUppercase();

echo $uppercaseName;
echo "<br>";

function calculo($numero1, $numero2){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    return [$suma, $resta];
}
$resultado = calculo(5, 4); // 5 corresponde a $numero1 y 4 a $numero2

echo $resultado[0]; // [0] es el 5
echo "<br>";
echo $resultado[1]; // [1] es el 4
echo "<br>";

foreach ($resultado as $ambosResultados){ // muestra igual que anteriormente un 9 y un 1
    echo $ambosResultados;
    echo "<br>";
}

print_r($resultado);