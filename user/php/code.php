<?php
include('../authentication.php');
include('../../config/dbcon.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Email setup
require '../../config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';
require '../../PHPMailer/Exception.php';

if (isset($_POST['add-to-cart'])) {
    $for_user = $_POST['for_user'];
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $small_description = $_POST['small_description'];
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $tax = $_POST['tax'];
    $quantity = $_POST['quantity'];

    $image = $_FILES['image']['name'];

    $old_image = $_POST['old_image'];
    $status = $_POST['status'] == true ? '1' : '0';

    if ($image != '') {
        $update_filename = $_FILES['image']['name'];
        $allowed_extensions = array('png', 'jpg', 'jpeg');
        $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
        $filename = time() . '.' . $file_extension;

        if (!in_array($file_extension, $allowed_extensions)) {
            $_SESSION['status'] = [
                'type' => 'warning',
                'message' => 'You are allowed with only jpg, png, jpeg Images'
            ];
            header("Location:product-edit.php?prod_id=" . $product_id);
            exit(0);
        }
        $update_filename = $filename;
    } else {
        $update_filename = $old_image;
    }

    // Check if product already in cart for this user
    $query_check = "SELECT * FROM cart_products WHERE name='$name' AND product_id='$product_id' AND is_deleted='0'";
    // Check if the product is already in the cart for the user
    $query_check_run = mysqli_query($con, $query_check);

    if ($query_check_run && mysqli_num_rows($query_check_run) > 0) {
        // Product already in cart, update quantity
        $cartitem = mysqli_fetch_assoc($query_check_run);
        $new_quantity = $cartitem['quantity'] + $quantity;
        $query = "UPDATE cart_products SET quantity='$new_quantity', subtotal_amount='$price * $quantity' WHERE name='$name' AND product_id='$product_id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = [
                'type' => 'warning',
                'message' => 'Quantity updated.'
            ];
        } else {
            $_SESSION['status'] = [
                'type' => 'error',
                'message' => "Quantity Not Updated!"
            ];
        }
    } else {
        // Product not in cart, insert new
        $query = "INSERT INTO cart_products(for_user,product_id,category_id,name,small_description,long_description,price,discount_price,tax,quantity,subtotal_amount,image) VALUES ('$for_user','$product_id','$category_id','$name','$small_description','$long_description','$price','$discount_price','$tax','$quantity','$price * $quantity','$update_filename')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = [
                'type' => 'success',
                'message' => "Product added to the Cart."
            ];
        } else {
            $_SESSION['status'] = [
                'type' => 'error',
                'message' => "Product not Added to the Cart"
            ];
        }
    }
    header("Location:../restaurant/product/index.php?id=$product_id");
    exit();
}




// 20. Delete cart item
if (isset($_POST['delete_cart_item'])) {
    $product_id = $_POST['delete_cart_item'];

    $query = "UPDATE cart_products SET is_deleted='1' WHERE product_id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }

    if ($query_run) {
        $_SESSION['status'] = [
            'type' => 'success',
            'message' => 'Item removed from cart successfully.'
        ];
    } else {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'something went wrong.'
        ];

    }
    header("Location:../restaurant/cart/index.php");
}









// update cart item quantity
if (isset($_POST['update_cart'])) {
    $product_id = $_POST['cart_item_id'];
    $cart_item_quantity = $_POST['cart_item_quantity'];
    $item_price = $_POST['item_price'];
    // $subtotal_amount = $_POST['subtotal_amount'];

    foreach ($product_id as $index => $id) {
        $quantity = intval($cart_item_quantity[$index]);
        $price = intval($item_price[$index]);
        $subtotal_amount = $quantity * $price;
        // for hard delete
        // $query = "DELETE FROM products WHERE id='$product_id'";
        // for soft delete

        $query = "UPDATE cart_products SET quantity='$quantity', subtotal_amount='$subtotal_amount' WHERE id='$id'";
        $query_run = mysqli_query($con, $query);

    }
    if ($query_run) {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'Quantity updated.'
        ];
    } else {
        $_SESSION['status'] = [
            'type' => 'error',
            'message' => "Something went wrong.!"
        ];
    }
    header("Location:../restaurant/cart/index.php");
}






