<?php
session_start();
include '../../config/dbcon.php';

// Set PHP default timezone to match MySQL (adjust as needed)
date_default_timezone_set('UTC'); // Or your MySQL timezone, e.g., 'Asia/Kolkata'


if (isset($_POST['token']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password !== $cpassword) {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'Passwords do not match!'
        ];
        header("Location: reset-password.php?token=" . urlencode($token));
        exit();
    }
    // Ensure timezone consistency between PHP and MySQL
    $con->query("SET time_zone = '+00:00'"); // Set to UTC, or use your app's timezone

    $stmt = $con->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_token_expiry > NOW() LIMIT 1");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $update = $con->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?");
        $update->bind_param("ss", $hashed, $token);
        $update->execute();
        $update->close();
        $stmt->close();
        $con->close();

        $_SESSION['status'] = [
            'type' => 'success',
            'message' => "Password updated successfully! Please login."
        ];
        header("Location: ../restaurant/login.php");
        exit();
    } else {
        if (isset($stmt)) {
            $stmt->close();
        }
        $con->close();
        $_SESSION['status'] = [
            'type' => 'error',
            'message' => "Invalid or expired token!"
        ];
        header("Location: forgot-password.php");
        exit();
    }
} else {
    if (isset($con)) {
        $con->close();
    }
    header("Location: forgot-password.php");
    exit();
}
?>