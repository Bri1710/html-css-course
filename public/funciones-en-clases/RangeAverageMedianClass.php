<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// SIN TERMINAR!!!!
class RangeAverageMedianClass
{
    // horas|minutos|segundos (enteros positivos o nulos), separados por una coma (uno o dos dígitos)
    // comparar resultados equipos (rango, promedio y mediana)
    // Rango: media entre resultados altos y bajos. Ej: {4, 6, 9, 3, 7} 9 − 3 = resultado 6
    // Promedio: sumar números y dividir entre el total de números
    // Mediana: ordenar desde el valor más bajo al más alto y elegir el del medio. Ej: {3, 3, 5, 9, 11} resultado 5
    // *si son impares, media de los dos valores centrales (la mediana de {3, 5, 6, 9} es (5 + 6) / 2 = resultado 5,5
    // Devolver "Rango: 00|47|18 Promedio: 01|35|15 Mediana: 01|32|34"
    // "Rango: hh|mm|ss Promedio: hh|mm|ss Mediana: hh|mm|ss"
    // hh, mm, ss son números enteros (representados por cadenas) con 2 dígitos cada uno.
    // si un resultado en segundos es ab.xy se dará truncado como ab.


    public function valuesOfATeam(string $resultsOfTheRunners)
    {
        if ($this->checkIfTheStringGivenIsValid($resultsOfTheRunners)) {
            $replace = str_replace(" ", "", $resultsOfTheRunners);
            $split = preg_split("/(\,)/", $replace);
            $countElements = count($split) * 3 - 1;
            $implode = implode("|", $split);
            $splitAgain = preg_split("/(\|)/", $implode);

            $number = 0;

            for ($countHours = $number; $countHours <= $countElements; $countHours = $countHours +3) {
                $hours = $splitAgain[$countHours];

                    var_dump ($hours);

                }
            $number++;

            for ($countMinutes = $number; $countMinutes  <= $countElements; $countMinutes  = $countMinutes  +3) {
                $minutes = $splitAgain[$countMinutes];
                $sumNumbers = +$minutes;
                $divideNumbers = $sumNumbers / $countElements;
                var_dump($divideNumbers);



            }
            $number++;

            for ($countSeconds = $number; $countSeconds <= $countElements; $countSeconds = $countSeconds +3) {
                $seconds = $splitAgain[$countSeconds];


                var_dump ($seconds);

            }



        }



            //0,3,6,9,12 (3 en 3. empieza desde el 0.a, a+d, a+2d, a+3d...)
            //1,4,7,10,13 (empieza desde el 1)
            //2,5,8,11,14 (empieza desde el 2)




        return [];
    }


    private function checkIfTheStringGivenIsValid(string $resultsOfTheRunners): bool
    {
        if (preg_match("/(\d){1,2}(\|)(\d){1,2}(\|)(\d){1,2}(\,)(\s)/", $resultsOfTheRunners)) {
            if (str_ends_with($resultsOfTheRunners, ",") || str_contains($resultsOfTheRunners, "-") || str_contains($resultsOfTheRunners, ".")) {
                return false;
            }
            return true;
        }

        return false;
    }

}
$rangeAverageMedian = new RangeAverageMedianClass();
$rangeAverageMedian->valuesOfATeam("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17");


//"01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17"
//"Range: 01|01|18 Average: 01|38|05 Median: 01|32|34");
//Range
//(01,1,01,1,2) 2-1 = 1
//(15,47,17,32,17) 47-15 = 32
//(59,16,20,34,17) 59-16 = 43



