<?php

require_once("Maquillaje.php");

class Ojos extends Maquillaje
{
    protected string $textura;
    protected string $formula;

    public function __construct
    (
        string $marca,
        string $origen,
        string $producto,
        string $acabado,
        string $nombre,
        float    $precio,
        string $textura,
        string $formula
    )
    {
        $this->textura = $textura;
        $this->formula = $formula;

        parent::__construct($marca, $origen, $producto, $acabado, $nombre, $precio);
    }

    /**
     * @return string
     */
    public function getTextura(): string
    {
        return $this->textura;
    }

    /**
     * @return string
     */
    public function getFormula(): string
    {
        return $this->formula;
    }

    public function pronombreCorrectoProducto(): string
    {
        switch ($this->getProducto()) {
            case ($this->getProducto() == "sombra"):
                return "la " . $this->getProducto();
            default:
                return "el " . $this->getProducto();
        }
    }


}
