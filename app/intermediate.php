<?php

session_start(); 
    $_SESSION['name'] = $_POST['client'];
    $_SESSION['phone'] = $_POST['tel'];
   // $_SESSION['count-bottle'] = $_POST['count-bottle'];


  $to  = "<jackillman@gmail.com>,<anma.orders@meta.ua>,<aquaphob.net@gmail.com>,<un_cle_v@mail.ru>,<burlucky@ukr.net>";
// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $mycount = $_POST['count-bottle'];
$name = $_SESSION['name'];
$phone = $_SESSION['phone'];
//$mycount = $_SESSION['count-bottle'];
   // $msg=$_POST['msg']; 

 $subject = 'Заявка';
 $subject = 'Order from ' . $_SERVER['HTTP_REFERER']." ". "IP " . $_SERVER['REMOTE_ADDR'];
$subject = "=?utf-8?b?" . base64_encode ($subject) . "?=";

 $message = "
 <html>
 <head>
    <title>Заявка</title>
</head>
<body>
    <p>Имя - $name</p>
    <p>телефон - $phone</p>
    
</body>
</html>";

$headers  = "Content-type: text/html; charset=utf8 \r\n";
$headers .= "From: order\r\n";
$headers.="Subject: $subject";
 //   $headers.="Phone: $phone";
 //   $headers.="Message: $msg";
$headers .= "Date: " . date ('D, d M Y h:i:s O') . "\r\n";
//$headers .= "Bcc: birthday-archive@example.com\r\n";



mail($to, $subject, $message, $headers);
include_once ("1c_put.php");
header('Location: Thanks.php');