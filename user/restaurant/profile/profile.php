<?php
require_once('../../authentication.php');
require_once('../../../config/dbcon.php');

$user_id = $_SESSION['user_session']['user_id'];
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
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $company_name = trim($_POST['company']);
    $country = trim($_POST['country']);
    $country_code = trim($_POST['country_code']);
    $state = trim($_POST['state']);
    $pincode = trim($_POST['pincode']);
    $town_city = trim($_POST['town_city']);

    // $restaurant_name = trim($_POST['restaurant_name']);
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

    $stmt = $con->prepare("UPDATE users SET first_name=?, last_name=?, email=?, phone=?, address=?, company=?, country=?, country_code=?, state=?, pincode=?, town_city=?, description=?, profile_pic=? WHERE id=?");
    if (!$stmt) {
        $msg = "Error preparing statement: (" . $con->errno . ") " . $con->error;
    } else {
        $stmt->bind_param("sssssssssisssi", $first_name, $last_name, $email, $phone, $address, $company_name, $country, $country_code, $state, $pincode, $town_city, $description, $profile_pic, $user_id);
        if ($stmt->execute()) {
            header('Location: ' . $_SERVER['PHP_SELF']);

            $msg = "Profile updated successfully!";
            exit();
        } else {
            $msg = "Error updating profile.";
        }
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

// Fetch user data from users table using the current user id
// $user_data = [];
// $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
// $stmt->bind_param("i", $user_id);
// $stmt->execute();
// $result = $stmt->get_result();
// if ($result && $result->num_rows > 0) {
//     $user_data = $result->fetch_assoc();
// }

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
            background: linear-gradient(120deg, #f8f6f2 60%, #f3e5d8 100%) !important;
            font-family: 'Quicksand', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .blur-bg {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            background: url('../wp-content/uploads/sites/2/revslider/home-1/para-10.webp') center center/cover no-repeat;
            filter: blur(12px) brightness(0.7) saturate(1.2);
            opacity: 0.7;
            animation: blurFadeIn 1s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        @keyframes blurFadeIn {
            from {
                opacity: 0;
                filter: blur(30px) brightness(0.5);
            }

            to {
                opacity: 0.7;
                filter: blur(12px) brightness(0.7) saturate(1.2);
            }
        }

        .blur-bg::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0.15) 60%, rgba(182, 101, 101, 0.10) 100%);
        }

        .profile-card {
            position: relative;
            z-index: 2;
            max-width: 700px;
            margin: 60px auto 40px auto;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 22px;
            box-shadow: 0 12px 48px 0 rgba(44, 44, 44, 0.16), 0 1.5px 0 #c0a58a inset;
            padding: 0;
            overflow: hidden;
            opacity: 0;
            transform: scale(0.96) translateY(40px);
            animation: cardPopIn 0.8s cubic-bezier(.4, 0, .2, 1) 0.2s forwards;
            backdrop-filter: blur(2px);
        }

        @keyframes cardPopIn {
            0% {
                opacity: 0;
                transform: scale(0.92) translateY(40px);
                box-shadow: 0 0 0 rgba(44, 44, 44, 0.00);
            }

            60% {
                opacity: 1;
                transform: scale(1.04) translateY(-8px);
                box-shadow: 0 20px 60px rgba(44, 44, 44, 0.12);
            }

            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
                box-shadow: 0 12px 48px 0 rgba(44, 44, 44, 0.16);
            }
        }

        .profile-header {
            background: linear-gradient(90deg, #c0a58a 60%, #b66565 100%);
            padding: 48px 0 36px 0;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .profile-header::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 80%;
            height: 18px;
            background: linear-gradient(90deg, #fff0 60%, #fff2 100%);
            border-radius: 0 0 18px 18px;
            z-index: 1;
        }

        .profile-avatar {
            width: 128px;
            height: 128px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 4px 18px #b6656550;
            margin-bottom: 12px;
            background: #fff;
            opacity: 0;
            transform: scale(0.8);
            animation: avatarPop 0.8s cubic-bezier(.4, 0, .2, 1) 0.6s forwards;
            position: relative;
            z-index: 2;
        }

        @keyframes avatarPop {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .profile-header h2 {
            font-family: 'Kristi', cursive;
            font-size: 2.7rem;
            margin: 14px 0 0 0;
            letter-spacing: 2px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.6s 0.9s forwards;
            text-shadow: 0 2px 12px #b6656530;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-tabs {
            display: flex;
            background: #f7f3ed;
            border-bottom: 1.5px solid #eee;
        }

        .profile-tab {
            flex: 1;
            text-align: center;
            padding: 20px 0 16px 0;
            cursor: pointer;
            font-weight: 700;
            color: #b66565;
            background: #f7f3ed;
            border: none;
            outline: none;
            font-size: 1.15rem;
            letter-spacing: 0.5px;
            transition: background 0.2s, color 0.2s, border-bottom 0.2s;
            border-bottom: 2.5px solid transparent;
        }

        .profile-tab.active {
            background: #fff;
            color: #c0a58a;
            border-bottom: 2.5px solid #c0a58a;
        }

        .profile-content {
            display: none;
            padding: 38px 44px 44px 44px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.5s, transform 0.5s;
        }

        .profile-content.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* --- Improved Profile Form Styling --- */
        .profile-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px 38px;
            align-items: end;
        }

        .profile-form label {
            font-weight: 700;
            color: #b66565;
            margin-top: 0;
            margin-bottom: 7px;
            display: block;
            font-size: 1.08rem;
            letter-spacing: 0.5px;
        }

        .profile-form input[type="file"] {
            grid-column: 1 / -1;
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

        .profile-form input[type="file"]::-webkit-file-upload-button,
        .profile-form input[type="file"]::file-selector-button {
            background: linear-gradient(90deg, #c0a58a 60%, #b66565 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 26px;
            font-size: 1rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 8px #b6656522;
        }

        .profile-form input[type="file"]:hover::-webkit-file-upload-button,
        .profile-form input[type="file"]:hover::file-selector-button {
            background: linear-gradient(90deg, #b66565 60%, #c0a58a 100%);
        }

        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form input[type="password"],
        .profile-form textarea {
            width: 100%;
            padding: 14px 16px;
            border: 1.5px solid #eee;
            border-radius: 9px;
            background: #faf9f7;
            font-size: 1.08rem;
            color: #2d2d2d;
            font-family: 'Quicksand', sans-serif;
            transition: border 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
            outline: none;
        }

        .profile-form input[type="text"]:focus,
        .profile-form input[type="email"]:focus,
        .profile-form input[type="password"]:focus,
        .profile-form textarea:focus {
            border: 1.5px solid #c0a58a;
            box-shadow: 0 2px 12px #c0a58a22;
            background: #fff;
        }

        .profile-form textarea {
            min-height: 80px;
            resize: vertical;
            grid-column: 1 / -1;
        }

        .profile-form button {
            background: linear-gradient(90deg, #c0a58a 60%, #b66565 100%);
            color: #fff;
            border: none;
            border-radius: 9px;
            padding: 16px 0;
            font-size: 1.18rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 800;
            margin-top: 22px;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s, transform 0.1s;
            box-shadow: 0 2px 14px #b6656522;
            grid-column: 1 / -1;
            letter-spacing: 0.5px;
        }

        .profile-form button:hover {
            background: linear-gradient(90deg, #b66565 60%, #c0a58a 100%);
            box-shadow: 0 6px 24px #b6656540;
            transform: translateY(-2px) scale(1.03);
        }

        /* Add subtle hover effect to inputs */
        .profile-form input[type="text"]:hover,
        .profile-form input[type="email"]:hover,
        .profile-form input[type="password"]:hover,
        .profile-form textarea:hover {
            border: 1.5px solid #b66565;
        }

        /* Responsive for mobile */
        @media (max-width: 800px) {
            .profile-card {
                max-width: 99vw;
            }

            .profile-content {
                padding: 18px 4vw 24px 4vw;
            }

            .profile-form {
                grid-template-columns: 1fr;
                gap: 18px 0;
            }

            .profile-header h2 {
                font-size: 2rem;
            }

            .profile-avatar {
                width: 90px;
                height: 90px;
            }
        }

        /* Add a little spacing between label and input */
        .profile-form label+input,
        .profile-form label+textarea {
            margin-top: 0;
        }

        /* Add a divider between sections */
        .profile-form input[type="file"] {
            margin-bottom: 10px;
        }

        /* Message styling */
        .profile-msg {
            margin: 0 0 18px 0;
            padding: 14px 22px;
            border-radius: 8px;
            background: #eafbe7;
            color: #2d7a2d;
            font-weight: 700;
            text-align: center;
            font-size: 1.08rem;
            box-shadow: 0 2px 8px #2d7a2d11;
        }

        .profile-error {
            background: #ffeaea;
            color: #b66565;
            box-shadow: 0 2px 8px #b6656511;
        }

        /* Back button style */
        a[href*="index.php"] {
            display: inline-block;
            background: #fff;
            border-radius: 8px;
            padding: 8px 18px;
            color: #b66565 !important;
            font-weight: 700;
            font-size: 1.08rem;
            box-shadow: 0 2px 8px #b6656522;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }

        a[href*="index.php"]:hover {
            background: #b66565;
            color: #fff !important;
            box-shadow: 0 4px 16px #b6656540;
            text-decoration: none;
        }

        /* Settings tab extra */
        #settings-content button[type="submit"] {
            background: linear-gradient(90deg, #b66565 60%, #c0a58a 100%);
            margin-bottom: 18px;
        }

        #settings-content button[type="submit"]:hover {
            background: linear-gradient(90deg, #c0a58a 60%, #b66565 100%);
        }

        /* Tab transition effect */
        .profile-content {
            will-change: opacity, transform;
        }
    </style>
    <script>
        // Optional: Prevent scroll on body when profile is open (for SPA-like effect)
        document.body.style.overflow = 'hidden';
        window.addEventListener('beforeunload', function () {
            document.body.style.overflow = '';
        });
    </script>
    </script>
    </script>
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
            <a href="/restaurant management system/user/restaurant/index.php"
                style="text-decoration:none;color:#b66565;font-weight:600;font-size:1.1rem;">
                &#8592; Back
            </a>
        </div>
        <div class="profile-header">
            <?php
            // Determine profile picture path
            $default_pic = '../wp-content/uploads/sites/2/2019/05/01.png';
            $profile_pic_path = __DIR__ . "/../../uploads/profile_pics/" . $user['profile_pic'];
            $profile_pic = isset($user['profile_pic']) && $user['profile_pic'] && file_exists($profile_pic_path)
                ? '../../uploads/profile_pics/' . htmlspecialchars($user['profile_pic'])
                : $default_pic;
            ?>
            <img src="<?= $profile_pic ?>" class="profile-avatar" alt="Profile Picture">
            <h2><?= htmlspecialchars($user['first_name']) ?></h2>
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

                <label>First Name</label>
                <input type="text" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>

                <label>Last Name</label>
                <input type="text" name="last_name" value="<?= htmlspecialchars($user['last_name'] ?? '') ?>" required>

                <label>Phone</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($user['phone']) ?>" required>

                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

                <!-- <label>Password</label>
                <input type="password" name="password" placeholder="Enter new password (leave blank to keep current)"> -->

                <label>Address</label>
                <input type="text" name="address" value="<?= htmlspecialchars($user['address'] ?? '') ?>">

                <label>Company Name ( optional )</label>
                <input type="text" name="company" value="<?= htmlspecialchars($user['company'] ?? '') ?>">

                <label>Country</label>
                <input type="text" name="country" value="<?= htmlspecialchars($user['country'] ?? '') ?>">

                <label>Country Code</label>
                <input type="text" name="country_code" value="<?= htmlspecialchars($user['country_code'] ?? '') ?>">

                <label>State</label>
                <input type="text" name="state" value="<?= htmlspecialchars($user['state'] ?? '') ?>">

                <label>Pincode</label>
                <input type="text" name="pincode" value="<?= htmlspecialchars($user['pincode'] ?? '') ?>">

                <label>Town/City</label>
                <input type="text" name="town_city" value="<?= htmlspecialchars($user['town_city'] ?? '') ?>">

                <label>Description</label>
                <textarea name="description"><?= htmlspecialchars($user['description'] ?? '') ?></textarea>
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
            <form class="profile-form" method="post" action="/restaurant management system/user/php/logout.php">
                <button type="submit">Logout</button>
            </form>
            <div style="margin-top:30px; color:#888; text-align:center;">
                More settings and features coming soon!
            </div>
        </div>
    </div>
</body>

</html>