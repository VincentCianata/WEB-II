<?php
require_once "config.php";

global $conn;

function login($email, $password, $conn) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = true;
            $_SESSION['email'] = $row['email'];
            $role = $row['role'];
            if($role == 'Admin') {
                header('location: ../admin-dashboard.php');

            }

            else {
                header('location: ../index.php');
                exit();
            }

            
        } else {
            echo "<script>alert('Password is incorrect');</script>";
        }
    } else {
        echo "<script>alert('Email is incorrect');</script>";
    }
    
}

function register($first_name, $last_name, $email, $password, $conn) {
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
      header('location: ../signin.php');
    } else {
      echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function checkLogin() {
    if (!isset($_SESSION['user'])) {
        echo "<script>
        window.location.replace('signin.php');
        </script>";
        exit;
    }
}

function priceFormat($price) {
    if ($price==0) {
        echo "Free to Play";
    }
    else {
        $formattedPrice = number_format($price, 2, ',', '.');
        $currencySymbol = "Rp. ";
        echo $currencySymbol .  $formattedPrice;
    }
}

function gameByID($id) {
    global $conn;
    $query = "SELECT * FROM games where id = $id";
    $result = mysqli_query($conn, $query);
    $game_info = mysqli_fetch_assoc($result);

    return $game_info;
}

function priceFormatForCheckout($price) {

        $formattedPrice = number_format($price, 2, ',', '.');
        $currencySymbol = "Rp. ";
        echo $currencySymbol .  $formattedPrice;

}



