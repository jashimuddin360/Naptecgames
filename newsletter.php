<?php
require_once './inc/DB.class.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if (isset($email)) {
    try {
        $addMail = DB::connect()->prepare("INSERT INTO newsletter(email) VALUES (?)");
        $addMail->execute([$email]);
        echo 'success';
    } catch (PDOException $e) {
        echo "failed";
    }
}
