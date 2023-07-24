<?php
include "lib/config.php";
include "lib/lib-user.php";

checkLogin();


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <style>
        *,
        a[href] {
            color: white;
            text-decoration: none;
        }

        ::placeholder {
            color: white !important;
        }

        .input-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .input-field {
            padding-left: 30px;
            padding-right: 30px;
            border: none;
            border-radius: 5px;
            height: 40px;
            width: 300px;
            font-size: 16px;
        }

        .icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .fa-search {
            left: 5px;
        }

        .fa-list {
            right: 5px;
        }

        .modal-backdrop.show {
            opacity: 1 !important;
        }
    </style>
</head>

<body style="background: rgba(12, 25, 57, 1);">

    <?php include "navbar.php"; ?>

    <div class="container my-5">
        <input class="w-50 form-control" type="search" style="background: rgba(0, 0, 0, 1);color:white !important;" placeholder="Search Community Forums">
        <br>
        <div class="row">
            <div class="col-8">
                <h2 class="text-white">Forums</h2>
                <br>
                <img src="img/forums1.png" class="img-fluid mb-3" alt="">
                <img src="img/forums2.png" class="img-fluid mb-3" alt="">
                <img src="img/forums3.png" class="img-fluid mb-3" alt="">
                <img src="img/forums4.png" class="img-fluid mb-3" alt="">
            </div>
            <div class="col-3">
                <h2 class="text-white">Featured Forums</h2>
                <br>
                <img src="img/topic1.png" class="img-fluid mb-3" alt="">
                <img src="img/topic2.png" class="img-fluid mb-3" alt="">
                <img src="img/topic3.png" class="img-fluid mb-3" alt="">
                <img src="img/topic4.png" class="img-fluid mb-3" alt="">
                <img src="img/topic5.png" class="img-fluid mb-3" alt="">
                <img src="img/topic6.png" class="img-fluid mb-3" alt="">
                <img src="img/topic7.png" class="img-fluid mb-3" alt="">
                <img src="img/topic8.png" class="img-fluid mb-3" alt="">
                <img src="img/topic9.png" class="img-fluid mb-3" alt="">
                <img src="img/topic10.png" class="img-fluid mb-3" alt="">
                <img src="img/topic11.png" class="img-fluid mb-3" alt="">
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script>
        // Munculkan modals saat halaman dimuat
        window.addEventListener('DOMContentLoaded', function() {
            var tutorialModal = new bootstrap.Modal(document.getElementById('tutorialModal'));
            tutorialModal.show();
        });
    </script>
</body>

</html>