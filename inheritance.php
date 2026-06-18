 <?php
 
class Person  {
    public $name;
    public $age;
    
    private $email = "admin@projuktiplus";

    protected  $password = "prj52244"; // only accessible parent and child classes;


    public function showInfo() {
        echo "Name: $this->name, Age: $this->age";
    }
}


class Student extends Person {
    public $roll;

    public function showStudentInfo() {
        echo "Name: $this->name, Age: $this->age, Roll:   $this->roll";
    }
}

$student1 = new Student();
$student1->name = "Rafiqur";
$student1->email; // can't access email because email is private. private property can only  access within that class;
$student1->age = 25;
$student1->roll = 101;


// Vehicle --> Car, Bus, Tempu etc
// Employee --> Manager, Developer, Designer etc
// Animal -->  Dog, cat, lion etc 
// Shpae --> Rectangle, Triangle,  Polygon etc


class Shape {
    public $color;
    public function showColor() {
        echo "Color: $this->color";
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;


    public function area() {
        return $this->width * $this->height;
    }
}


$r = new Rectangle();
$r->color = 'Green';
$r->width = 5;
$r->height = 10;


echo "Area of this Rectangle is " . $r->area();