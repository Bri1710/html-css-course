<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PhoneNumber
{
    public function createPhoneNumber(array $numbersGiven)
    {
        $string = "(";
        for ($count = 0; $count <= 9; $count++) {
            $string .= $numbersGiven[$count];
            if ($count == 2) {
                $string .= ") ";
            }
                if ($count == 5) {
                    $string .= "-";
                }
        }

        return $string;

    }
}
$phoneClassObject = new PhoneNumber();
echo $phoneClassObject->createPhoneNumber([1, 7, 3, 4, 5, 6, 7, 8, 9, 0]);
