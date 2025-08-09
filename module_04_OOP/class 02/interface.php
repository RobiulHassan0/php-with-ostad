<?php
// introduction to interface in PHP OOP
// Definition: An interface in PHP is a contract that defines a set of methods that a class must implement. It allows for the creation of a common API for different classes, promoting code reusability and flexibility.

// Step 1: Declare Interface
interface HumanBehavior {
    public function talking();
}

// Step 2: Implement Interface in interface class or child class
class Woman implements HumanBehavior {
    public function talking(){
        echo "Woman is talking too much.\n";
    }
}

class Man implements HumanBehavior{
    public function talking()
    {
        echo "Man is talking less.\n";
    }
}

// Step 3: use interface to Create Object and call method
$women = new Woman();
$women->talking(); // calling method of interface class

$man = new Man();
$man->talking(); // calling method of interface class 


echo "\n";
echo "\n";


/*  Different Example of Interface and Abstract Class

    Abstract class cannot be instantiated. It is meant to be subclassed. 
    Abstract classes can contain both abstract methods (without implementation) and concrete methods (with implementation)
*/  

// Example of Abstract Class
abstract class Animals{
     public function eat(){
        return "Eating...\n"; // common logic for all animals
    }

    abstract public function sound(); // abstract method required to be implemented by child classes
}

class Cats extends Animals{
    public function sound(){
        return "Meow Meow\n";
    }
}

class Dogs extends Animals{
    public function sound(){
        return "Bark Bark\n";
    }
}

$cat = new Cats();
echo "Cat is ". $cat->eat(); // calling method from abstract class
echo "Cat sound is: " . $cat->sound(); // calling method from child class

$dog = new Dogs();
echo "Dog is ". $dog->eat(); // calling method from abstract class
echo "Dog sound is: " . $dog->sound(); // calling method from child class

echo "\n";


// Example of Interface
interface AnimalBehavior{
    public function sound(); // interface method (without body) | must be implemented by child classes
}

class Cat implements AnimalBehavior{
    public function sound()
    {
        return "Meow Meow\n"; // implementation of interface method
    }
}

class Dog implements AnimalBehavior{
    public function sound(){
        return "Bark Bark\n"; // implementation of interface method
    }
}

$cat2 = new Cat();
echo "Cat sound is: ". $cat2->sound(); // calling method from interface class

$dog2 = new Dog();
echo "Dog sound is: ". $dog2->sound(); // calling method from interface class