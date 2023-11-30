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


<div style="outline-color:#878787; outline-style:solid; outline-width:1px; width:350px; margin:auto; border-radius:10px; margin-top:50px; box-shadow: 4px 5px 5px #878787">
    
<div style="margin-bottom:20px; padding-left:23px; padding-right:23px;"> 
    <h3>Tambah Pesanan</h3>
    <h6>ACS</h6>
</div>

<div style="padding-left:23px; padding-right:23px;">


    <form action="<?= base_url('/pelanggan/konfirmasipesanan')?>" method="POST">

    <!-- <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label">Tanggal</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" >
    </div> -->

    <!-- <div class="mb-1">
  <label for="exampleFormControlInput1" style="font-size:14px" class="form-label">Nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" >
    </div> -->

    <div class="mb-1">
      <label for="exampleFormControlInput1" style="font-size:14px" class="form-label">Obat</label>
      <select class="form-select" aria-label="Default select example" name="id_obat">
        <option selected>Pilih Obat</option>
        <?php foreach($obat as $obat){
          ?>
        <option value="<?= $obat['id_obat']?>"><?= $obat['nama_obat']?></option>
        <?php } ?>
      </select>
    </div>

    <div class="mb-1">
      <label for="exampleFormControlInput1" style="font-size:14px" class="form-label">Jumlah</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="jumlah_obat">
        </div>

      <button type="submit" class="btn" style="border-radius:6px; padding-right:125px; padding-left:120px; background-color:#C67C4E; color:white; margin-top:30px; margin-bottom:30px;">Tambah</button>
      
    </div>

  </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


