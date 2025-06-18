<!-- <php
session_start();
include('../../../config/dbcon.php');

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Agar koi user already login hai aur wo user hai, toh usse allow hi mat karo admin page me login karne ke liye
    // if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'user') {
    //     $_SESSION['status'] = "You are already logged in as a user. Admin login is restricted.";
    //     header("Location: sign-in.php"); // admin login page
    //     exit();
    // }

    $log_query = "SELECT * FROM users WHERE email='$email' AND role='admin' LIMIT 1";
    $log_query_run = mysqli_query($con, $log_query);

    if (mysqli_num_rows($log_query_run) > 0) {
        $row = mysqli_fetch_assoc($log_query_run);

        // Check if the stored password is hashed or plain text
        if (password_verify($password, $row['password']) || $password === $row['password']) {
            $_SESSION['auth'] = "admin";
            $_SESSION['auth_user'] = [
                'user_id' => $row['id'],
                'user_name' => $row['name'],
                'user_email' => $row['email'],
                'user_phone' => $row['phone']
            ];

            $_SESSION['status'] = "Logged In Successfully";
            header("Location:../index.php"); // admin dashboard
            exit();
        } else {
            $_SESSION['status'] = "Invalid Email or Password or Unauthorized Access!";
            header("Location: sign-in.php"); // back to admin login
            exit();
        }
    } else {
        $_SESSION['status'] = "Invalid Email or Password or Unauthorized Access!";
        header("Location: sign-in.php"); // back to admin login
        exit();
    }
} else {
    $_SESSION['status'] = "Access Denied.";
    header("Location: sign-in.php");
    exit();
}

?> -->


<?php
// ...existing code...
session_start();
include('../../../config/dbcon.php');
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ? AND role = 'admin' LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $log_query_run = $stmt->get_result();

    if ($log_query_run->num_rows > 0) {
        $row = $log_query_run->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $row['password']) || $password === $row['password']) {
            $_SESSION['auth_admin'] = "admin";
            $_SESSION['admin_session'] = [
                'admin_id' => $row['id'],
                'admin_name' => $row['name'],
                'admin_email' => $row['email'],
                'admin_phone' => $row['phone']
            ];

            $_SESSION['status'] = [
                'type' => 'success', // ya 'error', 'info', 'warning'
                'message' => 'Logged In Successfully'
            ];
            header("Location:../index.php"); // admin dashboard
            exit();
        } else {
            $_SESSION['status'] = [
                'type' => 'error', // ya 'error', 'info', 'warning'
                'message' => 'Invalid Email or Password or Unauthorized Access!'
            ];
            header("Location: sign-in.php"); // back to admin login
            exit();
        }
    } else {
        $_SESSION['status'] = [
                'type' => 'error', // ya 'error', 'info', 'warning'
                'message' => 'Unauthorized Access.!'
        ];

        header("Location: sign-in.php"); // back to admin login
        exit();
    }
}
// ...existing code...
?>