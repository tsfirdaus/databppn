<?php 
    require '../config.php';
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
    }
?>