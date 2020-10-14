<?php
abstract class employees
{
    public $employeType;
    public $salary;

    public function __construct($employeType, $salary)
    {

        $this->employeType = $employeType;
        $this->salary = $salary;
    }

    abstract public function addSalary($originalSalary);
}
