<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo-together.css" type="text/css" media=screen>
    <title>Cambiar nombre</title>
</head>


<body>

<?php
session_start();

$tartaChocolate = [
    "ingredientes" => [
        "chocolate negro",
        "chocolate con leche",
        "chocolate blanco",
        "mantequilla",
        "galletas",
        "nata",
        "leche",
        "cuajada",
        "azúcar"
    ],
    "precio" => [
        35
    ]
];

$brownieChocolate = [
    "ingredientes" => [
        "chocolate negro",
        "mantequilla",
        "huevos",
        "azúcar",
        "harina",
        "nueces",
        "bicarbonato"
    ],
    "precio" => [
        25
    ]
];

$tartaPera =[
    "ingredientes" => [
        "huevos",
        "azúcar",
        "harina",
        "leche",
        "peras"
    ],
    "precio" => [
        2
    ]

];

$bizcochoLimon = [
    "ingredientes" => [
        "yogurt",
        "limón",
        "azúcar",
        "harina",
        "huevos",
        "levadura"
    ],
    "precio" => [
        18
    ]

];


function muestraNombre(string $nombrePersona)
{

    if (strlen($nombrePersona)) {
        return "para " . $nombrePersona . "<br>" . "<br>" . "Si quieres cambiar el nombre, ";
    }
}

if (isset($_POST["submit"])) {
    $principal = $_POST["principal"];
    $leche = $_POST["leche"];
    $nombrePersona = $_POST["nombre"];
    $_SESSION["principal"] = $_POST["principal"];
    $_SESSION["leche"] = $_POST["leche"];
}

if (isset($_POST["principal"]) && isset($_POST["leche"])) {
    echo "Hemos recibido tus preferencias";
    echo "<br>";
    echo "<br>";

} else {
    echo "Indica todos los criterios para que podamos hacer un postre personalizado ";
}

if ($principal == "chocolate" && $leche == "si") {
    echo "Estamos preparando una TARTA DE CHOCOLATE ";

}

if ($principal == "chocolate" && $leche == "no") {
    echo "Estamos preparando un BROWNIE DE CHOCOLATE ";

}

if ($principal == "fruta" && $leche == "si") {
    echo "Estamos preparando una TARTA DE PERA ";

}

if ($principal == "fruta" && $leche == "no") {
    echo "Estamos preparando un BIZCOHO DE LIMÓN ";

}

if (strlen($nombrePersona)) {
    echo muestraNombre($_POST["nombre"]);
}


?>

<?php if (strlen($nombrePersona)): ?>
    <a href="http://example-app.local.com/all-knowledge/php-html-together-form.php">hazlo aquí</a>
    <br>
    <br>
    <button class="azul"
            onclick="document.location='http://example-app.local.com/all-knowledge/php-html-together-form.php'">DETALLES
        PEDIDO
    </button>
<?php else: ?>
    <p>Es necesario que escriba el nombre de la persona</p>
    <button class="crema"
            onclick="document.location='http://example-app.local.com/all-knowledge/php-html-together-form.php'">Nombre
    </button>
<?php endif; ?>


</body>
</html>
