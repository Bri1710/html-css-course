<?php
// set a cookie
// A cookie is used to identify a user
// A cookie is a small file that the server embeds on the user's computer


// session_start()
// A session stores data on the server
// Sessions have a particular identifier

session_start();

$_SESSION["seven"] = "dark color";
$_SESSION["eight"] = "light color";

if (isset($_POST["submit"])) {
    if (isset($_POST["seven"])) {
        echo "the hair dye color that you have chosen is been store in your wish list";
        setcookie("seven", "rubio cobrizo intenso", time() + 365 * 24 * 60 * 60 * 1000);
    }
    if (isset($_SESSION["seven"])) {
         echo $_SESSION["seven"];
    }
    if (isset($_POST["eight"])) {
        echo "the hair dye color that you have chosen is been store in your wish list";
        setcookie("eight", "rubio claro cobrizo intenso", time() + 365 * 24 * 60 * 60 * 1000);
    }
    if (isset($_SESSION["eight"])) {
       echo $_SESSION["eight"];
    }
}