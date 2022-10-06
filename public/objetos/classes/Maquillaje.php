<?php

abstract class Maquillaje
{
    protected string $marca;
    protected string $origen;
    protected string $producto;
    protected string $acabado;
    protected string $nombre;
    protected float $precio;

    /**
     * @param string $marca
     * @param string $origen
     * @param string $producto
     * @param string $acabado
     * @param string $nombre
     * @param float $precio
     */
    public function __construct
    (
        string $marca,
        string $origen,
        string $producto,
        string $acabado,
        string $nombre,
        float $precio
    )
    {
        $this->marca = $marca;
        $this->origen = $origen;
        $this->producto = $producto;
        $this->acabado = $acabado;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    /**
     * @return string
     */
    public abstract function pronombreCorrectoProducto(): string;

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @return string
     */
    public function getOrigen(): string
    {
        return $this->origen;
    }

    /**
     * @return string
     */
    public function getProducto(): string
    {
        return $this->producto;
    }

    /**
     * @return string
     */
    public function getAcabado(): string
    {
        return $this->acabado;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

}

