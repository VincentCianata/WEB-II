<?php 
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$mysqli->query("INSERT INTO user VALUES ('$id','$fname','$lname','$email','$pass','$role')");

    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script type='text/javascript'> document.location='index.php?page=data_user';</script>";
?>