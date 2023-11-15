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
            background-color: #ffff;
            text-align: center;
            padding: 10px;
        }
        .header {
            text-align: center;
            align-items: center;
            padding: 10px;
        }
        .header button {
            margin: 10px;
            margin-top: 0;
            padding: 5px 35px;
            background-color: #C67C4E;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
         .container {
            background-color: #ffff;
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            position: relative;
            border: 1px solid #ABABAB;
            top: 50px;
            
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .button{
            position: absolute;
            top: 10px;
            right: 70px;
            width: 80px;
            height: 80px;
           
        }
        .form-group {
            text-align: left;
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: regular;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ABABAB;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #C67C4E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 340px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .left-align {
            text-align: left;
        }
        .back {
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
        <h1 class="left-align">Edit Obat</h1>
        <p class="left-align">ACS</p>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name"  required>
            </div>
            <div class="form-group">
                <label for="password">Tipe Obat</label>
                <input type="password" name="password"  required>
            </div>
            <div class="form-group">
                <label for="umur">Harga</label>
                <input type="text" name="umur"  required>
            </div>
            <div class="form-group">
                <label for="telp">Foto</label>
                <input type="text" name="telp" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Ubah</button>
            </div>
        </form>
    </div>
    <a href="obat"><button class="back">Kembali</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
