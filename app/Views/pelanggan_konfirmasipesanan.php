<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="height: 100vh; 
  background: linear-gradient( 90deg, #dfe166 50%, #ffffff 50%); ">

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


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:350px; margin:auto; border-radius:10px; margin-top:50px; box-shadow: 4px 5px 5px #878787; background-color:#5d535e;">
    
<div style="margin-bottom:20px; padding-left:23px; padding-right:23px;"> 
    <h3 style="color:white">Konfirmasi Pesanan</h3>
    <h6 style="color:white">ACS</h6>
</div>
<br>

<div style="padding-left:23px; padding-right:23px;">

<form action="<?= base_url('/pelanggan/createpesanan')?>" method="POST">
<?= csrf_field() ?>


<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"><span style="color:white">Tanggal</span></label>
    <input type="text" style="background-color:whitesmoke" class="form-control" id="exampleFormControlInput1" name="tanggal" value="<?= $date ?>" disabled>
  </div>
  <div class="mb-3">
    <label  class="form-label"><span style="color:white">Pemesan</span></label>
    <input type="text" style="background-color:whitesmoke" class="form-control" value="<?= user()->username;?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label"><span style="color:white">Pembelian</span></label>
    <input type="text" style="background-color:whitesmoke" class="form-control" value="<?= $obat['nama_obat']?>" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label"><span style="color:white">Jumlah Obat</span></label>
    <input type="text" style="background-color:whitesmoke" class="form-control" value="<?= $jumlah ?>"  disabled>
    <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
  </div>
  <input type="hidden" value="<?= $obat['id_obat']?>" name="id_obat">

  <label class="form-label"><span style="color:white">Total Harga</span></label>
  <div class="input-group mb-3">
    <span class="input-group-text">Rp</span>
    <input type="hidden" class="form-control" name="harga" value="<?= $obat['harga_obat']*$jumlah?>">
    <input type="text" style="background-color:whitesmoke" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga" value="<?= $obat['harga_obat']*$jumlah?>" disabled>
  </div>

  <input type="text" class="form-control" id="exampleFormControlInput1" value="berjalan" name="status" hidden>

      <button type="submit" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#dfe166; color:white; margin-top:30px; margin-bottom:30px; color:#5d535e">TAMBAH</button>
      
    </div>

  </form>

</div>
</div>
<a href="<?= base_url('/pelanggan/tambahpesanan')?>"><button type="button" class="btn" style="margin-top:35px; margin-left:57px; border-radius:6px; padding-left:20px; padding-right:20px; background-color : #5d535e; color:white">KEMBALI</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

