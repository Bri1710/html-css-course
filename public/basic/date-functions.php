<?php

echo "<br>";
date_default_timezone_set("Europe/Madrid");
echo date("Y"); // año
echo "<br>";
echo "Today is " . date("l"); // día de la semana
echo "<br>";
echo "The time is " . date("g: i a"); // hora
echo "<br>";
echo date("d"); // día (nº)
echo "<br>";
echo date("jS"); // día (nº) th
echo "<br>";
echo date("F"); // mes
echo "<br>";
echo date("Y/m/d"); // año / mes / día
echo "<br>";
echo date("l ds Y, g:i A");

echo "<br>";
$year = date("L");
if ($year){
    echo "This is a leap year";
} else {
    echo "This is not a leap year";
}

echo "<br>";
$time = time();
echo $time; // epoch time 1/1/1970
echo "<br>";
$date = strtotime ("Next friday");
$seconds = $date - $time;
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = floor($hours / 24); // down
$days = ceil($hours / 24); //up
echo "<br>";
echo "It is $days days until next friday";
echo "<br>";

echo "<br>";
date_default_timezone_set("Europe/Madrid");
$christmasDay = strtotime ("December 25");
$currentTime = time();
$seconds = $christmasDay - $currentTime;
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = floor ($hours / 24);
echo "There are $days days until Christmas";
echo "<br>";
echo "<br>";