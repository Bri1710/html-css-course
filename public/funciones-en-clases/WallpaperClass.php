<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

class WallpaperClass
{
    public function checkHowManyWallpaperRollsAreNeededForTheRoom($lengthOfTheRoom, $widthOfTheRoom, $heightOfTheRoom)
    {
        // devolver una string del array

        $numbers = [
            "zero",
            "one",
            "two",
            "three",
            "four",
            "five",
            "six",
            "seven",
            "eight",
            "nine",
            "ten",
            "eleven",
            "twelve",
            "thirteen",
            "fourteen",
            "fifteen",
            "sixteen",
            "seventeen",
            "eighteen",
            "nineteen",
            "twenty"
        ];

        // comprobar si los datos dados son numéricos y mayores que 0
        if((is_numeric($lengthOfTheRoom) && ($lengthOfTheRoom >= 0)) && (is_numeric($widthOfTheRoom) && ($widthOfTheRoom >= 0)) && (is_numeric($heightOfTheRoom) && ($heightOfTheRoom>= 0)))
        {
            echo "<br>";
            echo "<br>";

            // pasar los cm a m para saber los metros de ancho del papel (el dibujo)
            $wallpaperWidth = 52/100;


            //cada rollo mide 10 cm de largo
            // sumar 15% a 10m
            $wallpaperLengthPlus15Percent = 10 + (15/100)*10;
            echo $wallpaperLengthPlus15Percent;


            //---------------------------------------------------------------------------------------------------------------
            /*

            // ancho pared entre ancho papel (tiras necesarias)
            $widthOfWallpaper = ceil($widthOfTheRoom / $wallpaperWidth);
            echo "el ancho de la pared entre el ancho del papel dan como resultado ";
            echo $widthOfWallpaper . " papeles necesarios (tiras)";
            echo "<br>";

            // número tiras por alto pared (ancho necesario)
            $metersNeeded = $widthOfWallpaper*$heightOfTheRoom;
            echo $metersNeeded . " metros de altura necesarios";
            echo "<br>";


            // metros necesarios entre la largura del papel + el 15%
            $division = ceil($metersNeeded/$wallpaperLengthPlus15Percent);
            echo "metros entre el largo del papel es " . $division;
            echo "<br>";

            */

            // el largo es la profundidad

            $rolls = floor ($heightOfTheRoom * $widthOfTheRoom);
            echo $rolls . " rollos necesarios";
            echo "<br>";

            $tiras = $rolls / $wallpaperWidth;
            echo $tiras . " tiras necesarias";











        }





    }
}
/*
function wallPaper($l, $w, $h) {
    if ($l ===0 or $w === 0 or $h ===0) return 'zero';
    $result = ceil(1.15 * ( 2*$l + 2*$w ) * $h / 5.2) ;
    $numbers = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve","thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen", "twenty"];
    return $numbers[$result];

}
 */
$wallpaper = new WallpaperClass();
print_r($wallpaper->checkHowManyWallpaperRollsAreNeededForTheRoom(4.0, 3.5, 3.0)); //"diez"
echo "<br>";
print_r($wallpaper->checkHowManyWallpaperRollsAreNeededForTheRoom(0.0, 3.5, 3.0)); //"cero"
echo "<br>";
print_r($wallpaper->checkHowManyWallpaperRollsAreNeededForTheRoom(-5, 3.5, 3.0)); //"cero"
echo "<br>";
// Room measure
// largo rollo 10m + 15%
// ancho rollo 52cm
// alto rollo
// resultado puede ser <= 0
// número tiradas <= 20
/*El ancho estándar de los rollos que quieres comprar es de 52 centímetros.
La longitud de un rollo es de 10 metros.
Tenga en cuenta, sin embargo, que es mejor tener una longitud adicional de papel tapiz.
Debe devolver como una sola palabra en inglés en minúsculas la cantidad de rollos a comprar.
Todos los rollos (incluso con ancho incompleto) se colocan borde con borde
El entero r (número de tiradas) siempre será menor o igual a 20
FORTH: el número de tiradas será un número entero positivo o nulo (ni una sola palabra en inglés; este número puede ser mayor a 20)
*/
