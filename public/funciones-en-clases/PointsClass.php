<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


class PointsClass
{

    public function comprobarSiUnNumeroEsMayorQueLaMedia(int $numeroAComprobar, array $numerosParaHallarLaMedia): bool
    {
        $media = $this->hallarLaMediaDeLosNumeros($numerosParaHallarLaMedia);

        if ($media < $numeroAComprobar) {
            return true;
        }

        return false;
    }


    public function hallarLaMediaDeLosNumeros(array $numeros): float
    {
        $sumaNumeros = array_sum($numeros);
        $contarNumeros = count($numeros);
        $media = $sumaNumeros / $contarNumeros;
        return $media;

    }


}
$PointsClassVariableObject = new PointsClass();
var_dump($PointsClassVariableObject->comprobarSiUnNumeroEsMayorQueLaMedia(8,[5, 7, 8, 2, 5, 6, 9, 4]));

/*
class PointsClass
{

    public function checkIfANumberIsBiggerThanTheAverage (array $classPoints, int $myPoints): bool
    {
        // Sumar array ($classPoints)
        // Contar cuantos números ($countNumbers) hay en el array ($classPoints)
        // Dividir la suma de numeros ($sumclassPoints) entre la cantidad de números ($countNumbers) para conseguir la media ($average)
        // Si mi puntuación ($myPoints) es mayor que la media ($average), devolver true

        $sumOfPoints = array_sum($classPoints);
        $countNumbers = count($classPoints);
        $average = $sumOfPoints / $countNumbers;
        if($myPoints > $average){
            return true;
        }
        return false;

    }


}
$PointsClassVariableObject = new PointsClass();
var_dump($PointsClassVariableObject->checkIfANumberIsBiggerThanTheAverage([5, 7, 8, 2, 5, 6, 9, 4], 8));

/*
 *   private function sol($classPoints, $yourPoints) {
    return array_sum($classPoints) / count($classPoints) < $yourPoints;
  }
  public function testRandomTests() {
    for ($i = 0; $i < 100; $i++) {
      $arr = [];
      for ($j = 0; $j < 50; $j++) {
        $arr[] = rand(0, 100);
      }
      $points = rand(0, 100);
      $this->assertEquals($this->sol($arr, $points), betterThanAverage($arr, $points));
    }
  }
}
 */
