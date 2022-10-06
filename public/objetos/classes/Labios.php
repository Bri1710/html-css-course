<?php

require_once("Maquillaje.php");

class Labios extends Maquillaje
{
    protected string $formula;

    public function __construct
    (
        string $marca,
        string $origen,
        string $producto,
        string $acabado,
        string $nombre,
        float    $precio,
        string $formula
    )
    {
        $this->formula = $formula;

        parent::__construct($marca, $origen, $producto, $acabado, $nombre, $precio);
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
            case ($this->getProducto() == "barra de labios"):
                return "la " . $this->getProducto();
            default:
                return "el " . $this->getProducto();
        }
    }

}
