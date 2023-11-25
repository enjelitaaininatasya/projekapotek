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
            padding: 50px;
        }
         .container {
            background-color: #ffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            position: absolute;
            border: 1px solid #ABABAB;
            top: 50px;
            right: 150px;
        }

        .container h1 {
            margin-bottom: 20px;
        }
        .left-image {
            position: absolute;
            top: 240px;

            left: 100px; 
            width: 500px;
            height: 350px;;

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
            border-radius: 3px;
        }

        .form-group button {
            background-color: #C67C4E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 357px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .left-align {
            text-align: left;
        }
    </style>
</head>
<body>


    <img src="<?= base_url('assets/img/register.jpg') ?>" alt="Gambar Sebelah Kiri" class="left-image">


    <div class="container">
        <p class="left-align">Selamat Datang !</p>
        <h1 class="left-align">Daftar</h1>
        <p class="left-align">APOTEK CITA SEHAT</p>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name">Email</label>
                <input value="<?= old('email') ?>" type="text" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"   placeholder="Masukkan Email Anda" required>
            </div>
            <div class="form-group">
                <label for="name">Nama Pengguna</label>
                <input value="<?= old('username') ?>" type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"   placeholder="Masukkan Nama Pengguna" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Masukkan Kata Sandi" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Konfirmasi Kata Sandi</label>
                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Konfirmasi Kata Sandi" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" name="umur"  placeholder="Masukkan Umur" required>
            </div>
            <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telepon"  placeholder="Masukkan Nomor Telepon" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Mendaftar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
