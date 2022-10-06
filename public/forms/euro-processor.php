<?php

if(isset($_POST["submit"])){
    $moneda = $_POST["moneda"];
    $units = $_POST["units"];

    if ($units == "$"){
        $convertirMoneda = $moneda * 1.17;
        $units = "€";
    } else {
        $convertirMoneda = $moneda / 1.17;
        $units = "$";
    }
$convertirMoneda = round($convertirMoneda);
echo "La conversión es de $convertirMoneda $units";
} else {
    echo "Por favor, visita la página del formulario";
}