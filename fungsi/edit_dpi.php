<?php
include_once("../fungsi/config.php");
$nama_dpi = $_POST['nama_dpi'];
$id_dpi = $_POST['id_dpi'];
$luas = $_POST['luas'];

$data = mysqli_query($connection, "UPDATE dpi SET nama_dpi='$nama_dpi', luas='$luas' WHERE id_dpi='$id_dpi'");

if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/dpi.php">';
}else{
    echo "failed";
}
?>
