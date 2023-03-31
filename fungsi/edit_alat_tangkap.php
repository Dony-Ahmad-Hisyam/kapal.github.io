<?php
include_once("../fungsi/config.php");
$nama_alat_tangkap = $_POST['nama_alat_tangkap'];
$id_alat_tangkap = $_POST['id_alat_tangkap'];

$data = mysqli_query($connection, "UPDATE alat_tangkap SET nama_alat_tangkap='$nama_alat_tangkap' WHERE id_alat_tangkap='$id_alat_tangkap'");

if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/alat_tangkap.php">';
}else{
    echo "failed";
}
?>
