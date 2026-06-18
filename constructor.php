<?php 
// Constructor

class Person  {
    public $name;
    public $age;
    


    public function showInfo() {
        echo "Parent Name: $this->name, Age: $this->age";
    }
}

class Student extends Person {
    public $roll;

    public function __construct($studentName, $studentAge){
        $this->name = $studentName;
        $this->age = $studentAge;
    }

    public function showStudentInfo() {
        parent::showInfo();
        echo "Name: $this->name, Age: $this->age, Roll: $this->roll";
    }
}


$student1 = new Student("Rafiqur", 25, 101);
$student1->showStudentInfo();