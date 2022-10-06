<?php

class StaticClass
{
    const THIS_IS_MY_CONSTANT = "This is the value";

    public static function myMoney(int $money, string $bank): string
    {
        return "I have " . $money . "€ in the " . $bank . " bank";
    }

    public static function getMoreMoney(int $money)
    {
        return $money + 10;
        echo static::THIS_IS_MY_CONSTANT;
        echo self::THIS_IS_MY_CONSTANT;
    }

}

echo StaticClass::myMoney(4000, "BBVA");
echo StaticClass::THIS_IS_MY_CONSTANT;
