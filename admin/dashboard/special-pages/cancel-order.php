<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\cancel-order.php

include('../../authentication.php');
include('../../../config/dbcon.php');

$order_id = $_POST['id'] ?? $_GET['id'] ?? '';

if ($order_id != '') {
    // Update query
    $update_qry = "UPDATE order_master SET order_status='Cancelled' WHERE id='$order_id'";
    $update_res = mysqli_query($con, $update_qry);

    if ($update_res) {
        echo "<script>alert('Order #$order_id has been cancelled'); window.location.href='orders.php';</script>";
        exit;
    } else {
        echo "<script>alert('Something went wrong while cancelling the order'); window.location.href='orders.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Order ID missing'); window.location.href='orders.php';</script>";
    exit;
}
