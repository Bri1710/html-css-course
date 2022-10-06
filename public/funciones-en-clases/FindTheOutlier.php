<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class FindTheOutlier
{

    public function getTheOutlierNumber (array $number)
    {
        $numberGiven = ($this->checkIfThereIsMoreThanOneEvenNumber($number));
        var_dump($numberGiven);
    }

    public function checkIfThereIsMoreThanOneEvenNumber(array $numbers): int
    {
        if ($this->checkIfTheNumbersGivenAreValid($numbers)) {
            foreach ($numbers as $number) {
                if ($number % 2 == 0) {
                        return ($number);
                    }
                }
            }

        return 0;
    }




    private function checkIfTheNumbersGivenAreValid(array $numbers): bool
    {
            if (count($numbers) >= 3) {
                return true;
            }
            return false;
    }

}
$outlier = new FindTheOutlier();
$outlier->getTheOutlierNumber([160, 3, 1719, 19, 11, 13, -21]);
$outlier->getTheOutlierNumber([2, 4, 0, 100, 4, 11, 2602, 36]);
