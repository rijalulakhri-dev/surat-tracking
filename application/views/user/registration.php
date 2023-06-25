<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
	<meta charset="utf-8" />
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('public')?>/images/sipas-bar.ico">

	<!-- Theme Config Js -->
	<script src="<?= base_url('public')?>/js/head.js"></script>

	<!-- Bootstrap css -->
	<link href="<?= base_url('public')?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

	<!-- App css -->
	<link href="<?= base_url('public')?>/css/app.min.css" rel="stylesheet" type="text/css" />

	<!-- Icons css -->
	<link href="<?= base_url('public')?>/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg authentication-bg-pattern">

	<div class="account-pages mt-5 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card bg-pattern">

						<div class="card-body p-4">

							<div class="text-center w-75 m-auto">
								<div class="auth-brand">
									<a href="index.html" class="logo logo-dark text-center">
										<span class="logo-lg">
											<img src="<?= base_url('public')?>/images/SIPAS.png" alt="" height="22">
										</span>
									</a>

									<a href="index.html" class="logo logo-light text-center">
										<span class="logo-lg">
											<img src="<?= base_url('public')?>/images/logo-light.png" alt=""
												height="22">
										</span>
									</a>
								</div>
								<p class="text-muted mb-4 mt-3">Enter your email address and password to access admin
									panel.</p>
							</div>
							<small class="text-danger"><?= validation_errors();?></small>

							<form method="post" action="<?= base_url('auth/proses');?>">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="username" class="form-label">Username</label>
										<input class="form-control" type="text" id="username" name="username" required>
									</div>
									<div class="col-md-6 ">
										<label class="form-label" for="inputEmail">Email address</label>
										<input class="form-control" type="text" name="email" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="inputPassword" class="form-label">Password</label>
										<input class="form-control" type="password" name="password" id="inputPassword"
											required>
									</div>
									<div class="col-md-6">
										<label for="inputPasswordConfirm" class="form-label">Confirm Password</label>
										<input class="form-control" type="password" name="password1"
											id="inputPasswordConfirm" required>
									</div>
								</div>
								<div class="row">
									<p> Daftar sebagai : </p>
									<div class="col-md-6">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="level_access" id="piket"
												value="piket">
											<label class="form-check-label" for="piket">
												Piket
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="level_access"
												id="persuratan" value="persuratan" checked>
											<label class="form-check-label" for="persuratan">
												Persuratan
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="level_access"
												id="pimpinan" value="pimpinan">
											<label class="form-check-label" for="pimpinan">
												Pimpinan
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="level_access" id="admin"
												value="admin">
											<label class="form-check-label" for="admin">
												Admin
											</label>
										</div>
									</div>

								</div>
								<div class="mb-0">
									<button class="btn btn-success btn-sm float-sm-end" type="submit"> Sign Up </button>
								</div>

							</form>
						</div> <!-- end card-body -->
					</div>
					<!-- end card -->

				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end page -->

	<footer class="footer footer-alt">
		2015 -
		<script>
			document.write(new Date().getFullYear())
		</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>
	</footer>


	<!-- Vendor js -->
	<script src="<?= base_url('public')?>/js/vendor.min.js"></script>

	<!-- App js -->
	<script src="<?= base_url('public')?>/js/app.min.js"></script>

	<!-- Authentication js -->
	<script src="<?= base_url('public')?>/js/pages/authentication.init.js"></script>

</body>

</html>