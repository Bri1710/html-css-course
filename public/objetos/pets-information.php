<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/Pet.php");
require("classes/Dog.php");
require("classes/Cat.php");
require("classes/Bird.php");
require("classes/Unicorn.php");
require("classes/Lion.php");


echo Pet::THIS_IS_MY_CONSTANT;


$perro1 = new Dog (22, "marrón", 50, "Cookie", 15, "bichón maltés");

$perro2 = new Dog (15, "blanco", 1300, "Mar", 12, "Cocker");
$perro3 = new Dog (8, "negro", 2000, "Bobbi", 9, "bulldog");
$perro4 = new Dog (18, "negro", 1600, "Ana", 10, "alaskan malamute");

echo "El perro que ha escogido se llama " . $perro1->getNombre() . ". Su longevidad media es de " . $perro1->getLongevidad() . " años";
echo "<br>";
echo 'Su compra se ha realizado en "' .   $perro1->wherePetCanBeBought() . '"';
echo "<br>";
echo "<br>";


$gato1 = new Cat("5", "rojo", 800, "Juan", "8", "persa");
$gato2 = new Cat("3", "blanco", 1400, "Cloud", "13", "siberiano");
$gato3 = new Cat("4", "gris", 2100, "Chris", "11", "korat");
$gato4 = new Cat("4", "gris", 80, "Javi", "10", "bombay");

echo "El gato que ha escogido es un " . $gato3->getRaza() . ". Su precio es de " . $gato3->getPrecio() . "€";
echo "<br>";
echo 'Su compra se ha realizado en "' .   $gato3->wherePetCanBeBought() . '"';
echo "<br>";
echo "<br>";


$pájaro1 = new Bird ("1", "rojo", 100, "María", 5, "Agaporni");

echo "El pájaro que ha escogido pesa menos de " . $pájaro1->getPeso() . "kg. Su color principal es el " . $pájaro1->getColor();
echo "<br>";
echo 'Su compra se ha realizado en "' .   $pájaro1->wherePetCanBeBought() . '"';
echo "<br>";
echo "<br>";


$unicornio1 = new Unicorn("50","azul","800000");
$unicornio2 = new Unicorn("2","azul","20");

echo "El unicornio que ha escogido es de color " . $unicornio1->getColor() . ". Su precio asciende a los " . $unicornio1->getPrecio() . "€";
echo "<br>";
echo 'Solo lo puede comprar en "' .   $unicornio1->wherePetCanBeBought() . '"';
echo "<br>";
echo 'Podemos ofrecerle un unicornio de juguete por menos de ' . $unicornio2->getPrecio() . ' de "' . $unicornio2->wherePetCanBeBought() . '"';
echo "<br>";
echo "<br>";

$leon1 = new Lion ("85","macho");
echo "El león pesa " . $leon1->getPeso(). "kg y es " . $leon1->getGenero();
