<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class IPvalidationClass
{

    public function isValidIPAddress(string $addressGiven): bool
    {

        $dotsCount = substr_count($addressGiven, ".");
        $lengthOfTheIP = strlen($addressGiven);

        if ($dotsCount === 3 && $lengthOfTheIP >= 7) {
            $numbers = explode(".", $addressGiven);

            foreach ($numbers as $number) {
                if(!$this->validateANumber($number)){
                    return false;
                }
            }
            return true;
        }
        return false;

    }


    public function validateANumber(string $numberGiven): bool
    {
        $lengthOfTheNumber = strlen($numberGiven);
        $positionOfTheNumber = strpos($numberGiven, "0");

        if (!is_numeric($numberGiven)){
            return false;
        }

        if (!ctype_graph($numberGiven)){
           return false;
        }

        if ($lengthOfTheNumber > 1 && $positionOfTheNumber === 0) {
            return false;
        }

        if ($numberGiven > 255 || $numberGiven < 0) {
            return false;
        }

        if ($lengthOfTheNumber > 3) {
            return false;
        }

        return true;
    }

}




//decouple

$IP = new IPvalidationClass();
$IP1= $IP->isValidIPAddress("a.45.67.89"); //false (a)
echo($IP1);
echo "<br>";
$IP2= $IP->isValidIPAddress("01.02.3.4"); //false (01, 02)
echo($IP2);
echo "<br>";
$IP3= $IP->isValidIPAddress("1.2.259.4"); //false (259)
echo($IP3);
echo "<br>";
$IP4= $IP->isValidIPAddress("1.3.4"); //false (falta un número)
echo($IP4);
echo "<br>";
$IP5= $IP->isValidIPAddress("1.2.0.4"); //true
echo($IP5);
echo "<br>";
$IP6= $IP->isValidIPAddress(" 3.2.0.4"); //false (espacio en blanco)
echo($IP6);
echo "<br>";

