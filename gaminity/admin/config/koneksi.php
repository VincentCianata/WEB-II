<?php
global $mysqli;
$host="localhost";
$user="root";
$pass="";
$database="gaminity";
$mysqli=new mysqli($host,$user,$pass,$database);
if (mysqli_connect_errno()){
    trigger_error('Koneksi Database Gagal: ' . mysqli_connect_error(), E_USER_ERROR);
}
?>