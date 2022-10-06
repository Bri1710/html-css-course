<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Rotate
{

    //Tome un número:
    //56789
    //67895
    //68957
    //68579
    //68597

    //  6789
    //6789
    //689
    //68
    //68

    //5
    //     5
    //    57
    //   579
    //   597

    // Ahora se acabó ya que manteniendo los primeros cuatro queda solo un dígito que rotado es él mismo.
    //De la siguiente secuencia de números:
    //56789 -> 67895 -> 68957 -> 68579 -> 68597
    //devolver el mayor: 68957.

    public function rotateNumberToGetMax (int $numbersGiven)
    {

        $lengthOfNumbersGiven = strlen($numbersGiven); // 5



        $splitNumbers1 = str_split($numbersGiven); // 56789
        $replace = str_replace($splitNumbers1[0], $splitNumbers1[1], $numbersGiven). $splitNumbers1[0];
        var_dump($replace);
        $delete = substr($replace, 1); //67895
        var_dump($delete);

        $split = (str_split($delete));

        //68957

        $replace2 = str_replace($split[1], $split[2], $delete). $splitNumbers1[2] ;
        var_dump($replace2);




    }

}
$rotate = new Rotate();
echo $rotate->rotateNumberToGetMax(56789); // 68957
echo "<br>";
//echo $rotate->rotateNumberToGetMax(38458215); // 85821534
