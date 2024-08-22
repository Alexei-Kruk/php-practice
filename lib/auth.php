<?php
$login = trim(filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

$salt = "!@#$%^&*()_+-=";
$password = md5("$password$salt");

require "db.php";
$sql = "SELECT * FROM users WHERE login = ? AND password = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$login, $password]);

if ($statement->rowCount() > 0) {
	header("Location: /web-site-php/user.php");
	setcookie("login", $login, time() + 3600 * 24 * 30, "/web-site-php/");
} else {
	echo "Error";
}
