<?php

namespace App\Homework;

class Worker2
{
    private $name;
    private $age;
    private $salary;

    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
        if (!$this->checkAge()) {
            echo "Неккоректный возраст $this->name . <br>";
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    private function checkAge(){
        if ( $this->age >= 1 && $this->age <= 100 ) {
            return true;
        } else {
            return false;
        }
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}