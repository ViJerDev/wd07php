<?php

namespace App\Homework;

class Worker4
{
    public function __construct(private $name, private $age, private $salary){

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}