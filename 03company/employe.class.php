<?php
require_once "employees.class.php";


class employe extends employees
{

    public function __construct($employType, $salary)
    {
        parent::__construct($employType, $salary);
    }
    public function addSalary($originalSalary, $rate = 0.001)
    {
        echo "hi, I'm a normal employe, and my new salary is " . ($originalSalary + ($originalSalary * $rate));
    }
}
