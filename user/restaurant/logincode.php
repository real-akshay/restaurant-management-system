<?php
session_start();
include('../../config/dbcon.php');


if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Agar already admin login hai, toh user login allow mat karo
    // if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'admin') {
    //     $_SESSION['status'] = "You are already logged in as Admin. User login not allowed.";
    //     header("Location: login.php"); // user login page
    //     exit();
    // }

    // Sirf user role ke liye hi login check karein
    // Use prepared statements to prevent SQL injection and trim email input
    $email = trim($email);
    $stmt = $con->prepare("SELECT * FROM users WHERE email=? AND role='user' LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password']) || $password === $row['password']) {
            $_SESSION['auth'] = "user";
            $_SESSION['auth_user'] = [
                'user_id' => $row['id'],
                'user_name' => $row['name'],
                'user_email' => $row['email'],
                'user_phone' => $row['phone']
            ];

            $_SESSION['status'] = "Logged In Successfully";
            header("Location: index.php"); // user dashboard
            exit();
        } else {
            $_SESSION['status'] = "Invalid Email or Password or Unauthorized Access!";
            header("Location: login.php"); // back to admin login
            exit();
        }

    } else {
        $_SESSION['status'] = "Invalid Email or Password or Unauthorized Access!";
        header("Location: login.php"); // back to user login page
        exit();
    }

} else {
    $_SESSION['status'] = "Access Denied!";
    header("Location: login.php");
    exit();
}