<?php

$string = "I love this website but feel that the shit comments are detracting from the user experience. The person who wrote this is an stupid. BRIXIT REQUEJO";
$string2 = "I really like this website. It's awesome!. RICHARD CRIPPS";

$badWords = ["shit", "stupid"];

foreach ($badWords as $badWord){
    $string = str_replace ($badWord, "****", $string);
    $string2 = str_replace ($badWord, "****", $string2);

}

echo $string;
echo "<br>";
echo "<br>";
echo $string2;
