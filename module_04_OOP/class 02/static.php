<?php
// introduction to static property and method in PHP OOP
// step 1: Static Property. it is a property that is shared by all instances of a class.
// step 2: Static Method. it is a method that is shared by all instances of a class.

// step 2: Static Property)
class Name{
    public static $name = "Abu Zayed";  // this is called as a static property

    public static function getName(){ // this is called as a static method
        return self::$name;
    }
}
echo Name::$name . "\n"; // directly access static property, not need to create an object
echo Name::getName() . "\n"; // same rule applicable in static method.

