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
    .form-control {
      background-color: transparent !important;
      border: unset;
      border-bottom: 1px solid blueviolet;
    }

    input {
      color: white !important;
    }
  </style>
</head>

<?php
include "lib/config.php";
//memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

//memeriksa apakah tombol submit ditekan
if (isset($_POST['register'])) {
  //mengambil nilai dari form
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //mengenkripsi password menggunakan password_hash()
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  //membuat query SQL untuk menyimpan data ke tabel user
  $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

  //mengeksekusi query SQL dan memeriksa apakah data berhasil disimpan
  if (mysqli_query($conn, $sql)) {
    //menampilkan alert jika data berhasil disimpan
    echo "<script>alert('Registration Success');</script>";
  } else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
  }
}

//menutup koneksi
mysqli_close($conn);
?>



<body style="background: url('img/bg2.jpg');background-size: cover;">

  <div class="container" style="margin-right:50px;margin-left:50px;margin-bottom:50px;margin-top:100px;">
    <div class="d-flex justify-content-center">
      <div>
        <img src="img/img1.png" width="400" alt="">
      </div>
      <div class="card p-4" style="width: 27rem; border-radius: unset !important; background: linear-gradient(to bottom, #0d253f, #0077be);">
        <h2 class="text-white mb-4">
          REGISTER
        </h2>
        <form action="proses/cek-register.php" method="post">
          <div class="mb-3">
            <label class="text-white">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="text-white">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="text-white">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="text-white">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="mb-3 d-flex gap-2 text-white">
          <div class="mb-3 d-flex gap-2 text-white">
              <input type="radio" name="terms" id="terms-agree" required>
              <label for="terms-agree" style="font-size: 0.8rem;">By clicking you agree to accept our terms & conditions, that you are over 12 & you are aware of our responsible gaming policy!</label>
          </div>
          </div>
          <div class="mb-3 d-flex justify-content-between">
            <div class="text-white" style="position: relative;top: 7px;">
              Already have an account? <a class="text-white" href="signin.php">Sign In</a>
            </div>
            <button type="submit" name="register" class="text-white btn" style="background-image: url(img/btn-img.png);background-size: cover;">
              CREATE
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>