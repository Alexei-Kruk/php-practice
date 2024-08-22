<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php include 'components/header.php' ?>

	<div class="feedback">
		<div class="container">
			<h2>Sign In</h2>

			<form method="POST" action="lib/auth.php">
				<div class="inline">
					<div>
						<label>Login</label>
						<input type="text" name="login">
					</div>
					<div>
						<label>Password</label>
						<input type="password" name="password">
					</div>				
				</div>
				<button type="submit">Sign Up</button>
			</form>
		</div>
	</div>

	<?php include 'components/footer.php'; ?>
</body>

</html>