<?php
include_once('config.php');

$nama_pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$file = $_FILES['biodata']['name'];
$ukuran = $_FILES['biodata']['size'];
$tipe = $_FILES['biodata']['type'];
$tmp = $_FILES['biodata']['tmp_name'];

$path = "../upload/".$file;

if($tipe == "image/jpeg" || $tipe == "image/png"){
    if($ukuran <= 1000000){
        if(move_uploaded_file($tmp, $path)){
            $data = mysqli_query($connection,"INSERT INTO pemilik(nama_pemilik,alamat,no_hp,biodata) VALUES('$nama_pemilik','$alamat','$no_hp','$file')");
                if($data){
                      echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
                      echo '<meta http-equiv="refresh" content="0.2;url=../main/pemilik.php">';
                }else{
                      echo "Gagal";
                }
        }else {
            echo "Upload Failed";
        }
    }else { 
        echo "ukuran";
    }
}else {
    echo "type";
}




?>
