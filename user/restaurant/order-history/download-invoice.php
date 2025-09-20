<?php

session_start();
include_once '../../../config/dbcon.php';

if (!isset($_SESSION['user_session'])) {
    die("Unauthorized access.");
}

$order_id = intval($_GET['order_id'] ?? 0);
$user_id = $_SESSION['user_session']['user_id'];

// Fetch order and check ownership
$stmt = $con->prepare("SELECT * FROM order_master WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $order_id, $user_id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$order) {
    die("Order not found or access denied.");
}

// Fetch order items
$stmt = $con->prepare("SELECT product_name, quantity, price, subtotal FROM order_details WHERE order_id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$items = $stmt->get_result();
$order_items = [];
while ($row = $items->fetch_assoc()) {
    $order_items[] = $row;
}
$stmt->close();

// Prepare premium invoice HTML
$invoice_html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice - Order #' . $order['id'] . '</title>
    <style>
        body { font-family: DejaVu Sans, "Montserrat", Arial, sans-serif; background: #f8fafc; color: #23213a; margin: 0; padding: 0; }
        .invoice-container {
            max-width: 720px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(95,75,139,0.13);
            padding: 38px 38px 28px 38px;
            position: relative;
            overflow: hidden;
        }
        .invoice-container:before {
            content: "";
            position: absolute;
            top: -60px; right: -60px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, #e0c3fc 0%, #8ec5fc 100%);
            opacity: 0.13;
            border-radius: 50%;
            z-index: 0;
        }
        .logo {
            text-align: center;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
        }
        .logo img {
            width: 80px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(95,75,139,0.08);
        }
        .restaurant-title {
            text-align: center;
            font-size: 2.1rem;
            font-weight: 800;
            color: #5f4b8b;
            letter-spacing: 2px;
            margin-bottom: 2px;
            z-index: 1;
            position: relative;
        }
        .invoice-title {
            text-align: center;
            font-size: 1.3rem;
            font-weight: 700;
            color: #23213a;
            margin-bottom: 18px;
            letter-spacing: 1px;
            z-index: 1;
            position: relative;
        }
        .info-section {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 18px;
            z-index: 1;
            position: relative;
        }
        .info-block {
            background: #f3f0ff;
            border-radius: 10px;
            padding: 14px 18px;
            flex: 1;
            font-size: 1rem;
        }
        .info-block strong {
            color: #5f4b8b;
            font-weight: 700;
        }
        .order-meta {
            margin-bottom: 10px;
            font-size: 1.02rem;
        }
        .order-meta span {
            display: inline-block;
            min-width: 90px;
            color: #bfa77a;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            margin-top: 18px;
            z-index: 1;
            position: relative;
        }
        th, td {
            padding: 12px 10px;
            text-align: left;
        }
        th {
            background: #f3f0ff;
            color: #5f4b8b;
            font-size: 1.07rem;
            font-weight: 700;
            border-radius: 8px 8px 0 0;
        }
        tr {
            background: #f8f7fa;
            border-radius: 8px;
        }
        td {
            font-size: 1.01rem;
            color: #23213a;
            border-radius: 0 0 8px 8px;
        }
        .total-row td {
            font-weight: bold;
            background: #f3f0ff;
            color: #5f4b8b;
            font-size: 1.09rem;
        }
        .footer {
            margin-top: 32px;
            text-align: center;
            color: #888;
            font-size: 1.05rem;
            z-index: 1;
            position: relative;
        }
        .footer .thanks {
            color: #5f4b8b;
            font-weight: 700;
            font-size: 1.13rem;
        }
        .footer .web {
            color: #bfa77a;
            font-size: 1.01rem;
        }
        @media (max-width: 700px) {
            .invoice-container { padding: 14px 2px; }
            .info-section { flex-direction: column; gap: 8px; }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="logo">
            <img src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/logo.png" alt="Restaurant Logo">
        </div>
        <div class="restaurant-title">Akshay\'s Restaurant</div>
        <div class="invoice-title">Order Invoice</div>
        <div class="info-section">
            <div class="info-block">
                <div class="order-meta"><span>Order #:</span> <strong>' . $order['id'] . '</strong></div>
                <div class="order-meta"><span>Date:</span> <strong>' . date('d M Y, h:i A', strtotime($order['order_date'])) . '</strong></div>
                <div class="order-meta"><span>Status:</span> <strong>' . ucfirst($order['order_status']) . '</strong></div>
                <div class="order-meta"><span>Payment:</span> <strong>' . ucfirst($order['payment_method']) . '</strong></div>
            </div>
            <div class="info-block">
                <div class="order-meta"><span>Billed To:</span> <strong>' . htmlspecialchars($order['full_name']) . '</strong></div>
                <div class="order-meta"><span>Email:</span> ' . htmlspecialchars($order['email']) . '</div>
                <div class="order-meta"><span>Phone:</span> ' . htmlspecialchars($order['phone']) . '</div>
                <div class="order-meta"><span>Address:</span> ' . htmlspecialchars($order['address']) . ', ' . htmlspecialchars($order['city']) . ', ' . htmlspecialchars($order['state']) . ', ' . htmlspecialchars($order['country']) . ' - ' . htmlspecialchars($order['pincode']) . '</div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th style="text-align:center;">Qty</th>
                    <th style="text-align:right;">Price</th>
                    <th style="text-align:right;">Subtotal</th>
                </tr>
            </thead>
            <tbody>';
foreach ($order_items as $item) {
    $invoice_html .= '
                <tr>
                    <td>' . htmlspecialchars($item['product_name']) . '</td>
                    <td style="text-align:center;">' . $item['quantity'] . '</td>
                    <td style="text-align:right;">₹' . number_format($item['price'], 2) . '</td>
                    <td style="text-align:right;">₹' . number_format($item['subtotal'], 2) . '</td>
                </tr>';
}
$invoice_html .= '
                <tr class="total-row">
                    <td colspan="3" style="text-align:right;">Total</td>
                    <td style="text-align:right;">₹' . number_format($order['total_amount'], 2) . '</td>
                </tr>
            </tbody>
        </table>
        <div class="footer">
            <div class="thanks">Thank you for ordering from Akshay\'s Restaurant!</div>
            <div class="web">www.akshaysrestaurant.com</div>
        </div>
    </div>
</body>
</html>
';

// Download as PDF using dompdf
require_once '../../../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf([
    'defaultFont' => 'DejaVu Sans'
]);
$dompdf->loadHtml($invoice_html, 'UTF-8');
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('Invoice_Order_' . $order['id'] . '.pdf', ['Attachment' => 1]);
exit;