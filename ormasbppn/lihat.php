<?php 
    require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ormasbppn</title>
</head>

<body>
    <div class="head">
        <header>
            <p><b>DATABPPN</b></p>
            <nav class="style-4">
                <ul class="menu-4">
                    <li><a href="../index.php" data-hover="Home">Home</a></li>
                    <li class="current"><a href="#ormas" data-hover="Ormasbppn">Ormasbppn</a></li>
                    <li><a href="../proper/ang2021/lihat.php" data-hover="ProPer">ProPer</a></li>
                    <li><a href="../contact.php" data-hover="Contact">Contact</a></li>
                    <li><a href="../login/login.php" data-hover="AI"><img src="../img/user.png" width='20px' alt="" srcset=""></a></li>
                </ul>
            </nav>
        </header>
    </div>
    <h2 id="ormas">DAFTAR ORGANISASI KEMASYARAKATAN YANG TERDAFTAR DI <br> BADAN KESBANGPOL BALIKPAPAN</h2>
    <div class="create">
    <a href="create.php" id="rotate"><img width="34px" src="../img/plus.png" alt=""></a>
    <p>Tambah Data</p>
</div>
    <table class="table" align="center">
        <tr>
            <th>No</th>
            <th>Nama Ormas dan Singkatan</th>
            <th>Sifat Kekhususan Bidang Kegiatan</th>
            <th>Nomor SK Kemenkumham / SKT Kemendagri dan SKM</th>
            <th>Nama Pengurus</th>
            <th>Alamat Sekretariat</th>
            <th>Tempat Kedudukan Pengurus /No Telepon. HP</th>
            <th>NPWP</th>
            <th>Masa Berlaku SKM</th>
            <th>Keterangan</th>
            <th>action</th>
        </tr>
        <?php 
        $no=1;
        $ambildata = mysqli_query($conn,"SELECT * FROM ormasbppn");
        while($tampil = mysqli_fetch_array($ambildata)):
        ?>
        <tr>
            <td class="center" rowspan="4"><?= $no;?></td>
            <td class="center" rowspan="4"><?= $tampil['nama'];?></td>
            <td class="center" rowspan="4"><?= $tampil['sifat'];?></td>
            <td class="center" rowspan="4"><?= $tampil['nosk'];?></td>
            <td class="center">Ketua :<?= $tampil['jab1'];?></td>
            <td class="center" rowspan="4"> <?= $tampil['alamat']; ?></td>
            <td class="center" rowspan="4"><?= $tampil['tempat'];?>/<br><?= $tampil['notelp'];?></td>
            <td class="center" rowspan="4"><?= $tampil['npwp'];?></td>
            <td class="center" rowspan="4"><?= $tampil['skm'];?> s/d <?= $tampil['skm1'];?></td>
            <td class="center" rowspan="4"><?= $tampil['ket'];?></td>
            <td rowspan="4">
                <ul>
                    <li class="refresh"><a href="update.php?id=<?= $tampil['id'];?>"><img width="24px"
                                src="../img/refresh.png" alt=""></a><br><br></li>
                    <li><a href="delete.php?id=<?= $tampil['id'];?>"><img width="24px" src="../img/delete.png"
                                alt=""></a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="center">Wakil ketua: <?= $tampil['jab2'];?></td>
        </tr>
        <tr>
            <td class="center">Seketaris: <?= $tampil['jab3'];?></td>
        </tr>
        <tr>
            <td class="center">Bendahara: <?= $tampil['jab4'];?></td>
        </tr>
        <?php $no++;?>
        <?php endwhile;?>
    </table>
</body>

</html>