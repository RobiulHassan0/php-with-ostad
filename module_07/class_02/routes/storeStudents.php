<?php

require '../classes/Database.php';
require '../classes/Student.php';

header('Content-Type: application/json');
$database = new Database();
$student = new Student($database);

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode(['message' => 'Invalid request method']);
    exit;
}

$data = [];
if(!isset($_POST['name'])){
    echo json_encode(['message' => 'Name is required']);
    exit;
}

if(!isset($_POST['email'])){
    echo json_encode(['message' => 'Name is required']);
    exit;
}

if($student->isEmailExist($_POST['email'])){
    echo json_encode(['message' => 'Email already exist']);
    exit;
}

$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'dob' => $_POST['dob'],
    'age' => $_POST['age']
];

// echo $student->insertStudents($data);
echo $student->insertStudentsSequre($data);