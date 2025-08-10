<?php

// Introduce to Polymorphism in PHP OOP
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