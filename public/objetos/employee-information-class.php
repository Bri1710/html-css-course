<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require ("classes/Employee.php");
require ("classes/Information.php");
require ("classes/StaticClass.php");

$employeeInstanceOne = new Employee("Richard", "Cripps", 29);
$employeeInstanceTwo = new Employee("Paula", "Robles", 24);

$employeeInstanceTwo->setAge(25);

echo "El apellido de " .  $employeeInstanceTwo->getfirstName() . " es " . $employeeInstanceTwo->getLastName();
echo "<br>";
echo "Tiene " . $employeeInstanceTwo->getAge() . " años";
echo "<br>";

echo StaticClass::getMoreMoney(10);
echo StaticClass::THIS_IS_MY_CONSTANT;
echo Employee::THIS_IS_A_CONST;
