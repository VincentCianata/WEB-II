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
        *,
        a[href] {
            color: white;
            text-decoration: none;
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
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <!-- Page content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-4" style="background: linear-gradient(to top, #0d253f, #2f0174);">
                <div class="d-flex py-1 px-3 mt-3 mb-2 justify-content-between" style="background-color: #220730;">
                    <div>
                        HOME
                    </div>
                    <div>
                        <i class="fas fa-th-list"></i>
                    </div>
                </div>

                <div class="d-flex py-1 px-1 mt-3 mb-5 justify-content-between">
                    <div>
                        <select style="background-color: grey;">
                            <option value="">GAMES</option>
                            <option value="">Bakso Simulator</option>
                            <option value="">Stumble Guys</option>
                        </select>
                    </div>
                    <div class="d-flex gap-3">
                        <i class="far fa-clock"></i>
                        <i class="far fa-play-circle"></i>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-container">
                        <i class="fa fa-search icon"></i>
                        <input class="input-field w-100" style="background-color: #2a5b90;" type="text" placeholder="Search...">
                        <i class="fa fa-list icon"></i>
                    </div>
                </div>

                <div class="m-2">
                    All <span class="text-secondary">(2)</span>
                    <br><br>

                    <a href="library-detail.php">
                        <div class="d-flex gap-3 mb-3">
                            <img src="img/mini1.png" alt="">
                            <span style="position: relative;top:10px;">
                                Bakso Simulator
                            </span>
                        </div>
                    </a>

                    <a href="library-detail.php">
                        <div class="d-flex gap-3">
                            <img src="img/mini2.png" alt="">
                            <span style="position: relative;top:10px;">
                                Stumble Guys
                            </span>
                        </div>
                    </a>



                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
            <!-- Main content -->
            <div class="col-lg-8" style="background: linear-gradient(to bottom, #150745, #9790a3);">

                <div class="p-3 mt-3" style="background-image: url('img/bg-news.png');">
                    What's New
                    <div class="mt-1 d-flex gap-2">
                        <div>
                            <img src="img/news1.png" class="img-fluid" alt="">
                        </div>
                        <div>
                            For the first time ever, Steam is bringing the seasonal sale fun to SPRING! The Steam Spring Sale is on now:
                            From March 16th - March 23rd at 10am Pacific, enjoy discounts on games of all kinds!And...
                            also for the first time ever,
                            Steam Deck is on sale! All three versions are 10% off throughout the duration of the Spring
                            Sale in regions where Steam Deck is shipping.
                            It's all part of our celebration of one whole year of Steam Deck, which you can read more about (and purchase) <span style="color:#5315a9">HERE</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2" style="margin-top: 300px;">
                    <img src="img/img2.png" class="img-fluid" alt="">
                    <img src="img/img3.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>