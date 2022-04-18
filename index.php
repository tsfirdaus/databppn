<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>DataBppn</title>
</head>

<body>
    <div class="head">
        <header>
            <p><b>DATABPPN</b></p>
            <nav class="style">
                <ul class="menu">
                    <li class="current"><a href="#home" data-hover="Home">Home</a></li>
                    <li><a href="ormasbppn/lihat.php" data-hover="ormasbppn">OrmasBppn</a></li>
                    <li><a href="proper/ang2021/lihat.php" data-hover="ProPer">ProPer</a></li>
                    <li><a href="contact.php" data-hover="Contact">Contact</a></li>
                    <li><a href="login/login.php" data-hover="AI"><img src="img/user.png" width='20px' alt="" srcset=""></a></li>
                </ul>
            </nav>
        </header>
        <div id="home" class="home">
            <p class="selamat">Selamat Datang!<br>di <b>DATABPPN</b> <br> </p>
            <img  src="img/Frame 3 (2) (1).png" alt="">
        </div>
    </div>
</body>


</html>