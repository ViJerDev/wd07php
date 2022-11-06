<?php

namespace App\Homework;

class Worker5 extends User
{
    private $salary;

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}