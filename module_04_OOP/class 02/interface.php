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
        echo "Main is talking less.\n";
    }
}

// Step 3: use interface to Create Object and call method
$women = new Woman();
$women->talking(); // calling method of interface class

$man = new Man();
$man->talking(); // calling method of interface class