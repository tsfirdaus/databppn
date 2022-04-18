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
    <title>Update data</title>
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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan judul_buku id
    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="SELECT * FROM ang2022 WHERE id=$id";
        $hasil=mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
        $program=input($_POST["program"]);
        $kegiatan=input($_POST["kegiatan"]);
        $sub_kegiatan=input($_POST["sub_kegiatan"]);
        $alokasi=input($_POST["alokasi"]);
        $realisasi_rp=input($_POST["realisasi_rp"]);
        $target=input($_POST["target"]);
        $realisasi=input($_POST["realisasi"]);
        $kinerja=input($_POST["kinerja"]);
        $keterangan=input($_POST["keterangan"]);
        //Query update data pada tabel anggota
        $sql="update ang2022 set
			program='$program',
			kegiatan='$kegiatan',
			sub_kegiatan='$sub_kegiatan',
			alokasi='$alokasi',
			realisasi_rp='$realisasi_rp',
			target='$target',
			realisasi='$realisasi',
			kinerja='$kinerja',
			keterangan='$keterangan'
			where id=$id";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:lihat.php");
        }
        else {
        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Program :</label>
            <input type="text" name="program" class="form-control" value="<?php echo $data['program']; ?>" placeholder="Masukan Program" required />
        </div>
        <div class="form-group">
            <label>Kegiatan :</label>
            <input type="text" name="kegiatan" class="form-control" value="<?php echo $data['kegiatan']; ?>" placeholder="Masukan Kegiatan" required/>

        </div>
        <div class="form-group">
            <label>Sub Kegiatan :</label>
            <input type="text" name="sub_kegiatan" class="form-control" value="<?php echo $data['sub_kegiatan']; ?>" placeholder="Masukan Sub Kegiatan"/>
        </div>
        <div class="form-group">
            <label>Alokasi (Rp) :</label>
            <input type="text" name="alokasi" class="form-control" value="<?php echo $data['alokasi']; ?>" placeholder="Masukan Alokasi (Rp)" />
        </div>
        <div class="form-group">
            <label>Realisasi (Rp):</label>
            <input type="text" name="realisasi_rp" class="form-control" value="<?php echo $data['realisasi_rp']; ?>" placeholder="Masukan Realisasi (Rp)" />
        </div>
        <div class="form-group">
            <label>Target :</label>
            <input type="text" name="target" class="form-control" value="<?php echo $data['target']; ?>" placeholder="Masukan Target" />
        </div>
        <div class="form-group">
            <label>Realisasi :</label>
            <input type="text" name="realisasi" class="form-control" value="<?php echo $data['realisasi']; ?>" placeholder="Masukan Realisasi" />
        </div>
        <div class="form-group">
            <label>% Kinerja :</label>
            <input type="text" name="kinerja" class="form-control" value="<?php echo $data['kinerja']; ?>" placeholder="Masukan Kinerja (%)" required/>
        </div>
        <div class="form-group">
            <label>Keterangan :</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $data['keterangan']; ?>" placeholder="Masukan Keterangan"/>
        </div>


        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <div class="go">
        <a href="lihat.php" class="btn btn-outline-primary" role="button"><img width="40px" src="../img/back-button.png" alt=""></a>
        <button type="submit" name="submit" class="button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>