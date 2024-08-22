<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Website</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="wrapper">
		<?php include 'components/header.php' ?>

		<div class="container trending">
			<h3>Currently Trending Games</h3>

			<div class="games">
				<?php
					require_once "lib/db.php";
					$sql = "SELECT * FROM gamestrend ORDER BY id DESC";
					$result = $pdo->query($sql);
					$result->execute();
					$games = $result->fetchAll(PDO::FETCH_OBJ);
					foreach ($games as $game) {
						echo "
							<div class='block'>
								<img src='img/" . $game->image . "' alt=''>
								<span><img src='img/fire.svg' alt=''>" . $game->countFollowers . " Followers</span>
							</div>
						";
					}
				?>
			</div>
		</div>
	</div>

	<?php include 'components/footer.php'; ?>
</body>

</html>