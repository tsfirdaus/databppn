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
    <link rel="stylesheet" href="../style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../../config.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $program=input($_POST["program"]);
        $kegiatan=input($_POST["kegiatan"]);
        $sub_kegiatan=input($_POST["sub_kegiatan"]);
        $alokasi=input($_POST["alokasi"]);
        $realisasi_rp=input($_POST["realisasi_rp"]);
        $target=input($_POST["target"]);
        $realisasi=input($_POST["realisasi"]);
        $kinerja=input($_POST["kinerja"]);
        $keterangan=input($_POST["keterangan"]);
        


        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO ang2022 VALUES ('','$program','$kegiatan','$sub_kegiatan','$alokasi'
                                            ,'$realisasi_rp','$target','$realisasi','$kinerja','$keterangan');";

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
            <label>Nama Program	: <br></label>
            <input type="text" name="program" class="form-control" placeholder="Masukan Nama Program" required />

        </div>
        <div class="form-group">
            <label>Nama Kegiatan : <br></label>
            <input type="text" name="kegiatan" class="form-control" placeholder="Masukan Nama Kegiatan" required/>

        </div>
        <div class="form-group">
            <label>Nama Sub Kegiatan : <br></label>
            <input type="text" name="sub_kegiatan" class="form-control" placeholder="Masukan Sub Kegiatan" ></input>
        </div>
        <div class="form-group">
            <label>Alokasi (Rp) : <br></label>
            <input type="text" name="alokasi" class="form-control" placeholder="Masukan Alokasi (Rp)"/>
        </div>
        <div class="form-group">
            <label>Realisasi (Rp) : <br></label>
            <input type="text" name="realisasi_rp" class="form-control" placeholder="Masukkan Realisasi (Rp)"/>
        </div>
        <div class="form-group">
            <label>Target: <br></label>
            <input type="text" name="target" class="form-control" placeholder="Masukkan Target"/>
        </div>
        <div class="form-group">
            <label>Realisasi : <br></label>
            <input type="text" name="realisasi" class="form-control" placeholder="Masukkan Realisasi"/>
        </div>
        <div class="form-group">
            <label>Kinerja : <br></label>
            <input type="text" name="kinerja" class="form-control" placeholder="Masukkan Kinerja"/>
        </div>
        <div class="form-group">
            <label>Keterangan : <br></label>
            <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan"/>
        </div>
        
        <div class="go">
        <a href="lihat.php" class="btn btn-outline-primary" role="button"><img width="40px" src="../../img/back-button.png" alt=""></a>
        <button type="submit" name="submit" class="button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>