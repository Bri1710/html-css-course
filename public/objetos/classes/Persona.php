<?php

class Persona
{
    protected string $nombre; //property of the class
    protected string $apellido;
    protected int $edad;

    public function __construct(string $nombre, string $apellido, int $edad)
        //parameter of the function
    {
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = $edad;
    }

    /**
     * @param string $nombre
     * @return void
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = ucwords(strtolower($nombre));
    }

    /**
     * @return string
     */
    public function getNombre() : string
    {
        return $this->nombre;
    }
}
