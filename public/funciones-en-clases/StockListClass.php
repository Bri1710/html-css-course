<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class StockListClass
{
    public function checkHowManyBooksAreInTheSameCategory(array $classifiedBooks, array $listOfCategories)
    {

        if ($this->validateClassifiedBooks($classifiedBooks) && ($this->validateListOfCategories($listOfCategories))) {
            $implode = implode("-", $classifiedBooks);
            var_dump($implode);
            preg_match_all('!\d+!', $implode, $matches);
            var_dump($matches);

            $count= count($classifiedBooks);
            var_dump($count);
            //$chunck= array_chunk()


           // $part =substr($classifiedBooks, 0, 1);
            //var_dump($part);














        }
    }
            /*
            foreach ($classifiedBooks as $valueBook) { // ["BBAR 150", "CDXE 515", "BKWR 250"]
                $firstLetters = substr($valueBook, 0, 1); // B C B books
                $numbersOfTheBooks = preg_replace('/[^(\d)]/', '', $valueBook); // 150 515 250 books
                $lettersAndNumbers = $firstLetters . $numbersOfTheBooks; // B150 C515 B250 books
                $search = array_search($firstLetters, $listOfCategories); // 1 2 1 == B C B
            */




            // ["BBAR 150", "CDXE 515", "BKWR 250"] localizar misma letra

            // comprobar si ["A", "B", "C", "X"] $listOfCategories si encuentran en ["BBAR 150", "CDXE 515", "BKWR 250"]$classifiedBooks
            // extraer primera letra de "BBAR 150"



    /**
     * @param array $books
     * @return bool
     */
    private function validateClassifiedBooks(array $books): bool
    {
        foreach ($books as $book) {
            if (preg_match("/([A-Z]{3,}(\s)(\d)+)+/", $book)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array $list
     * @return bool
     */
    private function validateListOfCategories(array $list): bool
    {

        $count = 0;
        foreach ($list as $listValue) {
            $count++;
            $lengthOfTheValue = strlen($listValue);
            if (($count == $lengthOfTheValue) && (preg_match("/[A-Z]/", $listValue))) {
                return true;
            }
        }

        return false;
    }


}

$stockList = new StockListClass();
$stockList->checkHowManyBooksAreInTheSameCategory(["BBAR 150", "CDXE 515", "BKWR 250"], ["A", "B", "C", "X"]);
echo "<br>";
// "(A : 0) - (B : 400) - (C : 515)"
//$stockList->checkHowManyBooksAreInTheSameCategory(["BBAR   5", "CDXE 515"], ["A", "1", "C"]);
echo "<br>";
//$stockList->checkHowManyBooksAreInTheSameCategory(["CD 8"], ["a", "B", "C"]);
echo "<br>";

