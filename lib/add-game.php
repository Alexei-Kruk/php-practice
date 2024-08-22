<?php
$image = $_POST['image'];
$followers = $_POST['followers'];

require "db.php";
$sql = "INSERT INTO gamestrend (image, countFollowers) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute([$image, $followers]);

header("Location: /web-site-php/gamestrend.php");