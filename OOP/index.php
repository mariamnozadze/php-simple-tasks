<?php
class Person
{
    public $name;
    public $surname;
    private $age;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->$surname = $surname;
    }

    public function setAge($age)
    {
        $this->$age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$p = new Person("Mariam", "Nozadze");
$p->setAge(25);

echo '<pre';
var_dump($p);
echo '<pre';
echo '<br>';
echo $p->getAge();
