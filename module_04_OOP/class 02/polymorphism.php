<?php

// Introduce to Polymorphism in PHP OOP
// Polymorphism allows methods to do different things based on the object it is acting upon.

// In PHP, polymorphism can be applied two ways.
// 1. Method Overriding: A child class can override a method of its parent class.
// 2. Interface: A contract that classes can implement, ensuring they define certain methods.


// Example of Method Overriding
class Person{
    public function introduce(){
        echo "I am a person \n";
    }
}

class Student extends Person{
    public function introduce(){
        echo "I am a student \n";
    }
}

class Employee extends Person{
    public function introduce(){
        echo "I am an employee \n";
    }
}

// Polymorphism in action
$person = [new Student(), new Employee(), new Person()];
foreach($person as $p){
    $p->introduce();
}

echo "\n";


// Example of Interface
interface Shapes{
    public function draw();
}

class Circle implements Shapes{
    public function draw()
    {
        echo "Drawing a circle \n";
    }
}

class Square implements Shapes{
    public function draw()
    {
        echo "Drawing a square \n";
    }
}

$shapes = [new Circle(), new Square()];
foreach($shapes as $shape){
    $shape->draw();
}


// Example of Method Overriding
class Product{
    public function getPrice(){
        echo "The price of the product is $100.\n";
    }
}

class DiscountProduct extends Product{
    public function getPrice(){
        echo "The price of the discounted product is $80.\n";
    }
}

class PremiumProduct extends Product{
    public function getPrice(){
        echo "The price of the premium product is $120.\n";
    }
}

class FreeProduct extends Product{
    public function getPrice(){
        echo "The price of the free product is $0.\n";
    }
}

function displayProductPrice(Product $product){
    echo $product->getPrice();
}

displayProductPrice(new Product());
displayProductPrice(new DiscountProduct());
displayProductPrice(new PremiumProduct());
displayProductPrice(new FreeProduct());

