<?php

Step 1: Start session
session_start(); 

Step 2: Save data in session
$_SESSION['username'] = 'robin';

Step 3: Access anywhere
echo $_SESSION['username']; // Output: robin


session_start();
$_SESSION['user'] = ['name' => 'robin', 'age' => 42, 'role' => 'dev'];

unset($_SESSION['user']['age']);
if(isset($_SESSION)){
    print_r($_SESSION['user']);
}

