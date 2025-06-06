<?php
// session_start();
include('../authentication.php');
include('../../config/dbcon.php');


// 15.A code for category
if (isset($_POST['category_save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $trending = $_POST['trending'] == true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';

    $category_query = "INSERT INTO categories (name,description,trending,status) VALUES ('$name','$description','$trending','$status')";
    $cate_query_run = mysqli_query($con, $category_query);
    if ($cate_query_run) {
        $_SESSION['status'] = "Category inserted successfully";
        header("Location:../dashboard/special-pages/item-category.php");
    } else {
        $_SESSION['status'] = "Category insertion failed.!";
        header("Location:../dashboard/special-pages/item-category.php");
    }

}

//15.C update category item
if (isset($_POST['category_update'])) {
    $cate_id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $trending = $_POST['trending'];
    $status = $_POST['status'];

    $query = "UPDATE categories SET name='$name', description='$description',trending='$trending',status='$status' WHERE id='$cate_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Category Updated successfully";
        header("Location:../dashboard/special-pages/item-category.php");
    } else {
        $_SESSION['status'] = "Category Updation failed.!";
        header("Location:../dashboard/special-pages/item-category.php");
    }
}


// 15.D Delete cate item data
if (isset($_POST['cate_id_delete'])) {
    $cate_id = $_POST['cate_id_delete'];
    // for hard delete
    // $query = "DELETE FROM categories WHERE id='$cate_id'";
    // for soft delete
    $query = "UPDATE categories SET is_deleted='1' WHERE id='$cate_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Category Delete successfully";
        header("Location:../dashboard/special-pages/item-category.php");
    } else {
        $_SESSION['status'] = "Category deletion failed.!";
        header("Location:../dashboard/special-pages/item-category.php");
    }
}

// 16. delete product data
if (isset($_POST['delete_item_id'])) {
    $product_id = $_POST['delete_item_id'];
    // for hard delete
    // $query = "DELETE FROM products WHERE id='$product_id'";
    // for soft delete
    $query = "UPDATE products SET is_deleted='1' WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Product Deleted successfully";
        header("Location:../dashboard/special-pages/items.php");
    } else {
        $_SESSION['status'] = "Product deletion failed.!";
        header("Location:../dashboard/special-pages/items.php");
    }
}

// 17 . inset product data and upload image
if (isset($_POST['product_save'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $small_description = $_POST['small_description'];
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];
    $tax = $_POST['tax'];
    $quantity = $_POST['quantity'];
    $image = $_FILES['image']['name'];
    $status = $_POST['status'] == true ? '1' : '0';

    $allowed_extensions = array('png', 'jpg', 'jpeg');
    $file_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $file_extension;

    if (!in_array($file_extension, $allowed_extensions)) {
        $_SESSION['status'] = "You are allowed with only jpg, png, jpeg Images";
        header("Location:../dashboard/special-pages/items-add.php");
        exit(0);
    } else {
        $query = "INSERT INTO products(category_id,name,small_description,long_description,price,discount_price,tax,quantity,image,status) VALUES('$category_id','$name','$small_description','$long_description','$price','$discount_price','$tax','$quantity','$filename','$status')";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/product/' . $filename);
            $_SESSION['status'] = "Product added Successfully";
            header("Location:../dashboard/special-pages/items.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong";
            header("Location:../dashboard/special-pages/items.php");
            exit(0);
        }
    }
}



//18. update product data and upload image
if (isset($_POST['product_update'])) {
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
            $_SESSION['status'] = "You are allowed with only jpg, png, jpeg Images";
            header("Location:../dashboard/special-pages/edit-item.php?prod_id=" . $product_id);
            exit(0);
        }
        $update_filename = $filename;
    } else {
        $update_filename = $old_image;
    }

    $query = "UPDATE products SET category_id='$category_id',name='$name',small_description='$small_description',long_description='$long_description',price='$price',discount_price='$discount_price',tax='$tax',quantity='$quantity',image='$update_filename',status='$status' WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        if ($image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/product/' . $filename);
            if (file_exists('../uploads/product/' . $old_image)) {
                unlink('../uploads/product/' . $old_image);
            }
        }
        $_SESSION['status'] = "Product Updated Successfully";
        // header('Location:product-edit.php?prod_id=' . $product_id);
        header("Location:../dashboard/special-pages/edit-item.php?prod_id=" . $product_id);
        // exit(0);
    } else {
        $_SESSION['status'] = "Product not updated";
        header("Location:../dashboard/special-pages/edit-item.php?prod_id=" . $product_id);
        // exit(0);
    }
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

    // $image = $_FILES['image']['name'];

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

    // 2 some changes in update to insert in code 
    // $query = "INSERT INTO cart_products(product_id) VALUES ('$product_id')";



    // $query2 = "UPDATE products SET category_id='$category_id',name='$name',small_description='$small_description',long_description='$long_description',price='$price',discount_price='$discount_price',tax='$tax',quantity='$quantity',image='$old_image',status='$status' WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        // if ($image != '') {
        //     move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/' . $filename);
        //     if (file_exists('uploads/product/' . $old_image)) {
        //         unlink('uploads/product/' . $old_image);
        //     }
        // }
        $_SESSION['status'] = "Product added to the Cart. ";



        // header('Location:product-edit.php?prod_id=' . $product_id);
        // header("Location:product-edit.php?prod_id=".$product_id);
        header("Location:../dashboard/special-pages/add-to-cart.php");
        // exit(0);
    } else {
        $_SESSION['status'] = "Product not Added to the Cart";
        // header("Location:product-edit.php?prod_id=".$product_id);
        header("Location:../dashboard/special-pages/add-to-cart.php");
        // exit(0);
    }
}

