<?php
echo "Here are the cookies: ";
echo "<br>";
if (isset($_COOKIE["name"])){ 
    echo "the name of the youtuber is " . $_COOKIE["name"]; 
} 

// setcookie()fecha de borrado 
// the cookies are stored in the user's browser
