<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class EnoughSpace
{
    public function checkHowManyPassengersTheBusIsNotAbleTake(int $maxPassengersAllowed, int $passengersOnTheBus, int $peopleWantedToTravel): int
    {
        $sum = $passengersOnTheBus + $peopleWantedToTravel;
        if ($sum <= $maxPassengersAllowed) {
            return 0;
        } else {
            return $sum - $maxPassengersAllowed;
        }
    }
}
$space= new EnoughSpace();
$space->checkHowManyPassengersTheBusIsNotAbleTake(20,5,5);
$space->checkHowManyPassengersTheBusIsNotAbleTake(100,60,50);
