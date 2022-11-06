<?php

namespace App\Homework;

class Student extends User
{
    private $grant;
    private $course;

    public function setGrant($grant): void
    {
        $this->grant = $grant;
    }
    public function getGrant()
    {
        return $this->grant;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }
    public function getCourse()
    {
        return $this->course;
    }
}