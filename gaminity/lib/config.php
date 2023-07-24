<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db = "gaminity";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}