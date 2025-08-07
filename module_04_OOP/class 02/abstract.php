<?php
// introduction to abstract class in PHP OOP
// step 1: create a parent class
abstract class Shape{
    // create area for every shape
    abstract public function area();
}

// Step 2: Create a Concrete Class- Circle
class Circle extends Shape{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

// step 3: Concrete Class- Rectangle
class Rectangle extends Shape{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area()
    {
        return $this->width * $this->height;
    }
} 

// Step 4: Create Object and set data with properties of child class
$circle = new Circle(5);
echo "Circle Area: ". $circle->area() . "\n";

$rectAngle = new Rectangle(4, 6);
echo "Rectangle Area: ". $rectAngle->area() . "\n";


echo "\n";


// Another Example of abstract class in PHP OOP
abstract class Animal{
    protected $name;

    public function setName($n){
        $this->name = $n;
    }

    public function getName(){
       return $this->name;
    }

    abstract public function animalVoice();
}

class Cat extends Animal{
    public function animalVoice()
    {
        return $this->name . " says: meow meow \n";
    }
}

$cat = new Cat();
$cat->setName("Tom");
echo "Cat Name: ". $cat->getName() . "\n";
echo $cat->animalVoice() . "\n";