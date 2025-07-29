<?php

/*
Step 1: Start session
session_start(); 

Step 2: Save data in session
$_SESSION['username'] = 'robin';

Step 3: Access anywhere
echo $_SESSION['username']; // Output: robin
*/

// session_start();
// $_SESSION['user'] = ['name' => 'robin', 'age' => 42, 'role' => 'dev'];
// print_r($_SESSION['user']);

// unset($_SESSION['user']['age']);

// if(isset($_SESSION)){
//     print_r($_SESSION['user']);
// }




// step 1: start Session
session_start();

// user login id
$_SESSION['username'] = 'robin';

// when the user clicks the Logout button, then it will happen....

// step 2: if user want to delete certain variable session-
unset($_SESSION['username']);
// echo $_SESSION['username'];

// step 3: if user want to clear all session variables-
session_unset(); // $_SESSION = []

// step 4: if user want to destroy session completely-
session_destroy();  // destroying session file and id 

// step 5: sending user to home page or Login page with redirect
header("Location: login.php");
exit();