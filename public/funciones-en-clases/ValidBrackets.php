<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ValidBrackets
{
    /**
     *
     */
    const OPEN_CLOSE_BRACKETS = [
        1 => ["(", ")"],
        2 => ["[", "]"],
        3 => ["{", "}"]
    ];


    /**
     * @param string $brackets
     * @return string
     */
    public function splitTheString(string $brackets)
    {

            for ($typeOfOpenBracket = 1; $typeOfOpenBracket < 3; $typeOfOpenBracket++) {
                if (strpos($brackets, self::OPEN_CLOSE_BRACKETS[1][1] < strpos($brackets, self::OPEN_CLOSE_BRACKETS[$typeOfOpenBracket][0]))) {
                    var_dump("no es correcto");
                }


                }
        }


    }

    /**
     * @param string $brackets
     * @return bool
     */
    public function areValidBrackets(string $brackets): bool
    {

        for ($TypeOfBracket = 1; $TypeOfBracket <= 3; $TypeOfBracket++) {
            if (strpos($brackets, self::OPEN_CLOSE_BRACKETS[$TypeOfBracket][0]) !== false) {
                //str_contains
                $lastOpenBracket = strrpos($brackets, self::OPEN_CLOSE_BRACKETS[$TypeOfBracket][0]);
                $firstOpenBracket = strpos($brackets, self::OPEN_CLOSE_BRACKETS[$TypeOfBracket][1])-1;
                if (($firstOpenBracket - $lastOpenBracket) %2 !== 0) {
                    echo "false";
                    return false;
                }
            }
        }
        echo "true";
        return true;
    }
}

$valid = new ValidBrackets();
echo $valid->splitTheString("()[({})]");
echo "<br>";
//echo $valid->areValidBrackets("[({})]"); // 1,4
echo "<br>";
//echo $valid->areValidBrackets("(([{}]))");