// 20. Delete cart item
if (isset($_POST['cart_item_id'])) {
    $product_id = $_POST['cart_item_id'];

    // for hard delete
    // $query = "DELETE FROM products WHERE id='$product_id'";
    // for soft delete
    // item also removed from cart

    $query = "UPDATE cart_products SET is_deleted='1' WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Item removed from cart successfully.";
        header("Location:../dashboard/special-pages/cart.php");
    } else {
        $_SESSION['status'] = "Something went wrong.!";
        header("Location:../dashboard/special-pages/cart.php");
    }
}


// 21. Delete cart item from session
if (isset($_POST['delete_cart_item'])) {
    $product_id = $_POST['delete_cart_item'];
    // for hard delete
    // $query = "DELETE FROM products WHERE id='$product_id'";
    // for soft delete
    // item also removed from cart
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
        $_SESSION['status'] = "Item removed from cart successfully.";
    } else {
        $_SESSION['status'] = "No items found in cart.";
    }

    header("Location:../dashboard/special-pages/cart.php");
    exit();
}


// Delete all cart items
if (isset($_POST['delete_all'])) {
    $delete_all = $_POST['delete_all'];

    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
    // if ($delete_all) 
    $query = "SELECT * FROM cart_products WHERE is_deleted='0'";
    $query_run = mysqli_query($con, $query);
    if (mysqli_num_rows($query_run)) {
        foreach ($query_run as $cartitem) {
            $query = "UPDATE cart_products set is_deleted='1' WHERE is_deleted='0'";
            $query_run = mysqli_query($con, $query);

        }
    }
    $_SESSION['status'] = "All items removed from cart successfully.";
    header("Location:../dashboard/special-pages/cart.php");
    // }

}


// Remove cart item from session
if (isset($_POST['delete_all_cart_item'])) {
    if (isset($_POST['delete_all_cart_item'])) {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
            $_SESSION['status'] = "All items removed from cart successfully.";
        } else {
            $_SESSION['status'] = "No items found in cart.";
        }

        header("Location:../dashboard/special-pages/cart.php");
        exit();
    }
}


// Update cart quantity in DB
if (isset($_POST['update_cart_quantity'])) {
    $product_id = $_POST['update_cart_id'];
    $cart_item_quantity = $_POST['cart_item_quantity'];
    // for hard delete
    // $query = "DELETE FROM products WHERE id='$product_id'";
    // for soft delete
    $query = "UPDATE cart_products SET quantity='$cart_item_quantity' WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Quantity updated";
        header("Location:../dashboard/special-pages/cart.php");
    } else {
        $_SESSION['status'] = "Something went wrong.!";
        header("Location:../dashboard/special-pages/cart.php");
    }
}


