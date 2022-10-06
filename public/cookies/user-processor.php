<?php
echo "This is the array :";
echo "<br>";
print_r ($_POST); // array
echo "<br>";

if(isset($_POST["submit"])) { // check if form submitted
    $name = $_POST["name"];
    $age = $_POST["age"];
    $favouriteColour = $_POST["favouritecolour"];

    setcookie("name", $name);
    setcookie("age", $age);
    setcookie("favouritecolour", $favouriteColour);

    echo "<br>";

    if (isset($_POST["name"])) {
        echo "Your name is $name <br>";
    } 
    if (isset($_POST["age"])) {
        echo "Your age is $age <br>";
    }  
    if (isset($_POST["favouritecolour"])) {
        echo "Your favourite colour is $favouriteColour";
    }
}