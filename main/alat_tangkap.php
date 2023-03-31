<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALTANG | PELKAPIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/output.css">
  </head>
<body class="bg-gradient-to-bl from-slate-500 to-teal-700">
  <div class="h-screen">
  <div class="container ">
  <div class="m-5 flex justify-start">
  <a  align="end" href="kapal.php " class="text-start " >
  <div class="m-1 w-16 text-center mt-5 hover:text-black text-white bg-sky-800 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">
  Back
  </div>
  </a>
  </div>  
  <div class="justify-end">
  <div class="mr-5 flex justify-end ">
  <a  align="" href="#Alat " class="text-end justify-end items-end" >
  <div class="m-1  text-center w-40 hover:text-black text-white bg-sky-400 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">
  DATA ALAT TANGKAP
  </div>
  </div>
    </a>
  </div>
  </div>
  <div class="container " >
  <div class="mt-5 text-yellow-500 text-5xl font-bold font-serif text-center">Alat Tangkap Ikan</div>
  <div class="m-10 grid grid-cols-2 gap-10">
  <div class=" shadow-purple-800 ">
  <img class="hover:animate-bounce w-auto duration-500 delay-75 border-4 shadow-2xl shadow-slate-900 border-neutral-900 rounded-xl" src="https://images.unsplash.com/photo-1542397994-696a3f0c8f9a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8ZmlzaGluZyUyMHRvb2xzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" >
  </div>
  <div class="text-white ">
<form action="../fungsi/alat_tangkap.php" method="POST" enctype="multipart/form-data">
  <div class="text-start flex-col flex">
  <label class=" shadow-xl">Alat Tangkap :</label>
  <select name="nama_alat_tangkap" type="text" class="w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600" id="id_genre" >
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Trawl</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Purse Seine</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Pukat Hela</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jaring Insang</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Pancing Trolling</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Pancing Joran</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Perangkap Kepiting</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Perangkap Udang</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Jala</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Keramba</option>
  <option class="text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film">Kincir Air</option>
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
<div class="h-screen">


<div id="Alat" class=" bg-slate-400 m-5 shadow-xl rounded-3xl">
<div  class=" text-center pt-5 font-serif font-bold text-3xl ">Data Alat Tangkap</div>
<div class="text-center m-4 ">
<table align="center" class="w-full justify-center shadow-xl mt-3 hover:bg-yellow-500 shadow-slate-800 bg-slate-200 rounded-3xl" >
  <thead class="border-b-4 hover:border-blue-500 border-emerald-300"> 
    <tr>
      <div class="">
      <th scope="col">
      <div class="ml-2 ">#</div>
      </th>
      <th scope="col">
      <div>Alat Tangakap</div>
      </th>
      <th scope="col">Costum</th>
    </div></tr>
  </thead>
  
  <tbody>
    <?php
    include_once("../fungsi/config.php");
    $data = mysqli_query($connection, "SELECT * FROM alat_tangkap ");
    $no=1; 
    foreach ($data as $item): 
    ?>
    <tr>
      <th scope="col">
        <div class="ml-2"> <?= $no++; ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $item['nama_alat_tangkap']  ?>
        </div></th>
        <th scope="col">
        <div class=" text-center w-full flex  justify-center ml-1 ">  
        <div class="justify-center ">
        <div  class="w-auto rounded-lg mr-3 text-center bg-blue-600">
        <a href="../main/edit_alat_tangkap.php?id=<?= $item['id_alat_tangkap']; ?>">   
        <div class="m-1 "> Edit</div>
        </a>
        </div>
        <div class=" w-auto rounded-lg mr-3 text-center bg-red-600 "> 
        <a href="../fungsi/delete_alat_tangkap.php?id=<?= $item['id_alat_tangkap']; ?>" >
        <div class="m-1 mb-3">Delete </div></a> </div>
        </div>
        </th>
        </tr>
       
  <?php endforeach ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>  
  </script>
</body>
