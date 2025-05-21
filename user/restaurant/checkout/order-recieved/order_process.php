<?php
include('../../../authentication.php');
include('../../../../config/dbcon.php');

if (isset($_POST['checkout_place_order'])) {
    // $billing_first_name = $_POST['billing_first_name'];
    // $billing_last_name = $_POST['billing_last_name'];
    // $billing_company = $_POST['billing_company'];
    // $billing_country = $_POST['billing_country'];
    // $billing_address_1 = $_POST['billing_address_1'];
    // $billing_address_2 = $_POST['billing_address_2'];
    // $billing_city = $_POST['billing_city'];
    // $billing_state = $_POST['billing_state'];
    // $billing_postcode = $_POST['billing_postcode'];
    // $billing_phone = $_POST['billing_phone'];
    // $billing_email = $_POST['billing_email'];

    $orderData = [
        'user_id' => $_SESSION['auth_user']['user_id'] ?? null,
        'billing_first_name' => $_POST['billing_first_name'] ?? '',
        'billing_last_name' => $_POST['billing_last_name'] ?? '',
        'billing_company' => $_POST['billing_company'] ?? '',
        'billing_country' => $_POST['billing_country'] ?? '',
        'billing_address_1' => $_POST['billing_address_1'] ?? '',
        'billing_address_2' => $_POST['billing_address_2'] ?? '',
        'billing_city' => $_POST['billing_city'] ?? '',
        'billing_state' => $_POST['billing_state'] ?? '',
        'billing_postcode' => $_POST['billing_postcode'] ?? '',
        'billing_phone' => $_POST['billing_phone'] ?? '',
        'billing_email' => $_POST['billing_email'] ?? '',
        'order_comment' => $_POST['order_comments'] ?? '',
        'product_name' => $_POST['product_name'] ?? '',
        'product_quantity' => $_POST['product_quantity'] ?? '',
        'subtotal_amount' => $_POST['subtotal_amount'] ?? '',
        'items_subtotal_amount' => $_POST['items_subtotal_amount'] ?? '',
        'shipping_method' => $_POST['shipping_method'] ?? '',
        'total_amount' => $_POST['total_amount'] ?? '',
        'payment_method' => $_POST['payment_method'] ?? '',

    ];


    // shitp to different address
    // $ship_to_different_address = $_POST['ship_to_different_address'];
    // $shipping_first_name = $_POST['shipping_first_name'];
    // $shipping_last_name = $_POST['shipping_last_name'];
    // $shipping_company = $_POST['shipping_company'];
    // $shipping_country = $_POST['shipping_country'];
    // $shipping_address_1 = $_POST['shipping_address_1'];
    // $shipping_address_2 = $_POST['shipping_address_2'];
    // $shipping_city = $_POST['shipping_city'];
    // $shipping_state = $_POST['shipping_state'];
    // $shipping_postcode = $_POST['shipping_postcode'];

    // $order_comments = $_POST['order_comments'];

    // foreach
    // $product_name = $_POST['product_name'];
    // $product_quantity = $_POST['product_quantity'];
    // $subtotal_amount = $_POST['subtotal_amount'];


    // $items_subtotal_amount = $_POST['items_subtotal_amount'];
    // $shipping_method = $_POST['shipping_method'];
    // $total_amount = $_POST['total_amount'];


    // $payment_method = $_POST['payment_method'];


    // Ensure total_amount and order_status are set in the session
    // if (!isset($_SESSION['total_amount']) || !isset($_SESSION['order_status'])) {
    //     die("Error: Total amount or order status is not set in the session.");
    // }

    // Step 1: Insert into order_master
    $insertOrder = "INSERT INTO order_master 
    (user_id,full_name, email, phone, address, city, state, country, pincode, payment_method, total_amount, order_status, order_date)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $con->prepare($insertOrder);
    $stmt->bind_param(
        "isssssssssds",
        $orderData['user_id'],
        $orderData['billing_first_name'],
        $orderData['billing_email'],
        $orderData['billing_phone'],
        $orderData['billing_address_1'],
        $orderData['billing_city'],
        $orderData['billing_state'],
        $orderData['billing_country'],
        $orderData['billing_postcode'],
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
                // Execute the statement for each item
                if (!$stmtDetail->execute()) {
                    echo "Error inserting order details: " . $stmtDetail->error;
                }
            }
            // Clear the cart after successful order placement
            // unset($_SESSION['cart']);
            $_SESSION['cart'] = [];
        } else {
            echo "Cart is empty.";
        }

        // Redirect to the order confirmation page
        header("Location:success.php?order_id=$order_id");
        exit();
    } else {
        echo "Error inserting order: " . $stmt->error;
    }

}

?>