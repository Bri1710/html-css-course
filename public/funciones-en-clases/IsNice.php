<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class IsNice
{

    /**
     * @param array $numbers
     * @return bool
     */
    public function sameElement(array $numbers): bool
    {
        $numbersGiven = array_unique($numbers);
        $count = 0;

        // 1 = 2 - 1
        // 2 = 1 + 1
        // 7 = 8 - 1
        // 8 = 7 + 1

        // 0 = 1 - 1
        //-1 = 0 - 1
        // 1 = 0 + 1

        foreach ($numbersGiven as $numberGiven) {
            if ($numbersGiven[$count] == $numberGiven + 1 || $numbersGiven[$count] == $numberGiven - 1) {
                $count++;
                if ($count === count($numbersGiven)-1) {
                    return true;
                }
            }
        }
        return false;
    }
}


$isNice = new IsNice();
echo $isNice->sameElement([1, 2, 7, 8]);//
echo "<br>";
echo $isNice->sameElement([3, 2, 1, 0]);
echo "<br>";
echo $isNice->sameElement([0, 1, 2, 3]);
echo "<br>";
echo $isNice->sameElement([1, 2, 3, 4]);
echo "<br>";
echo $isNice->sameElement([0, -1, 1]); //
echo "<br>";
//echo $isNice->sameElement([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]);//
echo "<br>";
//echo $isNice->sameElement([0, -1, -2, -3, -4]);
echo "<br>";
//echo $isNice->sameElement([2, 2, 3, 3, 3]);
echo "<br>";
//echo $isNice->sameElement([1, 1, 1, 2, 1, 1]);//
































