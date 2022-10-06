<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ExpressionMatter
{
    public function getTheBiggerNumber(int $firstNumber, int $secondNumber, int $thirdNumber): int
    {

        // Write list of each possible combination of operations with +, *, and ()
        // a + b + c
        // a + (b + c)
        // (a + b) + c
        // a * b * c
        // a * (b * c)
        // (a * b) * c
        // a + b * c =
        // (a + b) * c =
        // a + (b * c) =

        $firstCombinationAdd = $firstNumber + $secondNumber;
        $firstCombinationMultiply = $firstNumber * $secondNumber;
        $secondCombinationAdd = $secondNumber + $thirdNumber;

        $value1 = $firstCombinationAdd + $thirdNumber;
        $value2 = $firstCombinationAdd * $thirdNumber;
        $value3 = $firstCombinationMultiply + $thirdNumber;
        $value4 = $firstCombinationMultiply * $thirdNumber;
        $value5 = $secondCombinationAdd + $firstNumber;
        $value6 = $secondCombinationAdd * $firstNumber;

        return max($value1, $value2, $value3, $value4, $value5, $value6);

    }

}

//return max($a + $b + $c, $a * $b * $c, $a * ($b + $c), ($a + $b) * $c);

$maximum = new ExpressionMatter();
echo $maximum->getTheBiggerNumber(2, 1, 2);
echo "<br>";
echo $maximum->getTheBiggerNumber(2, 1, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(2, 2, 4);
echo "<br>";
echo $maximum->getTheBiggerNumber(3, 3, 3);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 1, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 2, 3);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 3, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(2, 2, 2);
echo "<br>";
echo $maximum->getTheBiggerNumber(5, 1, 3);
echo "<br>";
echo $maximum->getTheBiggerNumber(3, 5, 7);
echo "<br>";
echo $maximum->getTheBiggerNumber(5, 6, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 6, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(2, 6, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(6, 7, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(2, 10, 3);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 8, 3);
echo "<br>";
echo $maximum->getTheBiggerNumber(9, 7, 2);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 1, 10);
echo "<br>";
echo $maximum->getTheBiggerNumber(9, 1, 1);
echo "<br>";
echo $maximum->getTheBiggerNumber(10, 5, 6);
echo "<br>";
echo $maximum->getTheBiggerNumber(1, 10, 1);
