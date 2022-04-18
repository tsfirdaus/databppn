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
            <li><a href="../lang2022/lihat.php" data-hover="Langkah-Langkah 2022">Langkah-Langkah 2022</a></li>
            <li class="current"><a href="#ang" data-hover="Anggaran dan Kinerja 2022">Anggaran dan Kinerja 2022</a></li>
        </ul>
    </div>
    <h2 id="ang">Rincian Program, Kegiatan, Sub Kegiatan, Anggaran dan Kinerja Badan <br> Kesatuan Bangsa dan Politik Tahun 2022.</h2>
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
            <th colspan="2">Anggaran</th>
            <th colspan="2">Kinerja</th>
            <th rowspan="2">% kinerja</th>
            <th rowspan="2">Keterangan</th>
            <th rowspan="2">action</th>
        </tr>
        <tr>
            <th>Alokasi (Rp)</th>
            <th>Realisasi (Rp)</th>
            <th>Target</th>
            <th>Realisasi</th>
        </tr>
        <?php 
        $no=1;
        $alokasi = 0;
        $realisasi = 0;
        $kinerja = 0;
        $ambildata = mysqli_query($conn,"SELECT * FROM ang2021");
        $kinerja1 = mysqli_num_rows($ambildata);
        $ambildata = mysqli_query($conn,"SELECT * FROM ang2022");
        while($tampil = mysqli_fetch_array($ambildata)):
            $alokasi += $tampil['alokasi'];
            $realisasi += $tampil['realisasi_rp'];
            $alokasi += $tampil['alokasi'];
            $realisasi += $tampil['realisasi_rp'];
            $kinerja += $tampil['kinerja'];
            $counta = $kinerja / $kinerja1;
        ?>
        <tr>
            <td class="center"><?= $no;?></td>
            <td class="center"><?= $tampil['program'];?></td>
            <td class="center"><?= $tampil['kegiatan'];?></td>
            <td class="center"><?= $tampil['sub_kegiatan'];?></td>
            <td class="center">Rp.<?= number_format($tampil['alokasi']);?></td>
            <td class="center">Rp.<?=number_format($tampil['realisasi_rp']); ?></td>
            <td class="center"><?= $tampil['target'];?></td>
            <td class="center"><?= $tampil['realisasi'];?></td>
            <td class="center"><?= $tampil['kinerja'];?>%</td>
            <td class="center"><?= $tampil['keterangan'];?></td>
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
        <tr class="jumlah">
            <td colspan="4" ><b>Jumlah:</b></td>
            <td ><b>Rp.<?php echo number_format($alokasi); ?></b></td>
            <td ><b>Rp.<?= number_format($realisasi); ?></b></td>
            <td></td>
            <td></td>
            <td><b><?= number_format($counta); ?>%</b></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>