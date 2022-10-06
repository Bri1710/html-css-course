<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class FindMissing
{
    /**
     * @param array $numbers
     * @return int
     */
    public function getSeriesOfNumbersIncludingMissingNumber(array $numbers): int
    {
        $difference = ($this->getTheDifferenceBetweenTheNumbers($numbers));
        $seriesOfNumbers = [];
        for ($result = $numbers[0]; $result <= $difference*count($numbers)/*+1*/; $result+=$difference) {
            var_dump($result);
            //$seriesOfNumbers = explode(",", $result);
            //$compare = array_diff($result, $numbers);
            //$numberAdd = implode ($compare);
        }
        return $result;

    }

    /**
     * @param array $numbers
     * @return int
     */
    private function getTheDifferenceBetweenTheNumbers(array $numbers): int
    {
        $increaseTheFirstNumber = $this->addToNumber($numbers);
        $decreaseTheLastNumber = $this->removeFromNumber($numbers);
        if ($increaseTheFirstNumber === $decreaseTheLastNumber) {
            return $increaseTheFirstNumber;
        } else {
            $result = $increaseTheFirstNumber - $decreaseTheLastNumber;
            if ($result < 0) {
                return $decreaseTheLastNumber - $increaseTheFirstNumber;
            }
        }
        return 0;
    }

    /**
     * @param array $numbers
     * @return int
     */
    private function addToNumber(array $numbers): int
    {
       if ($this->checkIfTheNumbersGivenAreValid($numbers)) {
           for ($count = 1; $count < max($numbers); $count++) {
               if ($numbers[0] + $count == $numbers[1]) {
                   return $count;
               }
           }
       }
       return 0;
    }

    /**
     * @param array $numbers
     * @return int
     */
    private function removeFromNumber(array $numbers): int
    {
        if ($this->checkIfTheNumbersGivenAreValid($numbers)) {
            for ($count = 1; $count < max($numbers); $count++) {
                if ($numbers[count($numbers)-1] - $count == $numbers[count($numbers)-2]) {
                    return $count;
                }
            }
        }
        return 0;
    }

    /**
     * @param array $numbers
     * @return bool
     */

    private function checkIfTheNumbersGivenAreValid(array $numbers): bool
    {
        if (!count($numbers) >= 3 || in_array(0, $numbers)) {
            return false;
        }

        return true;
    }
}



$movingZeros = new FindMissing();
var_dump($movingZeros->getSeriesOfNumbersIncludingMissingNumber([1, 2, 4])); // resultado = 3 (sumar 1)
echo "<br>";
var_dump($movingZeros->getSeriesOfNumbersIncludingMissingNumber([1, 3, 5, 9, 11])); // resultado = 7 (sumar 2)
echo "<br>";
var_dump($movingZeros->getSeriesOfNumbersIncludingMissingNumber([1, 2, 3, 5])); // resultado = 4 (sumar 1)
echo "<br>";
var_dump($movingZeros->getSeriesOfNumbersIncludingMissingNumber([10, 20, 30, 50])); // resultado = 400 (sumar 100)

/*
 * function find($integers) {
  $variable = new MyClass();

  return $variable->helloWorld();
}

class MyClass
{
  public function helloWorld()
  {
    return "Hello World";
  }
}
 */
