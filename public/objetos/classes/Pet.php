<?php

// En una clase, las variables se llaman propiedades y las funciones se llaman métodos

abstract class Pet
{
    const THIS_IS_MY_CONSTANT = "Gracias por su confianza" . "<br>" . "<br>";

    protected int $peso;
    protected string $color;
    protected int $precio;

    /**
     * @param int $peso
     * @param string $color
     * @param int $precio
     */
    public function __construct(
        int    $peso,
        string $color,
        int    $precio
    )
    {
        $this->peso = $peso;
        $this->color = $color;
        $this->precio = $precio;
    }

    /**
     * @return string
     */
    public abstract function wherePetCanBeBought(): string;

    /**
     * @return int
     */
    public function getPeso(): int
    {
        return $this->peso;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getPrecio(): int
    {
        return $this->precio;
    }
}
