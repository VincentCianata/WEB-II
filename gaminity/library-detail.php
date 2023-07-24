<?php
include "lib/config.php";
include "lib/lib-user.php";

checkLogin();

$email = $_SESSION['email'];

$library = "SELECT * FROM wishlist WHERE email = '$email' AND status = 'Success'";
$result_library = mysqli_query($conn, $library);

while($row = mysqli_fetch_assoc($result_library)) {
    $library_items[] = $row;
}

$games = "SELECT * FROM games";
$result_games = mysqli_query($conn, $games);

while($row = mysqli_fetch_assoc($result_games)) {
    $all_games[] = $row;
}


?>

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

        .thumbnail {
            width: 50px;
            height: 50px;
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
                            <?php foreach($library_items as $l) : ?>
                                <option value=""> <?php echo $l['game'] ?> </option>
                            <?php endforeach; ?>
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

                    <?php foreach($library_items as $l) : ?>

                        <a href="library-detail.php?game=<?php echo $l['game'] ?>">
                            <div class="d-flex gap-3 mb-3">
                                <img src= <?php echo $l['game_image'] ?> alt="" class="thumbnail">
                                <span style="position: relative;top:10px;">
                                    <?php echo $l['game'] ?>
                                </span>
                            </div>
                        </a>

                    <?php endforeach; ?>



                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
            <!-- Main content -->
            <div class="col-lg-8" style="background: linear-gradient(to bottom, #150745, #9790a3);">

                <div class="p-1 mt-1">

                    <img src="img/img7.png" class="img-fluid w-100" alt="">

                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-success px-5">
                            <i class="fas fa-play me-1"></i> PLAY
                        </button>

                        <div class="d-flex gap-3">
                            <form action="" method="post">
                                <button style="border:unset;background-color:transparent">
                                    <i class="fas fa-cog text-secondary"></i>
                                </button>
                                <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>">
                                <input type="hidden" name="game" value="Bakso Simulator">
                                <input type="hidden" name="harga" value="150000">
                                <button type="submit" name="add" style="border:unset;background-color:transparent">
                                    <i class="far fa-star text-secondary"></i>
                                </button>
                            </form>
                        </div>
                    </div><br><br>

                    <img src="img/img8.png" class="img-fluid w-75" alt="">
                    <br><br>
                    Version :
                    <br><br>
                    <img src="img/imimg9.png" class="img-fluid w-75" alt="">
                    <br><br>
                    <img src="img/image 11.png" class="img-fluid w-75" alt="">


                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>