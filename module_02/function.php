<?php

// Function in PHP | 1. built-in Functions 2. User-defined Functions
// User-defined Function Structure: function functionName($parameters) { // code }
function greeting ($name){
    echo "Hello $name, welcome to PHP programming! \n";
}
// Function call
greeting("Robiul Hassan");

for($i =0; $i <=3; $i++){
    echo "with calling function: " , greeting("Robiul Hassan");
}

// Sum of two numbers with function
function sum ($a, $b){
    echo "the sum of $a and $b is: ", $a + $b, "\n";
}
// Function call
sum(a:10, b:20);
sum(a:15, b:50);
sum(a:25, b:75);



// built-in Functions
// count() is a built-in function to count elements in an array
$colors = ["red", "green", "blue", "yellow", "purple"];
echo "The length of the array (total color) is: ", count($colors), "\n"; 

for($i =0; $i<count($colors); $i++){
    echo "Color at index $i is: ", $colors[$i], "\n";
}

// built-in function to get Date and Time
echo time(), "\n"; // returns the current timestamp
echo date(format: "D-m-y H:i:s"), "\n"; // returns the current date and time in the specified format

// to uppercase a string
echo strtoupper(string: "hello world"), "\n"; // converts the string to uppercase
// to lowercase a string
echo strtolower(string: "HELLO WORLD"), "\n"; // converts the string to lowercase