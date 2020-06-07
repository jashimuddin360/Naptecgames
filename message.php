<?php
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
$fullName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer( true );
if ( $fullName && $email && $subject ) {
    try {
        $mail->Host = "mail.naptechgames.com";
        $mail->SMTPAuth = true;
        $mail->Username = "info@naptechgames.com";
        $mail->Password = 'NTGames20Team&$I';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        $mail->setFrom( "{$email}" );
        $mail->addAddress( 'info@naptechgames.com' );
        $mail->Subject = "{$subject}";
        $mail->Body = "Name: {$fullName}<br>Phone: {$phone}<br><br><br> {$message}";
        $mail->isHTML( true );
        $mail->send();
        echo "success";
    } catch ( Exception $e ) {
        echo "failed";
    }
}
