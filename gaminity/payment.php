<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - Payment Page</title>
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
        }

        .form-group.payment-methods {
            display: flex;
            align-items: center;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .payment-method label {
            margin-left: 10px;
        }

        .payment-button {
            margin-top: 30px;
        }

        .payment-button button {
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .payment-button button:hover {
            background-color: #0056b3;
        }

        .payment-button button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body style= "background-color: rgba(25, 40, 65, 0.91);">

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="card">
            <h1 class="card-title">Payment Page</h1>

            <div class="form-group">
                <label for="name" class="form-label">Cardholder Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter cardholder name" required>
            </div>

            <div class="form-group">
                <label for="card-number" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="card-number" placeholder="Enter card number" required>
            </div>

            <div class="form-group">
                <label for="expiry-date" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY" required>
            </div>

            <div class="form-group">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" required>
            </div>

            <div class="form-group payment-methods">
                <div class="payment-method">
                    <input type="radio" id="paypal" name="payment-method" value="paypal" required>
                    <label for="paypal">PayPal</label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="credit-card" name="payment-method" value="credit-card" required>
                    <label for="credit-card">Credit Card</label>
                </div>
            </div>

            <div class="payment-button">
                <a href="wishlist.php" class="btn">Proceed</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
