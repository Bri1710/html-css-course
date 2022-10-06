<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class GoingCinema
{
    // Sistema A: compra un boleto (15 dólares) cada vez  15 * 3 = 45
    // Sistema B: compra una tarjeta (500 dólares) y un primer boleto por 0,90 veces el precio del boleto,
    // 500 + 15 * 0,90 + (15 * 0,90) * 0,90 + (15 * 0,90 * 0,90) * 0,90 ( = 536,5849999999999, sin redondeo para cada boleto)
    // John quiere saber cuántas veces debe ir al cine para que el resultado final del Sistema B,
    // cuando se redondea al próximo dólar, sea más barato que el Sistema A.

    public function howManyTimes ($card, $priceTicket, $percent)
    {
        // precio ticket = 5€
        // 5*6 = 30
        // tarjeta = 20
        // (6 * 0,90) * 0,90 = 4,86
        // 20 + 4,86 = 24,86

        // (5 * 0,90) * 0,90 = 4,05
        // 24,05


        $systemB = $card + $priceTicket * $percent;
        // 500 + 15 * 0.90
        // + (15 * 0.90) * 0.90 + (15 * 0.90 * 0.90) * 0.90 ( = 536.5849999999999
        $count = 0;
        for($number = 1; $number <= $card; $number++){
            $result = $card + ($number * $percent) * $percent; //528,35
            $count++; //35
            if($priceTicket * $count < $result) //15 * 35 = 525 < 528,35
            //525 < 528,35
            {
                var_dump($count);
            }


        }

    }

}
$cinema = new GoingCinema();
$cinema->howManyTimes(500, 15, 0.9); // 43
//$cinema->howManyTimes(100, 10, 0.95); // 24
// (con tarjeta el precio total es 235, con billetes 240)

