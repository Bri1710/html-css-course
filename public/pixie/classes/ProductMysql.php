<?php


class ProductMysql
{
    protected string $name; // declaración atributo
    protected float $price;
    protected string $release;
    protected string $image;

    public function loadById(int $id) // declaración método
    {
        $dbHost = 'mysql';
        $dbPort = '3306';
        $dbUsername = 'root';
        $dbPassword = 'password';
        $dbDatabase = 'pixie';
        $dsn = "mysql:host=$dbHost;dbname=$dbDatabase";
        $dbConnection = new PDO($dsn, $dbUsername, $dbPassword);

        $mysqlProducts = $this->doQuery($dbConnection, "SELECT * FROM products WHERE idproducts = {$id}");

        foreach ($mysqlProducts as $product){
            $this->setName($product["name"]);
            $this->setPrice($product["price"]);
            $this->setRelease($product["release"]);
            $this->setImage($product["image"]);
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name; // llamar a un atributo. Pseudo variable this
    }


    public function setPrice ($price)
    {
        $this->price = $price;
    }

    public function getPrice() : float
    {
        return $this->price;
    }


    public function setRelease ($release)
    {
        $this->release = $release;
    }

    public function getRelease() : string
    {
        return $this->release;
    }


    public function setImage ($image)
    {
        $this->image = $image;
    }

    public function getImage() : string
    {
        return $this->image;
    }

    function doQuery(PDO $dbConnection, string $query)
    {
        $dbQuery = $dbConnection->prepare($query);
        $dbQuery->execute();
        return $dbQuery->fetchAll();
    }
}
