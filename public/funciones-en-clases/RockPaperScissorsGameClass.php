<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


// to refactor
//Variables of a class are properties.
//Functions of a class are methods.
class RockPaperScissorsGameClass
{
    //The Constants store a fixed value that cannot be changed throughout the program.
    const SAME_HAND_PLAYERS = "Draw!";
    const HAND_1_WIN = "Player 1 Wins!";
    const HAND_2_WIN = "Player 2 Wins!";

    const PLAYER_HAND_WINNER_MAP = [
        "scissors" => "paper",
        "rock" => "scissors",
        "paper" => "rock"
    ];

    //Protected: the property or method can be accessed within the class and by classes derived from that class.
    protected string $firstHand; //properties of the class.
    protected string $secondHand;

    /**
     * @param string $firstHand
     * @param string $secondHand
     * @throws Exception
     */
    public function __construct( //magic function. Arguments that are required.
        string $firstHand,//parameters of the function.
        string $secondHand
    )
    {
        //If statement allows conditional execution of code. It is executed {code to be executed} if condition is true.
        //Isset determine if a variable is declared and is different than null.
        //Self is referring class members.
        //$firstHand and $secondHand are they key of the constant PLAYER_HAND_WINNER_MAP.
        if (!isset(self::PLAYER_HAND_WINNER_MAP[$firstHand]) || !isset(self::PLAYER_HAND_WINNER_MAP[$secondHand])) {
            //An exception is an object that describes an error or unexpected behaviour of a PHP script.
            throw new Exception("First hand and second hand need to be one of the following: Scissors, Rock, Paper");
        }
        //This refers to the current object. Can be used by protected, private or public methods, not static.
        $this->firstHand = $firstHand;
        $this->secondHand = $secondHand;
    }

    /**
     * @return string
     */
    public function playTheGame(): string
    {
        if ($this->isTheGameADraw()) {
            return self::SAME_HAND_PLAYERS;
        }

        return $this->getPlayerThatWinsTheGame();
    }

    /**
     * @return string
     */
    private function getPlayerThatWinsTheGame(): string
    {
        if (self::PLAYER_HAND_WINNER_MAP[$this->firstHand] === $this->secondHand) { // ==== identical in value an type
            return self::HAND_1_WIN;
        }

        return self::HAND_2_WIN;
    }

    /**
     * @return bool
     */
    private function isTheGameADraw(): bool
    {
        if ($this->firstHand === $this->secondHand) {
            return true;
        }

        return false;
    }

}

$rockPaperScissors = new RockPaperScissorsGameClass("paper", "paper"); //New object of the class RockPaperScissorsGameClass.
//new is a new instance of the class RockPaperScissorsGameClass.
echo $rockPaperScissors->playTheGame(); //Display the variable that access to the properties of the method playTheGame.
$rockPaperScissors2 = new RockPaperScissorsGameClass("rock", "paper");
echo $rockPaperScissors2->playTheGame();























