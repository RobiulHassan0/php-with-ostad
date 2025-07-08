<?php
/*
Data Types in PHP

PHP supports several data types, which can be categorized into four main types: 
    1. Scalar Types
    2. Compound Types
    3. Special Types
    4. Resource Types

Scalar Types include:
    A. Integer: Whole numbers, both positive and negative, without decimal points.
    B. Float: Numbers with decimal points, also known as double or real numbers.
    C. String: A sequence of characters, enclosed in single or double quotes.
    D. Boolean: Represents two possible values: true or false.

Compound Types include:
    A. Array: A collection of values, which can be of any type, indexed
    by integers or strings.
    B. Object: An instance of a class, which can contain properties and methods.

Special Types include:
    A. NULL: Represents a variable with no value or an uninitialized variable.
    B. Resource: A special variable that holds a reference to an external resource, such as a database connection or file handle.
*/


// 1. Scalar Types : String
$greeting = "Hello, World!"; // String variable
echo $greeting . "\n";

$name = 'Robiul Hassan'; // String variable using single quotes
echo "My Name is: $name \n";

// 2. Scalar Types : Integer
$age = 27; // Integer variable
echo "My Age is: $age \n";
var_dump($age); // Display type and value of the variable

// 3. Scalar Types : Float (Double)
$height = 5.8; // Float variable
echo "My Height is: $height \n";
var_dump($height); // Display type and value of the variable

// 4. Scalar Types : Boolean
$isStudent = true; // Boolean variable
$isBusinessmen = false; // Boolean variable
echo "Am I a student ? " . ($isStudent);
echo "\n";
echo "Am I a businessmen ? " . ($isBusinessmen);
echo "\n";
var_dump($isStudent, $isBusinessmen); // Display type and value of the variable


// Compound Types : Array
$fruits = ['apple', 'banana', 'orange']; // Array variable
print_r($fruits); // Print array structure

$arr = ['name', 'age', 'height', true, false, 3.14]; // Mixed array 
print_r($arr); // Print mixed array structure
