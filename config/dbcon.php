<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "restaurantdb";


// Connection 
$con = mysqli_connect("$host", "$username", "$password", "$database");
if (!$con) {
    header("Location: ../error/db.php");
    die();
    // die(mysqli_errno($con));
// } else {
//     echo "Database connection successfull";
}

?>