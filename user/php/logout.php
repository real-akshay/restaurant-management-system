<?php
session_start();
// if (isset($_POST['logout_btn'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['status'] = "Loged out successfully";
    header("Location:../restaurant/index.php");
    exit(0);
// }


?>