<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // Php Mailer là một thư viện giúp chúng ta có thể gửi email đến người dùng trên website một cách dễ dàng, tỉ lệ thành công cao

   
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'truongkp703052001@gmail.com';
    $mail->Password = '0947448771a'; 
    $mail->SMTPSecure = "TLS";
    $mail->Port = 587; 

    
 
   
