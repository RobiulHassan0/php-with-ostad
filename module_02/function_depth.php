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