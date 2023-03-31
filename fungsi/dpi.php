<?php
include_once('config.php');

$nama_dpi = $_POST['nama_dpi'];
$luas = $_POST['luas'];

$data = mysqli_query($connection,"INSERT INTO dpi(nama_dpi,luas) VALUES('$nama_dpi','$luas')");
if($data){
    echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/dpi.php">';;
}else{
    echo "Gagal";
}


?>
