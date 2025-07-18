<?php

// Combine/Merge Two Arrays
$userRequest = ['username', 'password'];
$token = ['token'];

$merged = array_merge($userRequest, $token);
print_r($merged);


// Array Map
$numbers = [1, 2, 3, 4, 5];
$multiplyTwo = array_map(function($n){
    return $n * 2;
}, $numbers);
print_r($multiplyTwo);


// Array Filter
$findSum = array_filter($numbers, function($number){
    return $number % 2 == 0;
});
print_r($findSum);



// Convert Array to String
$colors = ['red', 'green', 'white', 'yellow'];
echo implode(' , ', $colors);