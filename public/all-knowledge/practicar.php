<!DOCTYPE html>
<html>
<body>

// GLOBAL

<?php
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();  // run function
echo $y; // output the new value for variable $y

echo "<br>";
echo "<br>";

/*******************************************************************/

$a = 1;
$b = 8;

function miTest()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

miTest();
echo $b; // outputs 9

echo "<br>";
echo "<br>";

/*******************************************************************/
// STATIC

function test()
{
    static $c = 0;
    echo $c;
    $c++;
}

test();
echo "<br>";
test();
echo "<br>";
test();

echo "<br>";
echo "<br>";

/*******************************************************************/

// CLASS

class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }

}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
$myCar = new Car("red", "Toyota");
echo $myCar->message();

echo "<br>";
echo "<br>";

/*******************************************************************/
//VAR_DUMP (muestra tipo y valor)

$d = "Hello";
var_dump(is_numeric($d));

echo "<br>";
echo "<br>";

/*******************************************************************/
// ACOS ??

$e = acos(8);
var_dump($e);

echo "<br>";
echo "<br>";

/*******************************************************************/
// CAST

// Cast float to int
$f = 23465.768;
$int_cast = (int)$f;
echo $int_cast;

/*******************************************************************/

// Constantes
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

echo "<br>";
echo "<br>";

/*******************************************************************/

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";
echo "<br>";

/*******************************************************************/
// DO WHILE

$g = 1;

do {
    echo "The number is: $g <br>";
    $g++;
} while ($g <= 5);

echo "<br>";
echo "<br>";

/*******************************************************************/
//FOR

for ($h = 0; $h < 10; $h++) {
    if ($h == 4) {
        break;
    }
    echo "The number is: $h <br>";
}

echo "<br>";
echo "<br>";

/*******************************************************************/

for ($i = 0; $i < 10; $i++) {
    if ($i == 4) {
        continue;
    }
    echo "The number is: $i <br>";
}

echo "<br>";
echo "<br>";


/*******************************************************************/
//STATEMENT

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

echo "<br>";
echo "<br>";

/*******************************************************************/

// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
?>
/*******************************************************************/
//DECLARE

<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a)
{
    return $a + $b;
}

echo addNumbers(5);

/*******************************************************************/

<?php declare (strict_types=1); // strict requirement
function addNumbers(float $a, float $b): float
{
    return $a + $b;
}

echo addNumbers(1.2, 5.2);
?>
/*****************************************************************/
// & FUNCTION (pasar argumentos por referencia)

<?php
function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;

/*****************************************************************/
//INDEX ARRAY

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

/*****************************************************************/
//MULDIMIMENSIONAL ARRAY

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

/*****************************************************************/
//FOR LOOP
//ROW (fila) COL (columna)

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

/*****************************************************************/
//TRY CATCH FINALLY

function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch(Exception $e) {
    echo "Unable to divide. ";
} finally {
    echo "Process complete.";
}

/*****************************************************************/
//CALLBACK

function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);

/*****************************************************************/

function is_prime(int $n): bool {
    $n=0;
    $cont=0;
    for ($i=1; $i <=$n; $i++) {
        if ($n % $i==0) {
            $cont=$cont+1;
        }
    }

    if ($cont==2) {
        echo true;
    }
}

echo is_prime (1);
echo is_prime (2);
echo is_prime (3);
echo is_prime (-4);


?>


</body>
</html>



