<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class DontGiveMeFive
{
    const NUMBER_TO_NOT_COUNT = '5';

    public function countCharacters(int $firstNumber, int $lastNumber): int
    {
        $count = 0;
        for ($number = $firstNumber; $number <= $lastNumber; $number++) {
            if (stripos((string)$number, self::NUMBER_TO_NOT_COUNT) === false) {
                $count++;
            }
        }
        return $count;
    }

}
/*
 * El $number es 1 <= 6, incrementa 1 (1+1=2)
 * Como no encuentra 5, suma 1 a $count (1)  =======> 1
 *
 * El $number es 2 <= 6, incrementa 1 (2+1=3)
 * Como no encuentra 5, suma 1 a $count (2)  =======> 2
 *
 * El $number es 3 <= 6, incrementa 1 (3+1=4)
 * Como no encuentra 5, suma 1 a $count (3)  =======> 3
 *
 * El $number es 4 <= 6, incrementa 1 (4+1=5)
 * Como encuentra 5, no suma 1 a $count
 *
 * El $number es 5 <= 6, incrementa 1 (5+1=6)
 * Como no encuentra 5, suma 1 a $count (4)  =======> 4
 *
 *  El $number es 6 <= 6, incrementa 1 (6+1=7)
 * Como no encuentra 5, suma 1 a $count (5)   =======> 5
 */


$dontGiveMeFiveObject = new DontGiveMeFive();
var_dump($dontGiveMeFiveObject->countCharacters(1, 6));
// 1, 2, 3, 4, 6 (5)
echo "<br>";
$dontGiveMeFiveObject2 = new DontGiveMeFive();
print_r($dontGiveMeFiveObject2->countCharacters(1, 4));



//             $arrayOfNumbers = explode (" ",$number);
//            if (in_array(5, $arrayOfNumbers)){
//            }
//            return $arrayOfNumbers;
//
//        }
//        return $arrayOfNumbers;
