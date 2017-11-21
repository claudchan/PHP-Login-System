<?php

// Allow the config
define( '__CONFIG__', true );

// Require the confiq
require_once "inc/config.php";

ForceDashboard();

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Page Title</title>

		<base href="/PHP-Login-System/" />

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-sm-offset-3">
					<h1>Login</h1>
					<form class="js-login" novalidate>
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
