<?php 

    session_start();
    
    if (!isset($_SESSION["login"])) {
        echo "<script>
        alert('Anda bukan admin!');
        document.location.href='../login/login.php';
    </script>";
        exit;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../config.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $sifat=input($_POST["sifat"]);
        $nosk=input($_POST["nosk"]);
        $jab1=input($_POST["jab1"]);
        $jab2=input($_POST["jab2"]);
        $jab3=input($_POST["jab3"]);
        $jab4=input($_POST["jab4"]);
        $alamat=input($_POST["alamat"]);
        $tempat=input($_POST["tempat"]);
        $notelp=input($_POST["notelp"]);
        $npwp=input($_POST["npwp"]);
        $skm=input($_POST["skm"]);
        $skm1=input($_POST["skm1"]);
        $ket=input($_POST["ket"]);


        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO ormasbppn VALUES ('','$nama','$sifat','$nosk','$jab1'
                                            ,'$jab2','$jab3','$jab4','$alamat','$tempat',
                                            '$notelp','$npwp','$skm','$skm1','$ket');";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:lihat.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }
        echo mysqli_error($conn);
    }
    ?>

    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Nama Ormas dan Singkatan	: <br></label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Ormas dan Singkatan" required />

        </div>
        <div class="form-group">
            <label>Sifat Kekhususan Bidang Kegiatan	: <br></label>
            <input type="text" name="sifat" class="form-control" placeholder="Masukan Sifat Kekhususan Bidang Kegiatan" required/>

        </div>
        <div class="form-group">
            <label>Nomor SK Kemenkumham / SKT Kemendagri dan SKM: <br></label>
            <input name="nosk"d class="form-control" placeholder="Masukan Nomor SK Kemenkumham / SKT Kemendagri dan SKM" ></input>
        </div>
        <div class="form-group">
            <label>Ketua pengurus: <br></label>
            <input type="text" name="jab1" class="form-control" placeholder="Masukan Ketua Pengurus"/>
        </div>
        <div class="form-group">
            <label>Wakil Ketua pengurus: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus"/>
        </div>
        <div class="form-group">
            <label>Seketaris pengurus: <br></label>
            <input type="text" name="jab3" class="form-control" placeholder="Masukkan Seketaris pengurus"/>
        </div>
        <div class="form-group">
            <label>Bendahara pengurus: <br></label>
            <input type="text" name="jab4" class="form-control" placeholder="Masukkan Bendahara pengurus"/>
        </div>
        <div class="form-group">
            <label>Alamat Sekretariat: <br></label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Sekretariat" required/>
        </div>
        <div class="form-group">
            <label>Tempat Kedudukan Pengurus: <br></label>
            <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Kedudukan Pengurus"/>
        </div>
        <div class="form-group">
            <label>No Telepon. HP: <br></label>
            <input type="text" name="notelp" class="form-control" placeholder="Masukkan No Telepon. HP"/>
        </div>
        <div class="form-group">
            <label>NPWP: <br></label>
            <input type="text" name="npwp" class="form-control" placeholder="Masukkan NPWP"/>
        </div>
        <div class="form-group">
            <label>Masa Berlaku SKM: <br></label>
            <div class="skmo">
            <input type="text" name="skm" class="form-control" placeholder="Masukkan Masa Berlaku SKM" required/>
            <label class="sampai">S/D</label>
            <input type="text" name="skm1" class="form-control" placeholder="Masukkan Masa Berlaku SKM" required/>
            </div>
        </div>
        <div class="form-group">
            <label>Keterangan: <br></label>
            <input type="text" name="ket" class="form-control" placeholder="Masukkan Keterangan" required/>
        </div>
        <div class="go">
        <a href="lihat.php" class="btn btn-outline-primary" role="button"><img width="40px" src="../img/back-button.png" alt=""></a>
        <button type="submit" name="submit" class="button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>