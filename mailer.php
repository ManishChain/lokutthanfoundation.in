<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.9.1/src/PHPMailer.php';
require 'PHPMailer-6.9.1/src/Exception.php';
require 'PHPMailer-6.9.1/src/SMTP.php';

function sendEmail($recipientEmail, $recipientName, $subject, $body) {
    // Load SMTP configuration
    $config = require 'config.php';

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP(); 
        $mail->Host = $config['host']; 
        $mail->SMTPAuth = true; 
        $mail->Username = $config['username']; 
        $mail->Password = $config['password']; 
        $mail->SMTPSecure = $config['smtp_secure']; 
        $mail->Port = $config['port']; 

        //Recipients
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($recipientEmail, $recipientName); 

        //Content
        $mail->isHTML(false); 
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Attempt to send email
        return $mail->send();
    } catch (Exception $e) {
        // Optionally log the error or handle it in a specific way
        return false;
    }
}
?>
