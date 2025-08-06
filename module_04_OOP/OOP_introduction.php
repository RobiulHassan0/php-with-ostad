<?php


/*  OOP = Object-Oriented Programming 
    Foundation of OOP in PHP

    1. Class
    2. Object
    3. Constructor
    4. Method
    5. Property
    6. Inheritance
    7. Polymorphism
    8. Encapsulation
    9. Abstraction
    10. Static


1. Class: A blueprint or a template for creating objects. It defines the structure and behavior of the objects.
2. Object: An instance of a class. It is a real-world entity that has its own state and behavior.
3. Constructor: A special method that is called when a new object is created. It is used to initialize the object's properties.
4. Method: A function inside a class that performs a specific task or action.
5. Property: A variable inside a class that stores data associated with the object.
6. Inheritance: A mechanism that allows a class to inherit properties and methods from another class.
7. Polymorphism: A concept that allows objects of different classes to be treated as objects of a common base class.
8. Encapsulation: A mechanism that controls access to the object's properties and methods.
9. Abstraction: A concept that focuses on the essential features of an object, hiding the implementation details.
10. Static: A modifier that makes a method or property static, meaning it can be accessed without creating an object.


1. Class: A class has 5 parts:
    A- Properties/Methods
    B- Methods
    C- Constructor
    D- Access Modifiers
    E- Static Properties/Methods
    (F optional)- Inheritance

*/

 

// Step 1: create a Class

class Person{ 
    public $name; // this variable called as a property in the Class
    public $age; // this variable called as a property in the Class

    public function sayHello(){ //this function called as a method in the Class
        echo "Hello! My name is " . $this->name . " and I'm " . $this->age . " years old.";
    }
}

/* Step 2: Create an Object from this Class */
$person1  = new Person(); // this is called as an Object
$person1->name = 'Robiul Hassan'; // this is called as a property
$person1->age = 23; // this is called as a property
$person1->sayHello(); // this is called as a method

echo "\n";
