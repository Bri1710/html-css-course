<?php
/*
for ($i = 6; $i <= 60; $i += 6)
{
    echo $i . "<br>";
}

$j = 6;

while ($j <= 60)
{
    echo $j . "<br>";
    $j += 6;
}
*/

$ones = 0;
$twos = 0;

for ($i = 1; $i < 5; $i++){
    $randomNumber = rand (1,2);
    if ($randomNumber == 1){
        $ones ++;
    } else {
        $twos ++;
    }

}

echo "1 = " . $ones;
echo "<br>";
echo "2 = " . $twos;
echo "<br>";
echo "<br>";



for ($number = 1; $i < 10; $i++){
    $randomNumber = rand (1, 10);
    if ($randomNumber % 2 == 0){
        echo "El número " . $randomNumber . " es par";
        echo "<br>";
    } else {
        echo "El número " . $randomNumber . " es impar";
        echo "<br>";
    }

}



echo "<br>";
$x = 1;

do {
echo 'The number is: ' . $x . '<br>';
++$x;
} while ($x <= 5);




echo "<pre>";
for ($number = 20; $number <= 40; $number++)
{ if ($number % 2 == 0)
{
echo $number . " es un número par" . PHP_EOL;
} else
echo $number . " es un número impar" . PHP_EOL;
}


echo "<pre>";
for ($e = 2; $e <= 8; $e++) {
    echo '(El valor del primer loop es ' . $e . ')' . PHP_EOL;

    for ($f = 5; $f > $e; $f--) {
        echo '(El valor del segundo loop es ' . $f . ')' . PHP_EOL;
        echo '-> SEGUNDO' . PHP_EOL;

        for ($g = 1; $g <= $f; $g++) {
            echo '(El valor del tercer loop es ' . $g . ')' . PHP_EOL;
            echo '-> TERCERO' . PHP_EOL;
        }

    }
    echo '-> PRIMERO' . PHP_EOL;
}


/* (2) <= 8 si, (5) > 2 si y (1) <= 5 si
 * VALOR PRIMER LOOP 2
 * VALOR SEGUNDO LOOP 5
 * -> SEGUNDO
 * VALOR TERCER LOOP 1
 * -> TERCERO
 * ---------- , ---------- (2) <= 5 si
 * VALOR TERCER LOOP 2
 * -> TERCERO
 * ---------- , ---------- (3) <= 5 si
 * VALOR TERCER LOOP 3
 * -> TERCERO
 * ---------- , ---------- (4) <= 5 si
 * VALOR TERCER LOOP 4
 * -> TERCERO
 * ---------- , ---------- (5) <= 5 si
 * VALOR TERCER LOOP 5
 * -> TERCERO
 * ---------- , (4) > 2 ---------
 * VALOR SEGUNDO LOOP 4
 * -> SEGUNDO
 * ---------- , ---------- (1) <= 4 si
 * VALOR TERCER LOOP 1
 * -> TERCERO
 * ---------- , ---------- (2) <= 4 si
 * VALOR TERCER LOOP 2
 * -> TERCERO
 * ---------- , ---------- (3) <= 4 si
 * VALOR TERCER LOOP 3
 * -> TERCERO
 * ---------- , ---------- (4) <= 4 si
 * VALOR TERCER LOOP 4
 * -> TERCERO
 *  ---------- , (3) > 2 ---------
 * VALOR SEGUNDO LOOP 3
 * -> SEGUNDO
 * ---------- , ---------- (1) <= 3 si
 * VALOR TERCER LOOP 1
 * -> TERCERO
 * ---------- , ---------- (2) <= 3 si
 * VALOR TERCER LOOP 2
 * -> TERCERO
 * ---------- , ---------- (3) <= 3 si
 * VALOR TERCER LOOP 3
 * -> TERCERO
 * -> PRIMERO
 * (3) <= 8 si
 * VALOR PRIMER LOOP 3
 * ---------- , (5) > 3 ---------
 * VALOR SEGUNDO LOOP 5
 * -> SEGUNDO
 * ---------- , ---------- (1) <= 5 si
 * VALOR TERCER LOOP 1
 * -> TERCERO
 * ---------- , ---------- (2) <= 5 si
 * VALOR TERCER LOOP 2
 * -> TERCERO
 * ---------- , ---------- (3) <= 5 si
 * VALOR TERCER LOOP 3
 * -> TERCERO
 * ---------- , ---------- (4) <= 5 si
 * VALOR TERCER LOOP 4
 * -> TERCERO
 * ---------- , ---------- (5) <= 5 si
 * VALOR TERCER LOOP 5
 * -> TERCERO
 * ---------- , (4) > 3 ---------
 * VALOR SEGUNDO LOOP 4
 * -> SEGUNDO
 * -> PRIMERO

 */

