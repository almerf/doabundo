<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doabundo</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- Favicon -->
	<link href="<?php echo base_url(); ?>assets/images/logo_home.png" rel="shortcut icon"/>
	

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left site-logo-padding">
						<!-- logo -->
						<a href="<?php echo base_url(); ?>" class="site-logo">
							<img src="<?php echo base_url(); ?>assets/images/logo_home.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-2 search">
						<form class="header-search-form" action="<?php echo site_url('doabundo/hasil_pencarian'); ?>">
							<input type="text" placeholder="Cari makanan disini...">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-8 test">
						<div class="user-panel row">
							<div class="up-item col-lg-3" style="cursor: pointer;" onclick="window.location='<?php echo site_url('doabundo/cart'); ?>'">
								<img src="<?php echo base_url(); ?>assets/images/logo_cart.png">
								<span class="button_badge">2</span>
							</div>
							<div class="up-item col-lg-3" style="cursor: pointer;" onclick="window.location='<?php echo site_url('doabundo/notifikasi'); ?>'">
								<img src="<?php echo base_url(); ?>assets/images/logo_lonceng.svg">
								<span class="button_badge">2</span>
							</div>
							<div class="dropdown1 col-lg-1">
								<a href="#" class="account"><img src="<?php echo base_url(); ?>assets/images/1.jpg" class="profile-circle"/></a>
								<div class="submenu" style="display: none; ">
									<ul class="root">
										<li><a href="<?php echo site_url(); ?>">Dashboard</a></li>
										<!-- <li><a href="#">Profile</a></li> -->
										<li><a href="<?php echo site_url('User_Profile_Controller'); ?>">Profiles</a></li>
										<li><a href="<?php echo site_url('logout'); ?>">Sign Out</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Header section end -->