// 13. code for logout
if (isset($_POST['logout_btn'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['status'] = "Loged out successfully";
    header("Location:../dashboard/auth/sign-in.php");
    exit(0);
}


// for live cheking of email existance
if (isset($_POST['check_Emailbtn'])) {
    $email = $_POST['email'];
    $checkmail = "SELECT email FROM users WHERE email='$email'";
    $query_run = mysqli_query($con, $checkmail);
    if (mysqli_num_rows($query_run) > 0) {
        echo "Email id is already taken.!";
    } else {
        echo "Email id is availble";

    }
}

// Add user information in database
if (isset($_POST['addUser'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);

    // Validate Name
    if (empty($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $_SESSION['status'] = "Invalid name. Only alphabets are allowed.";
        header("Location:../dashboard/app/user-add.php");
        exit();
    }

    // Validate Phone
    if (empty($phone) || !preg_match("/^\d{10}$/", $phone)) {
        $_SESSION['status'] = "Invalid phone number must be 10 digits.";
        header("Location:../dashboard/app/user-add.php");
        exit();
    }

    // validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email format";
        header("Location:../dashboard/app/user-add.php");
        exit();
    }

    // checking email validation
    $checkmail = "SELECT email FROM users WHERE email='$email'";
    $query_run = mysqli_query($con, $checkmail);
    if (mysqli_num_rows($query_run) > 0) {
        // Taken already
        $_SESSION['status'] = "Email already exists.!";
        header("Location: ../dashboard/app/user-add.php");
        exit;
    }

    // Validate Password
    if (strlen($password) < 8) {
        $_SESSION['status'] = "Password must be at least 8 characters long.";
        header("Location:../dashboard/app/user-add.php");
        exit();
    }
    if ($password !== $confirmpassword) {
        $_SESSION['status'] = "Password do no match.";
        header("Location:../dashboard/app/user-add.php");
        exit();
    }

    // Hash Password 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // insert user into database
    $query = "INSERT INTO users (name,phone,email,password,role,is_deleted) VALUES ('$name','$phone','$email','$hashedPassword','user','0')";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "User added successfully.";
    } else {
        $_SESSION['status'] = "Failed to add user";
    }
    header("Location:../dashboard/app/user-list.php");
    //  checking password confirmation
    // if ($password == $confirmpassword) {

    //     // checking email validation
    //     $checkmail = "SELECT email FROM users WHERE email='$email'";
    //     $query_run = mysqli_query($con, $checkmail);
    //     if (mysqli_num_rows($query_run) > 0) {
    //         // Taken already
    //         $_SESSION['status'] = "Email already exists.!";
    //         header("Location: registered.php");
    //         exit;
    //     } else {
    //         // Availble
    //         $user_query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";

    //         $user_query_run = mysqli_query($con, $user_query);

    //         if ($user_query_run) {
    //             $_SESSION['status'] = "User Added Successfully";
    //             header("Location: registered.php");
    //         } else {
    //             $_SESSION['status'] = "User Registration failed!!";
    //             // mysqli_error($con);
    //             header("Location: registered.php");
    //         }
    //     }


    // } else {
    //     $_SESSION['status'] = "Password and Confirm Password does not match.!";
    //     header("Location: registered.php");
    // }

}

// update user
if (isset($_POST['UpdateUser'])) {
    $user_id = $_POST['user_id'];
    $profile_pic = $_POST['profile_pic'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
    $update_profile_pic = $profile_pic;

    // Check if a new file is uploaded
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['name'] != '') {
        $image = $_FILES['profile_pic']['name'];
        $file_extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $filename = time() . '_' . uniqid() . '.' . $file_extension;

        // Validate extension
        if (!in_array($file_extension, $allowed_extensions)) {
            $_SESSION['status'] = "Only jpg, jpeg, png, gif images are allowed.";
            header("Location:../dashboard/app/user-edit.php?user_id=" . $user_id);
            exit();
        }

        // Validate file size (max 2MB)
        if ($_FILES['profile_pic']['size'] > 2 * 1024 * 1024) {
            $_SESSION['status'] = "Image size should not exceed 2MB.";
            header("Location:../dashboard/app/user-edit.php?user_id=" . $user_id);
            exit();
        }

        // Validate image type
        $image_info = getimagesize($_FILES['profile_pic']['tmp_name']);
        if ($image_info === false) {
            $_SESSION['status'] = "Uploaded file is not a valid image.";
            header("Location:../dashboard/app/user-edit.php?user_id=" . $user_id);
            exit();
        }

        // Move file to uploads directory
        $upload_path = '../uploads/profile/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);
        }
        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_path . $filename)) {
            $update_profile_pic = $filename;
            // Optionally delete old image if exists and not default
            if (!empty($profile_pic) && file_exists($upload_path . $profile_pic)) {
                unlink($upload_path . $profile_pic);
            }
        } else {
            $_SESSION['status'] = "Failed to upload image.";
            header("Location:../dashboard/app/user-edit.php?user_id=" . $user_id);
            exit();
        }
    } else {
        $update_profile_pic = $profile_pic;
    }

    // Sanitize other fields if needed
    $name = mysqli_real_escape_string($con, $name);
    $phone = mysqli_real_escape_string($con, $phone);
    $email = mysqli_real_escape_string($con, $email);
    $role = mysqli_real_escape_string($con, $role);

    // If password is not empty, hash it
    if (!empty($password)) {
        if (strlen($password) < 8) {
            $_SESSION['status'] = "Password must be at least 8 characters long.";
            header("Location:../dashboard/app/user-edit.php?user_id=" . $user_id);
            exit();
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
    } else {
        // Keep old password if not changed
        $get_user = mysqli_query($con, "SELECT password FROM users WHERE id='$user_id' LIMIT 1");
        $row = mysqli_fetch_assoc($get_user);
        $password = $row['password'];
    }

    $profile_pic = $update_profile_pic;
    $query = "UPDATE users SET profile_pic='$profile_pic', name='$name', phone='$phone', email='$email', password='$password', role='$role' WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "User Updated Successfully";
        header("Location:../dashboard/app/user-list.php");
    } else {
        $_SESSION['status'] = "User Updation failed";
        header("Location:../dashboard/app/user-list.php");
    }

}



