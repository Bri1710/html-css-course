<?php

$arrayOfWords = [
    'shit',
    'estúpido',
    'gilipollas',
    'subnormal',
    'puta',
    'invécil',
    'tonto'
];

if(isset($_POST["submit"])){
    $texto = $_POST["texto"];
    
    foreach ($arrayOfWords as $word) {
        if (strpos($texto, $word) !== false) { // Devuelve false si no fue encontrada la aguja (en el pajar)
            // La función PHP strpos() devuelve la posición de la primera coincidencia de la palabra o carácter buscado en una cadena de texto (string).
            // False it's 0, true 1
            $texto = str_replace($word, '****', $texto);
        }
    }

}

echo $texto;
