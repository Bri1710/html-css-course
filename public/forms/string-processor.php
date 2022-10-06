<?php

if(isset($_POST["submit"])){
    $sentence = $_POST ["count-my-letters"];
    $spaces = $_POST ["spaces"];
    
    if ($spaces == "Count spaces"){
        $stringLength = strlen(str_replace(" ", "", $sentence));
    } else {
        $stringLength = strlen($sentence);

    }

    echo "This string has $stringLength characters long";

} else {
    echo "Please visit form page";
}