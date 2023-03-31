<?php
include_once('config.php');

$nama_alat_tangkap = $_POST['nama_alat_tangkap'];

$data = mysqli_query($connection,"INSERT INTO alat_tangkap(nama_alat_tangkap) VALUES('$nama_alat_tangkap')");
if($data){
    echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/alat_tangkap.php">';
}else{
    echo "Gagal";
}


?>
