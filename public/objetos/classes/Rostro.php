<?php

require_once("Maquillaje.php");

class Rostro extends Maquillaje
{
    protected string $textura;

    public function __construct
    (
        string $marca,
        string $origen,
        string $producto,
        string $acabado,
        string $nombre,
        float  $precio,
        string $textura
    )
    {
        $this->textura = $textura;

        parent::__construct($marca, $origen, $producto, $acabado, $nombre, $precio);
    }

    /**
     * @return string
     */
    public function getTextura(): string
    {
        return $this->textura;
    }

    public function pronombreCorrectoProducto(): string
    {
        switch ($this->getProducto()) {
            case ($this->getProducto() == "base de maquillaje"):
                return "la " . $this->getProducto();
            default:
                return "el " . $this->getProducto();
        }
    }


}
