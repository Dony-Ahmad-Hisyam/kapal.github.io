<?php
include_once("../fungsi/config.php");
$id_alat_tangkap = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM alat_tangkap WHERE id_alat_tangkap='$id_alat_tangkap'");

if($data){
    echo '<script>alert("Berhasil di DELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/alat_tangkap.php">';
}else{
    echo"Failed";
}
?> 