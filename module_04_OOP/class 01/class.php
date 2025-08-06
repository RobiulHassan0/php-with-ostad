<?php
// Step 1: create a Class

class Person{
    public $name;
    public $age;

    public function sayHello(){
        echo "Hello! My name is " . $this->name . " and I'm " . $this->age . " years old.";
    }
}

// Step 2: Create an Object from this Class
$person1  = new Person();
$person1->name = 'Robiul Hassan';
$person1->age = 23;
$person1->sayHello();

echo "\n";

// Another Class & Object
class Car{
    public $name;
    public $price;

    public function carInfo(){
        echo "world's most beautiful car is ". $this->name . " and that price is $". $this->price . "m Dollars.";
    }
} 
$car1 = new Car();
$car1->name = 'Lamborghini';
$car1->price = 5;
$car1->carInfo();



/* More Class for Practice */
echo "\n";
echo "\n";

// Class Practice 01: Book Info 
class Book{
    public $title;
    public $author;
    public $pages;

    public function bookInfo(){
        echo "the Popular book ". $this->title . " written by ". $this->author . " has total ". $this->pages. " pages."; 
    }
}
$book1 = new Book();
$book1->title = 'Chinaparadh';
$book1->author = 'Asif Adnan';
$book1->pages = 192;
$book1->bookInfo();


echo "\n";
// Class Practice 02: Student info
class Student{
    public $name;
    public $class;
    public $roll;

    public function studentInfo(){
        echo "Hi! I'm {$this->name}, I'm study in class {$this->class}, and my roll is {$this->roll}.";
    }
}  
$student1 = new Student();
$student1->name = 'Robiul Hassn';
$student1->class = 'Takmil';
$student1->roll = 835;
$student1->studentInfo();


echo "\n";

// Class Practice 03: Calculator
class Calculator{
    public $num1;
    public $num2;

    public function add(){
        return $this->num1 + $this->num2;
    }

    public function subtract(){
        return $this->num1 - $this->num2;
    }

    public function multiply(){
        return $this->num1 * $this->num2;
    }

    public function divide(){
        return $this->num2 != 0 ? $this->num1 / $this->num2 : "Cannot divided by zero.";
    }
}
/*Create Objects*/
$compute = new Calculator;
$compute->num1 = 43;
$compute->num2 = 0;
/* Display Outputs */
echo "Addition: ". $compute->add() . "\n";
echo "Subtraction: ". $compute->subtract() . "\n";
echo "Multiplication: ". $compute->multiply() . "\n";
echo "Division: ". $compute->divide() . "\n";


echo "\n";

// Class Practice 04: Bank Account
class BankAccount{
    public $owner;
    public $balance;

    public function deposit($amount){
        $this->balance += $amount;
        echo "Deposited $amount. New balance: $this->balance \n";
    }

    public function withdraw($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            echo "withdrawn $amount. New Balance: $this->balance \n";
        }else{
            echo "Insufficient balance.";
        }
    }

    public function showBalance(){
        echo "{$this->owner}'s balance is: {$this->balance} \n";
    }
}
$account1 = new BankAccount();
$account1->owner = 'Robiul Hassan';
$account1->balance = 1000;
$account1->deposit(500); 
$account1->withdraw(200);
$account1->showBalance();


echo "\n";


// Class Practice 05: Weather
class Weather{
    public $city;
    public $temperature;
    public $condition;

    public function report(){
        echo "In {$this->city}, {$this->temperature} degrees and {$this->condition}.\n";
    }
}
$weather1 = new Weather();
$weather1->city = 'Dhaka';
$weather1->temperature = 25;
$weather1->condition = 'Sunny';
$weather1->report();
