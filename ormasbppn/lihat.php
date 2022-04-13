<?php 
    require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ormasbppn</title>
</head>
<body>
    <h2>DAFTAR ORGANISASI KEMASYARAKATAN YANG TERDAFTAR DI <br> BADAN KESBANGPOL BALIKPAPAN</h2>
    <div class="button">
        <button><a class="tbh" href="../index.php">Kembali</a></button>
        <button><a class="tbh" href="create.php">Tambahkan data!</a></button>
    </div>
    <table class="table" align="center">
        <tr>
            <th>No</th>
            <th>Nama Ormas dan Singkatan</th>
            <th>Sifat Kekhususan Bidang Kegiatan</th>
            <th>Nomor SK Kemenkumham / SKT Kemendagri dan SKM</th>
            <th >Nama Pengurus</th>
            <th>Alamat Sekretariat</th>
            <th >Tempat Kedudukan Pengurus /No Telepon. HP</th>
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
            <td class="center"><?= $no;?></td>
            <td class="center"><?= $tampil['nama'];?></td>
            <td class="center"><?= $tampil['sifat'];?></td>
            <td class="center"><?= $tampil['nosk'];?></td>
            <td >
                <ul >
                    <li>Ketua: <?= $tampil['jab1']; ?> <br><br></li>
                    <li>Wakil ketua: <?= $tampil['jab2']; ?> <br><br></li>
                    <li>Seketaris: <?= $tampil['jab3']; ?> <br><br></li>
                    <li>Bendahara: <?= $tampil['jab4']; ?> <br><br></li>
                </ul>
            </td>
            <td class="center"> <?= $tampil['alamat']; ?></td>
            <td class="center"><?= $tampil['tempat'];?>/<br><?= $tampil['notelp'];?></td>
            <td class="center"><?= $tampil['npwp'];?></td>
            <td class="center"><?= $tampil['skm'];?></td>
            <td class="center"><?= $tampil['ket'];?></td>
            <td> 
                <ul>
                    <li class="refresh"><a href=""><img  width="24px" src="../img/refresh.png" alt=""></a><br><br></li>
                    <li><a href="delete.php?id=<?= $tampil['id'];?>"><img width="24px" src="../img/delete.png" alt=""></a></li>
                </ul>
            </td>
        </tr>
        <?php $no++;?>
        <?php endwhile;?>
    </table>
</body>
</html>