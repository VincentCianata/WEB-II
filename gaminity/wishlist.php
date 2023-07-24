<?php

include "lib/config.php";
include "lib/lib-user.php";
checkLogin();


$email = $_SESSION['email'];

$wishlist = "SELECT * FROM wishlist WHERE email = '$email' AND status = 'Wishlist'";

$result_wishlist = mysqli_query($conn, $wishlist);
while($row = mysqli_fetch_assoc($result_wishlist)) {
    $wishlist_items[] = $row;
}
$jumlah_wishlist = mysqli_num_rows($result_wishlist);





if (isset($_POST['add'])) {
    $id = $_POST['id'];

    //Update status menjadi Checkout pada wishlist dengan id yang diberikan
    $query = "UPDATE wishlist SET status='Checkout' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        //Jika update berhasil, munculkan alert dan arahkan ke halaman wishlist
        echo "<script>
            alert('Checkout Success!');
            window.location.href='checkout.php';
        </script>";
    } else {
        //Jika update gagal, munculkan pesan error
        echo "Error: " . mysqli_error($conn);
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
        .white,
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

        ::placeholder {
            color: white !important;
        }
    </style>
</head>

<body style="background-color: rgba(25, 40, 65, 0.91);">

    <?php include "navbar.php"; ?>

    <!-- Page content -->
    <div class="container" style="padding-left: 200px;padding-right:100px;">
        <div class="d-flex justify-content-start">
            <div class="flex-column">

                <div class="mt-5 d-flex gap-3">
                    <i class="fas fa-user-circle fa-5x"></i>
                    <h1 style="position: relative;top:16px;" class="text-white">Your Wish List</h1>
                </div>

                <div class="mt-5 d-flex gap-2" style="width: 50rem;">
                    <input type="search" class="form-control text-white" style="background-color: rgba(12, 25, 57, 0.75);" placeholder="Search by name">

                    <button class="btn" style="background-color: rgba(165, 197, 250, 1);">
                        WISH LIST [<?= $jumlah_wishlist; ?>]
                    </button>
                </div>

                <div class="mt-5" style="width: 50rem;">
                    <div class="card p-3 d-flex flex-column" style="background-color: rgba(12, 25, 57, 0.75);">

                        <?php foreach ($wishlist_items as $w) : ?>
                            <div class="card px-4 py-3" style="background-color: rgba(75, 88, 126, 1);">
                                <div class="row" style="background-color: rgba(25, 40, 65, 0.91);">
                                    <div class="col-3">
                                        <img src= <?php echo $w['game_image'] ?>  width="200" height="150" alt="">
                                    </div>
                                    <div class="col-9">
                                        <p class="text-white ms-4 mt-2">
                                            <?php echo $w['game'] ?>
                                        </p>
                                        <div class="d-flex justify-content-end">
                                            <form action="" method="post">
                                                <?php $id = $w['id']; ?>
                                                <input type="hidden" name="id" value="<?= $id; ?>">
                                                <button type="submit" name="add" style="background-color: rgba(165, 197, 250, 1);" class="btn text-right me-3">
                                                    Checkout
                                                </button>
                                            </form>
                                        </div>
                                        <p class="text-white ms-4 mt-2">
                                            <?php priceFormat($w['harga']) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>