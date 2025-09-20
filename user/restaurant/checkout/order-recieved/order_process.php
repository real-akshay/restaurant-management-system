<?php
include('../../../authentication.php');
include('../../../../config/dbcon.php');

// Email setup
require '../../../../config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../../PHPMailer/PHPMailer.php';
require '../../../../PHPMailer/SMTP.php';
require '../../../../PHPMailer/Exception.php';

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
        'user_id' => $_SESSION['user_session']['user_id'] ?? null,
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

// ...existing code...
    if ($stmt->execute()) {
        $order_id = $stmt->insert_id; // Get the ID of the new order

        // Fetch order details for email variables
        $orderMaster = $con->query("SELECT * FROM order_master WHERE id='$order_id'")->fetch_assoc();
        $order_date = $orderMaster['order_date'];
        $payment_method = $orderMaster['payment_method'];
        $order_status = $orderMaster['order_status'];
        $total_amount = $orderMaster['total_amount'];
        $name = $orderMaster['full_name'];
        $email = $orderMaster['email'];
        $phone = $orderMaster['phone'];
        $address = $orderMaster['address'];
        $city = $orderMaster['city'];
        $state = $orderMaster['state'];
        $country = $orderMaster['country'];
        $pincode = $orderMaster['pincode'];
        $username = $name; // For email recipient name

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

        $_SESSION['status'] = [
            'type' => 'success', // ya 'error', 'info', 'warning'
            'message' => 'Order placed successfully. Your order ID is ' . $order_id
        ];

        // add new feature to send order details to user's email address
        // now send email to the user
        $mail = new PHPMailer(true);

        try {
            // server setting
            $mail->isSMTP();
            $mail->Host = $smtp_host;
            $mail->SMTPAuth = true;
            $mail->Username = $smtp_user;
            $mail->Password = $smtp_pass;
            $mail->SMTPSecure = 'tls';
            $mail->Port = $smtp_port;

            // Sender and Reciever 
            $mail->setFrom($smtp_user, 'Akshay\'s Restaurant');
            $mail->addAddress($email, $username);

            //content
            $mail->isHTML(true);
            $mail->Subject = 'Order Confirmation - Order #' . $order_id;
            // Build the email body as an HTML receipt
            $mail->Body = '
                <div style="background: #fffbe6; padding: 30px 0;">
                    <div style="max-width: 420px; margin: 0 auto; background: #fff; border-radius: 18px; box-shadow: 0 8px 32px rgba(192,165,138,0.18); padding: 36px 28px 28px 28px; font-family: Quicksand, Arial, sans-serif; border: 2px solid #f3e9d2;">
                        <div style="text-align: center; margin-bottom: 18px;">
                            <img src="https://www.nicdark-themes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/logo.png" alt="Restaurant Logo" style="width: 70px; margin-bottom: 6px;">
                            <h1 style="font-size: 2.1rem; color: #c0a58a; margin: 0 0 2px 0; letter-spacing: 2px; font-weight: 700;">Akshay\'s Restaurant</h1>
                            <div style="color: #8a7c6e; font-size: 14px; margin-bottom: 2px;">123 Main Street, City, Country</div>
                            <div style="color: #bfa77a; font-size: 13px; margin-bottom: 0;">+91 12345 67890 &nbsp;|&nbsp; info@restaurant.com</div>
                        </div>
                        <hr style="border-top: 2px dashed #e7d7b9; margin: 18px 0;">
                        <div style="margin-bottom: 12px; font-size: 15px; color: #5a4a36;">
                            <div><span style="min-width: 110px; color: #bfa77a; font-weight: 500;">Order No:</span> <strong>' . $order_id . '</strong></div>
                            <div><span style="min-width: 110px; color: #bfa77a; font-weight: 500;">Date:</span> <strong>' . date('F j, Y', strtotime($order_date)) . '</strong></div>
                            <div><span style="min-width: 110px; color: #bfa77a; font-weight: 500;">Payment:</span> <strong>' . htmlspecialchars($payment_method) . '</strong></div>
                            <div><span style="min-width: 110px; color: #bfa77a; font-weight: 500;">Status:</span> <strong>' . ucfirst(htmlspecialchars($order_status)) . '</strong></div>
                        </div>
                        <table style="width: 100%; border-collapse: collapse; margin-bottom: 14px; font-size: 15px;">
                            <thead>
                                <tr>
                                    <th style="background: #fffbe6; color: #c0a58a; font-weight: 700; font-size: 15px; border-bottom: 1px solid #f3e9d2; padding: 8px 0; text-align:left;">Product</th>
                                    <th style="background: #fffbe6; color: #c0a58a; font-weight: 700; font-size: 15px; border-bottom: 1px solid #f3e9d2; padding: 8px 0; text-align:center;">Qty</th>
                                    <th style="background: #fffbe6; color: #c0a58a; font-weight: 700; font-size: 15px; border-bottom: 1px solid #f3e9d2; padding: 8px 0; text-align:right;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>';
            // Fetch order details for the email
            $orderDetailsQuery = $con->query("SELECT * FROM order_details WHERE order_id='$order_id'");
            if ($orderDetailsQuery) {
                while ($product_detail = $orderDetailsQuery->fetch_assoc()) {
                    $mail->Body .= '
                        <tr>
                            <td style="border-bottom: 1px solid #f3e9d2; padding: 8px 0;">' . htmlspecialchars($product_detail['product_name']) . '</td>
                            <td style="border-bottom: 1px solid #f3e9d2; padding: 8px 0; text-align:center;">' . $product_detail['quantity'] . '</td>
                            <td style="border-bottom: 1px solid #f3e9d2; padding: 8px 0; text-align:right;">&#8377;' . $product_detail['subtotal'] . '</td>
                        </tr>';
                }
            }
            $mail->Body .= '
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" style="font-weight:bold; color:#c0a58a; background:#fffbe6;">Subtotal</td>
                                    <td style="font-weight:bold; color:#c0a58a; background:#fffbe6; text-align:right;">&#8377;' . $total_amount . '</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-weight:bold; color:#c0a58a; background:#fffbe6;">Shipping</td>
                                    <td style="font-weight:bold; color:#c0a58a; background:#fffbe6; text-align:right;">&#8377;50.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-weight:bold; color:#c0a58a; background:#fffbe6;">Total</td>
                                    <td style="font-weight:bold; color:#c0a58a; background:#fffbe6; text-align:right;">&#8377;' . ($total_amount + 50) . '</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div style="background: #fffbe6; border-radius: 8px; padding: 10px 16px; font-size: 14px; color: #5a4a36; margin-bottom: 10px;">
                            <div><strong>Customer:</strong> ' . htmlspecialchars($name) . '</div>
                            <div><strong>Phone:</strong> ' . htmlspecialchars($phone) . '</div>
                            <div><strong>Email:</strong> ' . htmlspecialchars($email) . '</div>
                            <div><strong>Billing Address:</strong> ' . htmlspecialchars($address) . ', ' . htmlspecialchars($city) . ', ' . htmlspecialchars($state) . ', ' . htmlspecialchars($country) . ' - ' . htmlspecialchars($pincode) . '</div>
                        </div>
                        <div style="text-align: center; color: #bfa77a; margin-top: 18px; font-size: 17px; font-weight: 600; letter-spacing: 1px;">
                            Thank you for your order!<br>
                            <span style="font-size:14px; color:#a67c00;">We hope you enjoy your meal.</span>
                        </div>
                        <div style="background: #f9e7b7; border-radius: 8px; padding: 10px 14px; text-align: center; color: #a67c00; font-size: 15px; margin: 18px 0 0 0; border: 1px dashed #c0a58a; font-weight: 600; letter-spacing: 1px;">
                            🎁 Use code <b>WELCOME10</b> for 10% OFF on your next order!
                        </div>
                        <div style="text-align: center; margin-top: 18px;">
                            <div style="font-size:13px; color:#bfa77a; margin-bottom:2px;">Scan for feedback or offers</div>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=70x70&data=https://restaurant.com/feedback" alt="Feedback QR" style="width: 70px; opacity: 0.8;">
                        </div>
                        <div style="text-align: right; margin-top: 22px; color: #c0a58a; font-family: Kristi, cursive; font-size: 1.5rem; opacity: 0.7;">
                            <span>Akshay</span>
                        </div>
                    </div>
                </div>
            ';

            $mail->AltBody = "Hi $name,\n\nThank you for your order! Your order #$order_id has been received.\n\nTotal: ₹$total_amount\n\nWe look forward to serving you.\n\nAkshay's Restaurant";

            // Send the email
            $mail->send();
        } catch (Exception $e) {
            // optional: $_SESSION['email_status'] = "Email failed: {$mail->ErrorInfo}";
        }

        // Redirect to the order confirmation page
        header("Location:success.php?order_id=$order_id");
        exit();
//
    } else {
        $_SESSION['status'] = [
            'type' => 'error', // ya 'error', 'info', 'warning'
            'message' => 'Error inserting order'
        ];
        echo "Error inserting order: " . $stmt->error;
    }
}
