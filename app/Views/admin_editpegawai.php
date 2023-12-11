<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pegawai</title>
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


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:350px; margin:auto; border-radius:10px; margin-top:50px; box-shadow: 4px 5px 5px #878787; background-color:#5d535e;">
    
<div style="margin-bottom:20px; padding-left:23px; padding-right:23px;"> 
    <h3 style="color:white">Ubah Data Pegawai</h3>
    <h6 style="color:white">ACS</h6>
</div>

<div style="padding-left:23px; padding-right:23px;">


    <form action="<?= base_url('/admin/updatepegawai/' . $pegawai['id']) ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">


    <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label"><span style="color:white">Email</span></label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?=$pegawai['email']?>" required>
    </div>


    <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label"><span style="color:white">Username</span></label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="username" value="<?=$pegawai['username']?>"required>
    </div>

    <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label"><span style="color:white">Umur</span></label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="umur" value="<?=$pegawai['umur']?>" required>
    </div>

    <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label"><span style="color:white">Telepon</span></label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="telepon" value="<?=$pegawai['telepon']?>" required>
    </div>

  <button type="submit" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#dfe166; color:white; margin-top:30px; margin-bottom:30px; color:#5d535e">UBAH</button>
  
</div>

</div>

    </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


