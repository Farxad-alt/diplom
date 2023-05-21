<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . "/libs/PHPMailer/Exception.php";
require __DIR__ . "/libs/PHPMailer/PHPMailer.php";
require __DIR__ . "/libs/PHPMailer/SMTP.php";

$firstName = $_POST["firstName"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];

$mail = new PHPMailer(true);

try {


	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->Host       = 'smtp.mail.ru';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'venzil@mail.ru';
	$mail->Password   = 'iW1fmCaqYQwqb8y9kuHU';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port       = 465;

	//Recipients
	$mail->setFrom('venzil@mail.ru', 'site Diplom');
	$mail->addAddress('venzil@mail.ru', 'site Diplom');




	//Content
	$mail->isHTML(true);
	$mail->Subject = "Сообщение от $firstName";
	$mail->Body    = "email: $email<br>phoneNumber: $phoneNumber<br>";

	$mail->send();

	header("location:/");
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
