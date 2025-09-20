<?php
session_start();
include('../../config/dbcon.php'); // Make sure $con is your mysqli connection

if (isset($_POST['register_btn'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Password match check
    if ($password !== $cpassword) {
        $_SESSION['status'] = [
            'type' => 'error', // ya 'error', 'info', 'warning'
            'message' => 'Passwords do not match.!'
        ];
        header("Location: register.php");
        exit();
    }

    // Email already exists check (using prepared statement)
    $stmt = $con->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $_SESSION['status'] = [
            'type' => 'info', // ya 'error', 'info', 'warning'
            'message' => 'Email already registered!'
        ];
        $stmt->close();
        header("Location: register.php");
        exit();
    }
    $stmt->close();

    // Password hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user (using prepared statement)
    $stmt = $con->prepare("INSERT INTO users (first_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    if ($stmt->execute()) {
        $_SESSION['status'] = [
            'type' => 'success', // ya 'error', 'info', 'warning'
            'message' => 'Registration successful! Please login.'
        ];
        $stmt->close();
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['status'] = [
            'type' => 'error', // ya 'error', 'info', 'warning'
            'message' => 'Registration failed. Please try again.'
        ];
        $stmt->close();
        header("Location: register.php");
        exit();
    }
} else {
    header("Location: register.php");
    exit();
}
?>