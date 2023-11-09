<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: justify, sans-serif;
            background-color: rgba(198, 124, 78, 0.8);
            text-align: center;
            padding: 50px;
        }
         .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            margin: 0 auto;
            position: relative;
            width: 700px;
        }

        .container h1 {
            margin-bottom: 20px;
        }
        .logo-left {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
            height: 80px;
            border-radius: 80%;
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
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s;
        }
    </style>
</head>
<body>
    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo Kiri" class="logo-left">
    <div class="button">
    <a href="<?= base_url('/') ?>"><button type="button" class="btn" style="padding-left:40px; padding-right:40px; background-color : #C67C4E; color:white">Home</button></a>
    </div>
    <div class="container">
        <h1>Masuk</h1>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login">Masuk</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
