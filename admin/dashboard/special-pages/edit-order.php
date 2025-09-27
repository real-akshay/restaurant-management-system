<?php
// filepath: c:\xampp\htdocs\Akshay\restaurant-management-system\admin\dashboard\special-pages\edit-order.php

include('../../authentication.php');
include('../../../config/dbcon.php');

$order_id = $_GET['id'] ?? '';
if (!$order_id) {
    echo "Order ID missing.";
    exit;
}

// Order fetch karna
$order_qry = "SELECT * FROM order_master WHERE id='$order_id'";
$order_res = mysqli_query($con, $order_qry);
$order = mysqli_fetch_assoc($order_res);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = mysqli_real_escape_string($con, $_POST['order_status']);
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);

    if ($status != '' && $full_name != '') {
        $update_qry = "UPDATE order_master SET order_status='$status', full_name='$full_name' WHERE id='$order_id'";
        $update_res = mysqli_query($con, $update_qry);

        if ($update_res) {
            echo "<script>alert('Order updated successfully'); window.location.href='orders.php';</script>";
            exit;
        } else {
            echo "<script>alert('Something went wrong, please try again');</script>";
        }
    } else {
        echo "<script>alert('All fields are required');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#f8f9fa; margin:0; }
        .container { max-width: 500px; margin:40px auto; background:#fff; border-radius:16px; box-shadow:0 8px 32px rgba(44,62,80,0.12); padding:32px; }
        h2 { color:#2c3e50; font-weight:600; margin-bottom:18px; }
        label { font-weight:600; color:#636e72; }
        input, select { width:100%; padding:10px; margin-bottom:16px; border-radius:8px; border:1px solid #dfe6e9; }
        button { background:#00b894; color:#fff; border:none; border-radius:8px; padding:10px 18px; font-weight:600; cursor:pointer; }
        button:hover { background:#019870; }
        a { display:inline-block; margin-top:12px; color:#0984e3; text-decoration:none; }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Order</h2>
    <form method="post">
        <label>User Name</label>
        <input type="text" name="full_name" value="<?php echo $order['full_name']; ?>" required>

        <label>Status</label>
        <select name="order_status">
            <?php 
            $statuses = ['Pending','Confirmed','Preparing','Delivered','Cancelled'];
            foreach($statuses as $st){
                $selected = ($order['order_status'] == $st) ? 'selected' : '';
                echo "<option value='$st' $selected>$st</option>";
            }
            ?>
        </select>

        <button type="submit">Update</button>
    </form>
    <a href="orders.php">← Back to Orders</a>
</div>
</body>
</html>
