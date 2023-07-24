<?php
include "lib/config.php";
include "lib/lib-user.php";

checkLogin();

$game_id = $_GET['id'];
$game_info = gameByID($game_id);



// Memeriksa apakah data dikirimkan melalui form dan melakukan operasi insert jika data sudah lengkap
if (isset($_POST['wish'])) {
    // Mendapatkan nilai-nilai dari form
    $email = $_POST['email'];
    $game = $game_info['game_name'];
    $game_image = $game_info['game_image'];
    $harga = $game_info['price'];
    $status = "Wishlist";

    // Membuat query SQL untuk melakukan insert data
    $sql = "INSERT INTO wishlist (email, game, harga, status, game_image) VALUES ('$email', '$game', '$harga', '$status', '$game_image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Berhasil Add To Wishlist!');</script>";
        echo "<script>window.location.href='wishlist.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['co'])) {
    // Mendapatkan nilai-nilai dari form
    $email = $_POST['email'];
    $game = $game_info['game_name'];
    $game_image = $game_info['game_image'];
    $harga = $game_info['price'];
    $status = "Checkout";

    // Membuat query SQL untuk melakukan insert data
    $sql = "INSERT INTO wishlist (email, game, harga, status, game_image) VALUES ('$email', '$game', '$harga', '$status', '$game_image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Berhasil Add To Checkout!');</script>";
        echo "<script>window.location.href='checkout.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
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

        .carousel-game {
            width: 83.85vw;
            height: 25vw;
            display: flex;
            flex-direction: row;
            flex: 0;
            background-color: rgba(12, 10, 10, 100%);
        }

        .game-image-name {
            height: 100%;
            width: 15vw;
            background-image: linear-gradient(to right, #121413 50%, #8F1F23 100%);
            flex-direction: column;
            display: flex;
        }

        .image {
            width: 100%;
            height: 20vw;
        }

        .thumbnail {

            width: 100%;
            height: 100%;
            object-fit: co;
        }

        .info-wrapper {
            display: flex;
            flex-direction: row;
            flex: 1;
        }

        .name-price {
            height: 5vw;
            margin-left: 0.5vw;
        }

        .game-name {
            font-size: 1.4vw;
        }

        .price {
            font-size: 1vw;
        }

        .game-desc {
            flex: 1;
            margin-left: 0.6vw;
        }

        .desc {
            text-align: justify;
            font-size: 1.5vw;
        }
    </style>
</head>

<body style="background: rgba(12, 25, 57, 1);">

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h3 class="text-white">
                    <?php echo $game_info['game_name'] ?>
                </h3>
            </div>
            <div>
                <h3 class="text-white">
                    Rating: 4.5/5
                </h3>
            </div>
        </div>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-game">
                        <a href= "game-detail.php?id=<?php echo $game_info['id'] ?>">
                            <div class="info-wrapper">
                                <div class="game-image-name">
                                    <div class="image">
                                        <img src= <?php echo $game_info['game_image'] ?> alt="" class="thumbnail">
                                    </div>
                                    <div class="name-price">
                                        <h2 class="game-name"> <?php echo $game_info['game_name'] ?> </h2>
                                        <span class="price"> <?php priceFormat($game_info['price']) ?> </span>

                                    </div>
                                </div>
                                
                                <div class="game-desc">
                                    <p class="desc">
                                        <?php echo $game_info['game_description'] ?>
                                    </p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-5"></div>


        <div class="card p-3 my-3" style="background: rgba(76, 88, 118, 1);">
            <form action="
            " method="post">
                <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>">
                <input type="hidden" name="game" value="Game 1">
                <input type="hidden" name="harga" value=<?php echo $game_info['price'] ?>>
                <button type="submit" name="wish" class="btn text-white" style="background: rgba(44, 47, 54, 1);">Add to your Wishlist</button>

                <button type="submit" name="co" class="btn text-white" style="background: rgba(44, 47, 54, 1);">Add to your Checkout</button>
            </form>
        </div>

        <div class="card p-3 my-3" style="background: rgba(76, 88, 118, 1);">
            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="text-white">
                        <?php echo $game_info['game_name'] ?>
                    </h3>
                </div>
                <div>
                    <button class="btn text-white" style="background: rgba(44, 47, 54, 1);"> <?php echo priceFormat($game_info['price']) ?></button>
                    <button class="btn btn-success">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <div class="card p-3 my-3 text-white" style="background: rgba(76, 88, 118, 1);">
            <h3>Description :</h3>
            <p> <?php echo $game_info['game_description'] ?> </p>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>