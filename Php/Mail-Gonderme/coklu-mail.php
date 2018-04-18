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

$data = [
    [
        "id" => 1,
        "name" => "Kadir",
        "email" => "kdrksm@gmail.com"
    ],
    [
        "id" => 2,
        "name" => "ahmet",
        "email" => "benkadirkasim.com"
    ],
    [
        "id" => 4,
        "name" => "mehmet",
        "email" => "me@kadirkasim.com"
    ]
];


foreach ($data as $d){
    $mail->addAddress($d["email"]);

    $body = file_get_contents('./mail-template.html');

    $gelen = ["username","userID"];
    $giden = [$d["name"],$d["id"]];

    $body = str_replace($gelen,$giden,$body);

    $mail->isHTML(true);
    $mail->Subject = "Hosgeldin ".$d["name"];
    $mail->Body = $body;

    if ($mail->send())
        echo "Mail gonderimi basarili.";
    else
        echo "Malesef olmadi. HATA : ".$mail->ErrorInfo;

    $mail->clearAddresses();
    $mail->clearAttachments();
}

?>