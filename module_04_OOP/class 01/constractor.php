<?php

// Constructor: A special method that is called when a new object is created. It is used to initialize the object's properties.

class Students{
    public $name;
    public $class;
    public $roll;

    public function __construct($n, $c, $r){
        $this->name = $n;
        $this->class = $c;
        $this->roll = $r;
    }
   
    public function studentInfo(){
        echo "Hi, I'm {$this->name}, I'm study in {$this->class}, and my roll is {$this->roll}.";
    }
}
$student1 = new Students('Robiul Hassan', 'Masters', 835);
$student1->studentInfo();


echo "\n";
echo "\n";

// Class Practice 04: Calculator
class Calculate{
    public $num1;
    public $num2;
    
    public function __construct($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;

    }
    
    public function multiply(){
        return $this->num1 * $this->num2;
    }

    public function division(){
        if($this->num2 == 0){
            return "Cannot divided by zero.";
        }else{
            return $this->num1 / $this->num2;
        }
    }

}
$calc = new Calculate(45,25);
echo "Multiplication: ". $calc->multiply() . "\n";
echo "Division: ". $calc->division() . "\n";
