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

         <a href="<?=base_url('/admin/aboutus')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Tentang Kami</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/admin/pesanan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pemesanan</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/admin/datatransaksi')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Transaksi</button></a>
  </li>
  <li class="nav-item">
        <a href="<?=base_url('/admin/laporankeuangan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Laporan Keuangan</button></a>
  </li>

  <li class="nav-item">
        <a href="<?=base_url('/admin/pegawai')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pegawai</button></a>

  </li>
  <li class="nav-item">
        <a href="<?=base_url('/admin/pelanggan')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Pelanggan</button></a>
  </li>
  <li class="nav-item">

        <a href="<?=base_url('/admin/obat')?>"><button type="button" class="btn" style="margin-right:25px; padding-left:40px; padding-right:40px; background-color : #C67C4E; color:black">Obat</button></a>

  </li>
</ul>



<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:350px; margin:auto; border-radius:10px; margin-top:50px; box-shadow: 4px 5px 5px #878787">
    
<div style="margin-bottom:20px; padding-left:23px; padding-right:23px;"> 
    <h3>Tambah Obat</h3>
    <h6>ACS</h6>
</div>

<div style="padding-left:23px; padding-right:23px;">



    <form action="<?= base_url('/admin/stores')?>" method="POST" enctype="multipart/form-data">
            
            <div class="mb-1">
                <label for="nama" style="font-size:14px" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat">
            </div>

            <div class="mb-1">
                <label for="tipe_obat" style="font-size:14px" class="form-label">Tipe Obat</label>
                <select class="form-select" aria-label="Default select example" id="tipe_obat" name="tipe_obat">
                    <option value="Kapsul">Kapsul</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Sirup">Sirup</option>
                </select>
            </div>

            <div class="mb-1">
                <label for="harga" style="font-size:14px" class="form-label">Harga</label>
                <input type="text" class="form-control"  id="harga_obat" name="harga_obat">
            </div>

            <div class="mb-1">
                <label for="foto" style="font-size:14px" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

              <button type="submit" value="Simpan" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#C67C4E; color:white; margin-top:30px; margin-bottom:30px;">Tambah</button>
  
</div>

</div>

    </form>

</div>

<a href="<?= base_url('/admin/obat')?>"><button type="button" class="btn" style="margin-top:35px; margin-left:57px; border-radius:6px; padding-left:20px; padding-right:20px; background-color : #C67C4E; color:white">Kembali</button></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


