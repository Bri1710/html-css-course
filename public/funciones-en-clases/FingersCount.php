<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class FingersCount
{

    public function whichFinger($number)
    {
        // empieza por 1, termina por 5, después del número 5 ir hacia atrás
        // contar hasta el número dado
        // a - Thumb
        // b - Index finger
        // c - Middle finger
        // d - Ring finger
        // e - Little finger

        $fingers = [
            1 => "Thumb",
            2 => "Index finger",
            3 => "Middle finger",
            4 => "Ring finger",
            5 => "Little finger",

        ];

        var_dump($fingers[$number]);

        // si el número dado es mayor que 5

            foreach ($fingers as $finger) {
                // 5, 4 ...
                if ($number > 5) {
                    // revertir orden array
                    $reverseTheCount = array_reverse($fingers);
                    // array comienza por el 5
                for ($count = 5; $count >= 1; $count--) {
                    if ($count === 1) {
                        $reverseAgainTheCount = array_reverse($reverseTheCount);
                        foreach ($reverseAgainTheCount as $reverseAgain) {
                            // 1, 2 ...
                            for ($count = 1; $count <= 5; $count++) {
                                var_dump($fingers[$reverseAgain]);
                            }
                        }
                    }
                }
            }
        }
    }


}

$whichOne = new FingersCount();
$whichOne->whichFinger(6);

