<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Biodata</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	<?php echo $this->session->userdata('user'); ?>
	<?php
	  $userdata = $this->User_Profile_Model->getBiodata('cecep');
	  #echo $userdata['username'];

	?>
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
					<div class="col-xl-6 col-lg-3 search">
						<form class="header-search-form">
							<input type="text" placeholder="Cari makanan disini...">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-3 test">
						<div class="user-panel row">
							<div class="up-item">
								<img src="<?php echo base_url(); ?>assets/images/logo_cart.png">
								<span class="button_badge">2</span>
							</div>
							<div class="up-item">
								<img src="<?php echo base_url(); ?>assets/images/logo_lonceng.svg">
								<span class="button_badge">2</span>
							</div>
							<div class="user">
								<a href="<?php echo base_url(); ?>" class="site-logo">
									<img class="user" src="<?php echo base_url(); ?>assets/images/1.jpg">
								</a>
								<!-- <span class="caption">Test</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
  <div class="container h-100">
      <div class="row align-items-center h-100">
          <div class="col-10 mx-auto">
              <div class="jumbotron">
                <div class="row">
                  <div class="col-3 mx-auto">
                    <div class="row align-items-center h-100">
											<div class="col-5 align-items-center">
												<img src="<?= base_url()?>assets/img/profile_pict/<?= $userdata['foto_profil']?>" alt="Foto Profil">
												<b>Profil</b>
											</div>
										</div>
                  </div>
                  <div class="col-5 mx-auto">
                    <div class="row">
                    	<b>Biodata</b>
                    </div>
										<div class="row">
											<div class="col-5">
												Nama
											</div>
											<div class="col-6">
												<?php echo $userdata['username']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Alamat
											</div>
											<div class="col-6">
												<?php echo $userdata['alamat']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Jenis Kelamin
											</div>
											<div class="col-6">
												<?php echo $userdata['jenis_kelamin']; ?>
											</div>
										</div>
										<div class="row">
											<b>Kontak</b>
										</div>
										<div class="row">
											<div class="col-5">
												No Telp
											</div>
											<div class="col-6">
												<?php echo $userdata['kontak']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Email
											</div>
											<div class="col-6">
												<?php echo $userdata['e-mail']; ?>
											</div>
										</div>



                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	</body>
</html>
