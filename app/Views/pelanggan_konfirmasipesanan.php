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
        <a href="<?=base_url('/pelanggan/riwayat')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Riwayat</button></a>
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

<form class="form-control" action="/pelanggan/createpesanan" method="POST">
  <?= csrf_field() ?>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="tanggal" value="<?= $date ?>" disabled>
  </div>
  <div class="mb-3">
    <label  class="form-label">Pemesan</label>
    <input type="text" class="form-control" value="<?= user()->username;?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Pembelian</label>
    <input type="text" class="form-control" value="<?= $obat['nama_obat']?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Jumlah Obat</label>
    <input type="text" class="form-control" value="<?= $jumlah ?>"  disabled>
    <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
  </div>
  <input type="hidden" value="<?= $obat['id_obat']?>" name="id_obat">

  <label class="form-label">Total Harga</label>
  <div class="input-group mb-3">
    <span class="input-group-text">Rp</span>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?= $obat['harga_obat']*$jumlah?>" disabled>
    <input type="hidden" name="harga" value="<?= $obat['harga_obat']*$jumlah?>">
  </div>

  <input type="text" class="form-control" id="exampleFormControlInput1" value="berjalan" name="status" hidden>

  <button type="submit" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#C67C4E; color:white; margin-top:10px; margin-bottom:30px;">Pesan</button>
</form>

</div>
</div>
<a href="<?= base_url('/pelanggan/tambahpesanan')?>"><button type="button" class="btn" style="margin-top:35px; margin-left:57px; border-radius:6px; padding-left:20px; padding-right:20px; background-color : #C67C4E; color:white">Kembali</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

