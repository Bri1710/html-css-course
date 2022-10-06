<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


$dbHost = 'mysql';
$dbPort = '3306';
$dbUsername = 'root';
$dbPassword = 'password';
$dbDatabase = 'pixie';
$dsn = "mysql:host=$dbHost;dbname=$dbDatabase";
$dbConnection = new PDO($dsn, $dbUsername, $dbPassword);

$navigation = doQuery($dbConnection, "SELECT * FROM menu where idmenu in (1, 2, 3, 4)");

function doQuery(PDO $dbConnection, string $query)
{
    $dbQuery = $dbConnection->prepare($query);
    $dbQuery->execute();
    return $dbQuery->fetchAll();
}

function isItActive(string $link)
{
    if ($_SERVER['HTTP_HOST'] == $link) {
        return true;
    }

    return false;
}

?>



<?php foreach ($navigation as $name): ?>



    <li class="nav-item <?php if (isItActive($name["link"])): ?>active<?php endif; ?>">
        <a class="nav-link" href="<?php echo $name["link"] ?>"><?php echo $name["name"] ?>
            <?php if (isItActive($name["link"])): ?><span class="sr-only">(current)</span><?php endif; ?>
        </a>
    </li>


<?php endforeach; ?>


