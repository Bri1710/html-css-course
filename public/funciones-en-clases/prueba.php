<?php

function winnerOfTheGame(string $player1, string $player2): string
{
    $a = "scissors";
    $b = "rock";
    $c = "paper";
    $w1 = "Player 1 won!";
    $w2 = "Player 2 won!";
    $d =  "Draw!";

    if (isset($a)) {
        return "helo";

    }


        if ($player1 == $a && $player2 == $b || $player1 == $b && $player2 == $c || $player1 == $c && $player2 == $b) {
            return $w2;
        }
        if ($player1 == $a && $player2 == $a || $player1 == $b && $player2 == $b || $player1 == $c && $player2 == $c) {
            return $d;
        }
        return $w1;

}


var_dump(winnerOfTheGame("rock", "dk"));
