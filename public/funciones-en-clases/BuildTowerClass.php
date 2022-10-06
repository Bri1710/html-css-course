<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class BuildTowerClass
{

//  $number = 4

// "111*111"
// "11***11"
// "1*****1"
// "*******"

    public function buildTowerFloorsDependingOfTheNumber(int $numberGiven)
    {
        $quotation = '"';
        $resultStar = "*";
        $star = 1;


        for ($space = ($numberGiven-1); $space >= 0; $space--){
            do {
                if ($space >= ($numberGiven - 1)) {
                    $star = 1;
                } else {
                    $star += 2;
                    $resultStar = str_repeat("*", $star);
                }

                $resultSpaces = str_repeat(" ", $space);
            }
            while ($space == -1);

            $solution = $quotation . $resultSpaces . $resultStar . $resultSpaces . $quotation;
            echo $solution . "<br>";
        }


    }

}

echo "<pre>";
$buildTowerClassObject = new BuildTowerClass();
echo $buildTowerClassObject ->buildTowerFloorsDependingOfTheNumber(26);



