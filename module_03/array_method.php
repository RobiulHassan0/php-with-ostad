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


echo "\n";
echo "\n";


// Convert Array to String
$colors = ['red', 'green', 'white', 'yellow'];
$arrayToString = implode(' , ', $colors);
echo $arrayToString. "\n";

// Convert String to Array
$stringToArray = explode(', ', $arrayToString);
print_r($stringToArray);

// in_Array | Check if any item is in Array or not.
$allowedRole = ['Admin', 'Editor', 'Moderator'];
if(in_array('Editor', $allowedRole)){
    echo "Access Granted! \n";
}else{
    echo "Access Denied! \n";
}

echo "\n";


// is_Array | check any variables is Array or not
$data = [1, 2, 3, 4,5];
if(is_array($data)){
    echo "this is Array \n";
}
else{
    echo "this is not array";
}

echo "\n";
echo "\n";


// Real Life Example of is_Array and in_Array
$permittedRoles = ['Admin', 'Super-Admin', 'Developer'];
$currentUserRoles = ['Editor', 'Moderator'];

// check the user is Allowed in Permitted Roles or not
$hasAccess = false;

foreach($currentUserRoles as $role){
    if(in_array($role, $permittedRoles)){
        $hasAccess = true;
        break;
    }
} 
if($hasAccess){
    echo "Your are permitted to access this page! \n";
}else{
    echo "Access Denied! \n";
}