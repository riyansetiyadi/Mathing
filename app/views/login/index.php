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
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-email"></i></span>
										</div>
										<input type="text" class="form-control input-login" placeholder="Alamat email">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control input-login"
											placeholder="Kata sandi">
									</div>
									<div class="form-group">
										<label class="mz-check">
											<input type="checkbox">
											<i class="mz-blue"></i>
											Ingat Selalu
										</label>
										<label class="float-right"><a href="">Lupa Sandi?</a></label>
									</div>
									<button type="submit" class="btn btn-primary float-right">Masuk <i
											class="ti-angle-double-right" style="font-size: 12px"></i></button>
								</form>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</body>

</html>
