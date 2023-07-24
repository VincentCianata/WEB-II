<?php
require_once "../lib/config.php";
require_once "../lib/lib-user.php";

$email = $_POST['email'];
$password = $_POST['password'];

login($email, $password, $conn);