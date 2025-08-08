<?php
// introduction to Final Class in PHP OOP
// Definition: A final class in PHP is a class that cannot be extended or inherited by any other class. It is used to prevent further inheritance of a class, ensuring that its implementation remains unchanged.

// Example of a final class
final class Vehicle{
    public function move(){
        echo "Vehicle is moving.\n";
    }
} 
class Car extends Vehicle{ // This will cause an error because Vehicle is a final class
    // public function move(){ // Uncommenting this will cause an error
    public function move(){
        echo "Car is moving.\n";
    }
}
$car = new Car();
$car->move(); // This will not work because Vehicle is a final class and cannot be extended.

echo "\n";
echo "\n";


// Example of a final method
class Human{
    public function eat(){
        echo "Human is eating.\n";
    }

    final public function sleep(){
        echo "Human is sleeping.\n";
    }
}
class Man extends Human{
    public function eat(){
        echo "Man is eating.\n";
    }

    // // This will cause an error because sleep() is a final method
    // public function sleep(){
    //     echo "Man is sleeping.\n";
    // }
}
$man = new Man();
$man->eat(); // This will work
// $man->sleep(); // This will cause an error because sleep() is a final method in the Human class.