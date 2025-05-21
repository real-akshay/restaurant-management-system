<!-- filepath: c:\xampp\htdocs\Restaurant Management\Admin\order_confirmation.php -->
<?php
// Start session to retrieve user data
// session_start();
include("../../authentication.php");

include("../../../config/dbcon.php");


// Get posted data
$orderData = [
    'user_id' => $_POST['user_id'] ?? null,
    'full_name' => $_POST['full_name'] ?? '',
    'email' => $_POST['email'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'address' => $_POST['address'] ?? '',
    'city' => $_POST['city'] ?? '',
    'state' => $_POST['state'] ?? '',
    'country' => $_POST['country'] ?? '',
    'pincode' => $_POST['pincode'] ?? '',
    'payment_method' => $_POST['payment_method'] ?? 'cod',
];

// Ensure total_amount and order_status are set in the session
if (!isset($_SESSION['total_amount']) || !isset($_SESSION['order_status'])) {
    die("Error: Total amount or order status is not set in the session.");
}

// Step 1: Insert into order_master
$insertOrder = "INSERT INTO order_master 
    (user_id,full_name, email, phone, address, city, state, country, pincode, payment_method, total_amount, order_status, order_date)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

$stmt = $con->prepare($insertOrder);
$stmt->bind_param(
    "isssssssssds",
    $orderData['user_id'],
    $orderData['full_name'],
    $orderData['email'],
    $orderData['phone'],
    $orderData['address'],
    $orderData['city'],
    $orderData['state'],
    $orderData['country'],
    $orderData['pincode'],
    $orderData['payment_method'],

    $_SESSION['total_amount'], // Total amount from session
    $_SESSION['order_status']  // Order status from session
);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id; // Get the ID of the new order

    // Now insert cart items into order_details
    if (!empty($_SESSION['cart'])) {
        $insertDetail = "INSERT INTO order_details (order_id, product_id ,product_name, quantity, price,subtotal ) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtDetail = $con->prepare($insertDetail);

        foreach ($_SESSION['cart'] as $item) {
            $stmtDetail->bind_param(
                "iisiii",
                $order_id,
                $item['product_id'],
                $item['product_name'],


                $item['quantity'],

                $item['price'],
                $item['subtotal']
            );
            $stmtDetail->execute();
        }
        // echo $_SESSION['cart'];

        // Optional: clear cart after order
        $_SESSION['cart'] = [];
    }

} else {
    die("Order creation failed: " . $con->error);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .thank-you {
            font-size: 2.5rem;
            font-weight: bold;
            color: #28a745;
            text-align: center;
            margin-top: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .order-details {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .continue-btn {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="thank-you">
            🎉 Thank You for Your Order! 🎉
        </div>
        <div class="order-details mt-4">
            <h5 class="text-center mb-4">Order Details</h5>
            <table class="table table-bordered">
                <tr>
                    <th>Full Name</th>
                    <td><?= htmlspecialchars($orderData['full_name']); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($orderData['email']); ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?= htmlspecialchars($orderData['phone']); ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?= htmlspecialchars($orderData['address']); ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?= htmlspecialchars($orderData['city']); ?></td>
                </tr>
                <tr>
                    <th>State</th>
                    <td><?= htmlspecialchars($orderData['state']); ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?= htmlspecialchars($orderData['country']); ?></td>
                </tr>
                <tr>
                    <th>Pincode</th>
                    <td><?= htmlspecialchars($orderData['pincode']); ?></td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td><?= htmlspecialchars($orderData['payment_method']); ?></td>
                </tr>
            </table>
        </div>
        <div class="continue-btn">
            <a href="add-to-cart.php" class="btn btn-primary btn-lg">Continue Shopping</a>
        </div>
    </div>
</body>

</html>