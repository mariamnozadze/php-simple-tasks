<?php

// What is class and instance

require_once './Person.php';
require_once './Student.php';

//$p = new Person('mariam', 25, null);
//echo $p->name.'<br>';
//echo $p->age.'<br>';
//echo $p->getSalary().'<br>';
//$p->setSalary(100);
//echo $p->getSalary().'<br>';

$s = new Student("mariam", '25', 1234);
echo $s->name . '<br>';

// $p = new Person("Mariam", "Nozadze");
// $p->setAge(25);

// echo '<pre';
// var_dump($p);
// echo '<pre';
// echo '<br>';
// echo $p->getAge();

// $p2 = new Person('john', "Smith");
// echo '<pre';
// var_dump($p2);
// echo '<pre';
// echo Person::$counter;
