<?php 
include_once("../fungsi/config.php");
$id_dpi = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM dpi WHERE id_dpi='$id_dpi'");
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
  <a  align="end" href="../main/dpi.php" class="text-start " >
  <div class="m-1 w-16 text-center bg-sky-800 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">Back</div>
  </a>
  </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT DPI</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-neutral-900 rounded-xl shadow-2xl " src="https://images.unsplash.com/photo-1678697987574-d105c5e03d94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZmlzaGVybWFuJTIwYm9hdHMlMjBoZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_dpi.php" method="POST" enctype="multipart/form-data">
    <div class=" ">
    <label class="mt-5 shadow-xl text-xl">NAMA DPI</label> 
    <div class="flex"> 
    <input id="nama_dpi" for="nama_dpi" value="<?= $hasil['nama_dpi']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600" id="id_film" name="nama_dpi"  >
    </input>
    <input type="text" class="form-control" value="<?= $hasil['id_dpi'] ?>" hidden name="id_dpi" id="id_pemilik">
    </div>
    </div>     
    <div class=" mt-5 ">
    <label class="mt-5 shadow-xl text-xl">Luas</label> 
    
    <div class="flex"> <input id="luas" for="luas" value="<?= $hasil['luas']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600 " id="rating" name="luas"  >
    </div>
    </div>
         
    <button type="submit" class="w-full flex justify-center mt-4 mr-9">
    <div class="w-20 bg-green-400 transition ease-in-out text-center font-serif font-bold  shadow-xl m-7 text-xl  hover:bg-sky-600 delay-150  rounded-lg text-black mr-5  ">EDIT</div>  
    </button>
    </div>
    </div>
    </div>
</form>
</body>