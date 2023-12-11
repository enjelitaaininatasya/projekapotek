<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:#dfe166 ">

<nav style="box-shadow: 1px 2px 2px #333333; background-color:#5d535e;" class="navbar navbar-expand-lg">
  <div class="container-fluid">
   <b> <a style="color:#ffffff" class="navbar-brand" href="#">ACS</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-5 nav-link active" aria-current="page" href="<?=base_url('/pegawai/aboutus')?>">Beranda </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pegawai/pesanan')?>">Pesanan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pegawai/datatransaksi')?>">Data Transaksi </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pegawai/laporankeuangan')?>">Laporan Keuangan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pegawai/pelanggan')?>">Pelanggan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff"class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pegawai/obat')?>">Obat </a>
        </li>
        <li class="nav-item">
          <a style="color:#dfe166" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/logout')?>">Logout </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div style="display:flex; flex-wrap: wrap;">
<?php
    
    foreach ($obats as $obat){
    ?>
    
    <div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:180px; border-radius:10px; margin-top:50px; margin-left:39px; background-color:#5d535e">

<center><img src="<?=$obat['foto'] ?>" width="120px" alt=""></center>

<center>
<p> 
    <b style="color:white"><?=$obat['nama_obat'] ?></b>
    <br>
    <span style="color:white"><?=$obat['tipe_obat'] ?></span>
    <br>
    <span style="color:white">Rp.<?=$obat['harga_obat'] ?></span>
    <br>
    <br>
    <div style="display:flex; justify-content:center">
    <a href="<?= base_url('/pegawai/editobat/' . $obat['id_obat']) ?>"><button class="btn" style="background-color : #dfe166; color:5d535e; padding: 6px 22px 5px 22px">EDIT</button></a>
    <form action="<?= base_url('pegawai/delete/' . $obat['id_obat']) ?>" method="post" style="margin-left:10px">
                    <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn" style="background-color : #dfe166; color:5d535e;">DELETE</button>
                </form>
    </div>
</p>
</center>
</div>
    <?php
    }
    ?>
    
</div>

<a href="/pegawai/tambahobat"><button class="btn" style="background-color : #5d535e; color:white; margin-left:40px; margin-top: 40px;">TAMBAH</button></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

