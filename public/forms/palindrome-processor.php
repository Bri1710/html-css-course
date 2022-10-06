<?php

$input = $_POST["word"];
$reverseWord = strrev($input); // strrev revierte una string

if (isset($_POST["submit"])){

    echo 'The word that you have submited is ' . '"' . $input . '".';
    echo "<br>";

} if ($input == $reverseWord) {

    echo 'The word ' . '"' . $input . '"' . ' reversed is ' . '"' . $reverseWord . '".';
    echo "<br>";
    echo 'It is a palindrome.';

} else {

    echo 'The word ' . '"' . $input . '"' . ' reversed is ' . '"' . $reverseWord . '".'; 
    echo "<br>";
    echo 'It is not a palindrome.';
}