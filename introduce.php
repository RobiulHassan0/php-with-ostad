<?php
// introduce.php
require_once 'config.php';
require_once 'functions.php';
// Check if the user is logged in
session_start();    
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
// Get the user ID from the session
$user_id = $_SESSION['user_id'];
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the introduction text from the form
    $introduction = $_POST['introduction'];
    
    // Validate the introduction text
    if (empty($introduction)) {
        $error = "Introduction cannot be empty.";
    } else {
        // Save the introduction to the database
        $stmt = $pdo->prepare("UPDATE users SET introduction = ? WHERE id = ?");
        if ($stmt->execute([$introduction, $user_id])) {
            $success = "Introduction updated successfully.";
        } else {
            $error = "Failed to update introduction.";
        }
    }
}