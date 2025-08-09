<?php

// Introduction to Encapsulation in PHP OOP
// Definition : Encapsulation is the mechanism of restricting access to certain details of an object and only exposing a controlled interface. It helps in bundling the data (attributes) and methods (functions) that operate on the data into a single unit or class, while also restricting direct access to some of the object's components.

class Person{
    private $name; 

    public function setName($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    protected function sayHello(){
        return "Hello, my name is ". $this->name . "\n";
    }
}

$person = new Person();
$person->setName("Ibn Fulan"); // Setting the name using setter method
echo $person->getName(); // Accessing the name using getter method
//$person->sayHello(); // This will cause an error because sayHello is protected and cannot be accessed outside the class
