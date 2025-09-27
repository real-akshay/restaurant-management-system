<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\print-invoice.php

include('../../authentication.php');
include('../../../config/dbcon.php');

$order_id = $_GET['id'] ?? '';
if (!$order_id) { die("Order ID missing."); }

// Fetch order details
$order_sql = "SELECT * FROM order_master WHERE id='$order_id'";
$order_result = mysqli_query($con, $order_sql);
$order = mysqli_fetch_assoc($order_result);

// Fetch order items
$items_sql = "SELECT * FROM order_details WHERE order_id='$order_id'";
$order_items = mysqli_query($con, $items_sql);

// Safety check
if (!$order) { die("Order not found."); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice - <?php echo $order['id']; ?></title>
    <style>
        @media print {
            @page { margin: 0; } /* Remove default browser margins */
            body { margin: 0; }
        }

        body { font-family: 'Montserrat', sans-serif; background: #fff; margin:0; padding:0; }
        .invoice-wrapper { padding: 20px; }
        .invoice { max-width: 750px; margin: auto; background:#fff; border-radius:16px; box-shadow:0 8px 32px rgba(44,62,80,0.12); padding:32px; }
        h1, h2, h3 { margin:0; padding:0; }
        .header { text-align:center; border-bottom:2px solid #2c3e50; padding-bottom:12px; margin-bottom:18px; }
        .header h1 { color:#2c3e50; font-size:24px; font-weight:700; }
        .header p { font-size:14px; color:#636e72; }
        .details, .customer, .summary { margin-bottom:18px; }
        .details span, .customer span { display:inline-block; min-width:140px; font-weight:600; color:#2c3e50; }
        .items-table { width:100%; border-collapse:collapse; margin-top:12px; }
        .items-table th, .items-table td { padding:10px 8px; border-bottom:1px solid #ecf0f1; text-align:left; }
        .items-table th { background:#2c3e50; color:#fff; }
        .right { text-align:right; }
        .summary .line { display:flex; justify-content:space-between; margin:4px 0; font-size:14px; }
        .summary .total { font-size:16px; font-weight:700; color:#00b894; }
        .footer { margin-top:24px; text-align:center; font-size:13px; color:#636e72; border-top:1px solid #ecf0f1; padding-top:12px; }
    </style>
</head>
<body onload="window.print()">
<div class="invoice-wrapper">
<div class="invoice">
    <!-- Header -->
    <div class="header">
        <h1>🍴 My Restaurant</h1>
        <p>123 MG Road, Jabalpur, MP<br>
        Phone: +91 9876543210 | Email: info@myrestaurant.com</p>
    </div>

    <!-- Order Info -->
    <div class="details">
        <span>Invoice No:</span> INV-<?php echo $order['id']; ?><br>
        <span>Order Date:</span> <?php echo $order['order_date']; ?><br>
        <span>Payment Method:</span> <?php echo $order['payment_mode'] ?? 'N/A'; ?><br>
        <span>Status:</span> <?php echo $order['order_status']; ?><br>
    </div>

    <!-- Customer Info -->
    <div class="customer">
        <h3>Customer Details</h3>
        <span>Name:</span> <?php echo $order['full_name']; ?><br>
        <span>Email:</span> <?php echo $order['email'] ?? 'Not Provided'; ?><br>
        <span>Phone:</span> <?php echo $order['phone'] ?? 'Not Provided'; ?><br>
        <span>Address:</span> <?php echo $order['address'] ?? 'Not Provided'; ?><br>
    </div>

    <!-- Items Table -->
    <table class="items-table">
        <thead>
            <tr>
                <th>Product</th>
                <th class="right">Qty</th>
                <th class="right">Price</th>
                <th class="right">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $subtotal = 0;
            while($item = mysqli_fetch_assoc($order_items)): 
                $line_total = $item['quantity'] * $item['price'];
                $subtotal += $line_total;
            ?>
            <tr>
                <td><?php echo $item['product_name']; ?></td>
                <td class="right"><?php echo $item['quantity']; ?></td>
                <td class="right">₹<?php echo number_format($item['price'], 2); ?></td>
                <td class="right">₹<?php echo number_format($line_total, 2); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Summary -->
    <div class="summary">
        <div class="line"><span>Subtotal:</span><span>₹<?php echo number_format($subtotal, 2); ?></span></div>
        <div class="line"><span>Discount:</span><span>- ₹<?php echo number_format($order['discount'] ?? 0, 2); ?></span></div>
        <div class="line"><span>Tax (5% GST):</span>
            <span>₹<?php $tax = $subtotal * 0.05; echo number_format($tax, 2); ?></span>
        </div>
        <div class="line"><span>Delivery Charge:</span><span>₹<?php echo number_format($order['delivery_charge'] ?? 0, 2); ?></span></div>
        <div class="line total"><span>Total Payable:</span>
            <span>₹<?php echo number_format($subtotal - ($order['discount'] ?? 0) + $tax + ($order['delivery_charge'] ?? 0), 2); ?></span>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Thank you for dining with us! 🍽️<br>
        For support contact: +91 9876543210 | info@myrestaurant.com</p>
        <p><i>*This is a computer generated invoice. No signature required.</i></p>
    </div>
</div>
</div>
</body>
</html>
