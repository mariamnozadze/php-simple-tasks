<?php

require_once './Person.php';

// That means that Student will have all the properties that Person has
class Student extends Person
{
    public $stId;
    public function __construct($name, $age, $stId)
    {
        $this->stId = $stId;
        parent::__construct($name, $age, null);
    }
}
