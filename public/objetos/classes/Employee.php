<?php
/* La clase define propiedades y métodos para la misma.
Ej: para la clase Person las propiedades son nombre, apellido y edad.

CONSTRUCTOR:
El constructor es un método de clase especial que se ejecuta al "instanciar un objeto"
(generar ejemplar de una clase)

NEW CLASS:
Con la palabra new se crea una nueva instancia

PROPERTIES:
Las propiedades privadas necesitan establecer el valor con el método set.
Método set: método modificador, asignará un nuevo valor al atributo.
Método get: método de acceso, solo devolverá el valor del atributo.

HERENCIA:
La clase hija, hereda las propiedades y métodos de la clase padre a menos que se sobrescriba.
No puede acceder a los miembros private (solo public o protected).

*/

class Employee
{
    const THIS_IS_A_CONST = "testing";

    protected string $firstName;
    protected string $lastName;
    private int $age;

    public function __construct(
        string $firstName,
        string $lastName,
        int $age
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return void
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

}
