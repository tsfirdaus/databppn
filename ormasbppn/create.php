<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="style1.css">
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
        $ket=input($_POST["ket"]);


        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO data_buku VALUES ('','$nama','$sifat','$nosk','$jab1','$jab2','$jab3','$jab4','$alamat','$tempat','$notelp','$npwp','$skm','$ket');";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

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
            <input name="nosk"d class="form-control" placeholder="Masukan Nomor SK Kemenkumham / SKT Kemendagri dan SKM" required></input>
        </div>
        <div class="form-group">
            <label>Ketua pengurus: <br></label>
            <input type="text" name="jab1" class="form-control" placeholder="Masukan Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Wakil Ketua pengurus: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Seketaris pengurus: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Seketaris pengurus" required/>
        </div>
        <div class="form-group">
            <label>Bendahara pengurus: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Alamat Sekretariat: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Tempat Kedudukan Pengurus: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>No Telepon. HP: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>NPWP: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Masa Berlaku SKM: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <div class="form-group">
            <label>Keterangan: <br></label>
            <input type="text" name="jab2" class="form-control" placeholder="Masukkan Wakil Ketua Pengurus" required/>
        </div>
        <a href="lihat.php" class="btn btn-outline-primary" role="button">Kembali</a>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>