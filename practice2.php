<?php 

class Product {
    public $name;
    public $price;
    public $category;

    public function __construct($productName, $productPrice, $productCategory) {
        $this->name = $productName;
        $this->price = $productPrice;
        $this->category = $productCategory;
    }


    public function getProductInfo() {
        echo "Product Name: $this->name <br> Product Price: $this->price <br> Product Category: $this->category";
    }
}

$product1 = new Product('Laptop', 25000, 'Electronics');
// $product1->getProductInfo();


class Employee {
    public $name;
    public $age;
    public $role;

    private $salary = 30000;

    public function __construct($emp_name, $emp_age, $emp_role) {
        $this->name = $emp_name;
        $this->age = $emp_age;
        $this->role = $emp_role;
    }

    public function employeeDetails() {
        return "Name: $this->name <br> Age: $this->age <br> Role: $this->role <br> Salary: $this->salary" ;
    }


}


$emp1 = new   Employee('Ashraful', 21, 'Web Developer');
echo $emp1->employeeDetails();

