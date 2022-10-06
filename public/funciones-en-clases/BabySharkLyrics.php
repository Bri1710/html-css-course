<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class BabySharkLyrics
{
    // 3 veces "Baby shark, doo doo doo doo doo doo"
    // 1 vez "Baby shark!"
    // al final 1 vez "Run away,..."

    public function returnTheLyrics()
    {
        $count = 0;
        $endLyrics = "Run away,...";
        $repeat = ", doo doo doo doo doo doo";
        $arrayOfParts = [
            "Baby shark, doo doo doo doo doo doo ",
            "Mommy shark, doo doo doo doo doo doo ",
            "Daddy shark, doo doo doo doo doo doo ",
            "Grandma shark, doo doo doo doo doo doo ",
            "Grandpa shark, doo doo doo doo doo doo ",
            "Let's go hunt, doo doo doo doo doo doo ",
        ];

        foreach ($arrayOfParts as $key => $value) {
            $repeatTheString = str_repeat($value, 3);
            if ($count == $key) {
                $count++;
                $replace = str_replace($repeat, "!", $value);
                var_dump($repeatTheString. $replace);
                }

        }
        var_dump($endLyrics);


    }
}
/* CORRECCIÓN KATA
 * function babySharkLyrics() {
  $lyrics = ['Baby shark', 'Mommy shark', 'Daddy shark', 'Grandma shark', 'Grandpa shark', 'Let\'s go hunt'];
  $empty = '';
  foreach($lyrics as $l) {
    $empty .= str_repeat($l . ", doo doo doo doo doo doo\n", 3) . $l . '!' . "\n";
  }
  return $s . 'Run away,…';
}
 */
$babyShark = new BabySharkLyrics();
$babyShark->returnTheLyrics();
