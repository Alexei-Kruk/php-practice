<header class="container">
	<span class="logo">logo</span>
	<nav>
		<ul>
			<li class="active"><a href="/web-site-php/">Home</a></li>
			<li><a href="/web-site-php/about.php">About us</a></li>

			<?php
				if (isset($_COOKIE["login"])) {
					echo "<li><a href='/web-site-php/user.php'>Account</a></li>";
				} else {
					"<li><a href='/web-site-php/sign-up.php'>Sign Up</a></li>
					<li><a href='web-site-php/sign-in.php'>Sign In</a></li>";
				}
			?>

			<li class="btn"><a href="/web-site-php/contacts.php">Contacts</a></li>
		</ul>
	</nav>
</header>