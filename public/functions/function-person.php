<?php

// una "VARIABLE" se usa para almacenar algunos VALORES que se pueden usar en el futuro.
// Puede ser una cadena, un entero, un numero con decimales o una matriz.

// una "MATRIZ" es una variable que puede almacenar MÚLTIPLES VALORES.

// Una "función" es una pieza de bloque reutilizable que realiza una acción específica (puede ser definida por el usuario).
// Toma una o más entradas del parámetro y procesa y DEVUELVE UN VALOR (salida).
// La última variable puede ser asignada a un valor por defecto.

/****************************************************************************************************************************/

// A "variable" is used to store some values that can be used in the future.
// Can be a string, an int, a float or an array.

// an "array" is a variable that can store multiple values.

// A "function" is a reusable piece of block that performs a specific action (can be define for the user).
// It takes one or more input of the parameter and process and return a value (ouput).
// The last variable can be assigned a default value.

/**
 * @return string
 */
function descriptionOfAPerson(string $name, int $age, int $weight, string $gender, ?float $height = 1.60): string
{
    return "Name: " . $name . ". Age: " . $age . ". Weight: " . $weight . ". Gender: " . $gender . ". Height: " . $height;
}




echo "<br>";
function iAmInTheRoom(string $name)
{
    return "It is true that " . $name . " is on the room";
}

echo iAmInTheRoom("Bri");

echo "<br>";
function nameInUpper(string $person)
{
    return strtoupper($person);
}

echo nameInUpper("richard");



echo "<br>";
function checkSpacesInTheString(string $string)
{
    if (ctype_space($string)) {
        return $string;
    } else {
        return "i don't see any spaces";
    }
}


echo checkSpacesInTheString("Hello");
echo "<br>";
echo checkSpacesInTheString("Hello my darling");


// 10 of these
function sumNumbers()
{
}

// 10 of these (return something)
function sayHello()
{
    return "";
}

// 10 of these (1 param)
function countStuffsInTheRoom($param)
{
    return $param;
}

// 10 of these (1 param)
function countStuffsIntheRoomWithOptional( $parameter, ?int $optionalParam = 0)
{
    return [$parameter, $optionalParam];
}

// 10 functions with an if statement and return something



// todo after arrays have been done
// 10 functions with loops inside of them (for, while, foreach)
// 3 functions that have a array param and then loop them and echos information about each item
// 3 functions that have an array and loop and use "continue" in the loop
// 3 functions that return one type of array return []
// Use the functions that loop through an array with the function that returns an array








// echo descriptionOfAPerson("Richard", 29, 80, "male");

// The line 31 is going to echo the function explode. The function explode split a string in different strings.
// The function explode has two parameters. At least requiere two paramenters (strings) and the third parameter is optional (int).
    // The first parameter of the function explode is a string ".". Instead of return a dot, is going to split the string.
    // The second parameter of the function explode is the string that is going to be divided.
        // That second paramenter is defined for a function descriptionOfAPerson wich returns a string (the string that is going to be explode).
        // descriptionOfAPerson for the variable $name has the value "Brixit"(string); for $age, 29(int); for $weight, 50(int); and for $gender, "femenine"(string).
        // the 5th value is going to be 1.60(float) for default.
        // The values of descriptionOfAPerson are going to be concatenated with different strings.
    // There is not a third parameter on the function explode.
// In the line 31, goes to the line 28 and returns in the line 31 the output, wich is the string explode.
    // Name: Brixit
    // Age: 29
    // Weight: 50
    // Gender: femenine
    // Height: 1.60


    // [0] => Name: Brixit
    // [1] => Age: 29
    // [2] => Weight: 50
    // [3] => Gender: femenine
    // [4] => Height: 1 * BECAUSE OF THE "."
    // [5] => Height: 60


// The line 49 is going to echo the function implode. The function implode join with glue an array elements to get a string.
// The function implode has two parameters.
    // The first parameter of the function implode is a string " === ".
    // The second parameter is an array
        // The second parameter is defined for the function explode wich one divide the string of the function descriptionOfAPerson in different strings
// In the line 49, goes to the line 31 and returns in the line 49 the string implode.
    // The glue for join the array is an string " === "
        // Name: Brixit === Age: 29 === Weight: 50 === Gender: femenine === Height: 1.60


        // Name: Brixit === Age: 29 === Weight: 50 === Gender: femenine === Height: 1 === 60

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo descriptionOfAPerson("Brixit", 29, 60, "femenine" , 1.65);
// echo descriptionOfAPerson("Brixit", 68, 82, "masculine");
// echo descriptionOfAPerson("Brixit", 29, 45, "femenine");
// echo descriptionOfAPerson("Brixit", 65, 72, "femenine");
// echo descriptionOfAPerson("Brixit", 41, 93, "masculine", 1.68);
// echo descriptionOfAPerson("Brixit", 35, 58, "femenine");
// echo descriptionOfAPerson("Brixit", 22, 48, "femenine");
