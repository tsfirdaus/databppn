<?php 
    require '../../config.php';
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
    <link rel="stylesheet" href="../style.css">
    <title>ormasbppn</title>
</head>

<body>
    <div class="head">
        <header>
            <p><b>DATABPPN</b></p>
            <nav class="style-4">
                <ul class="menu-4">
                    <li><a href="../../index.php" data-hover="Home">Home</a></li>
                    <li><a href="../../ormasbppn/lihat.php" data-hover="Ormasbppn">Ormasbppn</a></li>
                    <li class="current"><a href="#" data-hover="ProPer">ProPer</a></li>
                    <li><a href="../../contact.php" data-hover="Contact">Contact</a></li>
                    <li><a href="../../login/login.php" data-hover="AI"><img src="../../img/user.png" width='20px' alt=""
                                srcset=""></a></li>
                </ul>
            </nav>
        </header>
    </div>
    <br>
    <br>
    <div class="menu-5">
        <ul>
            <li><a href="../ang2021/lihat.php" data-hover="Anggaran dan Kinerja 2021">Anggaran dan Kinerja 2021</a></li>
            <li class="current"><a href="#lang" data-hover="Langkah-Langkah 2022">Langkah-Langkah 2022</a></li>
            <li><a href="../ang2022/lihat.php" data-hover="Anggaran dan Kinerja 2022">Anggaran dan Kinerja 2022</a></li>
        </ul>
    </div>
    <h2 id="lang">Langkah-langkah yang akan dilaksanakan pada masing-masing Program, Kegiatan, Sub <br> Kegiatan dan Kinerja yang sedang dan belum diselesaikan Tahun 2022.</h2>
<div class="create">
    <a href="create.php" id="rotate"><img width="34px" src="../../img/plus.png" alt=""></a>
    <p>Tambah Data</p>
</div>
    <table class="table" align="center">
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Program</th>
            <th rowspan="2">Kegiatan</th>
            <th rowspan="2">Sub Kegiatan</th>
            <th colspan="2">Kinerja</th>
            <th rowspan="2">Keterangan (Selesai/Sedang/Belum dilaksanakan)</th>
            <th rowspan="2">Langkah-langkah yang akan/sedang dilaksanakan</th>
            <th rowspan="2">action</th>
        </tr>
        <tr>
            <th>Target</th>
            <th>Realisasi</th>
        </tr>
        <?php 
        $no=1;
        $ambildata = mysqli_query($conn,"SELECT * FROM langkah_2022");
        while($tampil = mysqli_fetch_array($ambildata)):
        ?>
        <tr>
            <td class="center"><?= $no;?></td>
            <td class="center"><?= $tampil['program'];?></td>
            <td class="center"><?= $tampil['kegiatan'];?></td>
            <td class="center"><?= $tampil['sub_kegiatan'];?></td>
            <td class="center"><?= $tampil['target'];?></td>
            <td class="center"><?= $tampil['realisasi'];?></td>
            <td class="center"><?= $tampil['keterangan'];?></td>
            <td class="center"><?= $tampil['langkah2'];?></td>
            <td>
                <ul>
                <li class="refresh"><a href="update.php?id=<?= $tampil['id'];?>"><img width="24px" src="../../img/refresh.png"
                                alt=""></a><br><br></li>
                    <li><a href="delete.php?id=<?= $tampil['id'];?>"><img width="24px" src="../../img/delete.png"
                                alt=""></a></li>
                </ul>
            </td>
        </tr>
        
        <?php $no++;?>
        <?php endwhile;?>
    </table>

</body>

</html>