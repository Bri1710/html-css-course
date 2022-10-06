<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/Rostro.php");
require("classes/Ojos.php");
require("classes/Labios.php");

$rostro = [];

$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'sakila';

$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";

try {
    echo "Los maquillajes de rostro disponibles son los siguientes:";
    echo "<br>";
    $dbConnection = new PDO($dsn, $dbUsername, $dbPassword);
    $results = $dbConnection->query("SELECT * FROM maquillaje_rostro");

    foreach ($results as $result) {
        $rostro = new Rostro($result["marca"], $result["origen"], $result ["producto"], $result ["acabado"], $result ["nombre"], $result ["precio"], $result ["textura"]);
        echo "<br>";
        echo strtoupper($rostro->getProducto()) . ' "' . $rostro->getNombre() . '"' . " de " . $rostro->getMarca();
        echo "<br>";
        /*$objectsRostro[] = $rostro;*/
    }

} catch (Exception $e) {
    echo "no existe la tabla" . $e->getMessage();
}
echo "<br>";
echo "<br>";

$rostro1 = new Rostro ("Clinique", "Francia", "colorete", "perlado", "Pink Please", 59.99, "mousse");
$rostro2 = new Rostro ("Sleek", "China", "bronceador", "mate", "Sun Kissed", 19.99, "polvo");
$rostro3 = new Rostro ("Huda Beauty", "Inglaterra", "base de maquillaje", "satinado", "Natural Tan", 85.99, "líquida");

$ojos1 = new Ojos ("Urban Decay", "Italia", "delineador", "satinado", "Pure Noir", 39.99, "líquida", "waterprof");
$ojos2 = new Ojos ("Benefit", "España", "lápiz", "mate", "Ocean Blue", 25.99, "crema", "water repelent");
$ojos3 = new Ojos ("Essence", "China", "sombra", "iridiscente", "Rainbow", 5.99, "polvo", "transferible");

$labios1 = new Labios ("Dior", "Suiza", "perfilador", "mate", "Fire Red", 49.99, "no transfer");
$labios2 = new Labios("NYX", "Polonia", "barra de labios", "brillo", "Juicy Peach", 9.99, "bálsamo");
$labios3 = new Labios("Rimmel", "China", "barra de labios", "satinado", "Brownie", 12.99, "tranferible");

echo "El producto de rostro que ha escogido ha sido:";
echo "<br>";
echo $rostro3->pronombreCorrectoProducto() . " de la marca " . $rostro3->getMarca() . " de textura " . $rostro3->getTextura();
echo "<br>";
echo "<br>";


echo "El producto de rostro que ha escogido ha sido:";
echo "<br>";
echo $ojos1->pronombreCorrectoProducto() . "(" . $ojos1->getFormula() . ")" . " de la marca " . $ojos1->getMarca() . " en acabado " . $ojos1->getAcabado();
echo "<br>";
echo "<br>";


echo "El producto de rostro que ha escogido ha sido:";
echo "<br>";
echo $labios2->pronombreCorrectoProducto() . " de la marca " . $labios2->getMarca() . " en el color " . $labios2->getNombre() . " cuyo origen es " . $labios2->getOrigen();
echo "<br>";
echo "<br>";

echo "El precio total de los artículos es de " . $rostro3->getPrecio() + $ojos1->getPrecio() + $labios2->getPrecio() . "€";

