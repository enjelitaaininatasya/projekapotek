<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<ul class="nav justify-content-center" style="margin-top:20px;">
  <li class="nav-item">
         <a href="<?=base_url('/pegawai/aboutus')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Tentang Kami</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/pesanan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pemesanan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/datatransaksi')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Transaksi</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/laporankeuangan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Laporan Keuangan</button></a>
  </li>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/pelanggan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pelanggan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/obat')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:black">Obat</button></a>
  </li>
</ul>


<div style="display:flex; flex-wrap: wrap;">
<?php
    
    foreach ($obats as $obat){
    ?>
    
<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:180px; border-radius:10px; margin-top:50px; margin-left:39px;">

<center><img src="<?=$obat['foto'] ?>" width="120px" alt=""></center>

<center>
<p> 
    <b><?=$obat['nama_obat'] ?></b>
    <br>
    <?=$obat['tipe_obat'] ?>
    <br>
    Rp.<?=$obat['harga_obat'] ?>
    <br>
    <br>
    <div style="display:flex; justify-content:center">
    <a href="<?= base_url('/pegawai/editobat/' . $obat['id_obat']) ?>"><button class="btn" style="background-color : #C67C4E; color:white; padding: 6px 22px 5px 22px">EDIT</button></a>
    <form action="<?= base_url('pegawai/delete/' . $obat['id_obat']) ?>" method="post" style="margin-left:10px">
                    <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn" style="background-color : #C67C4E; color:white">DELETE</button>
                </form>
    </div>
</p>
</center>
</div>
    <?php
    }
    ?>
    
</div>

<a href="/pegawai/tambahobat"><button class="btn" style="background-color : #C67C4E; color:white; margin-left:40px; margin-top: 40px;">TAMBAH</button></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

