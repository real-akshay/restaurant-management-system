<?php
include('../../authentication.php');
include('../../config/dbcon.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['auth_user']['user_id'])) {
    header("Location: ../../login.php");
    exit();
}

// 19 Add to cart
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

    // remove/comment image update part
    if ($image != '') {
        $update_filename = $_FILES['image']['name'];
        $allowed_extensions = array('png', 'jpg', 'jpeg');
        $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
        $filename = time() . '.' . $file_extension;

        if (!in_array($file_extension, $allowed_extensions)) {
            $_SESSION['status'] = "You are allowed with only jpg, png, jpeg Images";
            header("Location:product-edit.php?prod_id=" . $product_id);
            exit(0);
        }
        $update_filename = $filename;
    } else {
        $update_filename = $old_image;
    }

    // some changes in update to insert in code 
    $query = "INSERT INTO cart_products(for_user,product_id,category_id,name,small_description,long_description,price,discount_price,tax,quantity,image) VALUES ('$for_user','$product_id','$category_id','$name','$small_description','$long_description','$price','$discount_price','$tax','$quantity','$update_filename')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Product added to the Cart. ";
        header("Location:../restaurant/product/index.php?id=$product_id");
        // exit(0);
    } else {
        $_SESSION['status'] = "Product not Added to the Cart";
        // header("Location:product-edit.php?prod_id=".$product_id);
        header("Location:../restaurant/product/index.php?id=$product_id");
        // exit(0);
    }
}


// 20. Delete cart item
if (isset($_POST['delete_cart_item'])) {
    $product_id = $_POST['delete_cart_item'];

    // for hard delete
    // $query = "DELETE FROM products WHERE id='$product_id'";
    // for soft delete
    // item also removed from cart

    $query = "UPDATE cart_products SET is_deleted='1' WHERE product_id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
        // $_SESSION['status'] = "Item removed from cart successfully.";
    }
    //  else {
    //     $_SESSION['status'] = "No items found in cart.";
    // }

    if ($query_run) {
        $_SESSION['status'] = "Item removed from cart successfully.";
    } else {
        $_SESSION['status'] = "Something went wrong.!";

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
        $_SESSION['status'] = "Quantity updated";
    } else {
        $_SESSION['status'] = "Something went wrong.!";
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
        die("Prepare failed: " . $con->error);
    }
    $restaurant_id = $restaurant; // $restaurant is from POST
    $date = $booking_date;
    $time = $booking_time;

    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }
    $stmt->bind_param("iss", $restaurant_id, $date, $time);
    $stmt->execute();
    $stmt->bind_result($table_id);
    $stmt->fetch();
    $stmt->close();

    if ($table_id) {

        $query = "INSERT INTO bookings (user_id, table_id, user_name, email, phone, preferred_dish, special_request, restaurant, guest, date, time) VALUES ('$user_id', '$table_id', '$name', '$email', '$phone', '$dish', '$special_request',' $restaurant', '$number_of_guests', '$booking_date', '$booking_time')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = "Booking confirmed successfully.";
        } else {
            $_SESSION['status'] = "No table available for selected time.";
        }
    }
    header("Location:../restaurant/book-a-table/index.php");
}

?>