// booking confirmation
if (isset($_POST['confirm_btn'])) {
    // $booking_id = $_POST['booking_id'];
    $user_id = $_SESSION['auth_user']['user_id'];
    // $table_id = $_POST['table_id'];

    $restaurant = $_POST['nd_rst_restaurant'];
    $number_of_guests = $_POST['nd_rst_guests'];
    $booking_date = $_POST['nd_rst_date'];
    $occasion = $_POST['nd_rst_occasion'];
    $booking_time = $_POST['nd_rst_time'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dish = $_POST['dish'];
    $special_request = $_POST['special_request'];

    // 1. Find available table for this restaurant, date, time
    // Make sure to use the correct column names as per your bookings table schema
    // For example, if your columns are named 'date' and 'time', update accordingly:
    $sql = "SELECT t.table_id FROM restaurant_tables t
            WHERE t.restaurant_id = ? 
            AND t.table_id NOT IN (
                SELECT b.table_id FROM bookings b 
                WHERE b.date = ? AND b.time = ?
            )";
    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: {$con->error}");
    }
    $restaurant_id = $restaurant; // $restaurant is from POST
    $date = $booking_date;
    $time = $booking_time;

    $stmt->bind_param("iss", $restaurant_id, $date, $time);
    $stmt->execute();
    $stmt->bind_result($table_id);
    $stmt->fetch();
    $stmt->close();

    if ($table_id) {

        $query = "INSERT INTO bookings (user_id, table_id, user_name, email, phone, preferred_dish, special_request, restaurant, guest, date, time) VALUES ('$user_id', '$table_id', '$name', '$email', '$phone', '$dish', '$special_request',' $restaurant', '$number_of_guests', '$booking_date', '$booking_time')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = [
                'type' => 'success',
                'message' => 'Booking confirmed successfully.'
            ];

            // Now send confirmation email
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = $smtp_host;
                $mail->SMTPAuth = true;
                $mail->Username = $smtp_user;
                $mail->Password = $smtp_pass;
                $mail->SMTPSecure = 'tls';
                $mail->Port = $smtp_port;

                // Sender & Receiver
                $mail->setFrom($smtp_user, 'Akshay\'s Restaurant');
                $mail->addAddress($email, $name); // Client's email and name

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Booking Confirmation';
                $mail->Body = " <html>
                                <head>
                                <meta charset='UTF-8'>
                                <title>Booking Confirmation</title>
                                </head>
                                <body style='margin: 0; padding: 0; font-family: \"Segoe UI\", sans-serif; background-color: #f4f4f4;'>

                                <table role='presentation' cellpadding='0' cellspacing='0' width='100%' style='background-color: #f4f4f4; padding: 30px 0;'>
                                    <tr>
                                    <td align='center'>

                                        <table role='presentation' cellpadding='0' cellspacing='0' width='600' style='background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);'>
                                        <tr>
                                            <td style='background-color: #2c3e50; padding: 20px 30px; color: #fff; text-align: center;'>
                                            <h1 style='margin: 0; font-size: 24px;'>&#127860; Your Table is Booked!</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 30px;'>

                                            <p style='font-size: 18px;'>Hi <strong>$name</strong>,</p>

                                            <p style='font-size: 16px; color: #333;'>Thank you for booking a table with <strong>Akshay's restaurant</strong>! We're excited to host you. Here are your booking details:</p>

                                            <table cellpadding='10' cellspacing='0' width='100%' style='font-size: 15px; background-color: #f9f9f9; border-radius: 6px;'>
                                                <tr>
                                                <td><strong>&#128197; Date:</strong></td>
                                                <td>$booking_date</td>
                                                </tr>
                                                <tr>
                                                <td><strong>&#128337; Time:</strong></td>
                                                <td>$booking_time</td>
                                                </tr>
                                                <tr>
                                                <td><strong>&#128101; Guests:</strong></td>
                                                <td>$number_of_guests</td>
                                                </tr>
                                                <tr>
                                                <td><strong>&#127881; Occasion:</strong></td>
                                                <td>$occasion</td>
                                                </tr>
                                                <tr>
                                                <td><strong>&#127835; Preferred Dish:</strong></td>
                                                <td>$dish</td>
                                                </tr>
                                                <tr>
                                                <td><strong>&#9997;&#65039; Special Request:</strong></td>
                                                <td>$special_request</td>
                                                </tr>
                                            </table>

                                            <p style='margin-top: 25px; font-size: 16px;'>We look forward to serving you and making your time special with us.</p>

                                            <p style='font-size: 14px; color: #777; margin-top: 30px;'>
                                                Best regards,<br>
                                                <strong>Your Restaurant Team</strong><br>
                                                📞 +91-7803907422<br>
                                                📍 5W5R+64X, Malhotra Compound, South Civil Lines, Jabalpur, Madhya Pradesh 482001
                                            </p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='background-color: #ecf0f1; text-align: center; padding: 15px; font-size: 13px; color: #555;'>
                                            This is an automated message. Please do not reply.
                                            </td>
                                        </tr>
                                        </table>

                                    </td>
                                    </tr>
                                </table>

                                </body>
                                </html>";



                $mail->AltBody = "Hi $name,\n\nThank you for choosing Akshay's restaurant! Your table booking has been confirmed.\n\nBooking Details:\nDate: $booking_date\nTime: $booking_time\nGuests: $number_of_guests\nOccasion: $occasion\nPreferred Dish: $dish\nSpecial Request: $special_request\n\nWe look forward to serving you. If you have any questions, feel free to reply to this email.\n\nWarm regards,\nYour Restaurant Team";
                // Send the email

                $mail->send();
                // optional: $_SESSION['email_status'] = "Email sent successfully!";
            } catch (Exception $e) {
                // optional: $_SESSION['email_status'] = "Email failed: {$mail->ErrorInfo}";
            }
        } else {
            $_SESSION['status'] = [
                'type' => 'warning',
                'message' => 'No table availble for selected time.'
            ];
        }
    }
    header("Location:../restaurant/book-a-table/index.php?success=1");
}




// code for contact us 
if (isset($_POST['send_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_us (name, email, message) Values('$name','$email', '$message')";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'Thank you for contacting us. We will get back to you soon.'
        ];
    } else {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'Item no found.!'
        ];
    }
    header('Location: ../restaurant/contact-1/index.php');

}


?>