
<?php
echo "Here are the cookies: ";
echo "<br>";
if (isset($_COOKIE["name"])){ 
    echo "the first one is " . $_COOKIE["name"]; // muestra el nombre que envía} 
}
echo "<br>";
if (isset($_COOKIE["age"])){
    echo "the second one is " . $_COOKIE["age"]; // muestra la edad
} 
echo "<br>";
if (isset($_COOKIE["favouritecolour"])){
    echo "the third one is " . $_COOKIE["favouritecolour"]; // muestra el color favorito
}
echo "<br>";
PHP_EOL;
