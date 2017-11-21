<?php

// Allow the config
define( '__CONFIG__', true );

// Require the config
require_once "inc/config.php";

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
					<h1>
						<?php

							echo "Hello World! Today is: ";
							echo date("Y m d");

						?>
					</h1>
					<p>
						<a href="/login.php">Login</a>
						<a href="/register.php">Register</a>
					</p>
				</div>
			</div>
		</div>

		<?php

			require_once "inc/footer.php";

		?>

	</body>
</html>