<?php
include_once("../fungsi/config.php");
$id_dpi = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM dpi WHERE id_dpi='$id_dpi'");

if($data){
    echo '<script>alert("Berhasil di DELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/dpi.php">';
}else{
    echo"Failed";
}
?> 