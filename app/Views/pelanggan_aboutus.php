<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="height: 100vh; 
  background: linear-gradient( 170deg, #5d535e 50%, #dfe166 50%); ">

<nav style="box-shadow: 1px 2px 2px #333333" class="navbar navbar-expand-lg bg-#5d535e">
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


<div style="clear:both;">

    <div style=" float:left; margin-top:50px; padding-bottom:90px;">
        <table >
            <tr>
                <td><h1 style="margin-top:30px; color:#ffffff; margin-left:30px; margin-right:30px">APOTEK CITA SEHAT</h1></td>
            </tr>
            <tr>
                <td><h5 style="margin-top:10px; color:#ffffff; margin-left:30px; margin-right:30px">Memahami Kebutuhan Anda, Memberikan Obat Terbaik.</h5></td>
            </tr>
        </table>
    </div>
</div> 


<div style="margin-top:134px; float:right; margin-right:70px;">
    <img src="<?=base_url("/assets/img/animasi.png")?>" alt="">
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
