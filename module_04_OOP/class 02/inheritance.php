<?php
// introduction to Inheritance in PHP OOP

// step 1: create a parent class
class Student{
    public $educBackground;
    public $department;
    public $class;

    public function studentDetails(){
        echo "student name: ". $this->name;
        echo "student department: ". $this->department;
        echo "student class: ". $this->class;
    }

}

// Step 2: Create a Child Class
class StudentInfo{
    public $name;
    public $
}