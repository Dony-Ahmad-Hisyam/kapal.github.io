<?php 
include_once("../fungsi/config.php");
$id_alat_tangkap = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM alat_tangkap WHERE id_alat_tangkap='$id_alat_tangkap'");
$hasil = mysqli_fetch_array($data);
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
  <a  align="end" href="../main/alat_tangkap.php" class="text-start " >
  <div class="m-1 w-16 text-center bg-sky-800 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">Back</div>
  </a>
  </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT ALAT TANGKAP</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-neutral-900 rounded-xl shadow-2xl " src="https://images.unsplash.com/photo-1678697987574-d105c5e03d94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZmlzaGVybWFuJTIwYm9hdHMlMjBoZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_alat_tangkap.php" method="POST" enctype="multipart/form-data">
    <div class=" ">
    <label class="mt-5 shadow-xl text-xl">NAMA ALAT TANGKAP</label> 
    <div class="flex">
    <select name="nama_alat_tangkap" value="<?= $hasil['nama_alat_tangkap']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600" id="id_genre" >
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"><?= $hasil['nama_alat_tangkap']; ?></option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Trawl</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Purse Seine</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Pukat Hela</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Insang</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Pancing Trolling</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Pancing Joran</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Perangkap Kepiting</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Perangkap Udang</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jala</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Keramba</option>
  <option name="nama_alat_tangkap" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Kincir Air</option>
    </select>
    <input type="text" class="form-control" value="<?= $hasil['id_alat_tangkap'] ?>" hidden name="id_alat_tangkap" id="id_pemilik">
    </div>
    </div>
    <button type="submit" class="w-full flex justify-center mt-4 mr-9">
    <div class="w-20 bg-green-400 transition ease-in-out text-center font-serif font-bold  shadow-xl m-7 text-xl  hover:bg-sky-600 delay-150  rounded-lg text-black mr-5">EDIT</div>  
    </button>
    </div>
    </div>
    </div>
</form>
</body>