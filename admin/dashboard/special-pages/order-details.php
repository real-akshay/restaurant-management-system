<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\order-details.php

include('../../authentication.php');
include('../../../config/dbcon.php');

$order_id = $_POST['id'] ?? $_GET['id'] ?? '';
if (!$order_id) { echo "Order ID missing."; exit; }

// Fetch order
$order_q = mysqli_query($con, "SELECT * FROM order_master WHERE id='" . mysqli_real_escape_string($con, $order_id) . "'");
$order = mysqli_fetch_assoc($order_q);
if (!$order) { echo "Order not found."; exit; }

// Fetch order items
$order_items = mysqli_query($con, "SELECT * FROM order_details WHERE order_id='" . mysqli_real_escape_string($con, $order_id) . "'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#f8f9fa; margin:0; }
        .container { max-width: 900px; margin:40px auto; background:#fff; border-radius:16px; box-shadow:0 8px 32px rgba(44,62,80,0.12); padding:32px; }
        h2 { color:#2c3e50; font-weight:600; margin-bottom:18px; }
        .order-info, .user-info { margin-bottom:20px; padding:16px; border:1px solid #ecf0f1; border-radius:12px; background:#fdfdfd; }
        .info-title { font-weight:600; color:#2c3e50; margin-bottom:10px; }
        .info-line { margin:6px 0; }
        .info-line span { display:inline-block; min-width:140px; font-weight:600; color:#636e72; }
        .status-badge { padding:6px 14px; border-radius:12px; font-weight:600; font-size:14px; }
        .status-Pending { background:#ffeaa7; color:#636e72; }
        .status-Confirmed { background:#81ecec; color:#0984e3; }
        .status-Preparing { background:#fdcb6e; color:#d35400; }
        .status-Delivered { background:#55efc4; color:#00b894; }
        .status-Cancelled { background:#fab1a0; color:#d63031; }
        .items-table { width:100%; border-collapse:collapse; margin-top:18px; }
        .items-table th, .items-table td { padding:10px 8px; border-bottom:1px solid #ecf0f1; text-align:left; }
        .items-table th { background:#2c3e50; color:#fff; }
        .items-table tfoot td { font-weight:600; }
        .actions { margin-top:20px; }
        .actions button, .actions a {
            background:#2d3436; color:#fff; border:none; border-radius:8px;
            padding:10px 16px; margin-right:8px; cursor:pointer; font-size:14px; text-decoration:none; display:inline-block;
        }
        .actions button:hover, .actions a:hover { background:#636e72; }
    </style>
</head>
<body>
<div class="container">
    <h2>Order Details</h2>

    <!-- Order Info -->
    <div class="order-info">
        <div class="info-title">Order Information</div>
        <div class="info-line"><span>Order ID:</span> <?php echo htmlspecialchars($order['id']); ?></div>
        <div class="info-line"><span>Date:</span> <?php echo htmlspecialchars($order['order_date']); ?></div>
        <div class="info-line"><span>Amount:</span> ₹<?php echo htmlspecialchars($order['total_amount']); ?></div>
        <div class="info-line"><span>Status:</span>
            <span class="status-badge status-<?php echo htmlspecialchars($order['order_status']); ?>">
                <?php echo htmlspecialchars($order['order_status']); ?>
            </span>
        </div>
        <div class="info-line"><span>Payment Method:</span> <?php echo htmlspecialchars($order['payment_method'] ?? 'N/A'); ?></div>
        <div class="info-line"><span>Payment Status:</span> <?php echo htmlspecialchars($order['payment_status'] ?? 'N/A'); ?></div>
    </div>

    <!-- User Info -->
    <div class="user-info">
        <div class="info-title">Customer Information</div>
        <div class="info-line"><span>Name:</span> <?php echo htmlspecialchars($order['full_name']); ?></div>
        <div class="info-line"><span>Email:</span> <?php echo htmlspecialchars($order['email'] ?? ''); ?></div>
        <div class="info-line"><span>Phone:</span> <?php echo htmlspecialchars($order['phone'] ?? ''); ?></div>
        <div class="info-line"><span>Address:</span> <?php echo htmlspecialchars($order['address'] ?? ''); ?></div>
    </div>

    <!-- Items Table -->
    <table class="items-table">
        <thead>
            <tr><th>Product</th><th>Qty</th><th>Price</th><th>Subtotal</th></tr>
        </thead>
        <tbody>
            <?php $grand_total=0; while($item = mysqli_fetch_assoc($order_items)): 
                $subtotal = $item['quantity'] * $item['price'];
                $grand_total += $subtotal;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                <td>₹<?php echo htmlspecialchars($item['price']); ?></td>
                <td>₹<?php echo $subtotal; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align:right;">Grand Total:</td>
                <td>₹<?php echo $grand_total; ?></td>
            </tr>
        </tfoot>
    </table>

    <!-- Actions -->
    <div class="actions">
        <a href="order-history.php">← Back to Orders</a>
        <button onclick="window.open('print-invoice.php?id=<?php echo $order['id']; ?>','_blank')">Print Invoice</button>
        <a href="edit-order.php?id=<?php echo $order['id']; ?>">Edit Order</a>
    </div>
</div>
</body>
</html>
