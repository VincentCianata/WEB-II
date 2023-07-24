<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaminity - About Page</title>
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
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .card {
            background: rgba(25, 40, 65, 1);
            color: white;
            font-size: 25px;
            border: none;
            border-radius: 25px;
        }

        .card-title {
            font-size: 30px;
            font-weight: bold;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .card-title img.left-image {
            position: absolute;
            height: 60px;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }

        .card-title img.right-image {
            position: absolute;
            height: 60px;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        .card-text {
            background: rgba(25, 40, 65, 1);
            font-size: 18px;
            padding: 25px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .card-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">
                <img class="left-image" src="img/logo.png" alt="Left Image">
                About Page
                <img class="right-image" src="img/logo.png" alt="Right Image">
            </h1>
        </div>
    </div>

        <div class="container">
            <div id="card1" class="card">
                <div class="card-body">
                    <h2 class="card-title">What is Gaminity?</h2>
                    <div class="card-text">
                        Gaminity is an innovative online platform designed to revolutionize the way gamers discover and purchase their favorite games. With an extensive catalog spanning a wide range of genres and platforms, Gaminity provides a one-stop destination for gaming enthusiasts to explore the latest releases, timeless classics, and hidden gems. Our intuitive user interface and advanced search functionality ensure that users can easily navigate through the vast library of games, enabling them to find exactly what they're looking for. Gaminity also offers personalized recommendations based on individual gaming preferences and previous purchases, enhancing the overall gaming experience and fostering a sense of community among gamers. With secure payment options and seamless integration with popular gaming platforms, Gaminity streamlines the purchasing process, allowing gamers to instantly access their games and embark on immersive gaming adventures. Whether you're a casual player or a hardcore gamer, Gaminity is your ultimate destination to discover, purchase, and indulge in the world of gaming.
                    </div>
                    <div id="cardButton" class="card-button">
                        <button class="btn btn-primary" onclick="showCard2()">Next</button>
                    </div>
                </div>
            </div>

            <div id="card2" class="card" style="display: none;">
                <div class="card-body">
                    <h2 class="card-title">Gaminity's Vision and Mission</h2>
                    <div class="card-text">
                        At Gaminity, our vision is to create an immersive and inclusive gaming ecosystem that brings gamers from around the world together. We envision a platform where players can explore, connect, and engage with their favorite games, fostering a sense of community and belonging. Our ultimate goal is to become the go-to destination for gamers, offering a seamless and personalized experience that caters to their diverse interests and gaming preferences.

                        Our mission at Gaminity is to revolutionize the way gamers discover and purchase games. We strive to provide a comprehensive and curated selection of games, spanning various genres and platforms, enabling players to easily find their next gaming adventure. We are committed to delivering an intuitive and user-friendly interface that simplifies the gaming experience, offering advanced search functionality and personalized recommendations. Additionally, we aim to build a thriving community where gamers can connect, share their experiences, and form lasting friendships. Our mission is to empower gamers to fully immerse themselves in the world of gaming, unlocking endless possibilities and unforgettable moments.

                        At Gaminity, we are driven by a set of core values that guide our every decision and action. These values include passion for gaming, innovation, integrity, inclusivity, and exceptional user experience. We are passionate about gaming and are dedicated to creating a platform that reflects our love for the industry. We strive for continuous innovation, constantly seeking new ways to enhance the gaming experience for our users. Integrity is at the heart of everything we do, as we prioritize transparency, security, and ethical practices. Inclusivity is a fundamental value, ensuring that our platform welcomes gamers from all backgrounds and fosters a sense of belonging. Finally, we are committed to delivering an exceptional user experience, always putting our users at the forefront of our efforts.

                        Together, these elements form the foundation of Gaminity, driving us towards our vision of a vibrant gaming community and empowering gamers worldwide.
                    </div>
                    <div id="cardButton" class="card-button">
                        <button class="btn btn-primary" onclick="showCard1()">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showCard1() {
            document.getElementById("card1").style.display = "block";
            document.getElementById("card2").style.display = "none";
        }

        function showCard2() {
            document.getElementById("card1").style.display = "none";
            document.getElementById("card2").style.display = "block";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>