<?php

/*  Array in 3 types
--------------------
01. Indexed Array
02. Associative Array
03. Multi-dimensional Array
*/     

// Indexed Array
$colors = array('red', 'blue', 'white', 'green');
echo $colors[1] ."\n";
var_dump($colors);

$fruits = ['apple', 'banana', 'mango', 'nuts'];
print_r($fruits); // get full output
echo $fruits[2], "\n"; // get output of 2nd indexed data

// Change or Replace an indexed data
$fruits[3] = 'grape';
print_r($fruits); // get full output
// check the changed index
echo $fruits[3]. "\n";


/*  How to Store user data in an empty array?
    1. Create an empty Array first
    2. then push data in that array
*/

// Empty Array
$cart = [];
// store user data
$cart [] = 'Mobile';
$cart [] = 'Headphone';
$cart [] = 'Air buds';

// check the empty Array
print_r($cart); // now Array is not empty. its fulfilled with user data

// another way to store/push data in Array 
array_push($cart, 'Computer');
print_r($cart);
// in this two way, data stored at Last index-position in array


// remove data from last-index in Array
array_pop($cart);
print_r($cart);

// add/push/store (multiple or single) DATA from 1st index-position in Array
array_unshift($cart, 'Keyboard');
print_r($cart);
array_unshift($cart, 'Pen-drive', 'Cable');
print_r($cart);

// remove DATA from 1st index-position in Array 
array_shift($cart);
print_r($cart);


// Associative Array
$person = [
    'name' => 'Robin',
    'age' => '26',
    'isProgrammer' => true
];
print_r($person);
print_r($person['age']);

// to get output of Array Keys
print_r(array_keys($person));
print_r(array_values($person));



// Multi-Dimensional Array
$shoppingCart = [
    ['name' => 'Laptop', 'Processor' => 'Core i5 10gen', 'price' => 155400],
    ['name' => 'Mobile', 'Processor' => 'MediaTek G70', 'price' => 17400],
    [
        'name' => 'Mouse',
        'type' => 'wired',
        'price' => '950'
    ]
];
print_r($shoppingCart);
print_r($shoppingCart[1]);
echo $shoppingCart[1]['price'];

echo "\n";

// Loop to get output of Array's All Data
foreach($colors as $color){
    echo "$color \n";
}

echo "\n";

for($i = 0; $i < count($colors); $i++){
    echo $colors[$i]. "\n";
}

foreach($shoppingCart as $cart){
    print_r($cart);
    echo "-----value---- \n";
}

foreach($shoppingCart as $cart){
    echo $cart['name']. " => " .$cart['price']. "\n";
}

echo "\n";

for($i = 0; $i < count($shoppingCart); $i++){
    // echo "Product Name : ". $shoppingCart[$i]['name'] . "\n";
    // echo "Product Price : ". $shoppingCart[$i]['price']. "\n";
    // echo "------------------------ \n";
    echo "Product Name : ". $shoppingCart[$i]['name']. " => " . "Product Price : ". $shoppingCart[$i]['price']. "\n";
    echo "---------------------------------------------------- \n";
}

echo "\n";

foreach ($shoppingCart as $cart){
    foreach($cart as $key => $value){
        echo $key . " => " . $value . " \n";
    }
}

echo "\n";

foreach ($shoppingCart as $key1 => $cart){
    foreach($cart as $key2 => $value){
        echo $key1 . ". " .$key2 . " => " .$value . " \n";
    }
}

echo "\n";
echo "\n";



