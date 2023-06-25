<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
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
                    <div class="col-md-8 col-lg-6 col-xl-4">
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
                                                <img src="<?= base_url('public')?>/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    
                                    
                                    <small class="text-danger"><?= validation_errors();?></small>
                                    <?= $this->session->flashdata('message');?> 
                                
                                </div>

                                <form class ="user" method="POST" action="<?= base_url('auth/prosesLogin');?>">

                                    <div class="mb-3">
                                        <label for="inputEmail" class="form-label">Email address</label>
                                        <input class="form-control" type="text" name="email" required >
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="password" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a href="#" class="text-dark-50 ms-1">Forgot your password?</a></p>
                                    <p class="text-dark-50">Don't have an account? <a href="<?= base_url('auth/registration')?>" class="text-dark ms-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

        <!-- Authentication js -->
        <script src="<?= base_url('public')?>/js/pages/authentication.init.js"></script>

    </body>
</html>