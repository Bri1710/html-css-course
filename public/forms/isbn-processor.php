<?php

if(isset($_POST["submit"])) // check if form submitted
$isbn = $_POST["isbn"]; // assign post variable isbn number
$total = 0; // total, incrementor
$i = 0;
$digits = str_split($isbn); // split the string

foreach($digits as $digit){ // loop through the array
   $total += $digit * $i; // update the total = digit * 1, 2, 3 etc
   $i++;
}

 if($total % 11 == 0){ // check if the total / 11
    echo "valid"; // echo valid or invalid
 } else {
    echo "invalid";
}
