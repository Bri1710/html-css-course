<?php

function is_prime (int $n): string
{
    $cont = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) $cont = $cont + 1;
        {
            return "It is a prime number";
        }
        if ($cont == 2) {
            return "It is not a prime number";
        }
    }
}


echo is_prime(13);
echo "<br>";
echo is_prime(14);
