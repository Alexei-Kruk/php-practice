<?php
$username = trim(filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

$salt = "!@#$%^&*()_+-=";
$password = md5("$password$salt");

require "db.php";
$sql = "INSERT INTO users (username, login, email, password) VALUES (?, ?, ?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute([$username, $login, $email, $password]);

header("Location: /web-site-php/");