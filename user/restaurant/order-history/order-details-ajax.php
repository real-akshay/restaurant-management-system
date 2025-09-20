<?php
session_start();
include_once '../../../config/dbcon.php';

if (!isset($_SESSION['user_session'])) {
    echo "Not authorized.";
    exit();
}

$order_id = intval($_GET['order_id'] ?? 0);
$user_id = $_SESSION['user_session']['user_id'];

// Check order belongs to user
$stmt = $con->prepare("SELECT * FROM order_master WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $order_id, $user_id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$order) {
    echo "Order not found.";
    exit();
}

// Fetch order items
$stmt = $con->prepare("SELECT product_name, quantity, price, subtotal FROM order_details WHERE order_id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$items = $stmt->get_result();
?>
<div>
    <div style="font-weight:bold;margin-bottom:8px;">Order #<?php echo $order['id']; ?> | <?php echo date('d M Y, h:i A', strtotime($order['order_date'])); ?></div>
    <div style="margin-bottom:8px;">Status: <span style="font-weight:600;"><?php echo ucfirst($order['order_status']); ?></span></div>
    <table style="width:100%;border-collapse:collapse;">
        <thead>
            <tr>
                <th style="text-align:left;">Product</th>
                <th style="text-align:center;">Qty</th>
                <th style="text-align:right;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php while($item = $items->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                <td style="text-align:center;"><?php echo $item['quantity']; ?></td>
                <td style="text-align:right;">₹<?php echo number_format($item['subtotal'],2); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <div style="margin-top:10px;font-weight:bold;">Total: ₹<?php echo number_format($order['total_amount'],2); ?></div>
</div>