echo "<pre>";
for ($c = 1; $c <= 10; $c+=2) {
    echo '(El valor del primer loop es ' . $c . ')' . PHP_EOL;

    for ($d = 5; $d >= $c; $d-=1) {
        echo '(El valor del segundo loop es ' . $d . ')' . PHP_EOL;
        echo '-> SEGUNDO' . PHP_EOL;

    }
    echo '-> PRIMERO' . PHP_EOL;

}

/* (1) <= 10 si y (5) >= 1 si
 * VALOR PRIMER LOOP 1
 * VALOR SEGUNDO LOOP 5
 * -> SEGUNDO
 * ---------- (4) >= 1 si
 * VALOR SEGUNDO LOOP 4
 * -> SEGUNDO
 * ---------- (3) >= 1 si
 * VALOR SEGUNDO LOOP 3
 * -> SEGUNDO
 * ---------- (2) >= 1 si
 * VALOR SEGUNDO LOOP 2
 * -> SEGUNDO
 * ---------- (1) >= 1 si
 * -> SEGUNDO
 * -> PRIMERO
 *
 * (3) <= 10 si y (5) >= 3 si
 * VALOR PRIMER LOOP 3
 * VALOR SEGUNDO LOOP 5
 * -> SEGUNDO
 * ---------- (4) >= 3 si
 * VALOR SEGUNDO LOOP 4
 * -> SEGUNDO
 * ---------- (3) >= 3 si
 * VALOR SEGUNDO LOOP 3
 * -> SEGUNDO
 * -> PRIMERO
 *
 * (5) <= 10 si y (5) >= 5 si
 * VALOR PRIMER LOOP 5
 * VALOR SEGUNDO LOOP 5
 * -> SEGUNDO
 * -> PRIMERO
 *
 * (7) <= 10 si y (5) >= 7 no
 * VALOR PRIMER LOOP 7
 * VALOR SEGUNDO LOOP 5
 * -> PRIMERO
 *
 * (9) <= 10 si y (5) >= 7 no
 * VALOR PRIMER LOOP 9
 * -> PRIMERO
 */


echo "<pre>";
for ($a = 1; $a < 5; $a++) {
    echo '(This is the FIRST loop and the value of $a is ' . $a . ')' . PHP_EOL;

    for ($b = 1; $b < $a; $b++) {
         echo '(This is in the SECOND loop and the value of $b is ' . $b . ')' . PHP_EOL;
         echo '-> SECOND' . PHP_EOL;

    }
    echo '-> FIRST' . PHP_EOL;

}

/* (1) < 5 si, pero (1) < 1 no
 * VALOR PRIMER LOOP 1
 * -> FIRST
 *
 * (2) < 5 si y (1) < 2 si
 * VALOR PRIMER LOOP 2
 * VALOR SEGUNDO LOOP 1
 * -> SECOND
 * -> FIRST
 *
 * (3) < 5 si y (1) < 3 si
 * VALOR PRIMER LOOP 3
 * VALOR SEGUNDO LOOP 1
 * -> SECOND
 * ---------- (2) < 3 si
 * VALOR SEGUNDO LOOP 2
 * -> SECOND
 * -> FIRST
 *
 * (4) < 5 si y (1) < 4 si
 * VALOR PRIMER LOOP 4
 * VALOR SEGUNDO LOOP 1
 *  ---------- (1) < 4 si
 * -> SECOND
 * ---------- (2) < 4 si
 * -> SECOND
 * ---------- (3) < 4 si
 * -> SECOND
 * -> FIRST

 */

