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
            background-color: #ffff;
            text-align: center;
            padding: 50px;
        }
         .container {
            background-color: #5d535e;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            border: 1px solid #ABABAB;
            margin:auto;
        }

        .container h1 {
            margin-bottom: 20px;
        }
        .left-image {
            position: absolute;
            top: 240px;
            left: 200px; 
            width: 510px;
            height: 360px;;
        }
        .button{
            position: absolute;
            top: 10px;
            right: 60px;
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
            margin-top: 30px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ABABAB;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #dfe166;
            color: #fff;
            border: none; 
            padding: 10px 10px ;
            border-radius: 5px;
            width: 337px;
            cursor: pointer;
            transition: transform 0.2s;
            margin-top: 20px;
            margin-right: 70px;
        }
        .left-align {
            text-align: left;
        }
    </style>
</head>
<body style="height: 100vh; 
  background: linear-gradient( 90deg, #dfe166 50%, #ffffff 50%); ">

<br>

    <div class="container">
        <p style="color:#ffffff" class="left-align">Selamat Datang !</p>
        <h1 style="color:#ffffff" class="left-align">Masuk</h1>
        <p style="color:#ffffff" class="left-align">APOTEK CITA SEHAT</p>

        <?= view('Myth\Auth\Views\_message_block') ?>
        <form action="<?= url_to('login') ?>" method="post">
			<?= csrf_field() ?>

            <div class="form-group">
                <label style="color:#ffffff" for="password">Nama Pengguna</label>
                <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" required>
                    <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
            </div>

            <div class="form-group">
                <label style="color:#ffffff" for="password">Kata Sandi</label>
                <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"  required>
                    <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
            </div>

            

            <div class="form-group">
                <button type="submit" name="register">Masuk</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!--  -->


