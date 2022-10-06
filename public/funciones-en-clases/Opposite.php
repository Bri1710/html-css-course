<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Opposite
{
    public function getTheOppositeNumber(int $number): int
    {
        return $number *(-1);

    }
}
//   return -$number;
$opposite = new Opposite();
echo $opposite->getTheOppositeNumber(-1);
