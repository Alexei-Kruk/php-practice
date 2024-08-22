<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php include 'components/header.php' ?>

	<div class="feedback">
		<div class="container">
			<h2>Welcome, <?= $_COOKIE["login"] ?></h2>

			<h3>Add game</h3>

			<form method="POST" action="lib/add-game.php">
				<label>Image</label>
				<input type="text" name="image" class="one-line">

				<label>How much followers</label>
				<input type="text" name="followers" class="one-line">

				<button type="submit">Add</button>
			</form>
		</div>
	</div>

	<?php include 'components/footer.php'; ?>
</body>

</html>