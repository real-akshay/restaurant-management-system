<?php
session_start();

// Agar user already logged in hai to index par redirect
// if (isset($_SESSION['auth']) && $_SESSION['auth'] == 'user') {
//     header("Location: index.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up | Restaurant Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Kristi:400|Montserrat:600,700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Quicksand', 'Montserrat', sans-serif;
            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80') center center/cover no-repeat fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .glass-card {
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

        .glass-card * {
            margin: 0 !important;
            padding: 0 !important;
            box-sizing: border-box !important;
        }

        .glass-card:hover {
            box-shadow: 0 12px 40px 0 rgba(44, 44, 44, 0.22), 0 2px 8px 0 rgba(192, 165, 138, 0.16) !important;
        }

        .brand-logo {
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

        .brand-logo img {
            width: 64px !important;
            height: 64px !important;
            z-index: 2 !important;
            position: relative !important;
            filter: drop-shadow(0 2px 8px #b6656540) !important;
        }

        .brand-logo::after {
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

        .login-title {
            font-family: 'Kristi', cursive !important;
            font-size: 50px !important;
            color: #b66565 !important;
            margin-bottom: 8px !important;
            letter-spacing: 2px !important;
            text-shadow: 0 2px 8px #f3c89244 !important;
        }

        .login-subtitle {
            font-size: 19px !important;
            color: #7a5c3e !important;
            margin-bottom: 30px !important;
            font-weight: 500 !important;
            letter-spacing: 1px !important;
        }

        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"] {
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

        .login-form input:focus {
            outline: none !important;
            border-color: #b66565 !important;
            box-shadow: 0 2px 8px #b6656522 !important;
        }

        .login-form button[type="submit"] {
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

        .login-form button[type="submit"]:hover {
            background: linear-gradient(90deg, #c0a58a 0%, #b66565 100%) !important;
            transform: translateY(-2px) scale(1.03) !important;
        }

        .login-footer {
            margin-top: 28px !important;
            font-size: 15px !important;
            color: #7a5c3e !important;
            letter-spacing: 1px !important;
            font-family: 'Quicksand', sans-serif !important;
            opacity: 0.85 !important;
        }

        @media (max-width: 500px) {
            .glass-card {
                padding: 22px 6px 14px 6px !important;
            }

            .login-title {
                font-size: 32px !important;
            }
        }

        .floating-icon {
            position: absolute !important;
            opacity: 0.13 !important;
            z-index: 1 !important;
            pointer-events: none !important;
        }

        .icon1 {
            top: 10% !important;
            left: 7% !important;
            width: 60px !important;
        }

        .icon2 {
            bottom: 12% !important;
            right: 8% !important;
            width: 50px !important;
        }

        .icon3 {
            top: 40% !important;
            right: 5% !important;
            width: 38px !important;
        }
    </style>
</head>

<body>
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
        <div class="login-subtitle">Create your account</div>
        <form id="registerForm" action="registercode.php" class="login-form" method="POST" autocomplete="off"
            novalidate>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required minlength="6">
            <input type="password" name="cpassword" placeholder="Confirm Password" required minlength="6">
            <button type="submit" name="register_btn">SIGN UP</button>
        </form>
        <div class="mt-2">
            <span>Already have an account?</span>
            <a href="login.php" class="btn btn-link px-0" style="color:#b66565;font-weight:600;">Login</a>
        </div>
        <div class="login-footer">
            &copy; <?= date('Y') ?> Restaurant Management System
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('registerForm');
        const nameInput = form.name;
        const emailInput = form.email;
        const passwordInput = form.password;
        const cpasswordInput = form.cpassword;

        // Helper to show error message
        function showError(input, message) {
            removeError(input);
            const error = document.createElement('div');
            error.className = 'invalid-feedback d-block';
            error.style.fontSize = '14px';
            error.innerText = message;
            input.classList.add('is-invalid');
            input.parentNode.insertBefore(error, input.nextSibling);
        }

        // Helper to remove error message
        function removeError(input) {
            input.classList.remove('is-invalid');
            const next = input.nextSibling;
            if (next && next.classList && next.classList.contains('invalid-feedback')) {
                next.remove();
            }
        }

        // Name validation
        nameInput.addEventListener('input', function () {
            const value = nameInput.value.trim();
            if (!/^[a-zA-Z\s]+$/.test(value)) {
                showError(nameInput, 'Name should contain only letters and spaces.');
            } else {
                removeError(nameInput);
            }
        });

        // Email validation
        emailInput.addEventListener('input', function () {
            const value = emailInput.value.trim();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                showError(emailInput, 'Please enter a valid email address.');
            } else {
                removeError(emailInput);
            }
        });

        // Password validation
        passwordInput.addEventListener('input', function () {
            if (passwordInput.value.length < 6) {
                showError(passwordInput, 'Password must be at least 6 characters.');
            } else {
                removeError(passwordInput);
            }
            // Also check confirm password
            if (cpasswordInput.value && passwordInput.value !== cpasswordInput.value) {
                showError(cpasswordInput, 'Passwords do not match.');
            } else if (cpasswordInput.value) {
                removeError(cpasswordInput);
            }
        });

        // Confirm password validation
        cpasswordInput.addEventListener('input', function () {
            if (cpasswordInput.value !== passwordInput.value) {
                showError(cpasswordInput, 'Passwords do not match.');
            } else {
                removeError(cpasswordInput);
            }
        });

        // On submit, prevent if any error
        form.addEventListener('submit', function (e) {
            let valid = true;

            // Name
            if (!/^[a-zA-Z\s]+$/.test(nameInput.value.trim())) {
                showError(nameInput, 'Name should contain only letters and spaces.');
                valid = false;
            }
            // Email
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
                showError(emailInput, 'Please enter a valid email address.');
                valid = false;
            }
            // Password
            if (passwordInput.value.length < 6) {
                showError(passwordInput, 'Password must be at least 6 characters.');
                valid = false;
            }
            // Confirm password
            if (passwordInput.value !== cpasswordInput.value) {
                showError(cpasswordInput, 'Passwords do not match.');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>