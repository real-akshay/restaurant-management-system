<?php
session_start();

// Already user logged in ho to index par redirect
// if (isset($_SESSION['auth_session']) && $_SESSION['auth_user'] == 'user') {
//     header("Location: ../index.php");
//     exit();
// }

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
    <title>Login | Restaurant Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Kristi:400|Montserrat:600,700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS (add this line) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Quicksand', 'Montserrat', sans-serif;

            /* background: linear-gradient(135deg, #fffbe9 0%, #f3c892 100%); */

            /* background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') center center/cover no-repeat fixed; */


            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80') center center/cover no-repeat fixed;
            /* filter: blur(0px); Optional: can add blur if needed */
            display: flex;
            align-items: center;
            justify-content: center;
        }




        body .glass-card {
            background: rgba(255, 255, 255, 0.22) !important;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-radius: 28px !important;
            border: 2px solid rgba(192, 165, 138, 0.28) !important;
            max-width: 390px !important;
            width: 100% !important;
            padding: 52px 38px 36px 38px !important;
            text-align: center !important;
            position: relative !important;
            z-index: 2 !important;
            transition: box-shadow 0.2s !important;
            box-sizing: content-box !important;

        }

        body .glass-card * {
            margin: 0 !important;
            padding: 0 !important;
            box-sizing: border-box !important;
        }

        body .glass-card:hover {
            box-shadow: 0 12px 40px 0 rgba(44, 44, 44, 0.22), 0 2px 8px 0 rgba(192, 165, 138, 0.16) !important;
        }

        body .glass-card .brand-logo {
            width: 92px !important;
            height: 92px !important;
            border-radius: 50% !important;
            margin-bottom: 18px !important;
            box-shadow: 0 4px 18px rgba(182, 101, 101, 0.22), 0 2px 12px rgba(192, 165, 138, 0.18) !important;
            background: linear-gradient(135deg, #fffbe9 60%, #f3c892 100%) !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
            border: 2.5px solid #b66565 !important;
            position: relative !important;
            overflow: hidden !important;
        }

        body .glass-card .brand-logo img {
            width: 64px !important;
            height: 64px !important;
            z-index: 2 !important;
            position: relative !important;
            filter: drop-shadow(0 2px 8px #b6656540) !important;
        }

        body .glass-card .brand-logo::after {
            content: "" !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            border-radius: 50% !important;
            background: radial-gradient(circle at 70% 30%, #fff6 0%, #fff0 70%) !important;
            z-index: 1 !important;
            pointer-events: none !important;
        }

        body .glass-card .login-title {
            font-family: 'Kristi', cursive !important;
            font-size: 50px !important;
            color: #b66565 !important;
            margin-bottom: 8px !important;
            letter-spacing: 2px !important;
            text-shadow: 0 2px 8px #f3c89244 !important;
        }

        body .glass-card .login-subtitle {
            font-size: 19px !important;
            color: #7a5c3e !important;
            margin-bottom: 30px !important;
            font-weight: 500 !important;
            letter-spacing: 1px !important;
        }

        body .glass-card .login-form input[type="email"],
        body .glass-card .login-form input[type="password"] {
            width: calc(100% - 4px) !important;
            padding: 15px 18px !important;
            margin-bottom: 20px !important;
            border: 1.5px solid #c0a58a !important;
            border-radius: 8px !important;
            background: rgba(255, 255, 255, 0.92) !important;
            font-size: 17px !important;
            color: #2d2d2d !important;
            font-family: 'Quicksand', sans-serif !important;
            transition: border-color 0.2s, box-shadow 0.2s !important;
            box-shadow: 0 1px 4px #c0a58a22 !important;
            box-sizing: border-box !important;
        }

        body .glass-card .login-form input[type="email"]:focus,
        body .glass-card .login-form input[type="password"]:focus {
            outline: none !important;
            border-color: #b66565 !important;
            box-shadow: 0 2px 8px #b6656522 !important;
        }

        body .glass-card .login-form button[type="submit"] {
            width: 100% !important;
            padding: 15px 0 !important;
            background: linear-gradient(90deg, #b66565 0%, #c0a58a 100%) !important;
            color: #fff !important;
            font-size: 19px !important;
            font-family: 'Montserrat', sans-serif !important;
            border: none !important;
            border-radius: 8px !important;
            letter-spacing: 2px !important;
            font-weight: 700 !important;
            cursor: pointer !important;
            box-shadow: 0 2px 8px #b6656522 !important;
            transition: background 0.2s, transform 0.1s !important;
        }

        body .glass-card .login-form button[type="submit"]:hover {
            background: linear-gradient(90deg, #c0a58a 0%, #b66565 100%) !important;
            transform: translateY(-2px) scale(1.03) !important;
        }

        body .glass-card .login-message {
            background: linear-gradient(90deg, #b66565 0%, #c0a58a 100%) !important;
            color: #7a5c3e !important;
            border-radius: 6px !important;
            padding: 12px 0 !important;
            margin-bottom: 20px !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            box-shadow: 0 1px 6px #b6656522 !important;
            margin-top: 30px !important;
            letter-spacing: 1px !important;
        }

        body .glass-card .login-footer {
            margin-top: 28px !important;
            font-size: 15px !important;
            color: #7a5c3e !important;
            letter-spacing: 1px !important;
            font-family: 'Quicksand', sans-serif !important;
            opacity: 0.85 !important;
        }

        body .glass-card {
            animation: fadeInUp 1.1s cubic-bezier(.23, 1.01, .32, 1) both !important;
        }

        @media (max-width: 500px) {
            body .glass-card {
                padding: 22px 6px 14px 6px !important;
            }

            body .glass-card .login-title {
                font-size: 32px !important;
            }
        }

        /* Decorative floating icons */
        body .floating-icon {
            position: absolute !important;
            opacity: 0.13 !important;
            z-index: 1 !important;
            pointer-events: none !important;
        }

        body .icon1 {
            top: 10% !important;
            left: 7% !important;
            width: 60px !important;
        }

        body .icon2 {
            bottom: 12% !important;
            right: 8% !important;
            width: 50px !important;
        }

        body .icon3 {
            top: 40% !important;
            right: 5% !important;
            width: 38px !important;
        }
    </style>
</head>

<body>
    <!-- Toast Message (Bootstrap 5) -->
    <?php include '../../message.php'; ?>

    <!-- Decorative floating icons -->
    <img src="https://img.icons8.com/ios-filled/100/ffffff/chef-hat.png" class="floating-icon icon1" alt="">
    <img src="https://img.icons8.com/ios-filled/100/ffffff/wine-glass.png" class="floating-icon icon2" alt="">
    <img src="https://img.icons8.com/ios-filled/100/ffffff/salad.png" class="floating-icon icon3" alt="">
    <div class="glass-card">
        <div class="brand-logo">
            <img src="https://img.icons8.com/ios-filled/100/ffffff/restaurant.png" alt="Restaurant Logo">
        </div>
        <div class="login-title">Restaurant</div>
        <div class="login-subtitle">Welcome back! Please login</div>
        <form action="logincode.php" class="login-form" method="POST" autocomplete="off">
            <input type="email" name="email" placeholder="Email Address" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login_btn">LOGIN</button>
        </form>
        <div class="mt-3">
            <a href="../php/forgot-password.php" class="btn btn-link px-0" style="color:#b66565;font-weight:600;">Forgot
                Password?</a>
        </div>
        <div class="mt-2">
            <span>Don't have an account?</span>
            <a href="register.php" class="btn btn-link px-0" style="color:#b66565;font-weight:600;">Register</a>
        </div>
        <div class="mt-2">
            <span>Login as:</span>
            <a href="../../admin/login.php" class="btn btn-link px-0" style="color:#7a5c3e;font-weight:600;">Admin</a>
        </div>
        <div class="login-footer">
            &copy; <?= date('Y') ?> Restaurant Management System
        </div>
    </div>
    <!-- Bootstrap 5 Toast JS (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>