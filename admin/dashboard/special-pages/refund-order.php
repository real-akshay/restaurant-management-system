<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\refund-order.php

include('../../authentication.php');
include('../../../config/dbcon.php');

$order_id = $_POST['id'] ?? $_GET['id'] ?? '';

if ($order_id != '') {
    // Step 1: Update order status to "Refunded"
    $update_qry = "UPDATE order_master SET order_status='Refunded' WHERE id='$order_id'";
    $update_res = mysqli_query($con, $update_qry);

    // Step 2: Optionally update payment_status (agar tumhare DB me column ho)
    // Example: mysqli_query($con, "UPDATE payments SET status='Refunded' WHERE order_id='$order_id'");

    // Step 3: Check if successful
    if ($update_res) {
        echo "<script>alert('Refund processed for Order #$order_id'); window.location.href='orders.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error while processing refund'); window.location.href='orders.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Order ID missing'); window.location.href='orders.php';</script>";
    exit;
}
