<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DPI | PELKAPIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/output.css">
  </head>
<body class="bg-gradient-to-bl from-slate-500 to-teal-700">
  <div class="h-sreen">
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
  <a  align="" href="#DPI " class="text-end justify-end items-end" >
  <div class="m-1  text-center w-40 hover:text-black text-white bg-sky-400 rounded-xl delay-100 shadow-lg hover:bg-yellow-400">
  DATA DPI
  </div>
  </div>
    </a>
  </div>
  </div>
  <div class="container " >
  <div class="mt-5 text-yellow-500 text-5xl font-bold font-serif text-center">Daerah Pencarian Ikan</div>
  <div class="m-10 grid grid-cols-2 gap-10">
  <div class=" shadow-purple-800 ">
  <img class="hover:animate-bounce w-auto duration-500 delay-75 border-4 shadow-2xl border-neutral-900 rounded-xl" src="https://images.unsplash.com/photo-1606185540834-d6e7483ee1a4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8c2hpcHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" >
  </div>
  <div class="text-white ">
<form action="../fungsi/dpi.php" method="POST" enctype="multipart/form-data">
  <div class="text-start flex-col flex">
  <label class=" shadow-xl">Nama DPI :</label>
  <input type="text" class=" w-full text-amber-300 bg-slate-500 rounded-md shadow-xl" id="produser" name="nama_dpi" placeholder="  Nama DPI" ><br>
  <label class=" shadow-xl">Luas :</label>
  <input type="text" class=" w-full text-amber-300 bg-slate-500 rounded-md shadow-xl" id="produser" name="luas" placeholder="  Luas" >
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
<div id="DPI" class=" bg-slate-400 m-5 shadow-xl rounded-3xl">
<div  class=" text-center pt-5 font-serif font-bold text-3xl ">Data DPI</div>
<div class="text-center m-4 ">
<table align="center" class="w-full justify-center shadow-xl mt-3 shadow-slate-800 hover:bg-yellow-500 bg-slate-200 rounded-3xl" >
  <thead class="border-b-4 hover:border-blue-500 border-emerald-300"> 
    <tr>
      <div class="">
      <th scope="col">
      <div class="ml-2 ">#</div>
      </th>
      <th scope="col">
      <div>Nama DPI</div>
      </th>
      <th scope="col">
      <div>Luas</div>
      </th>
      <th scope="col">Costum</th>
    </div></tr>
  </thead>
  
  <tbody>
    <?php
    include_once("../fungsi/config.php");
    $data = mysqli_query($connection, "SELECT * FROM dpi ");
    $no=1; 
    foreach ($data as $item): 
    ?>
    <tr>
      <th scope="col">
        <div class="ml-2"> <?= $no++; ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $item['nama_dpi']  ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $item['luas']  ?>
        </div></th>
        <th scope="col">
        <div class=" text-center w-full flex  justify-center ml-1 ">  
        <div class="justify-center ">
        <div  class="w-auto rounded-lg mr-3 text-center bg-blue-600">
        <a href="../main/edit_dpi.php?id=<?= $item['id_dpi']; ?>">   
        <div class="m-1 "> Edit</div>
        </a>
        </div>
        <div class=" w-auto rounded-lg mr-3 text-center bg-red-600 "> 
        <a href="../fungsi/delete_dpi.php?id=<?= $item['id_dpi']; ?>" >
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
