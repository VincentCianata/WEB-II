<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - Troubleshooting Page</title>
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

        .troubleshooting-card {
            background: rgba(25, 40, 65, 1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .troubleshooting-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .troubleshooting-item {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .troubleshooting-description {
            margin-bottom: 20px;
        }

        .back-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <h1 class="troubleshooting-heading">Troubleshooting</h1>

        <div class="troubleshooting-card">
            <div class="troubleshooting-item">Issue (General): Did not get The Game Code</div>
            <div class="troubleshooting-description">Possible Solutions:</div>
            <ul>
                <li>Please wait for you purchase to be verified (estimation time 2-5 minutes).</li>
                <li>Make sure your payment is successful, please check your method of payment.</li>
            </ul>
        </div>

        <div class="troubleshooting-card">
            <div class="troubleshooting-item">Issue (General): Some pages are not loading</div>
            <div class="troubleshooting-description">Possible Solutions:</div>
            <ul>
                <li>Please wait refresh your browser.</li>
                <li>Make sure your internet provider allows access to our website.</li>
                <li>Possilbe overload in our system, please refresh after 2-4 minutes</li>
            </ul>
        </div>

        <div class="troubleshooting-card">
            <div class="troubleshooting-item">Issue (Game Related): Poor game performance</div>
            <div class="troubleshooting-description">Possible Solutions:</div>
            <ul>
                <li>Lower the game graphics settings to improve performance.</li>
                <li>Close any unnecessary background applications to free up system resources.</li>
                <li>Update your graphics card drivers to the latest version.</li>
                <li>Check for any available game patches or updates that may address performance issues.</li>
            </ul>
        </div>

        <div class="troubleshooting-card">
            <div class="troubleshooting-item">Issue (Game Related): Game crashes or freezes</div>
            <div class="troubleshooting-description">Possible Solutions:</div>
            <ul>
                <li>Make sure your computer meets the minimum system requirements for the game.</li>
                <li>Update your graphics card drivers to the latest version.</li>
                <li>Verify the game files through the game launcher or platform.</li>
                <li>Disable any overclocking on your system.</li>
            </ul>
        </div>

        <a href="support.php" class="btn btn-primary back-btn">Back to Support</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>