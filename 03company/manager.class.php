<?php
require_once "employees.class.php";


class manager extends employees
{

    public function __construct($employType, $salary, $department) //why we do not need to initialize $department property? and in this way the order or parameter is correct!?
    {

        parent::__construct($employType, $salary);
        $this->department = $department;
    }
    public function addSalary($originalSalary, $rate = 0.01)
    {


        echo "hi, I'm a manager, and my new salary is " . ($originalSalary + $originalSalary * $rate);
    }
}
