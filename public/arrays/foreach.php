<?php

/*
ARRAYS
*/ 

$we = array ("Richard", "Bri"); // matrices . Almacenar, manejar y operar sobre conjuntos de variables.
echo "<pre>";
print_r($we);

$country = ["England", "Spain"];
print_r($country);


/*
Loop arrays
*/

$we = array ("Richard", "Bri");
echo "<ol>";
foreach ($we as $nosotros){
    echo "<li>$nosotros</li>";
}
echo"</ol>";

$navidad = "Christmas";
$letters = str_split ($navidad, 3);
echo "<pre>";
print_r($letters);