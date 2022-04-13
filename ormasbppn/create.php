<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
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

        $kode_buku=input($_POST["kode_buku"]);
        $judul_buku=input($_POST["judul_buku"]);
        $penulis_buku=input($_POST["penulis_buku"]);
        $penerbit_buku=input($_POST["penerbit_buku"]);
        $tahun_penerbit=input($_POST["tahun_penerbit"]);


        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO data_buku VALUES ('','$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku','$tahun_penerbit');";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:book.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Kode Buku:</label>
            <input type="text" name="kode_buku" class="form-control" placeholder="Masukan Kode Buku" required />

        </div>
        <div class="form-group">
            <label>Judul Buku:</label>
            <input type="text" name="judul_buku" class="form-control" placeholder="Masukan Judul Buku" required/>

        </div>
        <div class="form-group">
            <label>Penulis Buku:</label>
            <input name="penulis_buku"d class="form-control" placeholder="Masukan Penulis Buku" required></input>
        </div>
        <div class="form-group">
            <label>Penerbit Buku:</label>
            <input type="text" name="penerbit_buku" class="form-control" placeholder="Masukan Penerbit Buku" required/>
        </div>
        <div class="form-group">
            <label>Tahun Penerbit:</label>
            <input type="date" name="tahun_penerbit" class="form-control" placeholder="Masukkan Tahun Penerbit" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="book.php" class="btn btn-outline-primary" role="button">Kembali</a>
    </form>
</div>
</body>
</html>