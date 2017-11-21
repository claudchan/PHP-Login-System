<?php

// Allow the config
define( '__CONFIG__', true );

// Require the config
require_once "inc/config.php";

Page::ForceLogin();

$User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<?php

			require_once "inc/head.php";

		?>

	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-sm-offset-3">
					<h1>Dashboard</h1>
					<h4>Hello <?php echo $User->email; ?>, you registered at <?php echo $User->created; ?></h4>
					<p><a href="/logout.php">Logout</a></p>
				</div>
			</div>
		</div>

		<?php

			require_once "inc/footer.php";

		?>

	</body>
</html>
