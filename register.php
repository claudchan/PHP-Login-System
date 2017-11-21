<?php

// Allow the config
define( '__CONFIG__', true );

// Require the config
require_once "inc/config.php";

Page::ForceDashboard();

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
					<h1>Register</h1>
					<form class="js-register" novalidate>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="inputPassword">Password</label>
							<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
						</div>
						<div class="alert alert-danger js-error" style="display: none;"></div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>

		<?php

			require_once "inc/footer.php";

		?>

	</body>
</html>