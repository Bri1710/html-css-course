<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class GrowthPopulation
{
    public function yearsNeededToGrowthUntilNumber(int $population, int|float $percent, int $augmentation, int $numberOfInhabitants): int
    {
        $convertPercent = $percent / 100;
        $number = $population + $population * $convertPercent + $augmentation;
        $count = 0;

        for ($value = $number; $value <= $numberOfInhabitants; $value = ceil($value+$value* $convertPercent + $augmentation)) {
            $count++;
            if ($value < $numberOfInhabitants){
               return $count+1;
            }
        }
        return 0;
    }
}
$growth = new GrowthPopulation();
echo $growth->yearsNeededToGrowthUntilNumber(1500, 5, 100, 5000); // 15
echo $growth->yearsNeededToGrowthUntilNumber(1500000, 2.5, 10000, 2000000); // 10
