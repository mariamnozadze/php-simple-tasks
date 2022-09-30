<?php

require_once './Person.php';
require_once './Student.php';


// // p is an instance
// // p is a variable of this data type
// $p = new Person('Mariam', 25, 10000);

// // $p->name = 'Mariam';
// // $p->age = 25;
// // $p->salary = 10000;


// //cannot access private properties outside the class
// //-------echo $p->salary;
// echo $p->getSalary(); // 10000

// $p->setSalary(15000);
// echo $p->getSalary(); // 15000


// echo '<pre>';
// var_dump($p);
// echo '</pre>';

/**expects 3 arguments;
 * 1.I can either wrtite those  arguments
 * 2. Go to Student class and overwrite construct function
 */
$s = new Student('Mariam', '28', 1234);
echo $s->name;
