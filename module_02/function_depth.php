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




// Anonymous Function / Closure Function / Lambda Function / Callback Function
$sum = function($b, $c){
    return $b + $c;
};
echo $sum(b:10, c: 20), "\n"; // Outputs: 30

// Helper function with anonymous function
$greet = function($name){
    return strtoupper("Hello, $name! Welcome to PHP programming. \n");
};
echo $greet(name: "Robiul Hassan"); // Outputs: HELLO, ROBIUL HASSAN! WELCOME TO PHP PROGRAMMING.


// Arrow Functions
$multiply = fn($a, $b) => $a * $b;
echo $multiply(a:5, b:10), "\n"; // Outputs: 50

// Arrow function with type hinting
$divide = fn($a, $b): float => $a / $b;
echo $divide(a:30, b:5), "\n"; // Outputs: 6

// Arrow function with return type
$subtract = fn($b, $c): int => $b - $c;
echo $subtract(b:20, c:10), "\n"; // Outputs: 10

// Arrow function with type hinting and return type
$add = fn(int $a, float $b): float => $a + $b;
echo $add(a:10, b:20.5), "\n"; // Outputs: 30.5


// Function with default parameters
function greet($name = "Guest", $greeting = "Hello"){
    echo "$greeting, $name! Welcome to PHP programming. \n";
}
// Function call with default parameters
greet(); // Outputs: Hello, Guest! Welcome to PHP programming.
// Function call with custom parameters
greet(name: "Robiul Hassan", greeting: "Hi"); // Outputs: Hi, Robiul Hassan! Welcome to PHP programming.



// Recursive Function
function factorial($number){
    if($number <= 1){
        return 1; // Base case: 1! = 1 and 0! = 1 
    }else{
        return $number * factorial(($number - 1)); // Recursive call
    }
}
factorial(5); // Outputs: 120
echo "The factorial of 5 is: ", factorial(5), "\n"; // Outputs


$user = "Robiul Hassan";
function recursive($user){
    if($user != "Robiul Hassan"){
        echo "Invalid user: $user \n";
        recursive($user); // Recursive call
    }
    echo $user; // Base case
}
recursive($user);

echo "\n";


// Function to calculate factorial using a loop
// This function calculates the factorial of a number using a loop
function factorialNumber($n){
    $result = 1;
    for($i = 2; $i <= $n; $i++){
        $result *= $i; // Multiply result by current number
    }
    return $result; // Return the factorial result
}
echo "The factorial of 5 is: ", factorialNumber(5), "\n"; // Outputs: 120



// Login with Recursive Function
// function userLogIn($username = null){
//     if($username === null){
//         echo "Enter your valid username: ";
//         $username = trim(fgets(stream: STDIN)); // Read input from user
//     }
//     if($username !== "Robiul Hassan"){
//         echo "Invalid username. Please try again. \n";
//         echo "Enter your valid username: ";
//         $username = trim(fgets(stream: STDIN)); // Read input from user
//         userLogIn($username); // Recursive call
//         return; // Exit the function after successful login
//     }
//     echo "welcome! $username! You have successfully logged in. \n";
// }
// // Function call
// userLogIn(); // Call the function to start the login process


// // Login with Recursive Function and readline

// function loginWithTerminal($username = null){
//     if($username === null){
//         $username = readline(prompt: "Enter your valid username: "); // Read input from user
//     }
//     if($username !== "Robiul Hassan"){
//         echo "Invalid username. Please try again. \n";
//         $username = readline(prompt: "Enter your valid username: "); // Read input from user
//         return loginWithTerminal($username); // Recursive call and Exit the function after successful login
        
//     }
//     echo "welcome! $username! You have successfully logged in. \n";
// }
// // Function call
// loginWithTerminal(); // Call the function to start the login process

$a = 10;
$b = 20;
$c = $a + $b; // Adding $a and $b
sprintf("The sum of %d and %d is: %d \n", $a, $b, $c); // Outputs: The sum of 10 and 20 is: 30