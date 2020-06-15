<?php
require_once "../PHPMailer/PHPMailer.php";
require_once "../PHPMailer/Exception.php";
require_once "../PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$fullName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
$teamMail = filter_input(INPUT_POST, 'teamMail', FILTER_SANITIZE_EMAIL);

$mailPassword = [
    'mushfiqur@naptechgames.com' => 'Password@2020',
    'suzana@naptechgames.com' => 'NapTechGames005@#LiGht005',
    'mazma@naptechgames.com' => '1920mma2029',
    'rakib@naptechgames.com' => 'NapTechGamesRakib',
];

foreach ($mailPassword as $mail => $password) {
    if ($teamMail == $mail) {
        $teamPassword = $password;
    }
}

$mail = new PHPMailer(true);
if ($fullName && $email && $subject) {
    try {
        $mail->Host = "mail.naptechgames.com";
        $mail->SMTPAuth = true;
        $mail->Username = "{$teamMail}";
        $mail->Password = "{$teamPassword}";
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        $mail->setFrom("{$email}");
        $mail->addAddress("{$teamMail}");
        $mail->Subject = "{$subject}";
        $mail->Body = "Name: {$fullName}<br><br><br> {$message}";
        $mail->isHTML(true);
        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "failed";
    }
}
