<?php
include_once("../fungsi/config.php");
$id_pemilik = $_GET['id'];

$change = mysqli_query($connection,"SELECT * FROM pemilik WHERE id_pemilik='$id_pemilik'");
$data = mysqli_query($connection, "DELETE FROM pemilik WHERE id_pemilik='$id_pemilik'");
$result = mysqli_fetch_array($change);
unlink('../upload/'.$result['biodata']);

if($data){
    echo '<script>alert("Berhasil di DELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/pemilik.php">';
}else{
    echo"Failed";
}
?>