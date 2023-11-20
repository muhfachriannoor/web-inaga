<!DOCTYPE html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>INAGA</title>
		<!-- bulma css-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>css/bulma/bulma.min.css">
		<!-- fontawesome css-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>font/fontawesome/css/all.css">
		<!-- custom -->
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>css/custom/design.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>css/easyzoom/css/easyzoom.css">
		<!-- slick css-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>css/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('asset/frontend/');?>css/slick/slick-theme.css">
		
		<!-- jquery -->
		<script type="text/javascript" src="<?= base_url('asset/frontend/');?>js/jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?= base_url('asset/frontend/');?>css/easyzoom/dist/easyzoom.js"></script>
		<!-- fontawesome js -->
		<script type="text/javascript" src="<?= base_url('asset/frontend/');?>font/fontawesome/js/all.js"></script>
		<!-- slick js -->
		<script type="text/javascript" src="<?= base_url('asset/frontend/');?>js/slick/slick.min.js" charset="utf-8"></script>
		<!-- custom js -->
		<script type="text/javascript" src="<?= base_url('asset/frontend/');?>js/custom/main.js"></script>
	</head>
	<body>
		<div id="inaga-wrap">   
			<nav class="navbar is-hidden-touch" id="nav-tools">
				<div class="container">
					<div class="navbar-menu">
						<div class="navbar-start">
							<b class="has-text-white">Asosiasi Panasbumi Indonesia</b>
						</div>
						<div class="navbar-end">
							<div class="field">
							  <div class="control">
							    <input class="input is-small" type="text" placeholder="Search">
							  </div>
							</div>
							<div class="buttons are-small">
								<a href="#" class="button">Login</a>
								<a href="#" class="button">Join Us</a>
								<a href="#" class="button">Contact Us</a>
								<a href="#" class="button icon">
								  <i class="fab fa-twitter"></i> 
								</a>
								<a href="#" class="button icon">
								  <i class="fab fa-facebook-square"></i>
								</a>
								<a href="#" class="button icon">
								  <i class="fab fa-linkedin-in"></i>
								</a>
								<a href="#" class="button icon">
								  <i class="fab fa-youtube"></i>
								</a>
								<a href="#" class="button icon">
								  <i class="fab fa-instagram"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<nav id="inaga-navbar" class="navbar" role="navigation" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand">
						<!-- LOGO NAVBAR -->
						<a href="<?= site_url('home/');?>" class="navbar-item">
							<img src="<?= base_url('asset/frontend/');?>img/INAGA.png">
							<h2 class="title is-size-2 has-text-weight-bold">INAGA</h2>
						</a>
						
						<!-- BURGER BAR -->
						<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="inaga-navbar">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>
					
					<!-- MENU NAVBAR -->
					<div class="navbar-menu">
						<!-- MENU KIRI -->
						<div class="navbar-end">
							<!-- MENU-SUBMENU -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link">Association</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a href="<?= site_url('association/aboutus/');?>" class="navbar-item">About Us</a>
									<a href="<?= site_url('association/theboard/');?>" class="navbar-item">The Board</a>
									<a href="<?= site_url('association/member/');?>" class="navbar-item">Member</a>
									<a href="<?= site_url('association/studentchapter/');?>" class="navbar-item">Student Chapter</a>
								</div>
							</div>
							<!-- MENU-SUBMENU -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a href="<?= site_url('geothermal-potency/');?>" class="navbar-link">Geothermal Potency</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a href="<?= site_url('geothermal-potency/resources');?>" class="navbar-item">Geothermal Resources</a>
									<a href="<?= site_url('geothermal-potency/workingarea');?>" class="navbar-item">Geothermal Working Area</a>
								</div>
							</div>
							<!-- MENU-SUBMENU -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a href="<?= site_url('geothermal-business/');?>" class="navbar-link">Geothermal Business</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a class="navbar-item">Business Process</a>
									<a href="<?= site_url('geothermal-business/geothermal-regulations/');?>" class="navbar-item">Geothermal Regulations</a>
									<a href="<?= site_url('geothermal-business/related-regulations/');?>" class="navbar-item">Related Regulations</a>
									<a class="navbar-item">Recent Development</a>
									<a href="<?= site_url('geothermal-business/stakeholder/');?>" class="navbar-item">Stakeholder Directory</a>
									<a class="navbar-item">CSR</a>
								</div>
							</div>
							<!-- <a href="<?= site_url('nzte/');?>" class="navbar-item">NZTE</a> -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link">NZTE</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a href="<?= site_url('nzte/story');?>" class="navbar-item">New Zealand Indonesia Geothermal Story</a>
									<a href="<?= site_url('nzte/directory');?>" class="navbar-item">New Zealand Geothermal Business Directory</a>
								</div>
							</div>
							<a href="<?= site_url('news/');?>" class="navbar-item">News</a>
							<!-- MENU-SUBMENU -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link">Library</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a href="<?= site_url('library/IIGCE/');?>" class="navbar-item">IIGCE Technical Paper</a>
									<a href="<?= site_url('library/General/');?>" class="navbar-item">General Paper & Presentation</a>
									<a href="<?= site_url('library/References/');?>" class="navbar-item">References</a>
									<a href="<?= site_url('library/API/');?>" class="navbar-item">API News Magazine</a>
								</div>
							</div>
							<!-- MENU-SUBMENU -->
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link">Event & Gallery</a>
								<!-- SUBMENU -->
								<div class="navbar-dropdown is-boxed">
									<a href="<?= site_url('eventgallery/event/');?>" class="navbar-item">Event Calendar</a>
									<a href="<?= site_url('eventgallery/gallery/');?>" class="navbar-item">Gallery</a>
								</div>
							</div>
					        <hr class="navbar-divider">
						</div>
					</div>
				</div>
			</nav>
			
			<!-- CONTENT INAGA -->
			<main>