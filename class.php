<?php 

class Product {
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $sku;

    public function showDetails() {
        echo "Name: $this->name, Price: $this->price, Brand: $this->brand, Category: $this->category, Stock: $this->stock, SKU: $this->sku";
    }
    
    }


$product1 =  new Product();
$product1->name = "Mobile";
$product1->price = 2500;
$product1->category = "Technology";
$product1->brand =  "Walton";
$product1->stock = 48;
$product1->sku = "Teck2540";
$product1->showDetails();


echo "<br>";

$product2 =  new Product();
$product2->name = "Laptop";
$product2->price = 800000;
$product2->category = "Technology";
$product2->brand =  "Walton";
$product2->stock = 20;
$product2->sku = "Teck2540";
$product2->showDetails();

echo "<br>";


class Person {
    public $name;
    public $age;
    public $email;
    public $phone;
    public $address;
    public $occuption;

    public function showProfile() {
        echo "Name; $this->name <br> Age: $this->age <br> Email: $this->email <br> Phone: $this->phone <br> Current Address: $this->address";
    }
}


$person1  = new Person();
$person1->name = "Ashraful";
$person1->age = "20";
$person1->email = "ashraful@gmai.com";
$person1->phone = "01548752245";
$person1->address = "Airland";
$person1->occuption = "Learner";

$person1->showProfile();