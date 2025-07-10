<?php
// Loop in PHP
// For loop example Structure: for (initialization; condition; increment/decrement)

// For loop example
for($i = 0; $i <= 10; $i++){
    echo "$i \n";
}

echo "\n";
echo "\n";

// While Loop example Structure: while (condition)
$i = 10;
while($i >= 0){
    echo "$i \n";
    $i--; // Decrementing the value of $i
}

echo "\n";
echo "\n";
// ForEach Loop example Structure: foreach ($array as $value)
$fruits = array("Apple", "Banana", "Orange", "Mango");
foreach($fruits as $fruit){
    echo "$fruit \n";
}
echo "\n";

// Example of ForEach Loop with Associative Array 
// Structure: $array = array("key1" => "value1", "key2" => "value2");
$person = array(
    "name" => "Robiul Hassa",
    "age" => 26,
    "city" => "Dhaka",
    "country" => "Bangladesh"
);
// Associative array with foreach loop
echo "Person Details:\n";
foreach($person as $index => $value){
    echo "$index : $value \n";
}

echo "\n";

// example of DoWhile Loop
// Structure: do { // code } while (condition);
$i = 0;
do{
    echo "$i \n";
    $i++;
}while($i <= 10);
echo "\n";


// Continue and Break statements
// Continue statement skips the current iteration and continues with the next iteration
for ($i = 0; $i <= 10; $i++){
    if($i == 5){
        continue; // Skip the iteration when $i is 5
    }
    echo "$i \n";
}

echo "\n";
echo "\n";

// Break statement exits the loop
for ($i = 10; $i >= 0; $i--){
    if($i == 3){
        break; // Exit the loop when $i is 3
    }
    echo "$i \n";
}

echo "\n";

// Even and Odd numbers using For Loop and continue statement
for ($i =0; $i <= 20; $i++){
    if($i %2 == 0){
        continue; // Skip even numbers
    }
    echo "$i is an odd number \n";
}
echo "\n";          

// Even Numbers using For Loop and continue statement
for ($i = 20; $i >=0; $i--){
    if($i % 2 != 0){
        continue; // Skip odd numbers
    }
    echo "$i is an even number \n";
}











?>