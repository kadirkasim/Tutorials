<?php

    if (isset($_POST["email"])){

        $kime = "ben@kadirkasim.com";
        $konu = $_POST["subject"];

        $mesaj = "<h1>".$_POST["message"]."</h1>";
        $baslik = "From: ".$_POST["name"]."<".$_POST["email"].">\r\n";
        $baslik .= "Reply-to : reply@kadirkasim.com\r\n";
        $baslik .= "Content-type: text/html\r\n";


        if(mail($kime,$konu,$mesaj,$baslik))
            echo "Emailiniz basariyla gonderilmistir.";
        else
            echo "Malesef emailiniz gonderilemedi.";
    }

    

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Mail Fonksiyonu</title>
    <style>
        *:focus{
            outline: 0;
        }
        h1{
            text-align: center;
            color: #666;
        }

        form{
            border: 1px solid #777;
            margin: 50px auto;
            width: 400px;
            padding:30px 50px;
            border-radius: 10px;
        }

        input{
            width: 100%;
            padding-left: 10px;
            margin-top: 10px;
            line-height: 35px;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea{
            width: 100%;
            height: 200px;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border-color: #888;
            box-sizing: border-box;
        }
        button{
            background-color: mediumseagreen;
            color: #fff;
            width: 100%;
            line-height: 35px;
            font-size: 17px;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover{
            background-color: limegreen;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <h1>Iletisim</h1>
    <input type="text" name="name" placeholder="Adiniz.."><br>
    <input type="text" name="subject" placeholder="Konu.."><br>
    <input type="text" name="email" placeholder="Emailiniz.."><br>
    <textarea name="message"></textarea><br>
    <button>Gonder</button>
</form>
</body>
</html>