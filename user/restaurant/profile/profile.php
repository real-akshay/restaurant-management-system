<?php
session_start();
require_once('../../../config/dbcon.php');

// Check if user is logged in
if (!isset($_SESSION['auth_user']['user_id'])) {
    header('Location: /restaurant management system/user/login.php');
    exit();
}

$user_id = $_SESSION['auth_user']['user_id'];
$msg = "";

// Fetch user data
$stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
if (!$stmt) {
    die("Prepare failed: (" . $con->errno . ") " . $con->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

// Update profile
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $restaurant_name = trim($_POST['restaurant_name']);
    $description = trim($_POST['description']);

    // Profile picture upload
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../uploads/profile_pics/";
        if (!is_dir($target_dir))
            mkdir($target_dir, 0777, true);
        $file_name = uniqid() . "_" . basename($_FILES["profile_pic"]["name"]);
        $target_file = $target_dir . $file_name;
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
        $profile_pic = $file_name;
    } else {
        $profile_pic = $user['profile_pic'];
    }

    $stmt = $con->prepare("UPDATE users SET name=?, email=?, phone=?, address=?, restaurant_name=?, description=?, profile_pic=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $email, $phone, $address, $restaurant_name, $description, $profile_pic, $user_id);
    if ($stmt->execute()) {
        $msg = "Profile updated successfully!";
        // Refresh user data
        $user['name'] = $name;
        $user['email'] = $email;
        $user['phone'] = $phone;
        $user['address'] = $address;
        $user['restaurant_name'] = $restaurant_name;
        $user['description'] = $description;
        $user['profile_pic'] = $profile_pic;
    } else {
        $msg = "Error updating profile.";
    }
}

// Change password
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (password_verify($current_password, $user['password'])) {
        if ($new_password === $confirm_password) {
            $hashed = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $con->prepare("UPDATE users SET password=? WHERE id=?");
            $stmt->bind_param("si", $hashed, $user_id);
            if ($stmt->execute()) {
                $msg = "Password changed successfully!";
            } else {
                $msg = "Error changing password.";
            }
        } else {
            $msg = "New passwords do not match.";
        }
    } else {
        $msg = "Current password is incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile | Restaurant</title>
    <link rel="stylesheet" href="/restaurant management system/assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Kristi:400|Montserrat:600,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background: none !important;
            font-family: 'Quicksand', sans-serif;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }
        /* Blurred background image with fade-in */
        .blur-bg {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            background: url('../wp-content/uploads/sites/2/revslider/home-1/para-10.webp') center center/cover no-repeat;
            filter: blur(8px) brightness(0.8);
            opacity: 0;
            animation: blurFadeIn 0.7s cubic-bezier(.4,0,.2,1) forwards;
            transition: filter 0.3s;
        }
        @keyframes blurFadeIn {
            from { opacity: 0; filter: blur(20px) brightness(0.7);}
            to   { opacity: 1; filter: blur(8px) brightness(0.8);}
        }
        .blur-bg::after {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.15);
        }

        /* Profile card pop-in animation */
        .profile-card {
            position: relative;
            z-index: 2;
            max-width: 650px;
            margin: 60px auto 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(44, 44, 44, 0.18);
            padding: 0;
            overflow: hidden;
            opacity: 0;
            transform: scale(0.92) translateY(40px);
            animation: cardPopIn 0.7s cubic-bezier(.4,0,.2,1) 0.2s forwards;
        }
        @keyframes cardPopIn {
            0% {
                opacity: 0;
                transform: scale(0.92) translateY(40px);
                box-shadow: 0 0 0 rgba(44,44,44,0.00);
            }
            60% {
                opacity: 1;
                transform: scale(1.03) translateY(-8px);
                box-shadow: 0 16px 48px rgba(44,44,44,0.10);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
                box-shadow: 0 8px 32px rgba(44,44,44,0.18);
            }
        }

        .profile-header {
            background: linear-gradient(90deg, #c0a58a 60%, #b66565 100%);
            padding: 40px 0 30px 0;
            text-align: center;
            color: #fff;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 2px 12px #b6656550;
            margin-bottom: 10px;
            background: #fff;
            opacity: 0;
            transform: scale(0.8);
            animation: avatarPop 0.7s cubic-bezier(.4,0,.2,1) 0.6s forwards;
        }
        @keyframes avatarPop {
            from { opacity: 0; transform: scale(0.8);}
            to   { opacity: 1; transform: scale(1);}
        }

        .profile-header h2 {
            font-family: 'Kristi', cursive;
            font-size: 2.5rem;
            margin: 10px 0 0 0;
            letter-spacing: 2px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.5s 0.8s forwards;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px);}
            to   { opacity: 1; transform: translateY(0);}
        }

        .profile-tabs {
            display: flex;
            background: #f5f5f5;
            border-bottom: 1px solid #eee;
        }

        .profile-tab {
            flex: 1;
            text-align: center;
            padding: 18px 0;
            cursor: pointer;
            font-weight: 600;
            color: #b66565;
            background: #f5f5f5;
            border: none;
            outline: none;
            font-size: 1.1rem;
            transition: background 0.2s, color 0.2s;
        }

        .profile-tab.active {
            background: #fff;
            color: #c0a58a;
            border-bottom: 2px solid #c0a58a;
        }

        .profile-content {
            display: none;
            padding: 32px 36px 36px 36px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.4s, transform 0.4s;
        }
        .profile-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .profile-form label {
            font-weight: 600;
            color: #2d2d2d;
            margin-top: 18px;
            display: block;
        }

        .profile-form input[type="file"] {
            display: block;
            width: 100%;
            padding: 10px 0;
            margin-top: 7px;
            border: none;
            background: transparent;
            font-size: 1rem;
            color: #2d2d2d;
            font-family: 'Quicksand', sans-serif;
            cursor: pointer;
        }

        .profile-form input[type="file"]::-webkit-file-upload-button {
            background: #c0a58a;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 22px;
            font-size: 1rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .profile-form input[type="file"]:hover::-webkit-file-upload-button {
            background: #b66565;
        }

        .profile-form input[type="file"]::file-selector-button {
            background: #c0a58a;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 22px;
            font-size: 1rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .profile-form input[type="file"]:hover::file-selector-button {
            background: #b66565;
        }

        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form input[type="password"],
        .profile-form textarea {
            width: 100%;
            padding: 10px 10px;
            margin-top: 7px;
            border: 1px solid #eee;
            border-radius: 6px;
            background: #faf9f7;
            font-size: 1rem;
            color: #2d2d2d;
            font-family: 'Quicksand', sans-serif;
            transition: border 0.2s;
        }

        .profile-form input[type="file"] {
            margin-top: 10px;
        }

        .profile-form textarea {
            min-height: 70px;
            resize: vertical;
        }

        .profile-form button {
            background: #c0a58a;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px 32px;
            font-size: 1.1rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            margin-top: 28px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .profile-form button:hover {
            background: #b66565;
        }

        .profile-msg {
            margin: 0 0 18px 0;
            padding: 12px 20px;
            border-radius: 6px;
            background: #eafbe7;
            color: #2d7a2d;
            font-weight: 600;
            text-align: center;
        }

        .profile-error {
            background: #ffeaea;
            color: #b66565;
        }

        @media (max-width: 700px) {
            .profile-card {
                max-width: 98vw;
            }
            .profile-content {
                padding: 18px 8vw 24px 8vw;
            }
        }
    </style>
    <script>
        // Optional: Prevent scroll on body when profile is open (for SPA-like effect)
        document.body.style.overflow = 'hidden';
        window.addEventListener('beforeunload', function() {
            document.body.style.overflow = '';
        });
    </script></script></script>
    <script>
        function showTab(tab) {
            document.querySelectorAll('.profile-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.profile-content').forEach(tc => tc.classList.remove('active'));
            document.getElementById(tab + '-tab').classList.add('active');
            document.getElementById(tab + '-content').classList.add('active');
        }
        window.onload = function () { showTab('profile'); }
    </script>
</head>

<body style="background: #f8f6f2; font-family: 'Quicksand', sans-serif;">
    <div class="blur-bg"></div>
    <div class="profile-card">
        <!-- Back Button -->
        <div style="padding: 18px 0 0 18px;">
            <a href="/restaurant management system/user/restaurant/index.php" style="text-decoration:none;color:#b66565;font-weight:600;font-size:1.1rem;">
                &#8592; Back
            </a>
        </div>
        <div class="profile-header">
            <img src="<?= $user['profile_pic'] ? '../wp-content/uploads/profile_pics/' . htmlspecialchars($user['profile_pic']) : '../wp-content/uploads/sites/2/2019/05/01.png' ?>"
                class="profile-avatar" alt="Profile Picture">
            <h2><?= htmlspecialchars($user['name']) ?></h2>
            <div style="font-size:1rem;opacity:0.8;"><?= htmlspecialchars($user['email']) ?></div>
        </div>
        <?php if ($msg): ?>
            <div class="profile-msg<?= strpos($msg, 'Error') !== false ? ' profile-error' : '' ?>">
                <?= htmlspecialchars($msg) ?>
            </div>
        <?php endif; ?>
        <div class="profile-tabs">
            <button class="profile-tab active" id="profile-tab" onclick="showTab('profile')">Profile</button>
            <button class="profile-tab" id="password-tab" onclick="showTab('password')">Change Password</button>
            <button class="profile-tab" id="settings-tab" onclick="showTab('settings')">Settings</button>
        </div>
        <!-- Profile Tab -->
        <div class="profile-content active" id="profile-content">
            <form class="profile-form" method="post" enctype="multipart/form-data">
                <label>Profile Picture</label>
                <input type="file" name="profile_pic" accept="image/*">
                <label>Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                <label>Phone</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($user['phone']) ?>" required>
                <label>Address</label>
                <input type="text" name="address" value="<?= htmlspecialchars($user['address']) ?>">
                <!--<label>Restaurant Name</label>
                <input type="text" name="restaurant_name" value="<?= htmlspecialchars($user['restaurant_name']) ?>">-->
                <label>Description</label>
                <textarea name="description"><?= htmlspecialchars($user['description']) ?></textarea>
                <button type="submit" name="update_profile">Update Profile</button>
            </form>
        </div>
        <!-- Change Password Tab -->
        <div class="profile-content" id="password-content">
            <form class="profile-form" method="post">
                <label>Current Password</label>
                <input type="password" name="current_password" required>
                <label>New Password</label>
                <input type="password" name="new_password" required>
                <label>Confirm New Password</label>
                <input type="password" name="confirm_password" required>
                <button type="submit" name="change_password">Change Password</button>
            </form>
        </div>
        <!-- Settings Tab -->
        <div class="profile-content" id="settings-content">
            <form class="profile-form" method="post" action="/restaurant management system/user/logout.php">
                <button type="submit">Logout</button>
            </form>
            <div style="margin-top:30px; color:#888; text-align:center;">
                More settings and features coming soon!
            </div>
        </div>
    </div>
</body>

</html>