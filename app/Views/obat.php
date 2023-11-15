<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: justify, sans-serif;
            background-color: #ffff;
            text-align: center;
            padding: 50px;
        }
        .header {
            text-align: center;
            align-items: center;
            padding: 20px;
        }
        .header button {
            margin: 10px;
            padding: 10px 45px;
            background-color: #C67C4E;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .item {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 10px 5px;
            width: 205px;
            min-width: 205px;
            height: 290px;
            min-height: 290px;
            text-align: center;
            font-weight: bold;
            border: 1px solid #ABABAB;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container{
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }
        .item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .item h2 {
            margin: 3px 0;
            font-weight: bold;
        }
        .item p {
            margin: 10px 0;
            font-weight: regular;
        }
        .ubah, .hapus {
            margin: 3px;
            padding: 5px 12px;
            background-color: #C67C4E;
            color: #fff;
            border: none;
            border: 1px solid #ABABAB;
            border-radius: 5px;
            cursor: pointer;
        }
        .tambah {
            
            bottom: 50px;
            left: 100px;
            padding: 10px 30px;
            background-color: #C67C4E;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="header">
        <button>Tentang Kami</button>
        <button>Pemesanan</button>
        <button>Transaksi</button>
        <button>L. Keuangan</button>
        <button>Pegawai</button>
        <button>Pelanggan</button>
        <button style="color: #000;">Obat</button>
    </div>
    <div class="container">
        <div class="item">
            <img src="assets/img/obat 1.jpg" alt="Obat 1">
            <h2>Paracetamol</h2>
            <p>Tablet</p>
            <p>Rp 3.000</p>
            <button class="ubah">Ubah</button>
            <button class="hapus">Hapus</button>
        </div>
        <div class="item">
           
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
        <div class="item">
            
            <h2></h2>
        </div>
    </div>
    <a href="tambah_obat"><button class="tambah">Tambah</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
