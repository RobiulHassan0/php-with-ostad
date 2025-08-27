<?php

$localhost = 'localhost';
$username = 'robi';
$password = 'robi';
$database = 'corephp';

try{
    $connection = new mysqli($localhost, $username, $password, $database);

}catch(Exception $e){
    echo $e->getMessage();
}

// $connection = new mysqli($localhost, $username, $password, $database);
// if($connection->connect_error){
//     echo $connection->connect_error;
// }
// echo 'Connected';