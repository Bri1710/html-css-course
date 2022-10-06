<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class MovingZeros
{

    public function moveZerosToTheEnd($arrayGiven)
    {
        $count = 0;
        $repeatZero = [];
        foreach ($arrayGiven as $value) {
            if ($value === 0) {
                $count++;
            }
        }
        $withoutZero = array_diff($arrayGiven, array(0));
        $repeatZero[] = str_repeat(0, $count);
        $result = array_merge($withoutZero, $repeatZero);
        var_dump($result);

    }

}


$movingZeros = new MovingZeros();
$movingZeros->moveZerosToTheEnd([1,2,0,1,0,1,0,3,0,1]);
//$movingZeros->moveZerosToTheEnd([1,2]);
//$movingZeros->moveZerosToTheEnd(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]);
// 10 ceros
