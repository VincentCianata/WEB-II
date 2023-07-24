<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - FAQ Page</title>
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

        .faq-heading {
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .question {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .answer {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .card {
            background: rgba(25, 40, 65, 1);
            color: white;
            font-size: 25px;
            border: none;
            border-radius: 10;
        }

        .back-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <h1 class="faq-heading">Frequently Asked Questions</h1>

        <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
            <div class="question">Q: How do I create an account on your gaming website?</div>
            <div class="answer">A: To create an account, click on the "Sign Up" button on the homepage and fill out the registration form with your details.</div>
        </div>

        <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
            <div class="question">Q: How can I purchase games from your website?</div>
            <div class="answer">A: To purchase games, browse our game catalog and click on the game you want to buy. On the game's page, you'll find the "Buy Now" button to complete your purchase.</div>
        </div>

        <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
            <div class="question">Q: What payment methods do you accept?</div>
            <div class="answer">A: We accept various payment methods, including credit/debit cards, PayPal, and more. You can choose your preferred payment option during the checkout process.</div>
        </div>

        <div class="card my-5 p-4 text-white" style="background: rgba(25, 40, 65, 1); font-size: 20px;">
            <div class="question">Q: How can I contact customer support?</div>
            <div class="answer">A: If you have any questions or need assistance, you can reach our customer support team through the "Support" page on our website. Fill out the contact form, and our team will get back to you as soon as possible.</div>
        </div>

        <a href="support.php" class="btn btn-primary back-btn">Back to Support</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>