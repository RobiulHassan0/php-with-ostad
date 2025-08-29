<?php

require '../classes/Database.php';
require '../classes/Student.php';

$database = new Database();
$student = new Student($database);

echo $student->getStudents();