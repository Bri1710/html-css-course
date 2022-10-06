<?php

final class Lion
{

    protected int $peso;
    protected string $genero;

    /**
     * @param int $peso
     * @param string $genero
     */
    public function __construct(
        int    $peso,
        string $genero,
    )
    {
        $this->peso = $peso;
        $this->genero = $genero;
    }


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
    public function getGenero(): string
    {
        return $this->genero;
    }
}

