<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SmallEnough
{
    public function numberIsSmallEnough (array $numbers, int $limit): bool
    {
        if (max($numbers) > $limit) {
            return false;
        } else {
            return true;
        }

    }
}
$isSmall = new SmallEnough();
echo $isSmall->numberIsSmallEnough([66, 101], 200);
echo "<br>";
echo $isSmall->numberIsSmallEnough([78, 117, 110, 99, 104, 117, 107, 115], 100);
