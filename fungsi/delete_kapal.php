<?php
include_once("../fungsi/config.php");
$id_kapal = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM kapal WHERE id_kapal='$id_kapal'");

if($data){
    echo '<script>alert("Berhasil di DELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/kapal.php">';
}else{
    echo"Failed";
}
?> 