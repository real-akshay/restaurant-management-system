<?php
require('../.env');
try{
    $mail = new PHPMailer(true);

    // server setting
    $mail -> isSMTP();
    $mail -> Host = $smtp_host;
    $mail -> SMTPAuth = true;
    $mail -> Username = $smtp_user;
    $mail -> Password = $smtp_pass;
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = $smtp_port;


    // sender and reciever 
    $mail -> sentFrom($smtp_user, "Akshay's restaurant");
    $mail -> addAddress($email, $name);

    // content
    $mail -> isHTML(true);
    $mail -> Subject = "booking confirmation";
    $mail -> Body = "html body";
    // alternate body
    $mail -> AltBody = "this is alternate body of email";

    // send
    $mail -> send();

}catch(Exception $e ){
    unset($mail);
}

?>


.env{
    smtp_host = "smtp.gmail.com";
    smtp_username = "xyz@gmail.com";
    smtp_pass = "password";
    smtp_port = 587;
}

.gitignore{
    .env 
    /vendor/
}