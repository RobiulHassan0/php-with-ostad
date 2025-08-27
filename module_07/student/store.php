<?php

// require_once '../connection.php';
// global $connection;
$localhost = 'localhost';
$username = 'robi';
$password = 'robi';
$database = 'corephp';


$connection = new mysqli($localhost, $username, $password, $database);

$email = 'rahim@mail.com';
$checkEmail = "SELECT COUNT(*) FROM students WHERE email = 'rahim@mail.com' ";
        
        $result = $connection->query($checkEmail);
        $row = $result->fetch_assoc();
        var_dump($row);
        if($row['COUNT(*)'] > 0){
            echo "Email is already exist.";
            return false;
        }

        $insertQuery = "INSERT INTO students (NAME, EMAIL, DOB, AGE, STATUS) VALUES
        ('Rahim', 'rahim@mail.com', '2001-01-01', 24, 'Active')";

        $result = $connection->query($insertQuery);
        if($result){
            echo "Student Data inserted";
            return true;
        }else{
           echo "error";
           return true;
        }

        

// INSERT INTO students (NAME, EMAIL, DOB, AGE, STATUS) VALUES
// ('Rahim', 'rahim@mail.com', '2001-01-01', 24, 'Active')

function store(array $data){
    global $connection;
    //studentDataValidation($data, $connection);
}








//function studentDataValidation(array $data, $connection){
    // if(isset($data['name'])){
    //     if(empty($data['name'])){
    //         echo "Name is required";
    //         return false;
    //     }
    // }

    // if(isset($data['email'])){
    //     if(empty($data['email'])){
    //         echo 'Email is required';
    //         return false;
    //     }

        
    //     echo "Email is Valid";
    //     return true;
    // }

//}


// $data = [
//     'name' => 'Robin',
//     'email' => 'robi@mail.com',
//     'dob' => '2001-01-01',
//     'age' => 25,
//     'status' => true
// ];

// store($data);
