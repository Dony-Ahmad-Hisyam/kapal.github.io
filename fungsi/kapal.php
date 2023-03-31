<?php
include_once('../fungsi/config.php');
$nama_kapal = $_POST['nama_kapal'];
$id_pemilik = $_POST['id_pemilik'];
$id_dpi = $_POST['id_dpi'];
$id_alat_tangkap = $_POST['id_alat_tangkap'];

$data = mysqli_query($connection,"INSERT INTO kapal(nama_kapal,id_pemilik,id_dpi,id_alat_tangkap) VALUES('$nama_kapal','$id_pemilik','$id_dpi','$id_alat_tangkap')");

if($data){
    echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/kapal.php">';
}else{
    echo "Gagal";
}


?>