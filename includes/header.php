<?php session_start() ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>CC | Career Care</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="manifest" href="site.webmanifest" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<link rel="stylesheet" href="assets/css/price_rangs.css" />
	<link rel="stylesheet" href="assets/css/slicknav.css" />
	<link rel="stylesheet" href="assets/css/animate.min.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
	<link rel="stylesheet" href="assets/css/themify-icons.css" />
	<link rel="stylesheet" href="assets/css/slick.css" />
	<link rel="stylesheet" href="assets/css/nice-select.css" />
	<link rel="stylesheet" href="assets/css/style.css" />


</head>

<body>
	<!-- Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="assets/img/logo/logo.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!-- Header Start -->
		<div class="header-area header-transparrent">
			<div class="headder-top header-sticky">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 col-md-2">
							<!-- Logo -->
							<div class="logo">
								<a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="menu-wrapper">
								<!-- Main-menu -->
								<div class="main-menu">
									<nav class="d-none d-lg-block">
										<ul id="navigation">
											<li><a href="index.php">Home</a></li>
											<li><a href="job_listing.php">Find a Job</a></li>
											<li><a href="about.php">About</a></li>
											<li><a href="contact.php">Contact</a></li>
											<?php
											if (isset($_SESSION['id'])) {
												include("connection.php");
												if ($_SESSION["role"] == "user") {
													$sql = "SELECT Firstname, Lastname FROM tbluser WHERE ID=" . $_SESSION['id'];
												} else {
													$sql = "SELECT Firstname, Lastname FROM tblrecruiter WHERE ID=" . $_SESSION['id'];
												}
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0) {

													$row = mysqli_fetch_assoc($result);
											?>
													<li>
														<a href="#"><?php echo $row["Firstname"] . " " . $row["Lastname"] ?></a>
														<ul class="submenu">
															<?php
															if ($_SESSION['role'] === "user") {

															?>
																<li><a href="updatedata.php?id=<?php echo $_SESSION['id'] ?>&role=user">Update Profile</a></li>
																<li><a href="applied_jobs.php">Applied Jobs</a></li>
															<?php } elseif ($_SESSION['role'] === "recruiter") {
															?>
																<li><a href="updatedata.php?id=<?php echo $_SESSION['id'] ?>&role=recruiter">Update Profile</a></li>
																<li><a href="postjob.php">Post a new Job</a></li>
																<li><a href="applied_jobs.php">View Jobs</a></li>

															<?php


															} ?>

														</ul>
													</li>
											<?php }
											}
											?>
											<?php
											if (!isset($_SESSION["id"]) && !isset($_SESSION["adminemail"])) {
												echo '
													<li><a href="admin.php">Admin</a></li>
													';
											}
											?>
										</ul>
									</nav>
								</div>
								<!-- Header-btn -->
								<div class="header-btn d-none f-right d-lg-block">
									<?php
									if (isset($_SESSION["id"]) || isset($_SESSION["adminemail"])) {
										echo '<a href="logout.php" class="btn head-btn2">Logout</a>';
									} else {
										echo '<a href="register.php" class="btn head-btn1">Register</a>
										<a href="login.php" class="btn head-btn2">Login</a>';
									}
									?>

								</div>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>