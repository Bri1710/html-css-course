<?php

require_once("Pet.php");

class Unicorn extends Pet
{
    public function __construct(
        int    $peso,
        string $color,
        int    $precio,

    )
    {
        parent::__construct($peso, $color, $precio);
    }

    public function wherePetCanBeBought(): string
    {
        switch ($this->getPrecio()) {
            case ($this->getPrecio() <= 500):
                return "Toy shop";
            default:
                return "Dreams";
        }
    }
}
