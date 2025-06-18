<?php
session_start();
include_once '../../../config/dbcon.php';

if (!isset($_SESSION['user_session'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

$user_id = $_SESSION['user_session']['user_id'];

$query = "SELECT orders.id, orders.order_date, orders.total_amount, order_items.product_name, order_items.quantity 
          FROM orders 
          JOIN order_items ON orders.id = order_items.order_id 
          WHERE orders.user_id = ? 
          ORDER BY orders.order_date DESC";

$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$order_history = [];

while ($row = $result->fetch_assoc()) {
    $order_history[] = $row;
}

$stmt->close();
$con->close();

echo json_encode(['status' => 'success', 'orders' => $order_history]);
?>