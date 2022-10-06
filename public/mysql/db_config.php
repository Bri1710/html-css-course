<?php
$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'sakila';

$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";

try{
    $dbConnection = new PDO($dsn, $dbUsername, $dbPassword);
    $results = $dbConnection->query("SELECT * FROM actor");

    foreach ($results as $result) {
        var_dump($result);
    }
} catch (Exception $e){
    echo "there was a failure - " . $e->getMessage();
}


