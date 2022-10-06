<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class PersistenceClass
{
/*
Parámetro positivo $numberGiven
Devolver su persistencia multiplicativa
(número de veces que debes multiplicar los dígitos en num hasta llegar a un solo dígito)

39 --> 3
3*9 = 27
2*7 = 14
1*4 = 4
y 4 tiene un solo dígito

999 --> 4
9*9*9 = 729
7*2*9 = 126
1*2*6 = 12
1*2 = 2
y 2 tiene un solo dígito


*/


    public function persistenceOfANumber(int $numberGiven)
    {
        $while = 1;
        $numbers = str_split($numberGiven);
        $lenght = strlen($numberGiven);

        // array con el largo del número dado
        $array = array_pad($numbers, $lenght, 0);

        do {

            // repetir la división en dos arrays
            // repetir la multiplicación
            // parar cuando solo hay un dígito
            // devolver int = 3 (número de veces que se ha realizado la multiplicación)

            $product = array_product($array);
            var_dump($product); // 3*9=27

            $split = str_split($product);
            var_dump($split); // divide 2 y 7

            $result = array_product($split);
            var_dump($result); // 2*7=14

            $split2 = str_split($result);
            var_dump($split2);// divide 1 y 4

            $result2 = array_product($split2);
            var_dump($result2); // 1*4=4

        }
        while ($result == strlen($while));

        $total = array_count_values($split);
        return $total;

    }


}

$persistenceClassObject = new PersistenceClass();
print_r($persistenceClassObject->persistenceOfANumber(39));
