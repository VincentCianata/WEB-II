<?php
include "lib/config.php";
include "lib/lib-user.php";

checkLogin();
$carousel = "SELECT * FROM games";
$recommended = "SELECT * FROM games where recommended = 'Y'";
$result_carousel = mysqli_query($conn, $carousel);
$result_recommended = mysqli_query($conn, $recommended);
$carousel_items = array();

while($row = mysqli_fetch_assoc($result_carousel)) {
    $carousel_items[] = $row;
}

while($row2 = mysqli_fetch_assoc($result_recommended)) {
    $recommended_items[] = $row2;
}

$active_item = array_shift($carousel_items);

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

        * {
            margin: 0;
            padding: 0;
        }
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

        .modal-header h5.modal-title {
            font-family: Arial, sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: black;
        }

        .modal-backdrop.show {
            opacity: 1 !important;
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

        .r-game-card {
            padding-bottom: 1.2vw;
        }

        .r-image-name {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(to right, #121413 50%, #8F1F23 100%);
            justify-content: space-between;
        }

        .r-image {
            width: 100%;
            height: 10vw;
        }

        .r-thumbnail {

            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .r-name-price {
            height: 3.4vw;
            margin-left: 0.5vw;
            display: flex;
            align-items: center;
        }

        .r-game-name {
            width: 70%;
            font-size: 1vw;
        }

        .r-price {
            font-size: 0.6vw;
            margin-left: auto;
            margin-right: 0.5vw;
        }


    </style>
</head>

<body style="background: rgba(12, 25, 57, 1);">

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="card my-5 p-3 text-white" style="background: rgba(25, 40, 65, 1);">
            For the first time ever, Gaminity is bringing the seasonal sale fun to SPRING! The Gaminity Spring Sale is on now:
            From March 16th - March 23rd at 10am Pacific, enjoy discounts on games of all kinds!
        </div>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="carousel-game">
                        <a href= "game-detail.php?id=<?php echo $active_item['id'] ?>">
                            <div class="info-wrapper">
                                <div class="game-image-name">
                                    <div class="image">
                                        <img src= <?php echo $active_item['game_image'] ?> alt="" class="thumbnail">
                                    </div>
                                    <div class="name-price">
                                        <h2 class="game-name"> <?php echo $active_item['game_name'] ?> </h2>
                                        <span class="price"> <?php priceFormat($active_item['price']) ?> </span>

                                    </div>
                                </div>
                                
                                <div class="game-desc">
                                    <p class="desc">
                                        <?php echo $active_item['game_description'] ?>
                                    </p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                </div>
                <?php
                    $counter = 0;
                    foreach($carousel_items as $item) {
                        if($counter >= 3) {
                            break;
                        }
                        ?>
                        <div class="carousel-item">
                            <div class="carousel-game">
                                <a href= "game-detail.php?id=<?php echo $item['id']?>">
                                <div class="info-wrapper">
                                    <div class="game-image-name">
                                        <div class="image">
                                            <img src= <?php echo $item['game_image'] ?> alt="" class="thumbnail">
                                        </div>
                                        <div class="name-price">
                                            <h2 class="game-name"> <?php echo $item['game_name'] ?> </h2>
                                            <span class="price"> <?php priceFormat($item['price']) ?> </span>

                                        </div>
                                    </div>
                                    <div class="game-desc">
                                        <p class="desc">
                                            <?php echo $item['game_description'] ?>
                                        </p>
                                    </div>
                                </div>
                                    
                                </a>
                            </div>
                        </div>
                        <?php
                        $counter++;
                    }
                ?>

                

                

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

        <h3 class="text-white">
            Recommended
        </h3>
        <br>

        <div class="row mb-5">

            <?php
             foreach($recommended_items as $items) {

             ?>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="r-game-card">
                    <a href="game-detail.php?id=<?php echo $items['id'] ?>">
                        <div class="r-image-name">
                            <div class="r-image">
                                <img src= <?php echo $items['game_image'] ?> alt="" class="r-thumbnail">
                            </div>
                            <div class="r-name-price">
                                <h2 class="r-game-name"><?php echo $items['game_name'] ?></h2>
                                <span class="r-price"><?php priceFormat($items['price']) ?></span>

                            </div>
                        </div>
                    </a>

                </div>
                
            </div>
            <?php
            }
            ?>


            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <a href="game-detail.php">
                    <img src="img/game2.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <a href="game-detail.php">
                    <img src="img/game3.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <a href="game-detail.php">
                    <img src="img/game4.png" class="img-fluid" alt="">
                </a>
            </div> -->
        </div>

    </div>

    <!-- Tutorial Mode -->
    <div class="modal fade" id="tutorialModal" tabindex="-1" aria-labelledby="tutorialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tutorialModalLabel">Gaminity Web Tutorial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselTutorial" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item py-5 bg-dark active" style="color:white !important;">
                                <p class="text-white" style="text-align: justify;"> The navbar is like a menu at the top of a website. It helps you find your way around by showing links to different pages or sections. It's there to make it easy for you to navigate the website and quickly find what you're looking for.</p>
                            </div>
                            <div class="carousel-item py-5 bg-dark" style="color:white !important;">
                                <p class="text-white" style="text-align: justify;"> Gaminity is your go-to gaming platform. Discover, buy, and enjoy a wide variety of games, all in one place. Whether you're a casual or hardcore gamer, Gaminity is designed to provide any gaming easy and enjoyable for everyone.</p>
                            </div>
                            <div class="carousel-item py-5 bg-dark" style="color:white !important;">
                                <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quibusdam magnam necessitatibus expedita inventore vitae iure velit perferendis, eveniet, dicta ducimus doloribus facilis cum beatae qui vero pariatur at blanditiis. Quidem sit incidunt dolorem ipsa architecto quo, sunt reiciendis exercitationem magnam voluptatem illo eaque tempore rem alias omnis nemo error optio dolores corporis voluptas veritatis accusantium officia sequi. Dolor.</p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTutorial" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTutorial" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark " aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Skip</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button>
                </div>
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