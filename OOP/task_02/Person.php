<?php


// Person is data type
class Person
{
    public  $name;
    public  $age;
    private $salary;

    // construct is a special type of function, which is called when the instance of the class is created
    // e.i. whenever we call Person this function is executed.
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
