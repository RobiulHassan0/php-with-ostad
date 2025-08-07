<?php
// introduction to Inheritance in PHP OOP

// step 1: create a parent class
class Student{
    public $educBackground;
    public $department;
    public $class;

    public function studentDetails(){
        echo "Educational Background: ". $this->educBackground . "\n";
        echo "student department: ". $this->department . "\n";
        echo "student class: ". $this->class . "\n";
    }

}

// Step 2: Create a Child Class
class StudentInfo extends Student{
    public $name;
    public $roll;
    public $id;

    public function studentInformation()
    {
        echo "Student name: ". $this->name . "\n";
        echo "Student roll: ". $this->roll . "\n";
        echo "Student id: ". $this->id . "\n";
    }

}

// Step 3: Create Object and set data with properties of child class 
$student1 = new StudentInfo();
$student1->name = "Robiul Hassan";
$student1->roll = 835;
$student1->id = 101;
$student1->educBackground = "Qawmi Madrasa";
$student1->department = "Dars-E-Nizami";
$student1->class = "Takmil";

// Step 4: Call Methods of Parent Class
$student1->studentDetails(); // parent class's method
echo "\n";
$student1->studentInformation(); // child class's method