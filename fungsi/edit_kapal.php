<?php
include_once("../fungsi/config.php");
$id_kapal = $_POST['id_kapal'];
$nama_kapal = $_POST['nama_kapal'];
$id_pemilik = $_POST['id_pemilik'];
$id_dpi = $_POST['id_dpi'];
$id_alat_tangkap = $_POST['id_alat_tangkap'];
$data = mysqli_query($connection,"UPDATE  kapal SET nama_kapal ='$nama_kapal', id_pemilik = '$id_pemilik', id_dpi='$id_dpi', id_alat_tangkap = '$id_alat_tangkap' WHERE id_kapal = '$id_kapal' ");

if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/kapal.php">';

}else{
    echo "failed";
}

?>