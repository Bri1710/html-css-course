<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ExpandedFormClass
{
    public function expandedANumberToAnStringOfASumOfNumbers(int $numberGiven)
    {
        $arrayOfStringsToImplode = [];
        $lengthOfTheNumber = strlen($numberGiven);
        $splitNumbers = str_split($numberGiven);

        if ($lengthOfTheNumber === 1) {
            return (string) $numberGiven;
        }

        foreach ($splitNumbers as $splitNumber) {
            $lengthOfTheNumber--;

            if ($splitNumber == 0) {
                continue;
            }

            $arrayOfStringsToImplode[] = $splitNumber . str_repeat("0", $lengthOfTheNumber);
        }

        return implode(' + ', $arrayOfStringsToImplode);
    }

}

// 1002

// Split it 1,0,0,2
// Length of the original string is 4
// Pad number by (length of string - (current key + 1))
//// length = 4
//// First number is 1
//// 4 - (0 + 1) = 3
//// pad right 1 with three 0s
//// 1000
//// if number is 0, continue;
/// 4 - (3 + 1) = 4
/// pad right 2 with 0 0s


$expanded = new ExpandedFormClass();
//print_r($expanded->expandedANumberToAnStringOfASumOfNumbers(12));
echo "<br>";
//print_r($expanded->expandedANumberToAnStringOfASumOfNumbers(42));
echo "<br>";
print_r($expanded->expandedANumberToAnStringOfASumOfNumbers(7023));
echo "<br>"; // 7000, 20, 3
//print_r($expanded->expandedANumberToAnStringOfASumOfNumbers(8));
echo "<br>";
//print_r($expanded->expandedANumberToAnStringOfASumOfNumbers(4058));
echo "<br>";
