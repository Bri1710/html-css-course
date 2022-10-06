<?php

if (isset($_POST["submit"])) {
    $card = $_POST["card"]; 
    $allCards = [
        "1234" => "AmericanExpress", // key => value pair
        "5678" => "Visa",
        "1278" => "MasterCard"
    ];
  
    if (!is_numeric($card) || strlen($card) !== 16){ 
        echo $card . "<br>" . "The submitted characters are not a valid credit card." . "<br>" . "Please try again";

    } else {
        // $card === 1234111111111111
        echo substr($card, 0, strlen($card) - 4)  . "**** <br> Valid card. <br> The last 4 numbers are not shown for your security <br>";

        $firstFourDigits = substr($card, 0, 4);

        if (isset($allCards[$firstFourDigits])) {
            echo " " . $allCards[$firstFourDigits];
        } else {
            echo "We don't know which type of card you are using. Sorrrrrrryyyy!";
        }


    }
}

/*

        $findN = substr($card, 0, 4);

        $findNumber = strpos($findN, "1234");
        if($findNumber !== false){
            echo "<br>" . "AMERICAN EXPRESS";
        }

 */