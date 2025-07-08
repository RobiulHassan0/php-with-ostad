<?php
/* What I learned in this class:
   1. What is Variable 
   2. What is Constant 
   3. What is Comments, Single or Multiline. 
   4. How to Printing Output
   5. Data Types in PHP
*/ 


// 1. Variable declaration and initialization
$myName = "Robiul Hassan"; // String variable'
$myAge = 25; // Integer variable
$myHeight = 5.8; // Float variable
$myIsStudent = true; // Boolean variable

// 2. Constant declaration
// Constants are defined using the define() function or the const keyword
// Using define() function
define('PROJECT_NAME', 'OSTAD PHP Course');
// Constants are global and can be accessed anywhere in the script

// Using const keyword
const Course_Name = 'PHP Course';
// Constants cannot be changed once defined
echo PROJECT_NAME;
echo "\n";

// 3. Comments
// This is a single-line comment       
/* 
   This is a multi-line comment
   It can span multiple lines
*/

// 4. Printing Output
echo "My name is: " . $myName . "\n"; // Concatenation of string
print "My age is: " . $myAge . "\n"; // Using print function
printf("My height is: %.1f \n", $myHeight,); // Formatted output
printf( "Project Name: %s \n", PROJECT_NAME); // Using printf for formatted output
sprintf('Am I a student? %s', $myIsStudent ? 'Yes' : 'No'); // Conditional output

// Example of using printf for formatted output
$number = 10.5;
printf("The number is: %.2f", $number); // Using printf to format a float number with two decimal places (%.2f)
echo "\n"; 
printf("The number is: %d", $number); // Using printf to format an integer number without decimal places (%d)
echo "\n";

// Example of using sprintf to create a formatted string
$price = 50.75;
$priceFormatted = sprintf('The price is: %.2f', $price); // Using sprintf to format a float number with two decimal places
echo $priceFormatted, "\n";
$formattedPrice = sprintf('The price is: %d', $price); // Using sprintf to format an integer number without decimal places
echo $formattedPrice . "\n";