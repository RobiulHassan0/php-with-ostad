<?php


// Project 3: Basic Auth System

$username = "admin";
$password = "1234";

// Input username and password
$inputUsername = "admin";
$inputPassword = "1234";

if ($inputUsername == $username && $inputPassword == $password) {
    echo "Login Successful";
} else {
    echo "Invalid username or password";
}
