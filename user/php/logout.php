<?php
session_start();
// if (isset($_POST['logout_btn'])) {
    unset($_SESSION['auth_user']);
    unset($_SESSION['user_session']);
    $_SESSION['status'] = [
                'type' => 'info', // ya 'error', 'info', 'warning'
                'message' => 'Logged out Successfully'
            ];
    header("Location:../restaurant/login.php");
    exit(0);
// }


?>