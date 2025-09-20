<?php
session_start();
include_once '../../../config/dbcon.php';

if (!isset($_SESSION['user_session'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

$user_id = $_SESSION['user_session']['user_id'];

// Fetch all orders for this user from order_master
$query = "SELECT id AS order_id, order_date, total_amount, order_status FROM order_master WHERE user_id = ? ORDER BY order_date DESC";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$orders = [];
while ($row = $result->fetch_assoc()) {
    // Fetch order items for each order
    $order_id = $row['order_id'];
    $items = [];
    $item_query = $con->prepare("SELECT product_name, quantity, price, subtotal FROM order_details WHERE order_id = ?");
    $item_query->bind_param("i", $order_id);
    $item_query->execute();
    $item_result = $item_query->get_result();
    while ($item = $item_result->fetch_assoc()) {
        $items[] = $item;
    }
    $row['items'] = $items;
    $orders[] = $row;
    $item_query->close();
}

$stmt->close();
$con->close();

echo json_encode(['status' => 'success', 'orders' => $orders]);