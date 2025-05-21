<?php
session_start();

// Already user logged in ho to index par redirect
if (isset($_SESSION['auth']) && $_SESSION['auth'] == 'user') {
    header("Location: ../index.php");
    exit();
}

// Agar admin logged in hai to bhi user login form show mat karo (ya warning do)
// if (isset($_SESSION['auth']) && $_SESSION['auth'] == 'admin') {
//     $_SESSION['status'] = "Admin is already logged in. You can't login as user.";
    // Don't redirect if you want to show warning on same page
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Restaurant</title>
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="wp-includes\css\dist\block-library\style.min109c.css">
    <!-- Assuming you have this from your theme -->
    <style>
        body {
            background: url('login.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }

        .login-box {
            position: relative;
            max-width: 400px;
            height: 300px;
            margin: 100px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ff4d00;
        }

        .btn-primary {
            background-color: #ff4d00;
            border-color: #ff4d00;
        }

        .btn-primary:hover {
            background-color: #e04300;
            border-color: #e04300;

        }

        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
        }

        .d-grid {
            margin: 0px 45%;

        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['auth_status'])) { ?>
            <div class="toast-container position-absolute top-0 start-50 translate-middle-x p-3" style="z-index: 2100;">
                <div class="toast show align-items-center text-white bg-success border-0 shadow" role="alert"
                    aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="1000">
                    <div class="d-flex">
                        <div class="toast-body fw-semibold">
                            <strong>Hey! </strong> <?php echo $_SESSION['auth_status'] ?>
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <?php
            unset($_SESSION['auth_status']);
        }
        ?>
        <?php include('../../message.php'); ?>
        <div class="login-box">
            <h3 class="text-center mb-4">User Login</h3>
            <form action="logincode.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div><br>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div><br>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div><br>
                <div class="d-grid">
                    <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                </div><br>
                <div class="login-options mt-3">
                    <a href="forgot-password.php">Forgot Password?</a>
                    <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>