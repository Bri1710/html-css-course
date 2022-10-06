<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class AmountOfPoints
{
    public function sumPointsOfGames(array $games): int
    {
        $total = 0;

        foreach ($games as $value) {
           $number = explode(":", $value);
           if ($number[0] > $number[1]) {
               $total += 3;
           } elseif ($number[0] === $number[1]) {
               $total += 1;
           }
       }
       return $total;
    }
}

$points = new AmountOfPoints();
echo $points->sumPointsOfGames(['84544:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']); // 30
echo "<br>";
echo $points->sumPointsOfGames(['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']); // 0
echo "<br>";
echo $points->sumPointsOfGames(['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']); // 15
echo "<br>";
echo $points->sumPointsOfGames(['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']); // 12
