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
  <li class="nav-item">
        <?php if (logged_in()) : ?>
            <a class="btn btn-dark" href="/logout">Logout</a>
        <?php else : ?>
            <a class="btn btn-dark" href="/login">Login</a> 
        <?php endif; ?>     
  </li>
</ul>

<div style="clear:both;">
    <div style="float:right; margin-top:70px; margin-right:10px;">
        <img style="width:520px"src="<?= base_url('assets/img/landingpage.jpg') ?>" alt="">
    </div>

    <div style="background-color:#C67C4E; float:left; width: 59%; border-radius: 0 20px 20px 0; margin-top:50px; padding-bottom:90px;">
        <table style="margin-top:30px">
            <tr>
                <td> <center><img style="width:200px; border-radius:180px" src="<?= base_url('assets/img/logo.png') ?>" alt=""></center></td>
            </tr>
            <tr>
                <td><center><h5 style="margin-top:30px; color:white">APOTEK CITA SEHAT</h5></center></td>
            </tr>
            <tr>
                <td><center><p style="color:white; margin-left:150px; margin-right:150px; text-align:justify">Kami adalah destinasi online Anda untuk semua kebutuhan kesehatan dan obat-obatan. Di Apotek Cita Sehat, kami berkomitmen untuk memberikan informasi kesehatan yang terpercaya dan berkualitas, serta akses mudah untuk mencari, membandingkan, dan membeli berbagai jenis obat, suplemen, dan produk kesehatan lainnya.</p></center></td>
            </tr>
        </table>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

