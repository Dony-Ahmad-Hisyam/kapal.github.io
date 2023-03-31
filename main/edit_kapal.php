<?php 
include_once("../fungsi/config.php");
$id_kapal = $_GET['id'];
$datadpi = mysqli_query($connection, "SELECT * FROM dpi ");
$dataalat_tangkap = mysqli_query($connection, " SELECT * FROM alat_tangkap");
$datapemilik = mysqli_query($connection, " SELECT * FROM pemilik");
$dataalat_tangkap = mysqli_query($connection, " SELECT * FROM alat_tangkap");
$data = mysqli_query($connection,"SELECT * FROM kapal INNER JOIN pemilik ON kapal.id_pemilik = pemilik.id_pemilik INNER JOIN dpi ON kapal.id_dpi=dpi.id_dpi INNER JOIN alat_tangkap ON kapal.id_alat_tangkap = alat_tangkap.id_alat_tangkap WHERE id_kapal = '$id_kapal';");
$result = mysqli_fetch_array($data);
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EDIT | PELKAPIN</title>
  <link rel="stylesheet" href="./input.css">
  </head>
  <body class="bg-gradient-to-bl from-amber-700 to-sky-600">
  <div class="m-5  ">
  <a  align="end" href="../main/kapal.php" class="text-start " >
  <div class="m-1 w-16 text-center bg-sky-800 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">Back</div>
  </a>
  </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT | KAPAL</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://images.unsplash.com/photo-1554254648-2d58a1bc3fd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fHNoaXB8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" >
    </div>
    <div class="text-white ">
    <form action="../fungsi/edit_kapal.php" method="POST" enctype="multipart/form-data">
  <div class="text-start flex-col  flex">
  <label class=" shadow-xl hover:text-blue-600">Nama Kapal :</label>
  <input value="<?= $result['nama_kapal']; ?>" name="nama_kapal" type="text" class=" w-full mb-3 text-emerald-400 bg-slate-500 rounded-md shadow-xl" id="produser" name="nama_kapal" placeholder="  Nama Kapal" >  
  <input type="text" value="<?=$result['id_kapal']?>" hidden id="id_kapal" name="id_kapal">
  <label class=" shadow-xl hover:text-blue-600">Pemilik :</label>
  <select type="text" class="w-full mb-3 mr-4 rounded-lg text-emerald-400 py-1  bg-slate-600 " id="id_produser" name="id_pemilik"  >
  <?php foreach($datapemilik as $item_pemilik): ?>
  <option value="<?= $item_pemilik['id_pemilik']; ?>" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
  <?= $item_pemilik['nama_pemilik']; ?>
  </option>
  <?php endforeach ?>
  </select>
  <label class=" shadow-xl hover:text-blue-600">DPI :</label>
  <select type="text" class="w-full mb-3 mr-4 rounded-lg text-emerald-400 py-1  bg-slate-600 " id="id_produser" name="id_dpi"  >
  <?php foreach($datadpi as $item_dpi):   ?>
  <option value="<?= $item_dpi['id_dpi']; ?>" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
  <?= $item_dpi['nama_dpi']; ?>
  </option>
  <?php endforeach ?>
  </select>
  <label class=" shadow-xl hover:text-blue-600">Alat Tangkap :</label>
  <select type="text"  class="w-full mb-3 mr-4 rounded-lg text-emerald-400 py-1  bg-slate-600 " id="id_produser" name="id_alat_tangkap"  >
  <?php foreach($dataalat_tangkap as $item_alat):   ?>
  <option value="<?= $item_alat['id_alat_tangkap']; ?>" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
  <?= $item_alat['nama_alat_tangkap']; ?>
  </option>
  <?php endforeach ?>
  </select>     
  <button type="submit" class="w-20 justify-end items-end flex-auto bg-green-600 transition ease-in-out shadow-xl text-white hover:bg-green-200 hover:text-black delay-150 mt-5 rounded-lg ">
  <div class="m-1 ">EDIT</div> 
  </button><br>
  </div>     
  </div>
  </div>
</form>
  </div>
  </div>
  </div>

<div class="container h-screen mb-7 mt-8">
  <div class="m-5 hover:bg-teal-600 mt-11 bg-slate-400  shadow-xl rounded-3xl">
  <h1 id="Data" class="text-5xl hover:font-serif hover:text-lime-500 text-sky-700 font-sans text-center font-bold mb-7 mt-9" >CHANGE DATA</h1>
<table align="center" class="w-full hover:bg-yellow-500 bg-slate-400 justify-center shadow-xl mt-3 shadow-slate-800  rounded-3xl" >
  <thead class="border-b-4 hover:border-blue-500 border-emerald-300"> 
    <tr>
      <div class="">
      <th scope="col">
      <div class=" ">#</div>
      </th>
      <th scope="col">
      <div>Nama Kapal</div>
      </th>
      <th scope="col">
      <div>Pemilik</div>
      </th>
      <th scope="col">
      <div>DPI</div>
      </th>
      <th scope="col">
      <div>Alat Tangkap</div>
      </th>
  
  </thead>
  
  <tbody>
    <?php
    include_once("../fungsi/config.php");
    $datakapal = mysqli_query($connection, "SELECT * FROM kapal ");
    $no=1; 
    foreach ($data as $item): 
    ?>
    <tr>
      <th scope="col ">
        <div class="m-4"> <?= $no++; ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_kapal']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_pemilik']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_dpi']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_alat_tangkap']  ?>
        </div></th>
  <?php endforeach ?>
  </tbody>
  </table>
    </div>
</form>
</body>