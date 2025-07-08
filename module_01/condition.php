<?php

// Conditionals in PHP
/*
This code demonstrates the use of conditional statements in PHP.
Conditional statements allow you to execute different blocks of code based on certain conditions.
They are fundamental in programming for making decisions and controlling the flow of execution.
They are essential for controlling the flow of a program and making decisions based on variable values.
Conditional statements include if, else if, else, and switch statements.
*/

// Example of a simple if statement
$age = 10; // Example of a variable to hold age
if($age >= 18){
    echo "you are eligible to vote and join in";
}
else{
    echo "you have to wait for 18 years to join vote.\n";
}

// Example of an if-else statement
$mark = 60; 

if($mark >= 80){
    echo "You have passed with Mumtaz Result.\n";
}
elseif ($mark >= 65){
    echo "You have passed with Jayyid Jiddan Result.\n";
}
elseif($mark >= 45){
    echo "You have passed with Jayyid Rseult.\n";
}
elseif ($mark >= 33){
    echo "You have passed with Maqbul Result. \n";
}
else{
    echo "You have failed or got Rasib the exam.\n";
}
// this result system is based on the Qawmi education system of Bangladesh


$username = "Robiul Hassan";
$password = "5346";

if($username == "Robiul Hassan"){
    if($password == "5346"){
        echo "Welcome to your account, Robiul Hassan. \n";
    }
    else{
        echo "Incorrect password. Please try again. \n";
    }
}
else{
    echo "Username not found. Please check your username. \n";
}

// Shortcut if statement 
$age = 27;
$person = 'Robiul Hassan';
if($person == 'Robiul Hassan' && $age >= 18){
    echo 'You are eligible to vote, ' . $person . "\n"; 
}
else{
    echo "You are not eligible to vote, " . $person ."\n";
}



// Ternary  : single line if-else statement with ternary operator 
$age = 19;
echo ($age >= 18) ? "Your are a Adult" : "You are not an Adult";
echo "\n";
echo ($age <= 18) ? "Your old enough to marry" : "You can't marry yet" . "\n";

// Nested Ternary Operator
$mark = 85;
$grade = ($mark >= 80) ? "Mumtaz" : (($mark >= 65) ? "Jayyid Jiddan" : (($mark >= 45) ? "Jayyid" : (($mark >= 33) ? "Maqbul" : "Rasib")));
echo "Your Result is: " . $grade . "\n";


// Switch statement
$yourAge = 20;
switch ($yourAge){
    case 17 :
        echo "You are eligible to vote";
        break;
    case 18 :
        echo "You can Marry";
        break;
    case 20 :
        echo "You can drive a car";;
        break;
    default : 
        echo "You are not Eligible for anithing";
        break;     
}

echo "\n";

// Match statement (PHP 8.0+)
$yourAge = 16;
$result = match ($yourAge){
    17 => "Your are eligible to vote",
    18 => "You can Marry",
    20 => "You can drive a car",
    default => "You are not Eligible for anything"
};
echo $result . "\n";


$studentMark = 69;
echo $grades = match (true){
    ($studentMark >= 80) && ($studentMark <= 100) => "Mumtaz",
    ($studentMark >= 65) && ($studentMark < 80) => "Jayyid Jiddan",
    ($studentMark >= 45) && ($studentMark < 65) => "Jayyid",
    ($studentMark >= 33) && ($studentMark < 45) => "Maqbul",
    ($studentMark >= 00) && ($studentMark < 33) => "Rasib",
    default => "Invalid mark entered"
};