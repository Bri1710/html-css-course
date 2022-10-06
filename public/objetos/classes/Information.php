<?php

require_once ("Employee.php");

class Information extends Employee
{
    protected int $salary;
    protected string $job;

    public function __construct(
        string $firstName,
        string $lastName,
        int $age,
        int $salary,
        string $job
    )
    {
        $this->salary = $salary;
        $this->job = $job;

        parent::__construct($firstName, $lastName, $age);
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    public function getAge(): int
    {
        $age = parent::getAge();
        return $age + 10;
    }
}
