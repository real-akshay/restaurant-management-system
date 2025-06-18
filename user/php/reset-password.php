<?php
session_start();
$token = '';
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} elseif (isset($_POST['token'])) {
    $token = $_POST['token'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password | Restaurant Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Playfair Display for a restaurant vibe -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f3c892 0%, #fff7e6 100%);
            background-image: url('https://www.transparenttextures.com/patterns/food.png');
            font-family: 'Roboto', Arial, sans-serif;
        }

        .restaurant-card {
            background: #fffbe9;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(80, 40, 10, 0.13);
            border: 1px solid #f3c892;
            padding: 2.5rem 2rem 2rem 2rem;
        }

        .restaurant-title {
            font-family: 'Playfair Display', serif;
            color: #b85c38;
            letter-spacing: 1px;
            font-size: 2.1rem;
            margin-bottom: 0.7rem;
        }

        .restaurant-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin-bottom: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .form-label {
            color: #b85c38;
            font-weight: 500;
        }

        .form-control:focus {
            border-color: #b85c38;
            box-shadow: 0 0 0 0.2rem rgba(184, 92, 56, 0.15);
        }

        .btn-success {
            background: linear-gradient(90deg, #b85c38 0%, #f3c892 100%);
            border: none;
            color: #fff;
            font-weight: 500;
            letter-spacing: 1px;
            transition: background 0.2s;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #a14c2b 0%, #e2b16a 100%);
            color: #fff;
        }

        .alert-info {
            background: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }

        @media (max-width: 500px) {
            .restaurant-card {
                padding: 1.2rem 0.7rem 1.5rem 0.7rem;
            }

            .restaurant-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">
        <div class="restaurant-card mx-auto" style="max-width:410px; width:100%;">
            <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" alt="Restaurant Logo"
                class="restaurant-logo">
            <h3 class="restaurant-title text-center">Reset Your Password</h3>
            <p class="text-center mb-4" style="color:#b85c38; font-size:1rem;">
                Enter your new password to access your restaurant account.
            </p>
            <?php if (isset($_SESSION['status'])): ?>
                <div class="alert alert-info"><?= $_SESSION['status'];
                unset($_SESSION['status']); ?></div>
            <?php endif; ?>
            <form action="update-password.php" method="POST" autocomplete="off">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" required minlength="6"
                        placeholder="Enter new password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" required minlength="6"
                        placeholder="Confirm new password">
                </div>
                <button type="submit" class="btn btn-success w-100 mt-2">Update Password</button>
            </form>
            <div class="text-center mt-3">
                <a href="../restaurant/login.php" style="color:#b85c38; text-decoration:underline;">Back to Login</a>
            </div>
        </div>
    </div>
</body>

</html>