<?php
include_once("../fungsi/config.php");
$datadpi = mysqli_query($connection, "SELECT * FROM dpi ");
$dataalat_tangkap = mysqli_query($connection, " SELECT * FROM alat_tangkap");
$datapemilik = mysqli_query($connection, " SELECT * FROM pemilik");
$dataalat_tangkap = mysqli_query($connection, " SELECT * FROM alat_tangkap");
$data = mysqli_query($connection,"SELECT * FROM kapal INNER JOIN pemilik ON kapal.id_pemilik = pemilik.id_pemilik INNER JOIN dpi ON kapal.id_dpi=dpi.id_dpi INNER JOIN alat_tangkap ON kapal.id_alat_tangkap = alat_tangkap.id_alat_tangkap");
$result = mysqli_fetch_array($data);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PELKAPIN | OFFICIAL</title>
  <link rel="stylesheet" href="css/input.css">
  </head>
  <body class=" bg-gradient-to-tr from-rose-600 to-amber-300">
    <div class="h-screen">
    <ul class="flex w-auto h-auto text-yellow-50 bg-gradient-to-br from-cyan-900 to-green-700">
    <li class="flex-auto w-full ml-6 mr-4 mt-3 text-2xl font-serif font-bold hover:text-yellow-500" ><a href="#">PELKAPIN</a> </li>
    <li class="flex-auto m-3 hover:text-yellow-500 border-b-2 border-blue-200"><a href="#">Home</a></li>
    <li class="flex-auto m-3 hover:text-yellow-500"><a href="#Input">Input</a></li>
    <li class="flex-auto m-3 hover:text-yellow-500"><a href="#Informasi">Informasi</a></li>
    <li class="flex-auto m-3 hover:text-yellow-500"><a href="#Data">Data</a></li>
    <li class="flex-auto m-3 hover:text-yellow-500"><a href="../main/pemilik.php">Pemilik</a></li> 
    <li class="flex-auto w-44 m-3 hover:text-yellow-500"><a href="../main/alat_tangkap.php">Alat Tangkap</a></li>
    <li class="flex-auto m-3 mr-9 hover:text-yellow-500"><a href="../main/dpi.php">DPI</a></li>
    
    </ul>
<div class="container" >
    <div class="grid grid-cols-2 gap-10 mt-24 m-10 ">
    <div align="center" class="">
    <div class="text-5xl font-serif mb-9 mt-16 text-green-600 hover:text-fuchsia-700 font-bold"> Selamat Datang <br>
    </div>
    <div class="font-serif text-2xl">
    WEBSITE RESMI PELAYANAN KAPAL INDONESIA (PELKAPIN) 
    </div>
    </div><div class="justify-center">
    <img class="justify-items-center transition ease-in-out delay-150 border-4 border-slate-800 shadow-2xl shadow-slate-900 rounded-2xl hover:animate-bounce hover:bg-red-500 duration-300" src="https://images.unsplash.com/photo-1524522173746-f628baad3644?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNoaXB8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">
    </div>  
    </div>
</div>  
</div>

<div class="h-screen mt-8" > 
<div class="text-center m-4 mb-7">
<div class="container h-screen" >
  <div id="Input" class=" mb-20 hover:text-lime-500 text-sky-700 text-5xl font-bold font-serif text-center">INPUT DATA KAPAL</div>
  <div class="m-10 grid grid-cols-2 gap-10">
  <div class=" shadow-purple-800 mt-3">
  <img class="hover:animate-bounce duration-500 delay-75 border-4 shadow-2xl shadow-slate-900 border-slate-700 rounded-xl" src="https://images.unsplash.com/photo-1541297370035-37036f34c33d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fHNoaXB8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" >
  </div>
  <div class="text-white ">
<form action="../fungsi/kapal.php" method="POST" enctype="multipart/form-data">
  <div class="text-start flex-col  flex">
  <label class=" shadow-xl hover:text-blue-600">Nama Kapal :</label>
  <input  type="text" class=" w-full mb-3 text-emerald-400 bg-slate-500 rounded-md shadow-xl" id="produser" name="nama_kapal" placeholder="  Nama Kapal" >  
  <label class=" shadow-xl hover:text-blue-600">Pemilik :</label>
  
  <select type="text" class="w-full mb-3 mr-4 rounded-lg text-emerald-400 py-1  bg-slate-600 " id="id_produser" name="id_pemilik"  >
  <?php foreach($datapemilik as $item_pemilik):   ?>
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
  <select type="text" class="w-full mb-3 mr-4 rounded-lg text-emerald-400 py-1  bg-slate-600 " id="id_produser" name="id_alat_tangkap"  >
  <?php foreach($dataalat_tangkap as $item_alat):   ?>
  <option value="<?= $item_alat['id_alat_tangkap']; ?>" class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
  <?= $item_alat['nama_alat_tangkap']; ?>
  </option>
  <?php endforeach ?>
  </select>     
  <button type="submit" class="w-20 justify-end items-end flex-auto bg-green-600 transition ease-in-out shadow-xl text-white hover:bg-green-200 hover:text-black delay-150 mt-5 rounded-lg ">
  <div class="m-1 ">Tambah</div> 
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
  <h1 id="Data" class="text-5xl hover:font-serif hover:text-lime-500 text-sky-700 font-sans text-center font-bold mb-7 mt-9" >DATA KAPAL</h1>
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
      <th scope="col">Costum</th>
    </div></tr>
  </thead>
  
  <tbody>
    <?php
    include_once("../fungsi/config.php");
    $datakapal = mysqli_query($connection, "SELECT * FROM kapal ");
    $no=1; 
    foreach ($data as $item): 
    ?>
    <tr>
      <th scope="col">
        <div class=""> <?= $no++; ?>
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
        <th scope="col">
        <div class=" text-center w-full flex  justify-center   ">  
        <div class="justify-center ">
        <div  class="w-auto rounded-lg mr-3 text-center bg-blue-600">
        <a href="../main/edit_kapal.php?id=<?= $item['id_kapal']; ?>">   
        <div class="m-1 "> Edit</div>
        </a>
        </div>
        <div class=" w-auto rounded-lg mr-3 text-center bg-red-600 "> 
        <a href="../fungsi/delete_kapal.php?id=<?= $item['id_kapal']; ?>" >
        <div class="m-1 mb-3">Delete </div></a> </div>
        </div>
        </th>
        </tr>
  <?php endforeach ?>
  </tbody>
  </table>
  </div>
  </div>


<div id="Informasi" class="container h-screen mb-7 mt-20">
  <div class="m-5 hover:bg-teal-600 mt-11 bg-slate-400  shadow-xl rounded-3xl">
  <h1 id="Data" class="text-5xl hover:font-serif hover:text-lime-500 text-sky-700 font-sans text-center font-bold mb-7 mt-9" >INFORMASI KAPAL</h1>
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
      <div>Alamat</div>
      </th>
      <th scope="col">
      <div>NO HP</div>
      </th>
      <th scope="col">
      <div>DPI</div>
      </th>
      <th scope="col">
      <div>LUAS</div>
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
      <th scope="col">
        <div class="m-4"> <?= $no++; ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_kapal']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_pemilik']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['alamat']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['no_hp']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_dpi']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['luas']  ?>
        </div></th>
        <th scope="col">
        <div class=" "> <?= $item['nama_alat_tangkap']  ?>
        </div></th>
        </tr>
  <?php endforeach ?>
  </tbody>
  </table>
  </div>
  </div>
 </body>
  </html>