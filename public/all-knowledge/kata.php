<?php
function gooseFilter($birds)
{
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    return array_values(array_diff($birds, $geese));
}

echo "<br>";
echo "<br>";


//["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]
//Su función devolvería la siguiente matriz:

//["Mallard", "Hook Bill", "Crested", "Blue Swedish"]
//Los elementos en la matriz devuelta deben estar en el mismo orden que en la matriz inicial pasada a su función, aunque con los 'gansos' eliminados. Tenga en cuenta que todas las cadenas estarán en el mismo caso que las proporcionadas, y algunos elementos pueden repetirse.

// Diferencia: "African", "Pilgrim", "Toulouse"

/***********************************************************************************/

function hello($name = ''): string
{
    if ($name) {
        return "Hello, " . ucfirst(strtolower($name)) . "!";
    }

    return "Hello, World!";
}

echo hello("bri");
echo "<br>";
echo "<br>";

/***********************************************************************************/


function remove(string $s): string
{
    return preg_replace('/!$/', "", $s);
}

echo "<br>";
echo "<br>";


/***********************************************************************************/
/*
function countPositivesSumNegatives(array $input)
{
    if (empty($input)) {
        return [];
    }

    $pos = 0
    $neg = 0;
    foreach ($input as $value) {
        if ($value > 0) {
            $pos += 1;
        } else {
            $neg += $value;
        }
    }

    return [$pos, $neg];
}

var_dump(countPositivesSumNegatives([1, 2, -1, -4, -175]));
*/

function countPositivesSumNegatives($input)
{
    $positivo = 0;
    $negativo = 0;

    foreach ($input as $int) {
        if ($int > 0) {
            $int = $positivo += 1;
        }
        if ($int < 0) {
            $negativo += $int;
        }
    }
    return [$positivo, $negativo];
}

var_dump(countPositivesSumNegatives([1, 2, -1, -4, -175]));


echo "<br>";
echo "<br>";


function cambioDeLetras(string $dna): string
{
    $keys = ["A", "C", "T", "G"];
    $values = ["T", "G", "A", "C"];
    $dna = array_combine($keys, $values);
    return strtoupper(implode($dna));

}

var_dump(cambioDeLetras("A"));
echo "<br>";
var_dump(cambioDeLetras("AG"));
echo "<br>";


echo "<br>";
echo "<br>";

function changeTheLetters(string $dna): string
{
    $dna = strtoupper($dna);
    $dna = str_split($dna);
    if (in_array("A", $dna)) {
        return "T";
    }
    return implode($dna);
}

var_dump(changeTheLetters("TOHJ"));
echo "<br>";
var_dump(changeTheLetters("G"));
echo "<br>";
var_dump(changeTheLetters("AA"));


/*
echo "<br>";
echo "<br>";

function changeTheLetters (string $dna): string
{
 $array = str_split($dna);
 foreach ($array as $adn){
     if($adn == "A"){
         echo "T";
     } if ($adn == "G"){
         echo "C";
     }
     $array (implode($adn));
 }
}

var_dump (changeTheLetters("G"));


echo "<br>";
echo "<br>";
*/

function highYLow($numb)
{
    $arr = explode(" ", $numb);
    $high = max($arr);
    $low = min($arr);
    return "$high $low";
}

var_dump(highYLow("1 2 3 4"));

echo "<br>";
echo "<br>";

function highAndLow(array $numbers)
{
    $maximo = max($numbers);
    $minimo = min($numbers);

    return $maximo . " " . $minimo;
}

var_dump(highAndLow([1, 2, 3, 4]));

echo "<br>";
echo "<br>";

class Thing
{

    const LETTER_TO_NUMBER_MAP = [
        "a" => 1,
        "b" => 2,
        "c" => 3,
        "d" => 4,
        "f" => 5,
        "g" => 6,
        "h" => 7,
        "i" => 8,
        "j" => 9,
        "k" => 10,
        "l" => 11,
        "m" => 12,
        "n" => 13,
        "ñ" => 14,
        "o" => 15,
        "p" => 16,
        "q" => 17,
        "r" => 18,
        "s" => 19,
        "t" => 20,
        "u" => 21,
        "v" => 22,
        "w" => 23,
        "x" => 24,
        "y" => 25,
        "z" => 26,
        " " => " "
    ];

    public function alphabetPosition($frase)
    {
        //$stringToReturn = '';

        $frase = strtolower($frase);

        // split the $frase so it is an array with each letter being an item
        // foreach $frase as letter
        // if isset self::LETTER_TO_NUMBER_MAP[$letter]
        // $srtringToReturn .= self::LETTER_TO_NUMBER_MAP[$letter] . " ";

        foreach (self::LETTER_TO_NUMBER_MAP as $letra => $numero) {
            $numero = $numero . " ";
            $frase = trim(str_replace($letra, $numero, $frase));
        }

        return $frase;
    }

    const DNA_LETTER_MAP = [
        'T' => 'A',
        'A' => 'T',
        'G' => 'C',
        'C' => 'G'
    ];

    public function changeTheLetters(string $dna): string
    {
        $stringToReturn = '';
        $dna = str_split($dna);

        foreach ($dna as $letterOfDna) {
            if (isset(self::DNA_LETTER_MAP[$letterOfDna])) {
                $stringToReturn .= self::DNA_LETTER_MAP[$letterOfDna];
            }
        }

        return $stringToReturn;
    }
}

$myNewClass = new Thing();

var_dump($myNewClass->alphabetPosition("hola.'?)="));
var_dump($myNewClass->changeTheLetters("TAGC"));

echo "<br>";
echo "<br>";

function pruebaAdn($adn)
{
    $resultado = strtr($adn, 'ACGT', 'TGCA');
    //$resultado = strtr($adn, ['A' => 'T', 'C' => 'G', 'G' => 'C', 'T' => 'A']);

    return $resultado;
}

var_dump(pruebaAdn("eAQG"));

echo "<br>";
echo "<br>";

function countSmileys(array $faces): int
{
    foreach ($faces as $face) {
        if ((substr($face, 1) == ":" || substr($face, 1) == ";")) {
        }
        return $face;
    }

}

var_dump(countSmileys([':D', ':~)', ':$', ';*', ':O']));

echo "<br>";
echo "<br>";


function betterThanAverage(array $classPoints, int $yourPoints): int
{
    array_sum($classPoints)

}


var_dump(betterThanAverage([10, 5, 3, 7, 8, 6, 4, 5, 8, 9, 1, 6], 7));

echo "<br>";
echo "<br>";

function cambioLetras(string $adn): string
{
    $letras = [
        'T' => 'A',
        'A' => 'T',
        'G' => 'C',
        'C' => 'G'
    ];

    $resultado = ' ';
    $adn = str_split($adn);

    foreach ($adn as $value) {
        if (isset($letras[$value])) {
            $resultado = $resultado . $letras[$value];
        }
    }
    return $resultado;
}

var_dump(cambioLetras("ABTG"));

echo "<br>";
echo "<br>";


$miletra = "A";
for ($i = 0; $i < 26; $i++) {
    echo $miletra . "<br>";
    $miletra++;
}
/*
function alphabetPosition(string $miLetra): int
{
$miLetra = "a";
$miNumero = 0;
for ($i =0; $i < 26; $i++){
   $miLetra++;
}
   return $miNumero;
}

var_dump(alphabetPosition("c"));


/*
echo "<br>";
echo "<br>";

$letraYNumero = ["a" => 1];
for ($i =0; $i < 26; $i++){
   foreach ($letraYNumero as $letra => $numero){
       if($letra++){
           return $numero++;
       }
   }

}
*/
