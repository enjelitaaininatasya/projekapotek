<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pesanan</title>
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
          <a style="color:#ffffff" class="ms-5 nav-link active" aria-current="page" href="<?=base_url('/pelanggan/aboutus')?>">Beranda </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pelanggan/tambahpesanan')?>">Pemesanan </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pelanggan/riwayat')?>">Riwayat </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffffff"class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/pelanggan/obat')?>">Obat </a>
        </li>
        <li class="nav-item">
          <a style="color:#dfe166" class="ms-4 nav-link active" aria-current="page" href="<?=base_url('/logout')?>">Logout </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; border-radius:10px; margin-top:50px; margin-right:100px; margin-left:100px; background-color:#5d535e">

<center><h1  style="color:white">Riwayat</h1></center>

<table style="margin-top:50px" class="table table-#dfe166">
<thead>
    <tr>
      <th scope="col" style="background-color:#5d535e; color:white">ID</th>
      <th scope="col" style="background-color:#5d535e; color:white">Tanggal</th>
      <th scope="col" style="background-color:#5d535e; color:white">Nama</th>
      <th scope="col" style="background-color:#5d535e; color:white">Obat</th>
      <th scope="col" style="background-color:#5d535e; color:white">Jumlah</th>
      <th scope="col" style="background-color:#5d535e; color:white">Harga</th>
      <th scope="col" style="background-color:#5d535e; color:white">Status</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($riwayatt as $riwayat){
    ?>
    
    <tr>   
      <td style="background-color:#5d535e; color:white"><?=$riwayat['id_pesanan']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['tanggal']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['username']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['nama_obat']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['jumlah']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['harga']?></td>
      <td style="background-color:#5d535e; color:white"><?=$riwayat['status']?></td>
    </tr>
    <?php
}
?>
    
  </tbody>
</table>
<br>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

