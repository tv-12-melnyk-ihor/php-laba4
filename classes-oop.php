<?php
class Person {
    protected $name;
    protected $surname;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getSurname() {
        return $this->surname;
    }
}


class Student extends Person {
    private $university;

    public function __construct($name, $surname, $university) {
        parent::__construct($name, $surname);
        $this->university = $university;
    }

    public function getUni() {
        return $this->university;
    }
}


$student = new Student("Ihor", "Melnyk", "KPI");
echo $student->getName() . "<br>";
echo $student->getSurname() . "<br>";
echo $student->getUni() . "<br>";
?>