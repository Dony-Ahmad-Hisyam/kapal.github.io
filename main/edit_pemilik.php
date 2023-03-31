<?php 
include_once("../fungsi/config.php");
$id_pemilik = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM pemilik WHERE id_pemilik='$id_pemilik'");
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
  <a  align="end" href="../main/pemilik.php" class="text-start " >
  <div class="m-1 w-16 text-center bg-sky-800 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">Back</div>
  </a>
  </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT PEMILIK</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://images.unsplash.com/photo-1554254648-2d58a1bc3fd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fHNoaXB8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_pemilik.php" method="POST" enctype="multipart/form-data">
    <div class=" ">
    <label class="mt-5 shadow-xl text-xl">Pemilik</label> 
    <div class="flex"> 
    <input id="nama_pemilik" for="nama_pemilik" value="<?= $hasil['nama_pemilik']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600" id="id_film" name="nama_pemilik"  >
    </input>
    <input type="text" class="form-control" value="<?= $hasil['id_pemilik'] ?>" hidden name="id_pemilik" id="id_pemilik">
    <label class="mt-5 shadow-xl text-xl">Photo</label> 
    <input for="nama_pemilik"  type="file" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600" id="id_film" name="biodata"  >
  </div>
    </div>     
    <div class=" mt-5 ">
    <label class="mt-5 shadow-xl text-xl">Alamat</label> 
    
    <div class="flex"> <input id="alamat" for="alamat" value="<?= $hasil['alamat']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600 " id="rating" name="alamat"  >
    </div>
    </div>    
    <div class=" mt-5 ">
    <labele class="mt-5 shadow-xl text-xl">Nomer Hp</labele> 
    <div class="flex"> 
    <input id="no_hp" for="no_hp" value="<?= $hasil['no_hp']; ?>" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600 " id="rating" name="no_hp"  >
    </input>
    </div>
    </div>     
    <button type="submit" class="w-full flex justify-center mt-4 mr-9">
    <div class="w-20 bg-green-400 transition ease-in-out text-center font-serif font-bold  shadow-xl m-7 text-xl  hover:bg-sky-600 delay-150  rounded-lg text-black mr-5  ">EDIT</div>  
    </button>
    </div>
    </div>
</form>
</body>