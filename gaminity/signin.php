<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity</title>
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <style>
        .form-control {
            background-color: transparent !important;
            border: unset;
            border-bottom: 1px solid blueviolet;
        }

        input {
            color: white !important;
        }
    </style>
</head>

<?php
include "lib/config.php";




?>



<body style="background: url('img/bg2.jpg');background-size: cover;">

    <div class="container" style="margin-right:50px;margin-left:50px;margin-bottom:50px;margin-top:100px;">
        <div class="d-flex justify-content-center">
            <div>
                <img src="img/img1.png" width="400" alt="">
            </div>
            <div class="card p-4" style="width: 27rem; border-radius: unset !important; background: linear-gradient(to bottom, #0d253f, #0077be);">
                <h2 class="text-white mb-4">
                    SIGN IN
                </h2>
                <form action="proses/cek-login.php" method="post">
                    <div class="mb-3">
                        <label class="text-white">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="text-white">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="text-white" style="position: relative;top: 7px;">
                            Don't have an account yet? <a class="text-white" href="register.php">Register</a>
                        </div>
                        <button type="submit" name="login" class="text-white btn" style="background-image: url(img/btn-img.png);background-size: cover;">
                            SIGN IN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>