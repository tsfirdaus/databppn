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
            <nav class="topnav">
                <ul class="menuk">
                    <li><a href="index.php" data-hover="Home">Home</a></li>
                    <li><a href="ormas.php" data-hover="ormasbppn">OrmasBppn</a></li>
                    <li><a href="proker.php" data-hover="ProKer">ProKer</a></li>
                    <li class="current"><a href="contact.php" data-hover="Contact">Contact</a></li>
                    <li><a href="fungsi/login/login.php" data-hover="AI"><img src="img/user.png" width='20px' alt="" srcset=""></a></li>
                </ul>
            </nav>
</header>
</div>
<div>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
    <div class="container">
        <div class="layanan satu">
        <h2>CONTACT</h2>
        <ul>
            <div class="siap">
            <li><a class="medsos" href="#"><img width="60px" src="img/whatsapp.png">whatsapp</a></li>
            </div>
            <div class="siap">
            <li><a class="medsos" href="#"><img width="60px" src="img/instagram.png">instagram</a></li>
            </div>
            <div class="siap">
            <li><a class="medsos" href="#"><img width="60px" src="img/youtube.png">youtube</a></li>
            </div>
            <div class="siap">
            <li><a class="medsos" href="#"><img width="60px" src="img/gps.png">alamat</a></li>
            </div>
        </ul>
        </div>
        <div class="layanan dua">
        <?php
    //Include file koneksi, untuk koneksikan ke database
    include "config.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Nama=input($_POST["Nama"]);
        $email=input($_POST["email"]);
        $telp=input($_POST["telp"]);
        $komen=input($_POST["komen"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into masukan (Nama,email,telp,komen) values
		('$Nama','$email','$telp','$komen')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> gagal.</div>";

        }

    }
    ?>
            <h2>FEED BACK</h2>
            
   

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="feedback">
        <div class="form-group">
            <input type="text" name="Nama" class="form-control" placeholder="Masukan Nama Anda" required />

        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required/>

        </div>
        <div class="form-group">
            <input type="text" name="telp" class="form-control" placeholder="No Telp" required/>

        </div>
        <div class="form-group">
            <input type="text" name="komen" class="form-control" placeholder="Komentar" required/>
        </div>
        

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
            
           
        
    </div>
</body>