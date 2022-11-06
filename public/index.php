<?php

    include_once __DIR__."/../vendor/autoload.php";
    use App\Homework\Worker;
    use App\Homework\Worker2;
    use App\Homework\Worker4;
    use App\Homework\Worker5;

   // 1.
   $worker1 = new Worker();
   $worker1->name = 'Иван';
   $worker1->age = 25;
   $worker1->salary = 1000;

   $worker2 = new Worker();
   $worker2->name = 'Вася';
   $worker2->age = 26;
   $worker2->salary = 2000;

    echo $worker1->age + $worker2->age;
    echo "<br>";
    echo $worker1->salary + $worker2->salary;
    echo "<br>";

    //2.
    $worker1 = new Worker2();
    $worker1->setName('Иван');
    $worker1->setAge(25);
    $worker1->setSalary(1000);

    $worker2 = new Worker2();
    $worker2->setName('Вася');
    $worker2->setAge(26);
    $worker2->setSalary(2000);

    echo $worker1->getAge() + $worker2->getAge();
    echo "<br>";
    echo $worker1->getSalary() + $worker2->getSalary();
    echo "<br>";

    //4.
    $worker = new Worker4('Дима',25, 1000);
    echo $worker->getAge() * $worker->getSalary();
    echo "<br>";

    //5.
    $worker1 = new Worker5();
    $worker1->setName('Иван');
    $worker1->setAge(25);
    $worker1->setSalary(1000);

    $worker2 = new Worker5();
    $worker2->setName('Вася');
    $worker2->setAge(26);
    $worker2->setSalary(2000);

    echo $worker1->getSalary() + $worker2->getSalary();
    echo "<br>";
