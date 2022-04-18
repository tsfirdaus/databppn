<?php 
    require '../config.php';

    
    session_start();
    
    if (!isset($_SESSION["login"])) {
        echo "<script>
        alert('Anda bukan admin!');
        document.location.href='../login/login.php';
    </script >";
        exit;
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM ormasbppn WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    $id = $_GET['id'];
    if(hapus($id)>0){
        echo "<script>
                alert('data berhasil dihapus!');
                document.location.href='lihat.php';
            </script>";
    }else{
        echo "<script>
        alert('data gagal dihapus!');
        document.location.href='lihat.php';
    </script>";
    }
?>