<?php
session_start();

include '../../config/dbcon.php'; // DB connection file ka path sahi karein
require '../../config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer files include karein
require '../../vendor/autoload.php';  //Composer autoload
require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';
require '../../PHPMailer/Exception.php';

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);

    // Prepared statement for security
    $stmt = $con->prepare("SELECT id FROM users WHERE LOWER(email) = LOWER(?) LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $token = bin2hex(random_bytes(32));
        $expiry = date("Y-m-d H:i:s", strtotime("+30 minutes"));

        // Update token and expiry using prepared statement
        $update = $con->prepare("UPDATE users SET reset_token=?, reset_token_expiry=? WHERE email=?");
        $update->bind_param("sss", $token, $expiry, $email);
        $update->execute();

        if ($update->affected_rows > 0) {
            $reset_link = "http://localhost/restaurant%20management%20system/user/php/reset-password.php?token=$token";
            $subject = "Password Reset Request";
            $message = "Click the link to reset your password: $reset_link \n\nThis link will expire in 30 minutes.";

            // PHPMailer se mail bhejna
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();

                $mail->Host = $smtp_host;
                $mail->SMTPAuth = true;
                $mail->Username = $smtp_user;
                $mail->Password = $smtp_pass;
                $mail->SMTPSecure = 'tls';
                $mail->Port = $smtp_port;

                $mail->setFrom($smtp_user, 'Akshay\'s Restaurant');
                $mail->addAddress($email); // Client's email and name

                // Content
                $mail->isHTML(false);
                $mail->Subject = $subject;
                $mail->Body = $message;

                $mail->send();

                $_SESSION['status'] = [
                    'type' => 'success',
                    'message' => 'Reset link sent to your email.'
                ];
            } catch (Exception $e) {
                $_SESSION['status'] = [
                    'type' => 'error',
                    'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
                ];
            }
        } else {
            $_SESSION['status'] = [
                'type' => 'error',
                'message' => "Failed to generate reset link. Please try again."
            ];
        }
        header("Location: forgot-password.php");
        exit();
    } else {
        $_SESSION['status'] = [
            'type' => 'warning',
            'message' => 'Email not found.!'
        ];
        header("Location: forgot-password.php");
        exit();
    }
} else {
    $_SESSION['status'] = [
        'type' => 'warning',
        'message' => 'Please enter your email address.'
    ];
    header("Location: forgot-password.php");
    exit();
}