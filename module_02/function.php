<?php

// Function in PHP
// Function Structure: function functionName($parameters) { // code }
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