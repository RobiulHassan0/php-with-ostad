<?php
// introduction to method overriding in PHP OOP
// Definition: Method overriding is a feature in object-oriented programming (OOP) that allows a subclass to provide a new implementation of a method that is already defined in its parent class.

// Step 1: Create a Parent Class
class Person{
    public function introduce(){
        echo "Hello, I am a person.\n";
    }
}

// Step 2: Create a Child Class or Subclass
class Student extends Person{
    public function introduce()
    {
        echo "Hello, I am a student.\n";
    }
}

// Step 3: Create another Child Class or Subclass
class Teacher extends Person{
    public function introduce(){
        echo "Hello, I am a teacher.\n";
    }
}

$person = new Person();
$person->introduce();
echo "\n";

$student = new Student();
$student-> introduce();
echo "\n";

$teacher = new Teacher();
$teacher->introduce();
echo "\n";





// run parent and child class's method
class Bird{
    public function fly(){
        echo "Bird is flying.\n";
    }
}

class Eagle extends Bird{
    public function fly(){
        parent::fly();
        echo "Eagle is flying high.\n";
    }
}

$e = new Eagle();
$e->fly(); 