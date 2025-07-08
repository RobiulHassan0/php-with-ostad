<?php

//  Basic Authentication System 
const USERNAME = 'Robiul Hassan';
const PASSWORD = '3435';

// echo "Username : ";
// $userName = readline();
// echo "Password : ";
// $userPassword = readline();

// Check if username and password are empty
// If they are empty, prompt the user to enter them again
if(empty($userName) || empty($userPassword)){
    echo "Username or Password cannot be empty. Please try again. \n";
}
else{
    if($userName === USERNAME && $userPassword === PASSWORD){
        echo "Login Successful! Welcome, " . $userName . ".\n";
    }
    else{
        echo"Invalid Username or Password. please try again. \n";
    }
}

echo "\n";


// Simple Electricity Bill Calculator 
/*
0 to 50 units = 5 per unit
51 to 100 units = 8 per unit
101 to 200 units = 10 per unit
201 to 300 units = 12 per unit
Above 300 units = 15 per unit
*/

// $units = (int)readline("Enter the number of units consumed: ");

// if($units <= 50){
//     $bill = $units * 5;
// }else if($units <= 100){
//     $bill = 50 * 5 + ($units -  50) * 8;
// }else if($units <= 200){
//     $bill = 50 * 5 + 50 * 8 + ($units - 100) * 10;
// }else if($units <= 300){
//     $bill = 50 * 5 + 50 * 8 + 100 * 10 + ($units - 200) * 12;
// }else{
//     $bill = 50 * 5 + 50 * 8 + 100 * 10 + 100 * 12 + ($units - 300) * 15;
// }
// echo "Your Electricity Bill is: " . $bill . " Taka\n";


// Temperature Converter
const FACTOR = 9 / 5;
const OFFSET = 32;

echo "Enter temperature (number only, without unit): ";
$temperature = (float)readline();

echo "Convert to (type 'C' for Celsius or 'F' for Fahrenheit): ";
$choice = strtoupper(readline());


switch ($choice){
    case "F":
        $convertedTemperature = $temperature * FACTOR + OFFSET;
        echo $temperature . "°C is equal to " . $convertedTemperature . "°F\n";
        break;
    case "C":
        $convertedTemperature = ($temperature - OFFSET) / FACTOR;
        echo "$temperature °Fahrenheit is equal to $convertedTemperature °Celsius\n";
        break; 
    default:
        echo "Invalid choice. Please enter 'C' for Celsius or 'F' for Fahrenheit. \n";
        break;
}




?>