// Delete User
if (isset($_POST['DeleteUserbtn'])) {
    $userid = $_POST['delete_id'];

    // for hard delete
    // $query = "DELETE FROM users WHERE id='$userid'";

    // for soft delete
    $query = "UPDATE users SET is_deleted='1' WHERE id='$userid'";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "User Deleted Successfully";
        header("Location: ../dashboard/app/user-list.php");
    } else {
        $_SESSION['status'] = "User Deleting failed.!";
        header("Location: ../dashboard/app/user-list.php");
    }
}



// add restaurant video
if (isset($_POST['set_video'])) {
    $video_source = $_POST['video_source'];
    // Validate the video source URL
    $query = "SELECT * FROM customization WHERE show_video=1";
    $query_run = mysqli_query($con, $query);
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
        if ($row && $row['source'] == $video_source) {
            $_SESSION['status'] = "video source already exists";
            header("Location:../dashboard/customize/restaurant_video.php");
            exit();
        }
        // update table
        $query2 = "UPDATE customization SET show_video='0' WHERE show_video='1'";
        $query2_run = mysqli_query($con, $query2);
        if ($query2_run) {

        } else {
            $_SESSION['status'] = "Not updated.!";
        }
    } else {
        $_SESSION['status'] = "No video exists.!";
    }

    $video_query = "INSERT INTO customization (source, show_video) VALUES ('$video_source', '1')";
    $video_query_run = mysqli_query($con, $video_query);
    $_SESSION['status'] = $video_query_run ? "Video Added" : "Something went wrong";
    header("Location:../dashboard/customize/restaurant_video.php");
}

?>