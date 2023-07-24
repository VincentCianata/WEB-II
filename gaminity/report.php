<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - Report Page</title>
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
            padding: 40px;
        }

        .card {
            background: rgba(25, 40, 65, 1);
            font-weight: bold;
            color: white;
            font-size: 25px;
            border: none;
            border-radius: 10;
        }

        .report-us-form {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .back-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="card my-5 p-4 text-white text-center" style="background: rgba(25, 40, 65, 1); font-size: 30px;">
            Report to Us
        </div>

        <div class="report-us-form">
            <form action="submit-page.php" method="post">
                <div class="form-group">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>


    <div class="text-center">
            <a href="support.php" class="btn btn-secondary">Back to Support</a>
    </div>

    <script>
        function submitForm() {
            window.location.href = "submit-page.php";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>