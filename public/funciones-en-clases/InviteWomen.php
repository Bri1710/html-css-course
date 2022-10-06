<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class InviteWomen
{
    const GENDER_CONST = ["women" => -1, "men" => 1];
    const INVERSE_CONST = ["sum" => "+", "rest" => "-"];

    public function areLessWomenThanMen(array $arrayOfGender): bool
    {
        $sumOfMen = 0;
        $sumOfWomen = 0;

        foreach ($arrayOfGender as $gender) {
            if ($gender === self::GENDER_CONST["men"]) {
                $sumOfMen += $gender;
            } else {
                $sumOfWomen += str_replace(self::INVERSE_CONST["rest"], self::INVERSE_CONST["sum"], $gender);
            }
        }
        if ($sumOfWomen < $sumOfMen) {
            return true;
        } else {
            return false;
        }

    }

}

$inviteClassObject = new InviteWomen();
var_dump($inviteClassObject->areLessWomenThanMen([1, -1, 1])); //true
echo "<br>";
var_dump($inviteClassObject->areLessWomenThanMen([1, -1, 1, -1])); //false
echo "<br>";
var_dump($inviteClassObject->areLessWomenThanMen([1, 1])); //true
echo "<br>";
var_dump($inviteClassObject->areLessWomenThanMen([-1, -1])); //false
