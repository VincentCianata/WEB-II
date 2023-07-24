<?php
require_once "../lib/config.php";
require_once "../lib/lib-user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

register($first_name, $last_name, $email, $password, $conn);