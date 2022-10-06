<?php

function seeIfTheWordIsInTheString(string $string, string $word = "Awesome")
{
    return $string;
}
   
function chooseARandomUserName(string $userName, array $nameOptions = [])
{
    return "The amount of options that you have is: " . count($nameOptions) . " .Your name is: " . $userName;
}

function sayAWordIfYouAgree(string $firstWord, string $secondWord = "So im agree")
{
    return $firstWord . $secondWord;
}

function countMonicasLeaves(int $leaves, int $leavesSheNeed = 8)
{
    return "Monica has " . $leaves . " leaves." . " She need as least " . $leavesSheNeed . "to be fine." ;
}

function howManyWindowsInTheHouse(int $windows, int $number = 14)
{
    return "There are " . $windows . "in my house and " . $number . " in the neighbours house";
}

function WhatCanIcookWithRice(array $arrayOfFood, array $arrayOfFoodDefault = ["arroz a la cubana", "paella"])
{
    return count($arrayOfFood) . " and " . ($arrayOfFoodDefault);
}

function bestMovilePhoneIn2022(string $brand1, string $brand2)
{
    return "The winner is " . $brand1;
}

function peopleInTheStadiumPermited (int $people, int $peoplePermited)
{
    return "It is permited " . $peoplePermited . " persons. There are " . $people . " persons.";
}

function howManyUpperLettersInTheString (string $myString, int $upperLetters, string $anotherString = "Hello Richard")
{
    return "The string " . $myString . " has " . $upperLetters . " upper letters.";
}

function foodAlergiesInTheMenu (string $food, string $nuts = "hazelnuts")
{
    return "I can't eat " . $food;
}