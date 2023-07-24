<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - Support Page</title>
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <style>
        *,
        a[href] {
            color: white;
            text-decoration: none;
        }

        body {
            background: rgba(12, 25, 57, 1);
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .card {
            background: rgba(25, 40, 65, 1);
            color: white;
            font-size: 25px;
            border: none;
            border-radius: 25;
        }

        .card-title {
            font-size: 30px;
            font-weight: bold;
            margin-top: 25px;
            margin-bottom: 25px;
            position: relative;
        }

        .card-title img.left-image {
            position: absolute;
            height: 60px;
            top: 50%;
            left: 350px;
            transform: translateY(-50%);
        }

        .card-title img.right-image {
            position: absolute;
            height: 60px;
            top: 50%;
            right: 350px;
            transform: translateY(-50%);
        }

        .card-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <h1 class="card-title">
                    <img class="left-image" src="img/wrench.png" alt="Left Image"> Support Page <img class="right-image" src="img/wrench.png" alt="Right Image">
                </h1>
            </div>
        </div>

        <a href="contact.php">
            <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
                Contact Us &gt;
            </div>
        </a>

        <a href="faq.php">
            <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
                Frequently Asked Questions &gt;
            </div>
        </a>

        <a href="troubleshooting.php">
            <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
                Troubleshooting &gt;
            </div>
        </a>

        <a href="report.php">
            <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
                Report an Issue &gt;
            </div>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>