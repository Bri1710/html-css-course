<?php

require_once("Pet.php");

class Bird extends Pet
{
    protected string $nombre;
    protected int $longevidad;

    public function __construct(
        int    $peso,
        string $color,
        int    $precio,
        string $nombre,
        int    $longevidad,
        string $raza

    )
    {
        $this->nombre = $nombre;
        $this->longevidad = $longevidad;
        $this->raza = $raza;

        parent::__construct($peso, $color, $precio);

    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return int
     */
    public function getLongevidad(): int
    {
        return $this->longevidad;
    }

    /**
     * @return string
     */
    public function getRaza(): string
    {
        return $this->raza;
    }

    public function wherePetCanBeBought(): string
    {
        switch ($this->getPrecio()) {
            case ($this->getPrecio() <= 40):
                return "Rescue birds";
            default:
                return "Pet shop";
        }
    }
}
