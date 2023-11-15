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
         <a href="<?=base_url('/pelanggan/aboutus')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Tentang Kami</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pelanggan/tambahpesanan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pemesanan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/pelanggan/obat')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:black">Obat</button></a>
  </li>
</ul>

<div style="outline-width:1px; width:350px; margin:auto; border-radius:10px; margin-top:50px; ">
    
<div style="margin-bottom:20px; padding-left:23px; padding-right:23px; font-weight:bold;"> 
    <h3>Konfirmasi Pemesanan</h3>
</div>
<br>

<div style="padding-left:23px; padding-right:23px; font-weight:bold;">

<p>
    Tanggal :
    <br>
    <br>
    Pemesan :
    <br>
    <br>
    Pembelian :
    <br>
    <br>
    Sebanyak :
    <br>
    <br>
    Total Harga :
    <br>
    <br>
</p>

<a href="<?= base_url('/obatpelanggan')?>"><button type="submit" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#C67C4E; color:white; margin-top:10px; margin-bottom:30px;">Pesan</button></a>

</div>
</div>
<a href="<?= base_url('/pelanggan/tambahpesanan')?>"><button type="button" class="btn" style="margin-top:35px; margin-left:57px; border-radius:6px; padding-left:20px; padding-right:20px; background-color : #C67C4E; color:white">Kembali</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

