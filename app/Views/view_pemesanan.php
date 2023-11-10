<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: justify, sans-serif;
            background-color: #Ffff;
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
         .container1 {
            background-color: #ffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 68%;
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            text-align: center;
            border: 1px solid #ABABAB;
            top: 70px;
            justify-content: space-between;
            margin: 0 auto;
         }
        .container2 {
            background-color: #ffff;
            padding: 10px 20px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            margin-top: 70px;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
        }
        .items {
            width: 20%;
            text-align: left;
            margin-bottom: 15px;
        }
        .item {
            width: 100%;
            margin-bottom: 15px;
            text-align: center;
            align-self: flex-start;
            margin-bottom: 5px;
        }
        .item h1{
            font-size: 40px;
            font-weight: bold;
        }
        .items h2 {
            margin-bottom: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        .items p {
            margin: 0;
            font-size: 16px;
        }
        .button{
            position: absolute;
            top: 10px;
            right: 70px;
            width: 80px;
            height: 80px;
           
        }
        .left-align {
            text-align: left;
        }
        .ubah, .hapus {
            margin: 3px;
            padding: 8px 40px;
            background-color: #C67C4E;
            color: #fff;
            border: none;
            border: 1px solid #ABABAB;
            border-radius: 5px;
            cursor: pointer;
        }
        .back {
            position: fixed;
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
        <button style="color: #000;"><a href="/view_pemesanan">Pemesanan</a></button>
        <button>Transaksi</button>
        <button>L. Keuangan</button>
        <button>Pegawai</button>
        <button>Pelanggan</button>
        <button>Obat</button>
    </div>
    <div class="container1">
        <div class="item">
            <h1>Pemesanan</h1>
        </div>
    <div class="container2">
        <div class="items">
            <h2>Id</h2>
            <p>1</p>
        </div>

        <div class="items">
            <h2>Tanggal</h2>
            <p>18-03-2023</p>
        </div>

        <div class="items">
            <h2>Nama</h2>
            <p>Dian</p>
        </div>

        <div class="items">
            <h2>Obat</h2>
            <p>Bodrex</p>
        </div>

        <div class="items">
            <h2>Jumlah</h2>
            <p>1</p>
        </div>

        <div class="items">
            <h2>Harga</h2>
            <p>10000</p>
        </div>
        <button class="ubah">Selesai</button>
        <button class="hapus">Hapus</button>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
