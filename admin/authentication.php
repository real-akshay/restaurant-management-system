<?php
session_start();
if (!isset($_SESSION['admin_session']) || $_SESSION['auth_admin'] != 'admin') {
    $_SESSION['auth_status'] = "Login to access dashboard";
    header("Location: http://localhost/Akshay/restaurant-management-system/admin/dashboard/auth/sign-in.php");
    exit();
}
?>