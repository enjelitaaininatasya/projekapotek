<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<ul class="nav justify-content-end" style="margin-top:20px;">
  <li class="nav-item">
         <a href=""><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Tentang Kami</button></a>
  </li>
  <li class="nav-item">
        <a href=""><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:black">Pemesanan</button></a>
  </li>
  <li class="nav-item">
        <a href=""><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Obat</button></a>
  </li>
</ul>

<div style="display:flex; flex-wrap: wrap;">
<?php
    
    foreach ($obats as $obat){
    ?>
    
<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:150px; height:200px; border-radius:10px; margin-top:50px; margin-left:39px;">

<center><img src="https://res-5.cloudinary.com/dk0z4ums3/image/upload/c_scale,h_500,w_500/v1/production/pharmacy/products/1687399919_paracet_pim" width="120px" alt=""></center>

<center>
<p> 
    <b><?=$obat['nama_obat'] ?></b>
    <br>
    <?=$obat['tipe_obat'] ?>
    <br>
    Rp.<?=$obat['harga_obat'] ?>
</p>
</center>
</div>
    <?php
    }
    ?>
    
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

