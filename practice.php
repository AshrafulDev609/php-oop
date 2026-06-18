<?php 

class Student {
    public $name;
    public $age;
    public $department;

    public function __construct($name, $age, $department){
        $this->name = $name;
        $this->age =  $age;
        $this->department = $department;
    }

    public function showDepartment() {
        echo "Name: $this->name <br> Age: $this->age <br> Department: $this->department";
    }
}

$student1 = new Student("Ashraful Islam", "21", "Social Work");
$student1->showDepartment();



class Car {
    public $brand;
    public $model;
    public $price;


    public function __construct($brand, $model, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;

    }

    public function startEngine() {
        echo "$this->brand engine started";
    }

    public function showDetails() {
        echo "Brand: $this->brand Model: $this->model Price: $this->price";
    }
}

echo "<br>";

$car1 = new Car("Toyota  Corolla", "TC78 V", "1 crore" );
$car1->startEngine();
echo '<br>';
$car1->showDetails();

