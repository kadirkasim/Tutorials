<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();


$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //ssl

$mail->Port = 587; //25 , 465 , 587
$mail->Host = "smtp.gmail.com";

$mail->Username = "kadir.ytube@gmail.com";
$mail->Password = "Asd12345";


$mail->setFrom("kadir.ytube@gmail.com");
$mail->addAddress("kdrksm@gmail.com");

$body = file_get_contents('./mail-template.html');

$gelen = ["username","userID"];
$giden = ["Mehmet",8];

$body = str_replace($gelen,$giden,$body);

$mail->isHTML(true);
$mail->Subject = "Mail Template Ornegi";
$mail->Body = $body;

if ($mail->send())
    echo "Mail gonderimi basarili.";
else
    echo "Malesef olmadi.";


?>