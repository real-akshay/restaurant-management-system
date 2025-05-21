<?php
session_start();
if (!isset($_SESSION['auth'])|| $_SESSION['auth'] != "user") {
    $_SESSION['auth_status'] = "Login to access dashboard";
    header("Location:http://localhost/restaurant%20management%20system/user/restaurant/login.php");
    exit(0);
} else {
    // else code for cheking user or admin
    if ($_SESSION['auth'] === "user") {

    } else {
        $_SESSION['status'] = "You are not authorized as registered User";
        header("Location:restaurant/login.php");
        exit(0);
    }
}
?>