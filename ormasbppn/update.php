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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan judul_buku id
    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="SELECT * FROM ormasbppn WHERE id=$id";
        $hasil=mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
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
        //Query update data pada tabel anggota
        $sql="update ormasbppn set
			nama='$nama',
			sifat='$sifat',
			nosk='$nosk',
			jab1='$jab1',
			jab2='$jab2',
			jab3='$jab3',
			jab4='$jab4',
			alamat='$alamat',
			tempat='$tempat',
			notelp='$notelp',
			npwp='$npwp',
			skm='$skm',
			skm1='$skm1',
			ket='$ket'
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
            <label>Nama Ormas dan Singkatan:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Nama Ormas dan Singkatan" required />
        </div>
        <div class="form-group">
            <label>Sifat Kekhususan Bidang Kegiatan:</label>
            <input type="text" name="sifat" class="form-control" value="<?php echo $data['sifat']; ?>" placeholder="Masukan Sifat Kekhususan Bidang Kegiatan" required/>

        </div>
        <div class="form-group">
            <label>Nomor SK Kemenkumham / SKT Kemendagri dan SKM:</label>
            <input type="text" name="nosk" class="form-control" value="<?php echo $data['nosk']; ?>" placeholder="Masukan Nomor SK Kemenkumham / SKT Kemendagri dan SKM	"/>
        </div>
        <div class="form-group">
            <label>Ketua pengurus:</label>
            <input type="text" name="jab1" class="form-control" value="<?php echo $data['jab1']; ?>" placeholder="Masukan Ketua pengurus" />
        </div>
        <div class="form-group">
            <label>Wakil ketua pengurus:</label>
            <input type="text" name="jab2" class="form-control" value="<?php echo $data['jab2']; ?>" placeholder="Masukan Wakil ketua pengurus" />
        </div>
        <div class="form-group">
            <label>Seketaris pengurus:</label>
            <input type="text" name="jab3" class="form-control" value="<?php echo $data['jab3']; ?>" placeholder="Masukan Seketaris pengurus" />
        </div>
        <div class="form-group">
            <label>Bendahara pengurus:</label>
            <input type="text" name="jab4" class="form-control" value="<?php echo $data['jab4']; ?>" placeholder="Masukan Bendahara pengurus" />
        </div>
        <div class="form-group">
            <label>Alamat Sekretariat:</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" placeholder="Masukan Alamat Sekretariat" required/>
        </div>
        <div class="form-group">
            <label>Tempat Kedudukan Pengurus:</label>
            <input type="text" name="tempat" class="form-control" value="<?php echo $data['tempat']; ?>" placeholder="Masukan Tempat Kedudukan Pengurus"/>
        </div>
        <div class="form-group">
            <label>No Telepon. HP:</label>
            <input type="text" name="notelp" class="form-control" value="<?php echo $data['notelp']; ?>" placeholder="Masukan No Telepon. HP"/>
        </div>
        <div class="form-group">
            <label>NPWP:</label>
            <input type="text" name="npwp" class="form-control" value="<?php echo $data['npwp']; ?>" placeholder="Masukan NPWP" />
        </div>
        <div class="form-group">
            <label>Masa Berlaku SKM:</label>
            <div class="skmo">
            <input type="text" name="skm" class="form-control" value="<?php echo $data['skm']; ?>" placeholder="Masukan Masa Berlaku SKM" required/>
            <label class="sampai">S/D</label>
            <input type="text" name="skm1" class="form-control" value="<?php echo $data['skm1']; ?>" placeholder="Masukan Masa Berlaku SKM" required/>
            </div>
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <input type="text" name="ket" class="form-control" value="<?php echo $data['ket']; ?>" placeholder="Masukan Keterangan" required/>
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