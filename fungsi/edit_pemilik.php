<?php
include_once("../fungsi/config.php");
$nama_pemilik = $_POST['nama_pemilik'];
$id_pemilik = $_POST['id_pemilik'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$file = $_FILES['biodata']['name'];
$ukuran = $_FILES['biodata']['size'];
$tipe = $_FILES['biodata']['type'];
$tmp = $_FILES['biodata']['tmp_name'];

$path = "../upload/".$file;

if($file != ""){
    $change = mysqli_query($connection,"SELECT * FROM pemilik WHERE id_pemilik='$id_pemilik'");
    $hasil = mysqli_fetch_array($change);
    unlink('../upload/'.$hasil['biodata']);

    if($tipe == "image/jpeg" || $tipe == "image/png"){
        if($ukuran <= 1000000){
            if(move_uploaded_file($tmp, $path)){
                 $result = mysqli_query($connection, "UPDATE pemilik SET nama_pemilik='$nama_pemilik', alamat='$alamat', no_hp='$no_hp', biodata='$file' WHERE id_pemilik='$id_pemilik'");

    if($result){
     echo '<script>alert("Berhasil diedit!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/pemilik.php">';
    }else{
        echo "failed";
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
    
    }else{
    $data = mysqli_query($connection, "UPDATE pemilik SET nama_pemilik='$nama_pemilik', alamat='$alamat' , no_hp='$no_hp' WHERE id_pemilik='$id_pemilik'");

    if($data){
     echo '<script>alert("Berhasil diedit!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/pemilik.php">';
    }else{
        echo "failed";
    }
}



?>
