<?php
session_start();
if (!isset($_SESSION['admin_session']) || $_SESSION['auth_admin'] != 'admin') {
    $_SESSION['auth_status'] = "Login to access dashboard";
    header("Location: http://localhost/restaurant%20management%20system/admin/dashboard/auth/sign-in.php");
    exit();
}
?>