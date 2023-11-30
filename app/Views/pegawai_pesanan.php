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
        <a href="<?=base_url('/pegawai/pesanan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:black">Pemesanan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/datatransaksi')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Transaksi</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/laporankeuangan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Laporan Keuangan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/pelanggan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pelanggan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pegawai/obat')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Obat</button></a>
  </li>
</ul>


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; border-radius:10px; margin-top:50px; margin-right:100px; margin-left:100px">

<center><h1>Pemesanan</h1></center>

<table style="margin-top:50px" class="table">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Obat</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($pesanann as $pesanan){
    ?>
    
    <tr>
      
      <td><?=$pesanan['id_pesanan']?></td>
      <td><?=$pesanan['tanggal']?></td>
      <td><?=$pesanan['nama']?></td>
      <td><?=$pesanan['nama_obat']?></td>
      <td><?=$pesanan['jumlah']?></td>
      <td><?=$pesanan['harga']?></td>
    </tr>
    <?php
}
?>
    
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

