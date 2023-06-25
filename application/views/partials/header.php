<?php 
var_dump($this->session->userdata());
?>

<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('public')?>/images/sipas-bar.ico">

	<!-- Plugins css -->
	<link href="<?= base_url('public')?>/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('public')?>/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet"
		type="text/css" />

	<!-- Theme Config Js -->
	<script src="<?= base_url('public')?>/js/head.js"></script>

	<!-- Bootstrap css -->
	<link href="<?= base_url('public')?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

	<!-- App css -->
	<link href="<?= base_url('public')?>/css/app.min.css" rel="stylesheet" type="text/css" />

	<!-- Icons css -->
	<link href="<?= base_url('public')?>/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>


<body>


	<div id="wrapper">
		<!-- ========== Nav Start ========== -->
		<div class="app-menu">

			<!-- Brand Logo -->
			<div class="logo-box">
				<!-- Brand Logo Light -->
				<a href="index.html" class="logo-light">
					<img src="<?= base_url('public')?>/images/SIPAS.png" alt="logo" class="logo-lg">
					<img src="<?= base_url('public')?>/images/sipas-sm.png" alt="small logo" class="logo-sm">
				</a>

				<!-- Brand Logo Dark -->
				<a href="index.html" class="logo-dark">
					<img src="<?= base_url('public')?>/images/SIPAS.png" alt="dark logo" class="logo-lg">
					<img src="<?= base_url('public')?>/images/sipas-sm.png" alt="small logo" class="logo-sm">
				</a>
			</div>

			<!-- menu-left -->
			<div class="scrollbar">

				<!-- User box -->
				<div class="user-box text-center">
					<img src="<?= base_url('public')?>/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
						class="rounded-circle avatar-md">

					<div class="dropdown">
						<a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block"
							data-bs-toggle="dropdown">Geneva Kennedy</a>
						<div class="dropdown-menu user-pro-dropdown">

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-user me-1"></i>
								<span>My Account</span>
							</a>

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-settings me-1"></i>
								<span>Settings</span>
							</a>

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-lock me-1"></i>
								<span>Lock Screen</span>
							</a>

							<!-- item-->

							<a href="#" class="dropdown-item notify-item">
								<i class="fe-log-out me-1"></i>
								<span>Logout</span>
							</a>


						</div>
					</div>
					<p class="text-muted mb-0">Admin Head</p>
				</div>

				<!--- Menu -->

				<ul class="menu">

					<li class="menu-title">Navigation</li>

					<li class="menu-item">
						<a href="<?php base_url()?>home" class="menu-link">
							<span class="menu-icon"><i data-feather="airplay"></i></span>
							<span class="menu-text"> Dashboards </span>
						</a>
					</li>

					<li class="menu-title">Apps</li>

					<li class="menu-item">
						<a href="<?php base_url()?>surat" class="menu-link">
							<span class="menu-icon"><i data-feather="folder-plus"></i></span>
							<span class="menu-text"> Tambah Surat </span>
						</a>
					</li>

					<?php if ($this->session->userdata('level_access') == 2 || $this->session->userdata('level_access') == 3 || $this->session->userdata('level_access') == 4): ?>

					<li class="menu-item">
						<a href="<?php base_url()?>laporan" class="menu-link">
							<span class="menu-icon"><i data-feather="clipboard"></i></span>
							<span class="menu-text"> Laporan </span>
						</a>
					</li>

					<li class="menu-item">
						<a href="<?php base_url()?>progress" class="menu-link">
							<span class="menu-icon"><i data-feather="bar-chart-2"></i></span>
							<span class="menu-text"> Progres </span>
						</a>
					</li>

					<?php endif; ?>

					<?php if ($this->session->userdata('level_access') == 4): ?>

					<li class="menu-item">
						<a href="<?= base_url()?>activity/user_list" class="menu-link">
							<span class="menu-icon"><i data-feather="users"></i></span>
							<span class="menu-text"> Activity </span>
						</a>

					</li>
					<?php endif; ?>

					<li class="menu-item">
						<a href="<?php base_url()?>about" class="menu-link">
							<span class="menu-icon"><i data-feather="info"></i></span>
							<span class="menu-text"> About </span>
						</a>
					</li>

				</ul>

				<!--- End Menu -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- ========== Nav End ========== -->

		<div class="content-page">
			<!-- ========== TopBar Start ========== -->
			<div class="navbar-custom">
				<div class="topbar">
					<div class="topbar-menu d-flex align-items-center gap-1">

						<!-- Topbar Brand Logo -->
						<div class="logo-box">
							<!-- Brand Logo Light -->
							<a href="index.html" class="logo-light">
								<img src="<?= base_url('public')?>/images/SIPAS-dark.png" alt="logo" class="logo-lg">
								<img src="<?= base_url('public')?>/images/sipas-dark-sm.png" alt="small logo"
									class="logo-sm">
							</a>
						</div>

						<!-- Sidebar Menu Toggle Button -->
						<button class="button-toggle-menu">
							<i class="mdi mdi-menu"></i>
						</button>
					</div>

					<ul class="topbar-menu d-flex align-items-center">

						<!-- Light/Dark Mode Toggle Button -->
						<li class="dropdown notification-list">
							<a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
								data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
								aria-expanded="false">
								<i class="fe-bell font-22"></i>
								<span class="badge bg-danger rounded-circle noti-icon-badge"><?= $countSurat ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
								<div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
									<div class="row align-items-center">
										<div class="col">
											<h6 class="m-0 font-16 fw-semibold"> Notification</h6>
										</div>

									</div>
								</div>

								<div class="px-1" style="max-height: 300px;" data-simplebar>
									<?php 

                                    if ($this->session->userdata('level_access') == 2) {
                                        if ($countSurat != 0 ) { 
                                            foreach ($setDataSurat as $data) {
                                                ?>
									<a href="<?= base_url('laporan') ?>"
										class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
										<div class="card-body">
											<span class="float-end noti-close-btn text-muted"><i
													class="mdi mdi-close"></i></span>
											<div class="d-flex align-items-center">
												<div class="flex-shrink-0">
													<div class="notify-icon bg-primary">
														<i class="mdi mdi-comment-account-outline"></i>
													</div>
												</div>
												<div class="flex-grow-1 text-truncate ms-2">
													<h5 class="noti-item-title fw-semibold font-14">Bagian Piket <small
															class="fw-normal text-muted ms-1"></small></h5>
													<small class="noti-item-subtitle text-muted"><?= $data->keterangan_surat ?></small>
												</div>
											</div>
										</div>
									</a>
									<?php
                                            }

                                         }
                                    }
                                        
                                        ?>





									<div class="text-center">
										<i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
									</div>
								</div>

								<!-- All-->
								<a href="javascript:void(0);"
									class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
									View All
								</a>

							</div>
						</li>
						<!-- User Dropdown -->
						<li class="dropdown">
							<a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
								data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
								aria-expanded="false">
								<!-- image -->
								<span class="ms-1 d-none d-md-inline-block">Hi,
									<?php echo $this->session->userdata('username'); ?> <i
										class="mdi mdi-chevron-down"></i>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end profile-dropdown ">
								<!-- item-->
								<div class="dropdown-header noti-title">
									<h6 class="text-overflow m-0">Welcome !</h6>
								</div>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<i class="fe-user"></i>
									<span>My Account</span>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<i class="fe-settings"></i>
									<span>Settings</span>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<i class="fe-lock"></i>
									<span>Lock Screen</span>
								</a>

								<div class="dropdown-divider"></div>

								<!-- item-->
								<a href="<?= base_url('auth/logout');?>" class="dropdown-item notify-item">
									<i class="fe-log-out"></i>
									<span>Logout</span>
								</a>

							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- ========== TopBar End ========== -->