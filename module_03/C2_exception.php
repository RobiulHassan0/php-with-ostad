<?php

// function divided($a, $b){
//     if($b == 0){
//         throw new Exception("divided by Zero is not allowed");
//     }
//     return $a / $b;
// }

// try{
//     echo divided(10, 0);
// }catch(Exception $error){
//     echo "Error: ". $error->getMessage();
// }

function readMyFile($fileName){
    try{
        fopen($fileName, 'w');
    }catch(Exception $error){
        echo $error->getMessage();
    }
}

readMyFile('demo.txt');