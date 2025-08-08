<?php
// introduction to static property and method in PHP OOP
// step 1: Static Property. it is a property that is shared by all instances of a class.
// step 2: Static Method. it is a method that is shared by all instances of a class.

// Step 3: static vs normal property/method
/*
    Normal property access :  $object->property_name  
    Normal method access :    $object->method_name()            (normal method called instance method)

    Static property access :  Class_name::$property_name
    Static method access :    Class_name::method_name()

    Normal Property/Method need Object.
    Static Property/Method does not need Object.

    In normal class: property/method saved in Object.
    In static class: property/method saved in Class.  

*/


// step 2: Static Property
class Name{
    public static $name = "Abu Zayed";  // this is called as a static property
}
echo Name::$name . "\n"; // directly access static property, not need to create an object

echo "\n";

// step 2: Static Method
class Math{
    public static function square($num){
        return $num * $num;
    }
}
echo 'Square of 5 is: '. Math::square(5) . "\n";

echo "\n";


//  Step 4: static property update
Class Counter{
    public static $count = 0;  // static property

    public function increase(){   // non static method
        self::$count++;  // Static property access, but from non static context
    }
}
$one = new Counter(); // created an object
$one->increase();    // Non-Static method called with object

$two = new Counter(); // created a new object
$two-> increase();   // again, Non-Static method called with object

echo Counter::$count . "\n"; // static property access
