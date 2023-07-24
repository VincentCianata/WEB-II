<?php
include "lib/config.php";
include "lib/lib-user.php";

checkLogin();


$email = $_SESSION['email'];

$checkout = "SELECT * FROM wishlist WHERE email = '$email' AND status = 'Checkout'";
$result_checkout = mysqli_query($conn, $checkout);

while($row = mysqli_fetch_assoc($result_checkout)) {
    $checkout_items[] = $row;
}
$jumlah_checkout = mysqli_num_rows($result_checkout);

$total_bayar = "SELECT SUM(harga) as total FROM wishlist WHERE email = '$email' AND status = 'Checkout'";
$result_total_bayar = mysqli_query($conn, $total_bayar);

while($row1 = mysqli_fetch_assoc($result_total_bayar)) {
    $rows[] = $row1;
}

$nilai_total_bayar = $rows[0];



if (isset($_POST['add'])) {
    $id = $_POST['id'];

    //Update status menjadi Checkout pada wishlist dengan id yang diberikan
    $query = "UPDATE wishlist SET status='Checkout' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        //Jika update berhasil, munculkan alert dan arahkan ke halaman wishlist
        echo "<script>alert('Checkout Success!');</script>";
    } else {
        //Jika update gagal, munculkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['edit'])) {

    //Update status menjadi Checkout pada wishlist dengan id yang diberikan
    $query = "UPDATE wishlist SET status='Wishlist' WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        //Jika update berhasil, munculkan alert dan arahkan ke halaman wishlist
        echo "<script>alert('Move Success!');</script>";
    } else {
        //Jika update gagal, munculkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['delete'])) {

    //Update status menjadi Checkout pada wishlist dengan id yang diberikan
    $query = "DELETE FROM wishlist WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        //Jika update berhasil, munculkan alert dan arahkan ke halaman wishlist
        echo "<script>alert('Delete Success!');</script>";
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
    <title>Bootstrap demo</title>
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

                <div class="mt-5 d-flex justify-content-between gap-2" style="width: 50rem;">
                    <div class="d-flex gap-3">
                        <form action="" method="post">
                            <button type="submit" name="edit" class="btn" style="background-color: rgba(165, 197, 250, 1);">
                                Move to Wishlist
                            </button>
                        </form>
                        <form action="" method="post">
                            <button type="submit" name="delete" class="btn text-white" style="background-color: red;">
                                Remove
                            </button>
                        </form>
                    </div>


                    <a href="order.php?game=<?= $c['game']; ?>&harga=<?= $c['harga']; ?>&total=<?= $nilai_total_bayar; ?>" class="btn" style="background-color: rgba(165, 197, 250, 1);">
                        Checkout [<?= $jumlah_checkout; ?>]
                    </a>
                </div>

                <div class="mt-5" style="width: 50rem;">
                    <div class="card p-3 d-flex flex-column" style="background-color: rgba(12, 25, 57, 0.75);">
                        <h2 class="my-3 text-white">
                            Checkout list
                        </h2>
                        <?php foreach ($checkout_items as $c) : ?>
                            <div class="card px-4 py-3" style="background-color: rgba(75, 88, 126, 1);">
                                <div class="row" style="background-color: rgba(25, 40, 65, 0.91);">
                                    <div class="col-2 d-flex justify-content-center">
                                        <input type="checkbox" style="cursor: pointer;">
                                    </div>
                                    <div class="col-3">
                                        <img src= <?php echo $c['game_image'] ?> width="200" height="150" alt="">
                                    </div>
                                    <div class="col-7">
                                        <p class="text-white ms-4 mt-2">
                                            <?= $c['game']; ?>
                                        </p>
                                        <p class="text-white ms-4 mt-2">
                                            <?php priceFormat($c['harga']) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <hr>
                        <br>
                        <div class="d-flex justify-content-between text-white">
                            <div>
                                <h5>
                                    Estimated Total
                                </h5>
                            </div>
                            <div>
                                <h5>
                                    <?php priceFormatForCheckout($nilai_total_bayar['total']) ?>
                                    
                                </h5>
                                <br>

                                <a href="order.php" class="btn text-white" style="background-color:rgba(75, 88, 126, 1);">
                                    Purchase
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>