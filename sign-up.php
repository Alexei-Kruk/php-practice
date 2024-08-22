<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php include 'components/header.php' ?>

	<div class="feedback">
		<div class="container">
			<h2>Sign Up</h2>

			<form method="POST" action="lib/checkSignUp.php">
				<div class="inline">
					<div>
						<label>Name</label>
						<input type="text" name="username">
					</div>
					<div>
						<label>Login</label>
						<input type="text" name="login">
					</div>
				</div>
				<label>Email</label>
				<input type="email" name="email" class="one-line">

				<label>Password</label>
				<input type="password" name="password" class="one-line">

				<button type="submit">Sign Up</button>
			</form>
		</div>
	</div>

	<?php include 'components/footer.php'; ?>
</body>

</html>