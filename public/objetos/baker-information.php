<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require("classes/FormInfoBaker.php");

$personInfo1 = new FormInfoBaker("Richard", "crippsy14@googlemail.com", "Collaboration", "I would like to work together. Contact me if you are interested. Have a nice day!");
echo $personInfo1->getName();
echo "<br>";
