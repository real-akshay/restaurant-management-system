<?php
include("../../config/dbcon.php"); // <-- Make sure DB connection is here

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        echo json_encode($user);
    } else {
        echo json_encode(['error' => 'User not found']);
    }
}
?>