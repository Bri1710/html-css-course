<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DragonSurvive
{
   public function AreDragonsSurviveToBullets(int $bullets, int $dragons) : bool
   {
       if ($bullets >= $dragons*2) {
           return true;
       }
       return false;

   }
}
//     return $dragons * 2 <= $bullets ? true : false;
$survive = new DragonSurvive();
echo $survive->AreDragonsSurviveToBullets(10, 5);
echo $survive->AreDragonsSurviveToBullets(7, 4);
echo $survive->AreDragonsSurviveToBullets(100, 40);
