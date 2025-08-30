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

if(!isset($_POST['id'])){
    echo json_encode(['message' => 'ID is required']);
    exit;
}

if(!$student->isIdExist($_POST['id'])){
    echo json_encode(['message' => 'Invalid Student ID']);
    exit;
}

echo $student->deleteStudent($_POST['id']);