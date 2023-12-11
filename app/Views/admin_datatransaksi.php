<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Transaksi</title>
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
          <a style="color:#ffffff" class="ms-5 nav-link active" aria-current="page" href="<?=base_url('/admin/aboutus')?>">Beranda </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/pesanan')?>">Pesanan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/datatransaksi')?>">Data Transaksi </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/laporankeuangan')?>">Laporan Keuangan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/pegawai')?>">Pegawai </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/pelanggan')?>">Pelanggan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff"class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/admin/obat')?>">Obat </a>
        </li>
        <li class="nav-item">
          <a style="color:#dfe166" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/logout')?>">Logout </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; border-radius:10px; margin-top:50px; margin-right:100px; margin-left:100px; background-color:#5d535e">

<center><h1 style="color:white;">Data Transaksi</h1></center>

<table style="margin-top:50px" class="table table-#dfe166">
<thead>
    <tr>
      <th scope="col" style="background-color:#5d535e; color:white">ID</th>
      <th scope="col" style="background-color:#5d535e; color:white">Tanggal</th>
      <th scope="col" style="background-color:#5d535e; color:white">Nama</th>
      <th scope="col" style="background-color:#5d535e; color:white">Obat</th>
      <th scope="col" style="background-color:#5d535e; color:white">Jumlah</th>
      <th scope="col" style="background-color:#5d535e; color:white">Harga</th>
      <th scope="col" style="background-color:#5d535e; color:white"></th>
      <th scope="col" style="background-color:#5d535e; color:white"></th>
    </tr>
  </thead>

  <tbody>
<?php
foreach ($dataa as $data){
    ?>
    
    <tr>
      <td style="background-color:#5d535e; color:white"><?=$data['id_datatransaksi']?></td>
      <td style="background-color:#5d535e; color:white"><?=$data['tanggal']?></td>
      <td style="background-color:#5d535e; color:white"><?=$data['username']?></td>
      <td style="background-color:#5d535e; color:white"><?=$data['nama_obat']?></td>
      <td style="background-color:#5d535e; color:white"><?=$data['jumlah']?></td>
      <td style="background-color:#5d535e; color:white"><?=$data['harga']?></td>
      <td style="background-color:#5d535e; color:white"></td>
      <td style="background-color:#5d535e;">
        <a href="<?= base_url('/admin/editdatatransaksi/' . $data['id_datatransaksi']) ?>"><button class="btn" style="background-color : #dfe166; color:5d535e;">EDIT</button></a>
        <a href="<?= base_url('/admin/hapusdatatransaksi/' . $data['id_datatransaksi']) ?>"><button class="btn" style="background-color : #dfe166; color:5d535e">HAPUS</button></a>
      </td>
    </tr>
    <?php
}
?>
    
  </tbody>
</table>
<br>
</div>

<a href="<?= base_url('/admin/tambahdatatransaksi')?>"><button type="button" class="btn" style="margin-top:35px; margin-left:98px; border-radius:6px; padding-left:20px; padding-right:20px; background-color : #5d535e; color:white;">TAMBAH</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

