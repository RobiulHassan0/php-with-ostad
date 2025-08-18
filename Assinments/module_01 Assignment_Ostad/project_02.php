<?php
// Temperature Converter

// $temperature = 30;
// $unit = "C";

// if ($unit == "C") {
//     $converted = ($temperature * 9 / 5) + 32;
//     echo $temperature . " degrees Celsius equals " . $converted . " degrees Fahrenheit.";
// } elseif ($unit == "F") {
//     $converted = ($temperature - 32) * 5 / 9;
//     echo $temperature . " degrees Fahrenheit equals " . $converted . " degrees Celsius.";
// } else {
//     echo "Please use 'C' for Celsius or 'F' for Fahrenheit.";
// }
$temperature = 50;
$unit = "C";
if($unit == "C"){
    $converted = ($temperature * 9/5) + 32;
    echo $temperature . " Degrees Celsius equal " . $converted . " degrees Fahrenheit.";
}