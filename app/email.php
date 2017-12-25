<?php

//$email = $_POST['email'];
//$message = $_POST['message'];
//
//echo "E-mail: " . $email . "<br>" . "Message: " . $message;


$post = (!empty($_POST)) ? true : false;

if ($post) {
    $email = trim($_POST['email']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $error = '';

    if (!$email) {
        $error .= 'Error in e-mail.<br />';
    }

    if (!$message || strlen($message) < 1) {
        $error .= "Error in your message<br />";
    }

    if (!$error) {

        $to = $email;
        $to_copy = 'nonaqua.worldwide@gmail.com';
//        $to_copy = 'vitaly.anma@gmail.com';

        $subject = 'Order from '. isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
        $subject = "=?utf-8?b?". base64_encode($subject) ."?=";

        $message = "E-mail: ".$email."\nMessage: ".$message;

//        $headers = 'Content-type: text/plain; charset="utf-8"';
//        $headers .= "MIME-Version: 1.0\r\n";
//        $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
        $headers = "From: info@nonaqua.net\r\n";
//        $sent1 = mail($to, $subject, $message);


        $message .= isset($_SERVER['REMOTE_ADDR']) ? "\nExample: ".$_SERVER['REMOTE_ADDR'] : "";
        $sent2 = mail($to_copy, $subject, $message, $headers);

        $msg = "Поздравляем! Ваш заказ принят!";

        if (/*$sent1 &&*/ $sent2) {
            echo 'OK';
        }

    } else {
        echo '<div class="notification_error">' . $error . '</div>';
    }
}