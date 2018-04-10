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


$mail->setFrom("kadir.ytube@gmail.com","Youtube");
$mail->addAddress("kdrksm@gmail.com" , "Kadir Kasim");


$mail->isHTML(true);
$mail->Subject = "Gmail SMTP Ornegi";
$mail->Body = "<h1>Merhaba Kadir</h1><p>Bu bir denemedir.</p>";

$mail->addAttachment("dosya.txt");

if ($mail->send())
    echo "Mail gonderimi basarili.";
else
    echo "Malesef olmadi.";


?>