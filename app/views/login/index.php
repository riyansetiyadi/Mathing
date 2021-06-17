<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<div class="row justify-content-md-center mt-12">
			<div class="col-sm-8">
				<div class="row border-box">
					<div class="col-sm-6 p-0">
						<img src="img/mosting-login.jpg" class="img-fluid">
					</div>
					<div class="col-sm-6 p-0">
						<div class="card">
							<div class="card-header">
								<img src="img/mz-logo-login.png">
								<div class="sub-title">
									Masuk panel administrator
								</div>
							</div>
							<div class="icon-user">
								<h4 class="ti-user"></h4>
							</div>
							<div class="card-body">
								<form action="<?= BASEURL; ?>/Login/loginPermission" method="post">
									<label for="username">Username </label>
									<input type="text" name="username">
									<label for="password">Password </label>
									<input type="text" name="password">
									<div class="remember-me input">
										<input type="checkbox" name="remember" id="remember">
										<label for="remember">Remember me</label>
									</div>
									<button type="submit" name="login">Login</button>
								</form>
								<a href="<?= BASEURL ?>/Register">Register</a>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</body>

</html>
