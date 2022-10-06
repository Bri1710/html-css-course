<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class SetAlarm
{
    public function setTheAlarmForAnEmployerNotBeenOnHolidays(bool $employed, bool $holidays): bool
    {
        if ($employed === true && $holidays === false) {
            return true;
        }

        return false;
    }
}
//   return $employed && !$holidays;
//   return $employed>$holidays; --->no es buena opcion!!
$lastLetter = new SetAlarm();
echo $lastLetter->setTheAlarmForAnEmployerNotBeenOnHolidays(true, false);
echo $lastLetter->setTheAlarmForAnEmployerNotBeenOnHolidays(true, true);
