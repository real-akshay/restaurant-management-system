<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\order-history.php

include('../../authentication.php');
include('../../../config/dbcon.php');

// Search & filter logic
$where = "1";
$params = [];
if (!empty($_GET['order_id'])) {
    $where .= " AND id LIKE '%" . mysqli_real_escape_string($con, $_GET['order_id']) . "%'";
}
if (!empty($_GET['user_name'])) {
    $where .= " AND full_name LIKE '%" . mysqli_real_escape_string($con, $_GET['user_name']) . "%'";
}
if (!empty($_GET['date_from'])) {
    $where .= " AND order_date >= '" . mysqli_real_escape_string($con, $_GET['date_from']) . "'";
}
if (!empty($_GET['date_to'])) {
    $where .= " AND order_date <= '" . mysqli_real_escape_string($con, $_GET['date_to']) . "'";
}
if (!empty($_GET['status'])) {
    $where .= " AND order_status = '" . mysqli_real_escape_string($con, $_GET['status']) . "'";
}

// fetch data from order_master
$query = "SELECT * FROM order_master WHERE $where ORDER BY order_date DESC";
$query_run = mysqli_query($con, $query);

// fetch data from order_detail
$query2 = "SELECT * FROM order_details";
$query2_run = mysqli_query($con, $query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.12);
            padding: 32px;
        }
        h2 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 24px;
        }
        .search-filter {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }
        .search-filter input, .search-filter select {
            padding: 10px 14px;
            border: 1px solid #dfe6e9;
            border-radius: 8px;
            font-size: 16px;
            background: #f1f2f6;
            min-width: 120px;
        }
        .search-filter button {
            background:#00b894;
            color:#fff;
            border:none;
            border-radius:8px;
            padding:10px 18px;
            font-weight:600;
            cursor:pointer;
            min-width: 100px;
        }
        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .order-table th, .order-table td {
            padding: 14px 12px;
            text-align: left;
        }
        .order-table th {
            background: #2c3e50;
            color: #fff;
            font-weight: 600;
        }
        .order-table tr {
            border-bottom: 1px solid #ecf0f1;
        }
        .order-table tr:hover {
            background: #f6f8fa;
        }
        .status {
            padding: 6px 16px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }
        .status.Pending { background: #ffeaa7; color: #636e72; }
        .status.Confirmed { background: #81ecec; color: #0984e3; }
        .status.Preparing { background: #fdcb6e; color: #d35400; }
        .status.Delivered { background: #55efc4; color: #00b894; }
        .status.Cancelled { background: #fab1a0; color: #d63031; }
        .actions button {
            background: #2d3436;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 14px;
            margin-right: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }
        .actions button:hover {
            background: #636e72;
        }
        @media (max-width: 900px) {
            .container { padding: 12px; }
            .order-table th, .order-table td { padding: 8px 6px; }
        }
        @media (max-width: 700px) {
            .container { padding: 4px; }
            .search-filter { flex-direction: column; gap: 8px; }
            .order-table th, .order-table td { padding: 6px 4px; font-size: 13px; }
            .actions button { padding: 6px 10px; font-size: 12px; }
        }
        @media (max-width: 500px) {
            .container { padding: 2px; }
            h2 { font-size: 1.2rem; }
            .order-table th, .order-table td { padding: 4px 2px; font-size: 12px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Order History</h2>
        <form class="search-filter" method="get">
            <input type="text" name="order_id" placeholder="Order ID" value="<?php echo htmlspecialchars($_GET['order_id'] ?? ''); ?>">
            <input type="text" name="user_name" placeholder="User Name" value="<?php echo htmlspecialchars($_GET['user_name'] ?? ''); ?>">
            <input type="date" name="date_from" placeholder="From" value="<?php echo htmlspecialchars($_GET['date_from'] ?? ''); ?>">
            <input type="date" name="date_to" placeholder="To" value="<?php echo htmlspecialchars($_GET['date_to'] ?? ''); ?>">
            <select name="status">
                <option value="">All Status</option>
                <option value="Pending" <?php if(@$_GET['status']=='Pending') echo 'selected'; ?>>Pending</option>
                <option value="Confirmed" <?php if(@$_GET['status']=='Confirmed') echo 'selected'; ?>>Confirmed</option>
                <option value="Preparing" <?php if(@$_GET['status']=='Preparing') echo 'selected'; ?>>Preparing</option>
                <option value="Delivered" <?php if(@$_GET['status']=='Delivered') echo 'selected'; ?>>Delivered</option>
                <option value="Cancelled" <?php if(@$_GET['status']=='Cancelled') echo 'selected'; ?>>Cancelled</option>
            </select>
            <button type="submit">Search</button>
        </form>
        <div style="overflow-x:auto;">
        <table class="order-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User Name</th>
                    <th>Items</th>
                    <th>Amount</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Reset pointer for order_details
                $order_details = [];
                while($result2 = mysqli_fetch_assoc($query2_run)) {
                    $order_details[$result2['order_id']][] = $result2['product_name'];
                }
                ?>
                <?php while($result1 = mysqli_fetch_assoc($query_run)): ?>
                <?php
                    $items_str = isset($order_details[$result1['id']]) ? implode(', ', $order_details[$result1['id']]) : '';
                ?>
                <tr>
                    <td>
                        <a href="order-details.php?id=<?php echo $result1['id']; ?>" style="color:#0984e3;font-weight:600;text-decoration:none;">
                            <?php echo $result1['id']; ?>
                        </a>
                    </td>
                    <td><?php echo $result1['full_name']; ?></td>
                    <td><?php echo $items_str; ?></td>
                    <td><?php echo $result1['total_amount']; ?></td>
                    <td><?php echo $result1['order_date']; ?></td>
                    <td>
                        <span class="status <?php echo $result1['order_status']; ?>">
                            <?php echo $result1['order_status']; ?>
                        </span>
                    </td>
                    <td class="actions">
                        <button onclick="location.href='order-details.php?id=<?php echo $result1['id']; ?>'">View</button>
                        <button onclick="editOrder('<?php echo $result1['id']; ?>')">Edit</button>
                        <button onclick="cancelOrder('<?php echo $result1['id']; ?>')">Cancel</button>
                        <button onclick="refundOrder('<?php echo $result1['id']; ?>')">Refund</button>
                        <button onclick="printInvoice('<?php echo $result1['id']; ?>')">Print Invoice</button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        </div>
    </div>
    <script>
        // Responsive actions
        function editOrder(orderId) {
            window.location.href = 'edit-order.php?id=' + encodeURIComponent(orderId);
        }
        function cancelOrder(orderId) {
            if(confirm('Are you sure you want to cancel order ' + orderId + '?')) {
                window.location.href = 'cancel-order.php?id=' + encodeURIComponent(orderId);
            }
        }
        function refundOrder(orderId) {
            if(confirm('Refund order ' + orderId + '?')) {
                window.location.href = 'refund-order.php?id=' + encodeURIComponent(orderId);
            }
        }
        function printInvoice(orderId) {
            window.open('print-invoice.php?id=' + encodeURIComponent(orderId), '_blank');
        }
    </script>