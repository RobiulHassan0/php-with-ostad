<?php

require '../classes/Database.php';
require '../classes/Student.php';

header('Content-Type: application/json');
$database = new Database();
$student = new Student($database);

echo $student->getStudents();