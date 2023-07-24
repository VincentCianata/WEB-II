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
$discount = 0;
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

        .name-price {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px;
            height: 100%; 
        }



    </style>
</head>

<body style="background-color: rgba(25, 40, 65, 0.91);">


    <?php include "navbar.php"; ?>


    <div class="m-4 d-flex justify-content-between gap-5">
        <div class="bg-white rounded p-3" style="width: 42%;">
            <h3>Order</h3> <br>
            <?php foreach($checkout_items as $c) : ?>
                <div class="d-flex justify-content-between" style="align-items: center; background-color:">
                    <img src=<?php echo $c['game_image'] ?> class="img-fluid rounded w-25" alt="">
                    <div class="name-price">
                        <h4 style="position: relative;" >
                            <center>
                                <?= $c['game']; ?> <br><br>
                                <?php priceFormatForCheckout($c['harga']) ?>
                            </center>
                        </h4>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
            <br>
            <br>
            <table class="w-100">
                <tr>
                    <td>Price</td>
                    <td> <?php priceFormatForCheckout($nilai_total_bayar['total']) ?> </td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td> <?php priceFormatForCheckout($discount) ?> </td>
                </tr>
                <tr>
                    <td>VAT Included if applicable</td>
                </tr>
            </table>
            <br>
            <hr>
            <table class="w-100">
                <tr>
                    <th>Total</th>
                    <th style="text-align: right;"> <?php priceFormatForCheckout($nilai_total_bayar['total']) ?> </th>
                </tr>
            </table>
            <br><br><br>

            <?php
            $email = $_SESSION['email'];

            if (isset($_POST['order'])) {

                $query = "UPDATE wishlist SET status='Success' WHERE email='$email'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "<script>
                            window.location.href='success.php';
                        </script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
            ?>


            <form action="" method="post">
                <button type="submit" name="order" class="btn w-100 text-white" style="background: rgba(39, 56, 82, 1);">

                    Place Order

                </button>
            </form>
        </div>
        <div class="bg-white w-100 rounded p-3">
            <h3>Payment Method</h3>
            <br>
            <div style="background: rgba(44, 56, 87, 0.45);" class="d-flex gap-2 p-2 mb-3 rounded">
                <input type="checkbox" name="payment_method" value="Paypal" class="me-3">
                <img src="img/Paypal.png" class="img-fluid" width="50">
                <h3>Paypal</h3>
            </div>
            <div style="background: rgba(44, 56, 87, 0.45);" class="d-flex gap-2 p-2 mb-3 rounded">
                <input type="checkbox" name="payment_method" value="Ovo" class="me-3">
                <img src="img/Ovo.png" class="img-fluid" width="50">
                <h3>Ovo</h3>
            </div>
            <div style="background: rgba(44, 56, 87, 0.45);" class="d-flex gap-2 p-2 mb-3 rounded">
                <input type="checkbox" name="payment_method" value="Dana" class="me-3">
                <img src="img/Dana.png" class="img-fluid" width="50">
                <h3>Dana</h3>
            </div>
            <div style="background: rgba(44, 56, 87, 0.45);" class="d-flex gap-2 p-2 mb-3 rounded">
                <input type="checkbox" name="payment_method" value="Bca" class="me-3">
                <img src="img/Bca.png" class="img-fluid" width="50">
                <h3>Bca</h3>
            </div>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>