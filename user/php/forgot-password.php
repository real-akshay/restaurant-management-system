<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password | Restaurant Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #a45c40;
            --accent: #f3c892;
            --bg-glass: rgba(255, 255, 255, 0.92);
            --shadow: 0 12px 48px 0 rgba(31, 38, 135, 0.22), 0 2px 8px 0 rgba(0, 0, 0, 0.13);
            --radius: 2.5rem;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1500&q=80') center center/cover no-repeat fixed;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background: linear-gradient(120deg, rgba(40, 23, 10, 0.82) 0%, rgba(164, 92, 64, 0.38) 100%);
            backdrop-filter: blur(2px);
        }

        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .card {
            border: none;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            background: var(--bg-glass);
            padding: 3rem 2.5rem 2.5rem 2.5rem;
            max-width: 410px;
            margin: 2rem auto;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.7s cubic-bezier(.39, .575, .56, 1.000);
            backdrop-filter: blur(7px) saturate(120%);
            border: 1.5px solid rgba(243, 200, 146, 0.18);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card::before {
            content: "";
            position: absolute;
            top: -70px;
            right: -70px;
            width: 140px;
            height: 140px;
            background: linear-gradient(135deg, var(--primary) 60%, var(--accent) 100%);
            border-radius: 50%;
            opacity: 0.13;
            z-index: 0;
        }

        .card::after {
            content: "";
            position: absolute;
            bottom: -60px;
            left: -60px;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--accent) 60%, var(--primary) 100%);
            border-radius: 50%;
            opacity: 0.10;
            z-index: 0;
        }

        .brand-logo {
            display: block;
            margin: 0 auto 1.2rem auto;
            width: 70px;
            height: 70px;
            object-fit: contain;
            border-radius: 50%;
            box-shadow: 0 4px 16px rgba(164, 92, 64, 0.13);
            background: #fff8f0;
            border: 2.5px solid var(--accent);
            position: relative;
            z-index: 1;
            transition: transform 0.2s;
        }

        .brand-logo:hover {
            transform: scale(1.07) rotate(-4deg);
        }

        .card-title {
            font-weight: 800;
            font-size: 2.2rem;
            color: var(--primary);
            letter-spacing: 1.2px;
            margin-bottom: 1.1rem;
            text-align: center;
            text-shadow: 0 2px 8px rgba(243, 200, 146, 0.13), 0 1px 2px rgba(0, 0, 0, 0.08);
        }

        .subtitle {
            text-align: center;
            color: #a45c40;
            font-size: 1.09rem;
            margin-bottom: 1.7rem;
            font-weight: 500;
            letter-spacing: 0.2px;
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.13);
        }

        label {
            font-weight: 600;
            color: var(--primary);
            letter-spacing: 0.2px;
        }

        .form-control {
            border-radius: 1.2rem;
            border: 1.7px solid var(--accent);
            background: rgba(255, 255, 255, 0.98);
            font-size: 1.07rem;
            padding: 1rem 1.2rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.18rem rgba(164, 92, 64, 0.10);
            background: #fff;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            border: none;
            border-radius: 1.2rem;
            font-weight: 700;
            font-size: 1.15rem;
            letter-spacing: 0.5px;
            padding: 1rem;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 6px 24px 0 rgba(164, 92, 64, 0.15);
            position: relative;
        }

        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background: linear-gradient(90deg, var(--accent) 0%, var(--primary) 100%);
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 10px 32px 0 rgba(164, 92, 64, 0.19);
        }

        .alert-info,
        .alert-success,
        .alert-danger {
            border-radius: 1.1rem;
            font-weight: 500;
            margin-bottom: 1.2rem;
            text-align: center;
            font-size: 1.03rem;
        }

        .alert-info {
            background: rgba(255, 246, 224, 0.97);
            color: var(--primary);
            border: 1px solid var(--accent);
        }

        .alert-success {
            background: #e6f9ed;
            color: #1e7e34;
            border: 1px solid #b7e4c7;
        }

        .alert-danger {
            background: #ffe6e6;
            color: #b02a37;
            border: 1px solid #f5c2c7;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.7rem;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
            font-size: 1.06rem;
            letter-spacing: 0.2px;
        }

        .back-link:hover {
            color: #7b3f00;
            text-decoration: underline;
        }

        .footer-note {
            text-align: center;
            margin-top: 2.2rem;
            color: var(--primary);
            font-size: 1rem;
            opacity: 0.75;
            letter-spacing: 0.1px;
        }

        .footer-note a {
            color: var(--primary);
            text-decoration: underline;
            font-weight: 600;
        }

        .spinner-border {
            width: 1.3rem;
            height: 1.3rem;
            vertical-align: middle;
            margin-left: 0.5rem;
        }

        /* Decorative icons */
        .decor-icons {
            position: absolute;
            top: 18px;
            right: 30px;
            z-index: 2;
            opacity: 0.13;
            font-size: 2.7rem;
            pointer-events: none;
        }

        .decor-icons.left {
            left: 30px;
            right: auto;
            top: 22px;
            transform: rotate(-18deg);
        }

        /* Micro-interaction: input shake on error */
        .form-control.is-invalid {
            animation: shake 0.18s 2;
            border-color: #b02a37;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-6px);
            }

            50% {
                transform: translateX(6px);
            }

            75% {
                transform: translateX(-4px);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* Responsive */
        @media (max-width: 500px) {
            .card {
                padding: 1.3rem 0.5rem;
                max-width: 98vw;
            }

            .card-title {
                font-size: 1.4rem;
            }

            .subtitle {
                font-size: 0.97rem;
            }

            .decor-icons,
            .decor-icons.left {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <span class="decor-icons left">🍴</span>
            <span class="decor-icons">🥄</span>
            <div class="card-body position-relative">
                <!-- Brand Logo -->
                <img src="https://img.icons8.com/ios-filled/100/restaurant.png" alt="Restaurant Logo" class="brand-logo" aria-label="Restaurant Logo">
                <h3 class="card-title">Forgot Password</h3>
                <div class="subtitle">
                    Enter your registered email address and we'll send you a link to reset your password.
                </div>
                <?php if (isset($_SESSION['status'])): ?>
                    <div class="alert alert-info">
                        <?php 
                            if (is_array($_SESSION['status'])) {
                                echo implode('<br>', $_SESSION['status']);
                            } else {
                                echo $_SESSION['status'];
                            }
                            unset($_SESSION['status']); 
                        ?>
                    </div>
                <?php endif; ?>
                <form action="send-reset-link.php" method="POST" autocomplete="off" id="forgotForm" novalidate>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required autofocus placeholder="Enter your email" aria-label="Email Address">
                        <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" id="submitBtn">
                        Send Reset Link
                        <span class="spinner-border spinner-border-sm d-none" id="spinner" role="status" aria-hidden="true"></span>
                    </button>
                </form>
                <a href="../restaurant/login.php" class="back-link">← Back to Login</a>
                <div class="footer-note">
                    Need help? Contact <a href="mailto:support@restaurant.com">support@restaurant.com</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Show spinner on submit
        document.getElementById('forgotForm').addEventListener('submit', function(e) {
            var email = document.getElementById('email');
            var valid = email.value.trim().match(/^[^@\s]+@[^@\s]+\.[^@\s]+$/);
            if (!valid) {
                email.classList.add('is-invalid');
                document.getElementById('emailError').style.display = 'block';
                e.preventDefault();
                return false;
            }
            email.classList.remove('is-invalid');
            document.getElementById('emailError').style.display = 'none';
            document.getElementById('submitBtn').disabled = true;
            document.getElementById('spinner').classList.remove('d-none');
        });
        document.getElementById('email').addEventListener('input', function() {
            this.classList.remove('is-invalid');
            document.getElementById('emailError').style.display = 'none';
        });
    </script>
</body>

</html>