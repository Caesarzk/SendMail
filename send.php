<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lexlehovich@gmail.com';
$mail->Password = 'mfqdxlbbaywewuqb'
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('lexlehovich@gmail.com');
$mail->addAddress('mihalkevichartiom@gmail.com')
$mail ->Body = $_POST["name"];
$mail->send();
?>