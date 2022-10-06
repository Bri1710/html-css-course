<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ReadableTimeClass
{
    public function humanReadableFormatTime (int $secondsGiven): string
    {
        if ($secondsGiven <= 359999) {

            $divisionToGetTheMinutes = floor($secondsGiven / 60);
            $remainderOfTheDivisionToGetTheSeconds = floor($secondsGiven % 60);
            $divisionToGetTheHours = floor($divisionToGetTheMinutes / 60);

            if ($divisionToGetTheMinutes >= 60) {
                $divisionAgainToGetTheHours = floor($divisionToGetTheMinutes / 60);
                $remainderOfTheDivisionToGetTheMinutes = floor($divisionToGetTheMinutes % 60);
                return sprintf("%02d:%02d:%02d", $divisionAgainToGetTheHours, $remainderOfTheDivisionToGetTheMinutes, $remainderOfTheDivisionToGetTheSeconds);

            }

        }
        return sprintf("%02d:%02d:%02d", $divisionToGetTheHours, $divisionToGetTheMinutes, $remainderOfTheDivisionToGetTheSeconds);

    }

}


//DateTime::createFromFormat('H\h i\m s\s','23h 15m 03s')->format('H:i:s');
$readableClass = new ReadableTimeClass();
echo $readableClass->humanReadableFormatTime(3900);
echo "<br>";
echo $readableClass->humanReadableFormatTime(0);
echo "<br>";
echo $readableClass->humanReadableFormatTime(5);
echo "<br>";
echo $readableClass->humanReadableFormatTime(60);
echo "<br>";
echo $readableClass>humanReadableFormatTime(86399);
echo "<br>";
echo $readableClass->humanReadableFormatTime(359999);
echo "<br>";
