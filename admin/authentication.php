<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 'admin') {
    $_SESSION['auth_status'] = "Login to access dashboard";
    header("Location: http://localhost/restaurant%20management%20system/admin/dashboard/auth/sign-in.php");
    exit();
}
?>