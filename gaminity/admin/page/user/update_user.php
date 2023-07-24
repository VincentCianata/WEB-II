<?php
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$mysqli->query("UPDATE user SET first_name = '$fname',
                                last_name = '$lname',
                                email = '$email',
                                    role = '$role', 
                                    password = '$pass' 
                                    WHERE id = '$id'");

echo "<script>alert('Data berhasil dirubah')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=data_user'; </script>";
?>