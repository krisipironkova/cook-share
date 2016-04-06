<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Cook-Share</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/owlcarousel/owl.carousel.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/magnific-popup/magnific-popup.css" media="screen">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-shop.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url()?>assets/vendor/modernizr/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body class="light">
		<div class="body">
			<header id="header">
				<div class="container">
					<div class="logo">
						<a href="<?php echo base_url(); ?>">
							<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="<?php echo base_url()?>assets/img/logo.png">
						</a>
					</div>
					<nav class="nav-top">
						<ul class="nav nav-pills nav-top">
						<?php if(isset($this->data->username)): ?>
							<div class="dropdown">
								  <button class="btn btn-primary dropdown" type="button" data-toggle="dropdown"><?php echo $user_info->username; ?>
								  <span class="caret"></span></button>
								  <ul class="dropdown-menu">
								    <li><a href="#">My recipes</a></li>
								    <li><a href="#">Settings</a></li>
								    <li><a href="<?=base_url('users/logout')?>">Log out</a></li>
								  </ul> 
							</div>
						<?php else: ?>
							<li>
								<a href="<?=base_url('users/register')?>"><i class="fa fa-angle-right"></i>Sign up</a>
							</li>
							<li>
								<a href="<?=base_url('users/login')?>"><i class="fa fa-angle-right"></i>Log in</a>
							</li>
						<?php endif; ?>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li>
									<a href="<?=base_url('pages/home')?>">
										Home
									</a>
								</li>
								<li>
									<a href="<?=base_url('recipes')?>">
										Recipes
									</a>
								</li>
								<li>
									<a href="#">
										My recipes
									</a>
								</li>
								<li>
									<a href="#">
										Favourites
									</a>
								</li>
                                
							</ul>
						</nav>
					</div>
				</div>
			</header>
	</head>