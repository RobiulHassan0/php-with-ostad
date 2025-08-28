<?php

// require_once '../connection.php';
// global $connection;
$localhost = 'localhost';
$username = 'robi';
$password = 'robi';
$database = 'corephp';


$connection = new mysqli($localhost, $username, $password, $database);


// $getAllData = "SELECT * FROM students";
$updateData = "UPDATE students SET name = 'Karim' WHERE id=7 " ;
$deleteData = "DELETE FROM students WHERE id=7 " ;
$result = $connection->query($deleteData);
 
    if($connection->affected_rows > 0){
        echo "Data Deleted";
    }else{
        echo "error";
    }

// if($result->num_rows > 0){
//     // while($row = $result->fetch_assoc()){
//     //     echo "ID : " . $row['id'] . "<br>"; 
//     //     echo "Name : " . $row['name'] . "<br>"; 
//     //     echo "Email : " . $row['email'] . "<br>"; 
//     //     echo "<hr>";
//     // }    

//     echo "<pre>";
//     print_r($result->fetch_all(MYSQLI_ASSOC));
//     echo "</pre>";

// }else{
//     echo 'No Data available!';
// }


// echo "<pre>";
// echo "ID : " . $row['id'] . "<br>"; 
// echo "Name : " . $row['name'] . "<br>"; 
// echo "Email : " . $row['email'] . "<br>"; 
// echo "</pre>";


return;
$checkEmail = "SELECT COUNT(*) FROM students WHERE email = '{$email}' ";
        
$result = $connection->query($checkEmail);
$row = $result->fetch_assoc();
if($row['COUNT(*)'] > 0){
    echo "Email is already exist.";
    return false;
}

$insertQuery = "INSERT INTO students (NAME, EMAIL, DOB, AGE, STATUS) VALUES
('Rahim', 'karim@mail.com', '2001-01-01', 24, true)";

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
