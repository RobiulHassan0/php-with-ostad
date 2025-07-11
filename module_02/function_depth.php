<?php

// sum of two numbers with function
function calculateSum($a, $b){
    return $a + $b;
}
// Function call
$result = calculateSum(a:10, b:20) + 30; // Adding 30 to the result of the sum
echo "The sum of 10 and 20 is: $result \n";



function sum(int $a, float $b): int|float{
    return $a + $b;
}
echo sum(a: 10, b: 20.5), "\n"; // Outputs: 30.5


// introducing Global Scope and Local Scope
$gScope = "this is a global variable";
function lscopeExample(): void
{
    $localeScope = "this is a local variable";
    global $gScope; // Accessing global variable inside the function
    echo "Inside the function: $localeScope \n";
    echo "Accessing global variable: $gScope \n";
}
lscopeExample();

$globalName = "Robiul Hassan";
function greetUser(): string
{
    global $globalName; // Accessing global variable inside the function
    // Using the global variable to create a greeting message
    return "Hello, $globalName! Welcome to PHP programming. \n";
}
// Function call
echo greetUser();

//  More Example on Global and Local Scope
$devOpsEngineer = "Robiul Hassan";

function devOps(){
    global $devOpsEngineer;
    return "Hello, $devOpsEngineer! Welcome to DevOps training. \n";
}
echo devOps();

$backendDeveloper = "Ibn fulan";
// Function to greet backend developer
function backendDeveloper(){
    global $backendDeveloper;
    global $devOpsEngineer; // Accessing another global variable
    return "Hello, $backendDeveloper! Welcome to Backend Development training with $devOpsEngineer. \n";
}
// Function call
echo backendDeveloper();